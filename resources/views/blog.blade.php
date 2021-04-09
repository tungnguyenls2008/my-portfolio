@extends('layouts.frontend.frontend')

@section('content')
    <div id="colorlib-page">

        <div id="colorlib-blog">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">Blog</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                        <span>Blog</span>
                        <h2>Read Our Case</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rotate">
                            <h2 class="heading">Our Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach(array_chunk($blogRepository->model()::all()->toArray(),3) as $set)

                    <div class="col-md-4">
                            @foreach($set as $item)
                            <div class="article animate-box">
                                <a href="{{route('blog')}}" class="blog-img">
                                    <?php
                                    $image_blog = $uploadRepository->model()::where('belongs_to_table', 'blogs')->where('belongs_to_id', $item['id'])->get()->toArray();
                                    ?>
                                    <img class="img-responsive" src="{{asset($image_blog[0]['uri'])}}"
                                         alt="html5 bootstrap by colorlib.com">
                                    <div class="overlay"></div>
                                    <div class="link">
									<span class="read">Read more</h2>
                                    </div>
                                </a>
                                <div class="desc">
                                    <span class="meta">{{$item['created_at']}}</span>
                                    <h2><a href="{{route('blog')}}">{{$item['title']}}</a></h2>
                                    <p>{{$item['description']}}</p>
                                </div>
                            </div>
                            @endforeach

                    </div>
                    @endforeach


                </div>
            </div>
        </div>


    </div>
@endsection
