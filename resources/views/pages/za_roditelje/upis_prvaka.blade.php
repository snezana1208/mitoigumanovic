@extends('layouts.master')
@section('title', 'Упис првака')

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
                    <h1 class="title">Упис првака</h1>
                    <div class="breadcrumbs">
                        <ul class="jus-ct">
                            <li><a href="/">Почетна</a></li>
                            <li><p class="breadcrumbs-inner f-rubik">Упис првака</p></li>
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
            <div class="col-md-12">
                @foreach ($posts as $post)
                    <div class="wrap-sc-event">
                    <div class="sc-event-box active fx wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                        <div class="image">
                            <img src="/assets/images/common/01.vents.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="event-details.html">{{$post->title}}</a></h3>
                            <ul>
                                <li><span><i class="far fa-map-marker-alt"></i>55 Main Street,2nd Block, 3rd Floor, New York City</span></li>
                                <li><span><i class="far fa-calendar-alt"></i>{{$post->created_at->toFormattedDateString()}}</span></li>
                            </ul>
                            
                        </div>
                        <a href="/admin.upis_prvaka.show/{{$post->id}}" class="fl-btn st-1">
                            <span class="inner">Детаљније</span>
                        </a>
                    </div>
                </div>
                @endforeach
                
            </div>
            <div class="col-md-12">
                <div class="themesflat-pagination style m-t30 fx fx-style2" data-wow-delay="200ms" data-wow-duration="1500ms">
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