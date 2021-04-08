<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAboutMeRequest;
use App\Http\Requests\UpdateAboutMeRequest;
use App\Repositories\AboutMeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AboutMeController extends AppBaseController
{
    /** @var  AboutMeRepository */
    private $aboutMeRepository;

    public function __construct(AboutMeRepository $aboutMeRepo)
    {
        $this->aboutMeRepository = $aboutMeRepo;
    }

    /**
     * Display a listing of the AboutMe.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $aboutMes = $this->aboutMeRepository->all();

        return view('about_mes.index')
            ->with('aboutMes', $aboutMes);
    }

    /**
     * Show the form for creating a new AboutMe.
     *
     * @return Response
     */
    public function create()
    {
        return view('about_mes.create');
    }

    /**
     * Store a newly created AboutMe in storage.
     *
     * @param CreateAboutMeRequest $request
     *
     * @return Response
     */
    public function store(CreateAboutMeRequest $request)
    {
        $input = $request->all();

        $aboutMe = $this->aboutMeRepository->create($input);

        Flash::success('About Me saved successfully.');

        return redirect(route('aboutMes.index'));
    }

    /**
     * Display the specified AboutMe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aboutMe = $this->aboutMeRepository->find($id);

        if (empty($aboutMe)) {
            Flash::error('About Me not found');

            return redirect(route('aboutMes.index'));
        }

        return view('about_mes.show')->with('aboutMe', $aboutMe);
    }

    /**
     * Show the form for editing the specified AboutMe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aboutMe = $this->aboutMeRepository->find($id);

        if (empty($aboutMe)) {
            Flash::error('About Me not found');

            return redirect(route('aboutMes.index'));
        }

        return view('about_mes.edit')->with('aboutMe', $aboutMe);
    }

    /**
     * Update the specified AboutMe in storage.
     *
     * @param int $id
     * @param UpdateAboutMeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAboutMeRequest $request)
    {
        $aboutMe = $this->aboutMeRepository->find($id);

        if (empty($aboutMe)) {
            Flash::error('About Me not found');

            return redirect(route('aboutMes.index'));
        }

        $aboutMe = $this->aboutMeRepository->update($request->all(), $id);

        Flash::success('About Me updated successfully.');

        return redirect(route('aboutMes.index'));
    }

    /**
     * Remove the specified AboutMe from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aboutMe = $this->aboutMeRepository->find($id);

        if (empty($aboutMe)) {
            Flash::error('About Me not found');

            return redirect(route('aboutMes.index'));
        }

        $this->aboutMeRepository->delete($id);

        Flash::success('About Me deleted successfully.');

        return redirect(route('aboutMes.index'));
    }
}
