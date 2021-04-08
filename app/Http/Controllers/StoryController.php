<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStoryRequest;
use App\Http\Requests\UpdateStoryRequest;
use App\Repositories\StoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StoryController extends AppBaseController
{
    /** @var  StoryRepository */
    private $storyRepository;

    public function __construct(StoryRepository $storyRepo)
    {
        $this->storyRepository = $storyRepo;
    }

    /**
     * Display a listing of the Story.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $stories = $this->storyRepository->all();

        return view('stories.index')
            ->with('stories', $stories);
    }

    /**
     * Show the form for creating a new Story.
     *
     * @return Response
     */
    public function create()
    {
        return view('stories.create');
    }

    /**
     * Store a newly created Story in storage.
     *
     * @param CreateStoryRequest $request
     *
     * @return Response
     */
    public function store(CreateStoryRequest $request)
    {
        $input = $request->all();

        $story = $this->storyRepository->create($input);

        Flash::success('Story saved successfully.');

        return redirect(route('stories.index'));
    }

    /**
     * Display the specified Story.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $story = $this->storyRepository->find($id);

        if (empty($story)) {
            Flash::error('Story not found');

            return redirect(route('stories.index'));
        }

        return view('stories.show')->with('story', $story);
    }

    /**
     * Show the form for editing the specified Story.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $story = $this->storyRepository->find($id);

        if (empty($story)) {
            Flash::error('Story not found');

            return redirect(route('stories.index'));
        }

        return view('stories.edit')->with('story', $story);
    }

    /**
     * Update the specified Story in storage.
     *
     * @param int $id
     * @param UpdateStoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStoryRequest $request)
    {
        $story = $this->storyRepository->find($id);

        if (empty($story)) {
            Flash::error('Story not found');

            return redirect(route('stories.index'));
        }

        $story = $this->storyRepository->update($request->all(), $id);

        Flash::success('Story updated successfully.');

        return redirect(route('stories.index'));
    }

    /**
     * Remove the specified Story from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $story = $this->storyRepository->find($id);

        if (empty($story)) {
            Flash::error('Story not found');

            return redirect(route('stories.index'));
        }

        $this->storyRepository->delete($id);

        Flash::success('Story deleted successfully.');

        return redirect(route('stories.index'));
    }
}
