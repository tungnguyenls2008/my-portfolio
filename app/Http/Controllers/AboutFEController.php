<?php

namespace App\Http\Controllers;

use App\Repositories\AboutMeV2Repository;
use App\Repositories\BlogRepository;
use App\Repositories\DoneProjectRepository;
use App\Repositories\GoalRepository;
use App\Repositories\SkillDetailRepository;
use App\Repositories\SkillRepository;
use App\Repositories\StoryRepository;
use App\Repositories\TestimonyRepository;
use App\Repositories\UploadRepository;
use Illuminate\Http\Request;

class AboutFEController extends AppBaseController
{
    private $aboutMeV2Repository;
    private $goalRepository;
    private $storyRepository;
    private $testimonyRepository;
    private $uploadRepository;

    /**
     * Create a new controller instance.
     *
     * @param AboutMeV2Repository $aboutMeV2Repository
     * @param GoalRepository $goalRepository
     * @param StoryRepository $storyRepository
     * @param TestimonyRepository $testimonyRepository
     */
    public function __construct(AboutMeV2Repository $aboutMeV2Repository, GoalRepository $goalRepository, StoryRepository $storyRepository, TestimonyRepository $testimonyRepository, UploadRepository $uploadRepository)
    {
        //$this->middleware('auth');
        $this->aboutMeV2Repository = $aboutMeV2Repository;
        $this->goalRepository = $goalRepository;
        $this->storyRepository = $storyRepository;
        $this->testimonyRepository = $testimonyRepository;
        $this->uploadRepository = $uploadRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('about', [
            'aboutMeV2Repository' => $this->aboutMeV2Repository,
            'goalRepository' => $this->goalRepository,
            'storyRepository' => $this->storyRepository,
            'testimonyRepository' => $this->testimonyRepository,
            'uploadRepository' => $this->uploadRepository,
        ]);
    }
}
