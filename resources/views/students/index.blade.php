@extends('layouts.master')
@section('title', 'За ђаке')

@section('content')
<section class="tf-page-title-single">
    <div class="overlay-single"></div>
    <img src="assets/images/background/img1innerpage.png" class="bg-inner1" alt="">
    <img src="assets/images/background/img2innerpage.png" class="bg-inner2" alt="">
    <img src="assets/images/background/img4innerpage.png" class="bg-inner3" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title inner">
                    <h1 class="title">Обавештења за ђаке</h1>
                    <div class="breadcrumbs">
                        <ul class="jus-ct">
                            <li><a href="/" class="f-rubik">Почетна</a></li>
                            <li><p class="breadcrumbs-inner f-rubik">За ђаке</p></li>
                        </ul>
                    </div>
                    {{-- @if (Auth::user()) --}}
                        <div class="col-4">
                            {{-- <button href="/students.create" class="fl-btn st-1" id="button"><span class="inner">Креирај обавештење</span></button> --}}
                            <a href="students.create" class="fl-btn st-3"><span class="inner">Креирај обавештење</span></a>
                        </div>
                    {{-- @endif --}}
                </div>
            </div>
        </div>
    </div>    
</section>

<section class="tf-section tf-blog-grid">
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                    <div class="box-artice fl-scale st-2 wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
                        <div class="box-feature inner-scale"><a href="#"><img src="assets/images/post/box-aricle1.jpg" alt="Image"></a></div>
                        <div class="box-content">
                            <div class="meta-post st-1">
                                <ul class="fx">
                                    <li><a href="blog-single.html" class="fx"><i class="far fa-calendar-alt clr-pri-3"></i>{{$post->created_at->toFormattedDateString()}}</a></li>
                                    {{-- <li><a href="blog-single.html" class="fx"><i class="far fa-comment-alt-dots clr-pri-3"></i>Comments (05)</a></li> --}}
                                </ul>
                            </div>
                            <h4 class="title-article-post"><a href="blog-single.html">{{$post->title}}</a></h4>
                            <div class="btn-rm">
                                <a href="blog-single.html" class="fl-btn st-4">
                                    <span class="inner">read more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-12">
                <div class="themesflat-pagination st-1" data-wow-delay="200ms" data-wow-duration="1500ms">
                   <ul>
                    <li class="custom">
                        <a href="#" class="muted3-color"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li><a href="#" class="page-numbers">01</a></li>
                    <li><a href="#" class="page-numbers">02</a></li>
                    <li><a href="#" class="page-numbers">03</a></li>
                    <li class="custom st-2">
                        <a href="#" class="muted3-color"><i class="fas fa-chevron-right"></i></a>
                    </li>
                   </ul>
               </div>
            </div>
        </div>
    </div>
</section>
@endsection