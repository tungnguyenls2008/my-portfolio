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

class BlogFEController extends AppBaseController
{
    private $blogRepository;
    private $uploadRepository;

    /**
     * Create a new controller instance.
     *
     * @param BlogRepository $blogRepository
     * @param UploadRepository $uploadRepository
     */
    public function __construct( BlogRepository $blogRepository, UploadRepository $uploadRepository)
    {
        //$this->middleware('auth');
        $this->blogRepository = $blogRepository;
        $this->uploadRepository = $uploadRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog', [
            'blogRepository' => $this->blogRepository,
            'uploadRepository' => $this->uploadRepository,
        ]);
    }
}
