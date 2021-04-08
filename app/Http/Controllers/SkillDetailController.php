<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSkillDetailRequest;
use App\Http\Requests\UpdateSkillDetailRequest;
use App\Repositories\SkillDetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SkillDetailController extends AppBaseController
{
    /** @var  SkillDetailRepository */
    private $skillDetailRepository;

    public function __construct(SkillDetailRepository $skillDetailRepo)
    {
        $this->skillDetailRepository = $skillDetailRepo;
    }

    /**
     * Display a listing of the SkillDetail.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $skillDetails = $this->skillDetailRepository->all();

        return view('skill_details.index')
            ->with('skillDetails', $skillDetails);
    }

    /**
     * Show the form for creating a new SkillDetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('skill_details.create');
    }

    /**
     * Store a newly created SkillDetail in storage.
     *
     * @param CreateSkillDetailRequest $request
     *
     * @return Response
     */
    public function store(CreateSkillDetailRequest $request)
    {
        $input = $request->all();

        $skillDetail = $this->skillDetailRepository->create($input);

        Flash::success('Skill Detail saved successfully.');

        return redirect(route('skillDetails.index'));
    }

    /**
     * Display the specified SkillDetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $skillDetail = $this->skillDetailRepository->find($id);

        if (empty($skillDetail)) {
            Flash::error('Skill Detail not found');

            return redirect(route('skillDetails.index'));
        }

        return view('skill_details.show')->with('skillDetail', $skillDetail);
    }

    /**
     * Show the form for editing the specified SkillDetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $skillDetail = $this->skillDetailRepository->find($id);

        if (empty($skillDetail)) {
            Flash::error('Skill Detail not found');

            return redirect(route('skillDetails.index'));
        }

        return view('skill_details.edit')->with('skillDetail', $skillDetail);
    }

    /**
     * Update the specified SkillDetail in storage.
     *
     * @param int $id
     * @param UpdateSkillDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSkillDetailRequest $request)
    {
        $skillDetail = $this->skillDetailRepository->find($id);

        if (empty($skillDetail)) {
            Flash::error('Skill Detail not found');

            return redirect(route('skillDetails.index'));
        }

        $skillDetail = $this->skillDetailRepository->update($request->all(), $id);

        Flash::success('Skill Detail updated successfully.');

        return redirect(route('skillDetails.index'));
    }

    /**
     * Remove the specified SkillDetail from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $skillDetail = $this->skillDetailRepository->find($id);

        if (empty($skillDetail)) {
            Flash::error('Skill Detail not found');

            return redirect(route('skillDetails.index'));
        }

        $this->skillDetailRepository->delete($id);

        Flash::success('Skill Detail deleted successfully.');

        return redirect(route('skillDetails.index'));
    }
}
