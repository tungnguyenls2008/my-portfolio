<?php

namespace App\Http\Controllers;

use App\DataTables\UploadDatatableDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateUploadDatatableRequest;
use App\Http\Requests\UpdateUploadDatatableRequest;
use App\Repositories\UploadDatatableRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class UploadDatatableController extends AppBaseController
{
    /** @var  UploadDatatableRepository */
    private $uploadDatatableRepository;

    public function __construct(UploadDatatableRepository $uploadDatatableRepo)
    {
        $this->uploadDatatableRepository = $uploadDatatableRepo;
    }

    /**
     * Display a listing of the UploadDatatable.
     *
     * @param UploadDatatableDataTable $uploadDatatableDataTable
     * @return Response
     */
    public function index(UploadDatatableDataTable $uploadDatatableDataTable)
    {
        return $uploadDatatableDataTable->render('upload_datatables.index');
    }

    /**
     * Show the form for creating a new UploadDatatable.
     *
     * @return Response
     */
    public function create()
    {
        return view('upload_datatables.create');
    }

    /**
     * Store a newly created UploadDatatable in storage.
     *
     * @param CreateUploadDatatableRequest $request
     *
     * @return Response
     */
    public function store(CreateUploadDatatableRequest $request)
    {
        $input = $request->all();

        $uploadDatatable = $this->uploadDatatableRepository->create($input);

        Flash::success('Upload Datatable saved successfully.');

        return redirect(route('uploadDatatables.index'));
    }

    /**
     * Display the specified UploadDatatable.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $uploadDatatable = $this->uploadDatatableRepository->find($id);

        if (empty($uploadDatatable)) {
            Flash::error('Upload Datatable not found');

            return redirect(route('uploadDatatables.index'));
        }

        return view('upload_datatables.show')->with('uploadDatatable', $uploadDatatable);
    }

    /**
     * Show the form for editing the specified UploadDatatable.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $uploadDatatable = $this->uploadDatatableRepository->find($id);

        if (empty($uploadDatatable)) {
            Flash::error('Upload Datatable not found');

            return redirect(route('uploadDatatables.index'));
        }

        return view('upload_datatables.edit')->with('uploadDatatable', $uploadDatatable);
    }

    /**
     * Update the specified UploadDatatable in storage.
     *
     * @param  int              $id
     * @param UpdateUploadDatatableRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUploadDatatableRequest $request)
    {
        $uploadDatatable = $this->uploadDatatableRepository->find($id);

        if (empty($uploadDatatable)) {
            Flash::error('Upload Datatable not found');

            return redirect(route('uploadDatatables.index'));
        }

        $uploadDatatable = $this->uploadDatatableRepository->update($request->all(), $id);

        Flash::success('Upload Datatable updated successfully.');

        return redirect(route('uploadDatatables.index'));
    }

    /**
     * Remove the specified UploadDatatable from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $uploadDatatable = $this->uploadDatatableRepository->find($id);

        if (empty($uploadDatatable)) {
            Flash::error('Upload Datatable not found');

            return redirect(route('uploadDatatables.index'));
        }

        $this->uploadDatatableRepository->delete($id);

        Flash::success('Upload Datatable deleted successfully.');

        return redirect(route('uploadDatatables.index'));
    }
}
