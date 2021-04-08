<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoneProjectRequest;
use App\Http\Requests\UpdateDoneProjectRequest;
use App\Repositories\DoneProjectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DoneProjectController extends AppBaseController
{
    /** @var  DoneProjectRepository */
    private $doneProjectRepository;

    public function __construct(DoneProjectRepository $doneProjectRepo)
    {
        $this->doneProjectRepository = $doneProjectRepo;
    }

    /**
     * Display a listing of the DoneProject.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $doneProjects = $this->doneProjectRepository->all();

        return view('done_projects.index')
            ->with('doneProjects', $doneProjects);
    }

    /**
     * Show the form for creating a new DoneProject.
     *
     * @return Response
     */
    public function create()
    {
        return view('done_projects.create');
    }

    /**
     * Store a newly created DoneProject in storage.
     *
     * @param CreateDoneProjectRequest $request
     *
     * @return Response
     */
    public function store(CreateDoneProjectRequest $request)
    {
        $input = $request->all();

        $doneProject = $this->doneProjectRepository->create($input);

        Flash::success('Done Project saved successfully.');

        return redirect(route('doneProjects.index'));
    }

    /**
     * Display the specified DoneProject.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doneProject = $this->doneProjectRepository->find($id);

        if (empty($doneProject)) {
            Flash::error('Done Project not found');

            return redirect(route('doneProjects.index'));
        }

        return view('done_projects.show')->with('doneProject', $doneProject);
    }

    /**
     * Show the form for editing the specified DoneProject.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doneProject = $this->doneProjectRepository->find($id);

        if (empty($doneProject)) {
            Flash::error('Done Project not found');

            return redirect(route('doneProjects.index'));
        }

        return view('done_projects.edit')->with('doneProject', $doneProject);
    }

    /**
     * Update the specified DoneProject in storage.
     *
     * @param int $id
     * @param UpdateDoneProjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoneProjectRequest $request)
    {
        $doneProject = $this->doneProjectRepository->find($id);

        if (empty($doneProject)) {
            Flash::error('Done Project not found');

            return redirect(route('doneProjects.index'));
        }

        $doneProject = $this->doneProjectRepository->update($request->all(), $id);

        Flash::success('Done Project updated successfully.');

        return redirect(route('doneProjects.index'));
    }

    /**
     * Remove the specified DoneProject from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doneProject = $this->doneProjectRepository->find($id);

        if (empty($doneProject)) {
            Flash::error('Done Project not found');

            return redirect(route('doneProjects.index'));
        }

        $this->doneProjectRepository->delete($id);

        Flash::success('Done Project deleted successfully.');

        return redirect(route('doneProjects.index'));
    }
}
