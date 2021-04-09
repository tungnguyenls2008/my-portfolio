<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAboutMeV2Request;
use App\Http\Requests\UpdateAboutMeV2Request;
use App\Models\Upload;
use App\Repositories\AboutMeV2Repository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\UploadRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class AboutMeV2Controller extends AppBaseController
{
    /** @var  AboutMeV2Repository */
    private $aboutMeV2Repository;
    private $uploadRepository;

    public function __construct(AboutMeV2Repository $aboutMeV2Repo, UploadRepository $uploadRepository)
    {
        $this->aboutMeV2Repository = $aboutMeV2Repo;
        $this->uploadRepository = $uploadRepository;
    }

    /**
     * Display a listing of the AboutMeV2.
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index(Request $request)
    {
        $aboutMeV2s = $this->aboutMeV2Repository->all();
        $uploads=$this->uploadRepository->model()::where('belongs_to_table','about')->get();

        return view('about_me_v2s.index')
            ->with('aboutMeV2s', $aboutMeV2s)->with('uploads',$uploads);
    }

    /**
     * Show the form for creating a new AboutMeV2.
     *
     * @return Response
     */
    public function create()
    {
        return view('about_me_v2s.create');
    }

    /**
     * Store a newly created AboutMeV2 in storage.
     *
     * @param CreateAboutMeV2Request $request
     *
     * @return Response
     */
    public function store(CreateAboutMeV2Request $request)
    {
        $input = $request->all();
        if ($input['activated']==1){
            $this->updateActivationState();
        }

        $aboutMeV2 = $this->aboutMeV2Repository->create($input);
        $this->uploadRepository->doUpload($request,$aboutMeV2,'about_me','about');


        Flash::success('About Me V2 saved successfully.');

        return redirect(route('aboutMeV2s.index'));
    }

    /**
     * Display the specified AboutMeV2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aboutMeV2 = $this->aboutMeV2Repository->find($id);

        if (empty($aboutMeV2)) {
            Flash::error('About Me V2 not found');

            return redirect(route('aboutMeV2s.index'));
        }

        return view('about_me_v2s.show')->with('aboutMeV2', $aboutMeV2);
    }

    /**
     * Show the form for editing the specified AboutMeV2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aboutMeV2 = $this->aboutMeV2Repository->find($id);

        if (empty($aboutMeV2)) {
            Flash::error('About Me V2 not found');

            return redirect(route('aboutMeV2s.index'));
        }

        return view('about_me_v2s.edit')->with('aboutMeV2', $aboutMeV2);
    }

    /**
     * Update the specified AboutMeV2 in storage.
     *
     * @param int $id
     * @param UpdateAboutMeV2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAboutMeV2Request $request)
    {
        $aboutMeV2 = $this->aboutMeV2Repository->find($id);

        if (empty($aboutMeV2)) {
            Flash::error('About Me V2 not found');

            return redirect(route('aboutMeV2s.index'));
        }
        if ($request->all()['activated']==1){
            $this->updateActivationState();
        }
        $this->uploadRepository->doUpload($request,$aboutMeV2,'about_me_','about');



        $aboutMeV2 = $this->aboutMeV2Repository->update($request->all(), $id);

        Flash::success('About Me V2 updated successfully.');

        return redirect(route('aboutMeV2s.index'));
    }

    /**
     * Remove the specified AboutMeV2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aboutMeV2 = $this->aboutMeV2Repository->find($id);

        if (empty($aboutMeV2)) {
            Flash::error('About Me V2 not found');

            return redirect(route('aboutMeV2s.index'));
        }
        $images_to_delete=$this->uploadRepository->model()::where('belongs_to_id',$id)->get();
        foreach ($images_to_delete as $item){
            unlink(trim($item['uri'],'/'));
        }
        $this->uploadRepository->model()::where('belongs_to_id',$id)->delete('belongs_to_id',$id);
        $this->aboutMeV2Repository->delete($id);

        Flash::success('About Me V2 deleted successfully.');

        return redirect(route('aboutMeV2s.index'));
    }

    public function updateActivationState(){
        $this->aboutMeV2Repository->model()::where('activated',1)->update(['activated'=>0]);
    }

}
