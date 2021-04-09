<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUploadRequest;
use App\Http\Requests\UpdateUploadRequest;
use App\Repositories\UploadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UploadController extends AppBaseController
{
    /** @var  UploadRepository */
    private $uploadRepository;

    public function __construct(UploadRepository $uploadRepo)
    {
        $this->uploadRepository = $uploadRepo;
    }

    /**
     * Display a listing of the Upload.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $uploads = $this->uploadRepository->all();

        return view('uploads.index')
            ->with('uploads', $uploads);
    }

    /**
     * Show the form for creating a new Upload.
     *
     * @return Response
     */
    public function create()
    {
        return view('uploads.create');
    }

    /**
     * Store a newly created Upload in storage.
     *
     * @param CreateUploadRequest $request
     *
     * @return Response
     */
    public function store(CreateUploadRequest $request)
    {
        $input = $request->all();

        $upload = $this->uploadRepository->create($input);

        Flash::success('Upload saved successfully.');

        return redirect(route('uploads.index'));
    }

    /**
     * Display the specified Upload.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $upload = $this->uploadRepository->find($id);

        if (empty($upload)) {
            Flash::error('Upload not found');

            return redirect(route('uploads.index'));
        }

        return view('uploads.show')->with('upload', $upload);
    }

    /**
     * Show the form for editing the specified Upload.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $upload = $this->uploadRepository->find($id);

        if (empty($upload)) {
            Flash::error('Upload not found');

            return redirect(route('uploads.index'));
        }

        return view('uploads.edit')->with('upload', $upload);
    }

    /**
     * Update the specified Upload in storage.
     *
     * @param int $id
     * @param UpdateUploadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUploadRequest $request)
    {
        $upload = $this->uploadRepository->find($id);

        if (empty($upload)) {
            Flash::error('Upload not found');

            return redirect(route('uploads.index'));
        }

        $upload = $this->uploadRepository->update($request->all(), $id);

        Flash::success('Upload updated successfully.');

        return redirect(route('uploads.index'));
    }

    /**
     * Remove the specified Upload from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $upload = $this->uploadRepository->find($id);

        if (empty($upload)) {
            Flash::error('Upload not found');

            return redirect(route('uploads.index'));
        }

        $this->uploadRepository->delete($id);

        Flash::success('Upload deleted successfully.');

        return redirect(route('uploads.index'));
    }
}
