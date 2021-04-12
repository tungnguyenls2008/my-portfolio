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

class WorkFEController extends AppBaseController
{

    private $doneProjectRepository;
    private $uploadRepository;

    /**
     * Create a new controller instance.
     *

     * @param DoneProjectRepository $doneProjectRepository
     * @param UploadRepository $uploadRepository
     */
    public function __construct(DoneProjectRepository $doneProjectRepository,UploadRepository $uploadRepository)
    {
        //$this->middleware('auth');

        $this->doneProjectRepository = $doneProjectRepository;
        $this->uploadRepository = $uploadRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('work', [

            'doneProjectRepository' => $this->doneProjectRepository,
            'uploadRepository' => $this->uploadRepository,
        ]);
    }
}
