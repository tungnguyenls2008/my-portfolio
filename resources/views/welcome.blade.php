<?php
//todo: social buttons, scroll to top button, integrate fb message chatbox, blog modal, project modal
?>

@extends('layouts.frontend.frontend')



@section('content')

    <div id="colorlib-page">

        <div id="colorlib-about">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">Tôi</h2>
                </div>
                <div class="row">
                    <div class="col-md-5 animate-box">
                        <div class="owl-carousel3">
                            <?php
                            $activated=$aboutMeV2Repository->model()::where('activated',1)->get()->toArray();
                            $image_about=$uploadRepository->model()::where('belongs_to_id',$activated[0]['id'])->get()->toArray();
                            ?>
                            @foreach($image_about as $item)
                            <div class="item">
                                <img class="img-responsive about-img" src="{{asset($item['uri'])}}"
                                     alt="html5 bootstrap template by colorlib.com">
                            </div>
                                @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 col-md-push-1 animate-box">
                        <div class="about-desc">
                            <div class="owl-carousel3">
                                <div class="item">
                                    <h2>
                                        <span>{{$aboutMeV2Repository->model()::where('activated',1)->value('first_name')}}</span><span>{{$aboutMeV2Repository->model()::where('activated',1)->value('last_name')}}</span>
                                    </h2>
                                </div>
                                <div class="item">
                                    <h2><span>Tôi</span><span>là một {{$aboutMeV2Repository->model()::where('activated',1)->value('occupation')}}</span></h2>
                                </div>
                            </div>
                            <div class="desc">
                                <div class="rotate">
                                    <h2 class="heading">Tôi</h2>
                                </div>
                                <p>{{$aboutMeV2Repository->model()::where('activated',1)->value('description')}}</p>
                                <p class="colorlib-social-icons">
                                    <a href="#"><i class="icon-facebook4"></i></a>
                                    <a href="#"><i class="icon-twitter3"></i></a>
                                    <a href="#"><i class="icon-googleplus"></i></a>
                                    <a href="#"><i class="icon-dribbble2"></i></a>
                                </p>
                                <p><a href="#" class="btn btn-primary btn-outline">Liên lạc với tôi!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($storyRepository->model()::all()->toArray() as $item)
                    <div class="col-md-4 animate-box">
                        <p>{{$item['content']}}</p>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
        <div id="colorlib-services">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">Kỹ năng</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="services-flex">
                            <div class="one-third">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0 animate-box intro-heading">
                                        <span>Kỹ năng của tôi</span>
                                        <h2>Một số kỹ năng vốn có của tôi:</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="rotate">
                                            <h2 class="heading">Kỹ năng</h2>
                                        </div>
                                    </div>
                                    @foreach(array_chunk($skillRepository->model()::all()->toArray(),2) as $set)

                                    <div class="col-md-6">
                                        @foreach($set as $item)
                                            <div class="services animate-box">
                                                <h3>{{' - '.    $item['name']}}</h3>
                                                <ul>
                                                    @foreach($skillDetailRepository->model()::all() as $detail)
                                                        @if($detail->skill_id==$item['id'])
                                                            <li>{{$detail->detail}}</li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="one-forth services-img"
                                 style="background-image: url(images/services-img-1.jpg);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-work">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">Kinh nghiệm</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                        <span>Portfolio</span>
                        <h2>Các dự án:</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rotate">
                            <h2 class="heading">Kinh nghiệm</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($doneProjectRepository->model()::all() as $key=> $item)
                        <div class="col-md-12">
                            <div class="work-entry animate-box">
                                <?php
                                $img_project=$uploadRepository->model()::where('belongs_to_table','done_projects')->where('belongs_to_id',$item->id)->get()->toArray();
                                ?>
                                <a href="{{route('work')}}" class="work-img"
                                   style="background-image: url({{asset($img_project[0]['uri'])}});">
                                    <div class="display-t">
                                        <div class="work-name">
                                            <h2>{{$item->name}}</h2>
                                        </div>
                                    </div>
                                </a>
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="desc">
                                        <p>{{$item->short_desc}}</p>
                                        <p class="read"><a href="#">Xem chi tiết</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div id="colorlib-blog">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">Tâm sự mỏng</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                        <span>Blog của tôi</span>
                        <h2>Cùng đọc suy nghĩ của tôi</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rotate">
                            <h2 class="heading">Blog của tôi</h2>
                        </div>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="owl-carousel1">
                        @foreach($blogRepository->model()::all() as $key=> $item)
                        <div class="item">
                            <div class="col-md-12">
                                <div class="article">
                                    <a href="{{route('blog')}}" class="blog-img">
                                        <?php
                                        $image_blog=$uploadRepository->model()::where('belongs_to_table','blogs')->where('belongs_to_id',$item->id)->get()->toArray();
                                        ?>

                                        <img class="img-responsive" src="{{asset($image_blog[0]['uri'])}}"
                                             alt="">

                                        <div class="overlay"></div>
                                        <div class="link">
											<span class="read">Đọc thêm</h2>
                                        </div>
                                    </a>
                                    <div class="desc">
                                        <span class="meta">{{$item->created_at}}</span>
                                        <h2><a href="{{route('blog')}}">{{$item->title}}</a></h2>
                                        <p>{{$item->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.frontend.testimonies')


    </div>
@endsection


