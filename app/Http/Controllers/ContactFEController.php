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

class ContactFEController extends AppBaseController
{
    private $aboutMeV2Repository;
    private $blogRepository;
    private $doneProjectRepository;
    private $goalRepository;
    private $skillRepository;
    private $skillDetailRepository;
    private $storyRepository;
    private $testimonyRepository;
    private $uploadRepository;

    /**
     * Create a new controller instance.
     *
     * @param AboutMeV2Repository $aboutMeV2Repository
     * @param BlogRepository $blogRepository
     * @param DoneProjectRepository $doneProjectRepository
     * @param GoalRepository $goalRepository
     * @param SkillRepository $skillRepository
     * @param SkillDetailRepository $skillDetailRepository
     * @param StoryRepository $storyRepository
     * @param TestimonyRepository $testimonyRepository
     * @param UploadRepository $uploadRepository
     */
    public function __construct(AboutMeV2Repository $aboutMeV2Repository, BlogRepository $blogRepository, DoneProjectRepository $doneProjectRepository, GoalRepository $goalRepository, SkillRepository $skillRepository, SkillDetailRepository $skillDetailRepository, StoryRepository $storyRepository, TestimonyRepository $testimonyRepository, UploadRepository $uploadRepository)
    {
        //$this->middleware('auth');
        $this->aboutMeV2Repository = $aboutMeV2Repository;
        $this->blogRepository = $blogRepository;
        $this->doneProjectRepository = $doneProjectRepository;
        $this->goalRepository = $goalRepository;
        $this->skillRepository = $skillRepository;
        $this->skillDetailRepository = $skillDetailRepository;
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
        return view('contact', [
            'aboutMeV2Repository' => $this->aboutMeV2Repository,
            'blogRepository' => $this->blogRepository,
            'doneProjectRepository' => $this->doneProjectRepository,
            'goalRepository' => $this->goalRepository,
            'skillRepository' => $this->skillRepository,
            'skillDetailRepository' => $this->skillDetailRepository,
            'storyRepository' => $this->storyRepository,
            'testimonyRepository' => $this->testimonyRepository,
            'uploadRepository' => $this->uploadRepository,
        ]);
    }
}
