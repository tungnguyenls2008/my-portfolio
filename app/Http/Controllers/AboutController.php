<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Repositories\AboutRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AboutController extends AppBaseController
{
    /** @var  AboutRepository */
    private $aboutRepository;

    public function __construct(AboutRepository $aboutRepo)
    {
        $this->aboutRepository = $aboutRepo;
    }

    /**
     * Display a listing of the About.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $abouts = $this->aboutRepository->all();

        return view('abouts.index')
            ->with('abouts', $abouts);
    }

    /**
     * Show the form for creating a new About.
     *
     * @return Response
     */
    public function create()
    {
        return view('abouts.create');
    }

    /**
     * Store a newly created About in storage.
     *
     * @param CreateAboutRequest $request
     *
     * @return Response
     */
    public function store(CreateAboutRequest $request)
    {
        $input = $request->all();

        $about = $this->aboutRepository->create($input);

        Flash::success('About saved successfully.');

        return redirect(route('abouts.index'));
    }

    /**
     * Display the specified About.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $about = $this->aboutRepository->find($id);

        if (empty($about)) {
            Flash::error('About not found');

            return redirect(route('abouts.index'));
        }

        return view('abouts.show')->with('about', $about);
    }

    /**
     * Show the form for editing the specified About.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $about = $this->aboutRepository->find($id);

        if (empty($about)) {
            Flash::error('About not found');

            return redirect(route('abouts.index'));
        }

        return view('abouts.edit')->with('about', $about);
    }

    /**
     * Update the specified About in storage.
     *
     * @param int $id
     * @param UpdateAboutRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAboutRequest $request)
    {
        $about = $this->aboutRepository->find($id);

        if (empty($about)) {
            Flash::error('About not found');

            return redirect(route('abouts.index'));
        }

        $about = $this->aboutRepository->update($request->all(), $id);

        Flash::success('About updated successfully.');

        return redirect(route('abouts.index'));
    }

    /**
     * Remove the specified About from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $about = $this->aboutRepository->find($id);

        if (empty($about)) {
            Flash::error('About not found');

            return redirect(route('abouts.index'));
        }

        $this->aboutRepository->delete($id);

        Flash::success('About deleted successfully.');

        return redirect(route('abouts.index'));
    }
}
