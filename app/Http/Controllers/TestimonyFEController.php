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

class TestimonyFEController extends AppBaseController
{

    private $testimonyRepository;

    /**
     * Create a new controller instance.
     *

     * @param TestimonyRepository $testimonyRepository
     */
    public function __construct(AboutMeV2Repository $aboutMeV2Repository, BlogRepository $blogRepository, DoneProjectRepository $doneProjectRepository, GoalRepository $goalRepository, SkillRepository $skillRepository, SkillDetailRepository $skillDetailRepository, StoryRepository $storyRepository, TestimonyRepository $testimonyRepository, UploadRepository $uploadRepository)
    {
        //$this->middleware('auth');

        $this->testimonyRepository = $testimonyRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.frontend.testimonies', [

            'testimonyRepository' => $this->testimonyRepository,
        ]);
    }
}
