<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTestimonyRequest;
use App\Http\Requests\UpdateTestimonyRequest;
use App\Repositories\TestimonyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TestimonyController extends AppBaseController
{
    /** @var  TestimonyRepository */
    private $testimonyRepository;

    public function __construct(TestimonyRepository $testimonyRepo)
    {
        $this->testimonyRepository = $testimonyRepo;
    }

    /**
     * Display a listing of the Testimony.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $testimonies = $this->testimonyRepository->all();

        return view('testimonies.index')
            ->with('testimonies', $testimonies);
    }

    /**
     * Show the form for creating a new Testimony.
     *
     * @return Response
     */
    public function create()
    {
        return view('testimonies.create');
    }

    /**
     * Store a newly created Testimony in storage.
     *
     * @param CreateTestimonyRequest $request
     *
     * @return Response
     */
    public function store(CreateTestimonyRequest $request)
    {
        $input = $request->all();

        $testimony = $this->testimonyRepository->create($input);

        Flash::success('Testimony saved successfully.');

        return redirect(route('testimonies.index'));
    }

    /**
     * Display the specified Testimony.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testimony = $this->testimonyRepository->find($id);

        if (empty($testimony)) {
            Flash::error('Testimony not found');

            return redirect(route('testimonies.index'));
        }

        return view('testimonies.show')->with('testimony', $testimony);
    }

    /**
     * Show the form for editing the specified Testimony.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testimony = $this->testimonyRepository->find($id);

        if (empty($testimony)) {
            Flash::error('Testimony not found');

            return redirect(route('testimonies.index'));
        }

        return view('testimonies.edit')->with('testimony', $testimony);
    }

    /**
     * Update the specified Testimony in storage.
     *
     * @param int $id
     * @param UpdateTestimonyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTestimonyRequest $request)
    {
        $testimony = $this->testimonyRepository->find($id);

        if (empty($testimony)) {
            Flash::error('Testimony not found');

            return redirect(route('testimonies.index'));
        }

        $testimony = $this->testimonyRepository->update($request->all(), $id);

        Flash::success('Testimony updated successfully.');

        return redirect(route('testimonies.index'));
    }

    /**
     * Remove the specified Testimony from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testimony = $this->testimonyRepository->find($id);

        if (empty($testimony)) {
            Flash::error('Testimony not found');

            return redirect(route('testimonies.index'));
        }

        $this->testimonyRepository->delete($id);

        Flash::success('Testimony deleted successfully.');

        return redirect(route('testimonies.index'));
    }
}
