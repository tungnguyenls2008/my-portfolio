<div id="colorlib-testimony">
    <div class="container">
        <div class="row text-center">
            <h2 class="bold">Họ nói về tôi:</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                <span>Họ nói về tôi</span>
                <h2>Rằng thì là:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="rotate">
                    <h2 class="heading">Nhận xét</h2>
                </div>
            </div>
        </div>
        <div class="row animate-box">
            <div class="owl-carousel">
                @foreach($testimonyRepository->model()::all() as $item)
                <div class="item">
                    <div class="col-md-12 text-center">
                        <div class="testimony">
                            <blockquote>
                                <p>"{{$item->content}}</p>
                                <span>" &mdash; {{$item->reference}}</span>
                            </blockquote>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
