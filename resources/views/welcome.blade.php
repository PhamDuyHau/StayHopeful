@extends('frontend.site')
@section('title', 'Trang chủ')



@section('main')
    <!-- carosel -->
    <section>
        <div id="demo" class="carousel slide" data-bs-ride="carousel" style="height:100vh;">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($slider as $item)
                    <div class="carousel-item active">
                        <img src="{{ asset($item->url_image) }}" alt="Los Angeles" class="d-block carosel_heigth">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                        </div>
                    </div>
                @endforeach

                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
    </section>

    <section>
        <div class="container section-title-1-0">
            <div class="row">
                <div class="col-lg-12 section-title-1">
                    <div class="section-title_video">
                        <h4>CÁC SỰ KIỆN GẦN NHẤT</h4>
                    </div>
                    <div>
                        <a href="{{ route('project.index', 1) }}">XEM TẤT CẢ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- card -->
    <div class="container">
        <div class="row">
            @foreach ($projects as $project)
                <div class=" col-xxl-4 col-xl-6 col-lg-6 large ">
                    <a href="{{ route('detail.post', $project->id) }}" class="a-card">
                        <div class="card card_wapper" style="width: 26rem;">
                            @if ($project->status == 0)
                                <div class="project-status">ĐANG VẬN ĐỘNG</div>
                            @else
                                <div class="project-status-finish">ĐÃ HOÀN THÀNH</div>
                            @endif
                            <img src="{{ asset($project->images[0]->image) }}" class="card-img-top card-img-top-1"
                                alt="...">
                            <div class="card-body card-body-1">
                                <h5 class="card-title card-title-1" data-i18n="text1">{{ $project->title }}</h5>
                                <div class="cart-description-post">
                                    <p class="card-text card-text-1-1" data-i18n="text2">
                                        {{ strip_tags($project->description) }}</p>
                                </div>
                                <p class="card-title-child">
                                    Đã góp:
                                    <span>
                                        {{ number_format($project->money2) }}
                                    </span>
                                </p>
                                <p class="card-title-child-1">
                                    Cần huy động:
                                    <span>
                                        {{ number_format($project->money) }}
                                    </span>
                                </p>
                                <a href="{{ route('detail.post', $project->id) }}" class="btn btn-primary btn-primary-1">CHI
                                    TIẾT</a>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach


        </div>
    </div>


    <!-- su kien gan nhat -->

    <section>
        <div class="container section-title-1-0">
            <div class="row">
                <div class="col-lg-12 section-title-1">
                    <div class="section-title_video">
                        <h4>CÁC SỰ KIỆN ĐÃ HOÀN THÀNH</h4>
                    </div>
                    <div>
                        <a href="{{ route('project.index', 1) }}">XEM TẤT CẢ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- card -->
    <div class="container">
        <div class="row">
            @foreach ($project_finish as $project)
            <div class="col-xxl-3 col-xl-6">
                <a href="{{ route('detail.post', $project->id) }}" class="a-card">
                    <div class="card card_wapper" style="width: 19.5rem;">
                        @if ($project->status == 0)
                                <div class="project-status">ĐANG VẬN ĐỘNG</div>
                            @else
                                <div class="project-status-finish">ĐÃ HOÀN THÀNH</div>
                        @endif
                        <img src="{{ asset($project->images[0]->image) }}" class="card-img-top card-img-top-1"
                                alt="...">
                        <div class="card-body">
                            <h5 class="card-title card-title-1" data-i18n="text1">{{ $project->title }}</h5>
                            <div class="cart-description-post">
                                <p class="card-text card-text-1-1" data-i18n="text2">
                                    {{ strip_tags($project->description) }}</p>
                            </div>
                            <p class="card-title-child">
                                Đã góp:
                                <span>
                                    {{ number_format($project->money2) }}
                                </span>
                            </p>
                            <p class="card-title-child-1">
                                Cần huy động:
                                <span>
                                    {{ number_format($project->money) }}
                                </span>
                            </p>
                            <a href="{{ route('detail.post', $project->id) }}" class="btn btn-primary btn-primary-1">CHI
                                TIẾT</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            
            


        </div>
    </div>

    <!-- video -->
    <section>
        <div class="container section-title-1-0">
            <div class="row">
                <div class="col-lg-12 section-title-1">
                    <div class="section-title_video">
                        <h4>THƯ VIỆN VIDEO</h4>
                    </div>
                    <div>
                        <a href="{{ route('video.index') }}">XEM TẤT CẢ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-4 video_status">
                <video id="myVideo" src="{{ asset('home/video/video5.mp4') }}" controls width="400"
                    height="200"></video>
                <a href="#" class="video_title">Người bạn lớn là một dự án có mục đích giúp đỡ Trẻ em không còn cha
                    hoặc mẹ hoặc cả hai</a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-4 video_status">
                <video id="myVideo" src="{{ asset('home/video/video3.mp4') }}" controls width="400"
                    height="200"></video>
                <a href="#" class="video_title">Người bạn lớn là một dự án có mục đích giúp đỡ Trẻ em không còn cha
                    hoặc mẹ hoặc cả hai</a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-4 video_status">
                <video id="myVideo" src="{{ asset('home/video/video4.mp4') }}" controls width="400"
                    height="200"></video>
                <a href="#" class="video_title">Người bạn lớn là một dự án có mục đích giúp đỡ Trẻ em không còn cha
                    hoặc mẹ hoặc cả hai</a>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: rgb(36,90,190); margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="color: white; padding-top: 30px; border-bottom: 1px solid #fff">
                        <h3>ĐẾN HÔM NAY STAYHOPEFUL ĐÃ LÀM ĐƯỢC:</h3>
                    </div>
                </div>
                <div class="col-lg-12" style="display: flex; align-content: center">
                    <div class="statistical">
                        <div class="project-count">
                            <i class="fa-solid fa-globe"></i>
                            <span>123</span>
                        </div>
                        <span style="font-size: 18px;">TRƯỜNG HỢP</span>
                    </div>
                    <div class="statistical">
                        <div class="total-money">
                            <i class="fa-regular fa-face-smile"></i>
                            <span>123.456.789</span>
                        </div>
                        <span style="font-size: 18px;">ĐỒNG</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend/login/login');
@stop()
