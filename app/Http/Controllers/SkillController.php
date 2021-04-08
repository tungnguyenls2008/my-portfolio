<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Repositories\SkillRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SkillController extends AppBaseController
{
    /** @var  SkillRepository */
    private $skillRepository;

    public function __construct(SkillRepository $skillRepo)
    {
        $this->skillRepository = $skillRepo;
    }

    /**
     * Display a listing of the Skill.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $skills = $this->skillRepository->all();

        return view('skills.index')
            ->with('skills', $skills);
    }

    /**
     * Show the form for creating a new Skill.
     *
     * @return Response
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created Skill in storage.
     *
     * @param CreateSkillRequest $request
     *
     * @return Response
     */
    public function store(CreateSkillRequest $request)
    {
        $input = $request->all();

        $skill = $this->skillRepository->create($input);

        Flash::success('Skill saved successfully.');

        return redirect(route('skills.index'));
    }

    /**
     * Display the specified Skill.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $skill = $this->skillRepository->find($id);

        if (empty($skill)) {
            Flash::error('Skill not found');

            return redirect(route('skills.index'));
        }

        return view('skills.show')->with('skill', $skill);
    }

    /**
     * Show the form for editing the specified Skill.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $skill = $this->skillRepository->find($id);

        if (empty($skill)) {
            Flash::error('Skill not found');

            return redirect(route('skills.index'));
        }

        return view('skills.edit')->with('skill', $skill);
    }

    /**
     * Update the specified Skill in storage.
     *
     * @param int $id
     * @param UpdateSkillRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSkillRequest $request)
    {
        $skill = $this->skillRepository->find($id);

        if (empty($skill)) {
            Flash::error('Skill not found');

            return redirect(route('skills.index'));
        }

        $skill = $this->skillRepository->update($request->all(), $id);

        Flash::success('Skill updated successfully.');

        return redirect(route('skills.index'));
    }

    /**
     * Remove the specified Skill from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $skill = $this->skillRepository->find($id);

        if (empty($skill)) {
            Flash::error('Skill not found');

            return redirect(route('skills.index'));
        }

        $this->skillRepository->delete($id);

        Flash::success('Skill deleted successfully.');

        return redirect(route('skills.index'));
    }
}
