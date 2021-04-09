<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDoneProjectRequest;
use App\Http\Requests\UpdateDoneProjectRequest;
use App\Models\Upload;
use App\Repositories\DoneProjectRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\UploadDatatableRepository;
use App\Repositories\UploadRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Flash;
use Response;

class DoneProjectController extends AppBaseController
{
    /** @var  DoneProjectRepository */
    private $doneProjectRepository;
    private $uploadRepository;
    private $uploadDatatableRepository;

    public function __construct(DoneProjectRepository $doneProjectRepo, UploadRepository $uploadRepository,UploadDatatableRepository $uploadDatatableRepository)
    {
        $this->doneProjectRepository = $doneProjectRepo;
        $this->uploadRepository = $uploadRepository;
        $this->uploadDatatableRepository = $uploadDatatableRepository;
    }

    /**
     * Display a listing of the DoneProject.
     *
     * @param Request $request
     *
     * @return Application|Factory|View|Response
     */
    public function index(Request $request)
    {
        $doneProjects = $this->doneProjectRepository->all();
        $uploads=$this->uploadRepository->model()::where('belongs_to_table','done_projects')->get();

        return view('done_projects.index')
            ->with('doneProjects', $doneProjects)->with('uploads',$uploads);
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
        $this->uploadRepository->doUpload($request,$doneProject,'done_project','done_projects');
        $this->uploadDatatableRepository->doUpload($request,$doneProject,'done_project','done_projects');

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
        if ($request->hasfile('images')) {
            $request->validate([
                'images' => 'required',
            ]);
            $images = $request->file('images');

            foreach($images as $key=> $image) {

                $name = 'done_project_'.$doneProject->id.'_0'.$key.'.'.pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
                $path = $image->storeAs('uploads/images', $name, 'public');

                Upload::create([
                    'name' => $name,
                    'uri' => '/storage/'.$path,
                    'belongs_to_table'=>'done_projects',
                    'belongs_to_id'=>$doneProject->id,
                ]);
            }

        }

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
