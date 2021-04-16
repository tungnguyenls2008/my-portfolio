<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Repositories\BlogRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\UploadRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class BlogController extends AppBaseController
{
    /** @var  BlogRepository */
    private $blogRepository;
    private $uploadRepository;

    public function __construct(BlogRepository $blogRepo,UploadRepository $uploadRepository)
    {
        $this->blogRepository = $blogRepo;
        $this->uploadRepository = $uploadRepository;
    }

    /**
     * Display a listing of the Blog.
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index(Request $request)
    {
        $blogs = $this->blogRepository->all();
        $uploads=$this->uploadRepository->model()::where('belongs_to_table','blogs')->get();

        return view('blogs.index')
            ->with('blogs', $blogs)->with('uploads',$uploads);
    }

    /**
     * Show the form for creating a new Blog.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created Blog in storage.
     *
     * @param CreateBlogRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogRequest $request)
    {
        $input = $request->all();

        $blog = $this->blogRepository->create($input);
        $this->uploadRepository->doUpload($request,$blog,'blog','blogs');

        Flash::success('Blog saved successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified Blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified Blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified Blog in storage.
     *
     * @param int $id
     * @param UpdateBlogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogRequest $request)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $blog = $this->blogRepository->update($request->all(), $id);
        $this->uploadRepository->doUpload($request,$blog,'blog_','blogs');

        Flash::success('Blog updated successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified Blog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }
        $images_to_delete=$this->uploadRepository->model()::where('belongs_to_id',$id)->get();
        foreach ($images_to_delete as $item){
            if (file_exists(trim($item['uri'], '/'))){
                unlink(trim($item['uri'],'/'));
            }
        }
        $this->blogRepository->delete($id);
        $this->uploadRepository->model()::where('belongs_to_id',$id)->delete('belongs_to_id',$id);

        Flash::success('Blog deleted successfully.');

        return redirect(route('blogs.index'));
    }
}
