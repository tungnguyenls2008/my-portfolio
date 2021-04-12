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

class ServiceFEController extends AppBaseController
{

    private $skillRepository;
    private $skillDetailRepository;
    private $testimonyRepository;


    /**
     * Create a new controller instance.
     *

     * @param SkillRepository $skillRepository
     * @param SkillDetailRepository $skillDetailRepository
     * @param $testimonyRepository $skillDetailRepository

     */
    public function __construct(SkillRepository $skillRepository, SkillDetailRepository $skillDetailRepository, TestimonyRepository $testimonyRepository)
    {
        //$this->middleware('auth');

        $this->skillRepository = $skillRepository;
        $this->skillDetailRepository = $skillDetailRepository;
        $this->testimonyRepository = $testimonyRepository;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('services', [

            'skillRepository' => $this->skillRepository,
            'skillDetailRepository' => $this->skillDetailRepository,
            'testimonyRepository' => $this->testimonyRepository,

        ]);
    }
}
