@extends('layouts.master')
@section('title', 'Летопис')

@section('content')
<section class="tf-page-title">
    <div class="overlay"></div>
    <img src="/assets/images/background/img1innerpage.png" class="bg-inner1" alt="">
    <img src="/assets/images/background/img2innerpage.png" class="bg-inner2" alt="">
    <img src="/assets/images/background/img4innerpage.png" class="bg-inner3" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title inner">
                    <h1 class="title">Летопис</h1>
                    <div class="breadcrumbs">
                        <ul class="jus-ct">
                            <li><a href="/">Почетна</a></li>
                            <li><p class="breadcrumbs-inner f-rubik">Летопис</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>

<section class="tf-section tf-blog-list">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                @foreach ($posts as $post)
                    <article class="box-blog-list">
                        <div class="box-feature wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
                            <img src="assets/images/post/box-blog-list2.jpg" alt="Image">
                            <div class="overlay jus-ct">
                                <a href="https://www.youtube.com/watch?v=CZsARU7HcBI" class="fl-play st-1 popup-youtube">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="meta-post st-2">
                                <ul class="fx">
                                    <li class="fx"><i class="far fa-calendar-alt clr-pri-3"></i>{{$post->created_at->toFormattedDateString()}}</li>
                                    {{-- <li class="fx"><i class="far fa-comment-alt-dots clr-pri-3"></i>Comments (05)</li> --}}
                                </ul>
                            </div>
                            <h3 class="title-article-post"><a href="b">{{$post->title}}</a></h3>
                            <p class="sub f-rubik">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto
                            </p>
                            <div class="box-btn">
                                <a href="/admin.letopis.show/{{$post->id}}" class="fl-btn st-1">
                                    <span class="inner">Детаљније</span>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach



                <div class="themesflat-pagination st-2" data-wow-delay="200ms" data-wow-duration="1500ms">
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