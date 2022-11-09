@extends('layouts.master')
@section('title', 'Мито Игумановић')

@section('content')
<section class="tf-slider-2 first-head">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slider-2">
                        <div class="themesflat-carousel clearfix" data-margin="30" data-item="1" data-item2="1" data-item3="1" data-item4="1" data-auto="false">
                            <div class="owl-carousel owl-theme none dots-none">
                                <div class="item-slider-2">
                                    <div class="box-content">
                                        <div class="sub f-rubik clr-pri-1">Основна школа</div>
                                        <div class="title clr-pri-1">"Мито Игумановић"</div>
                                        {{-- <p class="wrap f-rubik">Sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p> --}}
                                        <div class="btn-slider">
                                            <a href="/kontakt" class="fl-btn st-2">
                                                <span class="inner">Контактирајте нас</span>
                                            </a>
                                        </div>
                                    </div>
                                    {{-- <div class="sc-img fx">
                                        <img src="assets/images/common/imgslhome2.jpg" alt="">
                                        <p>Sit amet consec teture adipiscing elit sed</p>
                                    </div> --}}
                                    {{-- <div class="box-feature">
                                        <div class="image"><img src="assets/images/common/slider-2.jpg" alt="Image"></div>
                                    </div> --}}
                                </div>
                                {{-- <div class="item-slider-2">
                                    <div class="box-content">
                                        <div class="sub f-rubik clr-pri-3">Smart kindergarten</div>
                                        <div class="title clr-pri-2">We’re Best Kids Study Center</div>
                                        <p class="wrap f-rubik">Sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                                        <div class="btn-slider">
                                            <a href="classes.html" class="fl-btn st-2">
                                                <span class="inner">Explore course</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sc-img fx">
                                        <img src="assets/images/common/imgslhome2.jpg" alt="">
                                        <p>Sit amet consec teture adipiscing elit sed</p>
                                    </div>
                                    <div class="box-feature">
                                        <div class="image"><img src="assets/images/common/slider-2.jpg" alt="Image"></div>
                                    </div>
                                </div> --}}
                            </div>
                        </div><!--/.themesflat-carousel-->
                </div><!--/.slider-2-->
            </div>
        </div>
    </div>
</section>

<section class="tf-section-top tf-discovery">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-heading st-2">
                    <div class="sub-heading clr-pri-3 f-mulish">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30" viewBox="0 0 77 30">
                            <g>
                              <image width="77" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAEPklEQVRogd2Ze4hVVRTGf+pNHRtnegxqlonUMJYGY/pXWoFEJpVBTFRDaBbOVmxC/5GUUFJMqQh6MLUjfARBUVGEYi9rqFQU0UrQ8pXvMkcLmbJSZ2TdvlOHy73de+fOmXPv/eCwD+ewz9n7O2utb611enU2NZEGA4F+QFu6m2UF7/PeTe8M17cA48qesC4iHWk3AiOB70tiBzEgHWmfAr8CB8p+911EKmn1wGXAlyWzgxiQStpyjZ+V/c4LQCI0tQKYqPN8SDPia2Wl1wBXSH0D/AYcB3YD3wL7gY64N14IwqRNAi4CjuQgAv2Be3RMkksHOAOcBs6KvEqgT+h+m+LmWuAD4PeiYSNHhEm7S+P6/5l6FTAXeBSoFgGfAJ8D3wG7RFgY9iGuliKPByYA9wMPAu3A28CzwA9xEpEPwqTdprE1zfxLgSeBZrnje8BKWcz5LO8zi9unY62uDQIagNn6AI8AbwHzgYM9S0H+CIRgGDBc51+nPKVBFjQHWK34ZZbyUQ6EZcIvQAswGpgMbJfl2XueSHHnokNA2q0ajwF7dW7C8DrwjoL3GGAG8GM3bqJT5Fv18bDi4TK5+5XFTtp4jZs1mvt8oY2YW96smBUVOmXFo4B1wC0q5cb0PCXZEZAW1JlbFOw3KnDfASwtwA3zxc/A3RKGoUqyb+qhd+eM3hKDGzThkISgWtYVR5JrH2ieRKFSllcfwzoywki7Xm0gwyLgEiW5O2Jem1UnC4Aqxb1hsa7GuRqcszifJO260K0RwL1FQFgAE4VXgMFKhAfEuJYXgT9wLpFQ7AqwSBVB2B0sYz8FnIxnrTwO1Mn6jcBpPb4C5yxMTElmFt6fS2hBAZ7WkQ5nFPMOA3tUR34F7Ix4yeeAB5TLTQU2Aa9G/M5UPARcDLyMRKA9x4kVIrguVD0YjgIfqkpojUhpTyihtue/AGyT0kcP5/oqtqKEPElak9IKc8leoUUMUGFeJRWz43KlAoOUfAbjLB3m2quAJcDf3byhDaoWngPeBcaKzKgxRyLUjPdnCdWeB7tY85mQ1KggNxG5VqT2jYA0w/PK20ys3pfF/xnBe/6Bc1bmPSXvaQkuJ7JMy4YO1ZF2bI1s8f+hU0JQqyrmDdWs3R8SnBuqBkP/ZGfG+397gJn+RhUz2qVkFkvvE3HdW+A7NwT4WB60Hu83hG+XImnop8/t6uc1AmuUlBcO5+qk0KP1Ye5MfWah7hkndqqwX6Ma2RoKj0nJ84dzZkAzgWeUXhxIdn+8/yv1WZn+sJcSTIjelOWhfuBidaBz+RfRT+6+UNaFWlONeH883YRStrQAbfpPMVXdkQlqwf+kuGSu9o1+7nRoz4NF0ES5X5WedULkvRYO/KkoB0sLwxLw6WrLj8x9WrLxugJ4Ce+zJvvlRloYRpq10i1pt6aEJeIWqyxGmdVZzLKqohXvg+ZrdgAXAIwK6LO/4gPOAAAAAElFTkSuQmCC"/>
                            </g>
                        </svg>
                        <span class="inner-sub st-1">Aктуелности</span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30" viewBox="0 0 77 30">
                            <g>
                              <image width="77" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAEMUlEQVRoge2Ze4hVVRTGf46WMyWmZvkaNSWfST7I1EINyVQ0kSxsQiyS3JFo/lGhUQSCJokk5aONhijhHyGRkKTlI3JMFKQaBx2o1HS0klSs66ucGVl3vhOnw73XwblPnQ8OZ+acfc/e+zvr8a11mtXNmsUtDe8T79659sAVvP87eqvo1mYsJR4C9ica0ERaclQBfXFuSHREE2nJ4P0x4BzwdXREE2mp8S3QDucGhUc1kZYa23V3SXhUizxb5I3AXnxPYCDQG+gAtAk9x7Lfb8AvwA/AT0BtA+cJSBuDcyV4f4kCJu1OYAowERgLtA/dqwFiIus2oDVQErp/FtgGbNZxOeks3lfhXDVQCowDPqcASesDvA5MA1rJYvYA5TpbxjsO/Bv5nRHXD3gwbjX1RJcB53HuY+B9vK9OMucO4HlgUkBaocS07sBG4DAwU8TMBjoBo4A3gS1ywShhhr+AfcAakdURmCCLexU4gnPLcK5tgt9+o/PjwYV8J605MF9k2Wa/12YHAKuA0zf4XHPhrbLYXsB6YF58HuemRsaW69wd57qS56R1AXYC7wIWgF+QSrfN1qVtFu+P4v1LwOC4xcEmnFsbD/z1938GTmn0aPKYtMEqYcz1vgQekDWkj6wovK8ARgJv6QXtwrl7NWqfzo+Sp6Q9IlHZGVgKPAn8npWZva/B+0XA+HgJBd/hXGmoBjVLzzvSBsmyLDMuAN5Q/MkuvN8uq7tLieC45h+Acy0C0koiWicX6Kp41VrZcElOV+P9QckTE8rv6Gox0L9IWu0i8EEOl3iHNJCp+dUK/rlHPXFPAT1Ca+lnhF0FLENMllvEcrBYI2qIsuXcnJHl3N3xAr2+4ghQLUtbrP/7BhXBCmA5MB34KMtLfRmYAZwEntVLzDT6K2YNxLleCg3dIuVWMvQJ2t1Wo/0DnADu19/ZwMPAbiWkx1QKZQLN9fyp8qgujZhjTWBpVnrMAT6UMn4vC4TdExeScDvwWoYIs2e/Ld1VGrpeo2ripM4mXs8oNMVUdl1WrA9QF++SeP9r+MNKkSzMCBwKVGZgEwGK1XYxsfgZ8HSGhGsrJZVTittHJR/+/K89lOzDSgqEuxy1KhPKVfyOCJUP6YS5ygYRdlAdhEwp/Zg8KK2Iits9aoV0UwegY4YIe0auMTlH2bpRSFQRTNSGrJOwVz2sdMBE4hfAc3KPJ4BjhUHT/5GItCuq/2xD9wEHgFcaWXKZRVWopjuiQvxQOjaQCyQjwoLlcIlNE3orgR/lVi0buM4idUh3q61sWugrYJj6YwWLVO3uP7RpS68L5a6fKh1vEaGVGndVJHVQ0T1CPfVOetZptak3FDJZAa73jaBWFcInykIvSvyW6bgeqqT91qmReFOgoR9WYtI7dph7mbo2NW8xz6zLXPaCLMpczz6VWYvHSLu5AFwD7u/9V73LPFIAAAAASUVORK5CYII="/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="title clr-pri-2">Најновија дешавања</h3>
                </div>
            </div>
            <div class="col-12">
                <div class="fl-discovery">
                    @foreach ($posts as $post)
                        <div class="sc-discovery wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="800ms">
                            <div class="inner-discovery">
                                <div class="box-icon st-1">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h5 class="title"><a href="about.html">{{$post->title}}</a></h5>
                                {{-- <p class="sub f-mulish">Данас је Светски дан пешачења!</p> --}}
                                <a href="/admin.vesti.show/{{$post->id}}"><img src="/storage/post_image/{{$post->image}}" alt=""></a>
                                <a href="/admin.vesti.show/{{$post->id}}" class="fl-btn st-10">
                                    <span class="inner">Опширније</span>
                                </a>
                            </div>
                        </div><!--/.sc-discovery-->                        
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section tf-sc-about2">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                <div class="feature-about2">
                    <img src="assets/images/common/OS-Mito-Igumanovic-Kosjeric-а1478507232214.jpg" alt="Image" class="wow fadeInLeft animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                    
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                <div class="sc-about-2">
                    <div class="title-heading">
                        <div class="sub-heading clr-pri-3 f-mulish">
                            <span class="inner-sub st-2">Упознајте нашу школу</span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30" viewBox="0 0 77 30">
                                <g>
                                <image width="77" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAEMUlEQVRoge2Ze4hVVRTGf46WMyWmZvkaNSWfST7I1EINyVQ0kSxsQiyS3JFo/lGhUQSCJokk5aONhijhHyGRkKTlI3JMFKQaBx2o1HS0klSs66ucGVl3vhOnw73XwblPnQ8OZ+acfc/e+zvr8a11mtXNmsUtDe8T79659sAVvP87eqvo1mYsJR4C9ica0ERaclQBfXFuSHREE2nJ4P0x4BzwdXREE2mp8S3QDucGhUc1kZYa23V3SXhUizxb5I3AXnxPYCDQG+gAtAk9x7Lfb8AvwA/AT0BtA+cJSBuDcyV4f4kCJu1OYAowERgLtA/dqwFiIus2oDVQErp/FtgGbNZxOeks3lfhXDVQCowDPqcASesDvA5MA1rJYvYA5TpbxjsO/Bv5nRHXD3gwbjX1RJcB53HuY+B9vK9OMucO4HlgUkBaocS07sBG4DAwU8TMBjoBo4A3gS1ywShhhr+AfcAakdURmCCLexU4gnPLcK5tgt9+o/PjwYV8J605MF9k2Wa/12YHAKuA0zf4XHPhrbLYXsB6YF58HuemRsaW69wd57qS56R1AXYC7wIWgF+QSrfN1qVtFu+P4v1LwOC4xcEmnFsbD/z1938GTmn0aPKYtMEqYcz1vgQekDWkj6wovK8ARgJv6QXtwrl7NWqfzo+Sp6Q9IlHZGVgKPAn8npWZva/B+0XA+HgJBd/hXGmoBjVLzzvSBsmyLDMuAN5Q/MkuvN8uq7tLieC45h+Acy0C0koiWicX6Kp41VrZcElOV+P9QckTE8rv6Gox0L9IWu0i8EEOl3iHNJCp+dUK/rlHPXFPAT1Ca+lnhF0FLENMllvEcrBYI2qIsuXcnJHl3N3xAr2+4ghQLUtbrP/7BhXBCmA5MB34KMtLfRmYAZwEntVLzDT6K2YNxLleCg3dIuVWMvQJ2t1Wo/0DnADu19/ZwMPAbiWkx1QKZQLN9fyp8qgujZhjTWBpVnrMAT6UMn4vC4TdExeScDvwWoYIs2e/Ld1VGrpeo2ripM4mXs8oNMVUdl1WrA9QF++SeP9r+MNKkSzMCBwKVGZgEwGK1XYxsfgZ8HSGhGsrJZVTittHJR/+/K89lOzDSgqEuxy1KhPKVfyOCJUP6YS5ygYRdlAdhEwp/Zg8KK2Iits9aoV0UwegY4YIe0auMTlH2bpRSFQRTNSGrJOwVz2sdMBE4hfAc3KPJ4BjhUHT/5GItCuq/2xD9wEHgFcaWXKZRVWopjuiQvxQOjaQCyQjwoLlcIlNE3orgR/lVi0buM4idUh3q61sWugrYJj6YwWLVO3uP7RpS68L5a6fKh1vEaGVGndVJHVQ0T1CPfVOetZptak3FDJZAa73jaBWFcInykIvSvyW6bgeqqT91qmReFOgoR9WYtI7dph7mbo2NW8xz6zLXPaCLMpczz6VWYvHSLu5AFwD7u/9V73LPFIAAAAASUVORK5CYII="/>
                                </g>
                            </svg>
                        </div>
                        <h3 class="title clr-pri-2">Историјат
                        </h3>
                    </div>
                    <div class="inner">
                        <p class="wrap f-mulish clr-pri-4  wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                            Основна школа ,,Мито Игумановић" Косјерић највећа је школа у општини Косјерић, а једна је и од већих школа у Златиборском округу.

Корени писмености и образовања на подручју данашње општине Косјерић досежу до 1845. године када је, за време владавине кнеза Александра Карађорђевића (млађег сина вожда Карађорђа Петровића), у Субјелу отворена основна школа. Недуго затим отвара се школа у Сечој Реци 1852. године, а касније основне школе у Косјерићу и Радановцима, 1869. године, Скакавцима 1880. године, Ражани 1906. године, Тубићима 1939. године.</p>
                        

                        <a href="/istorijat" class="fl-btn st-11">
                            <span class="inner">Опширније</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section tf-counter">
    
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                <div class="sc-fun-fact st-1 themesflat-counter wow fadeIn animated" data-wow-delay="0.2ms" data-wow-duration="1300ms">
                    <div class="box-icon">
                        <svg data-name="Fun fact" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="66" height="66" viewBox="0 0 66 66">
                            <g id="_01" data-name="01">
                              <g>
                                <image id="Icon-2" data-name="Icon" width="66" height="66" xlink:href="data:img/png;base64,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"/>
                              </g>
                            </g>
                        </svg>
                    </div>
                    <div class="box-content box">
                        <div class="number-content clr-pri-1">
                            <span class="number" data-speed="3000" data-to="608" data-inviewport="yes">608</span>+
                        </div>
                        <p class="clr-pri-1">Укупан број ученика</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                <div class="sc-fun-fact st-2 themesflat-counter wow fadeIn animated" data-wow-delay="0.2ms" data-wow-duration="1300ms">
                    <div class="box-icon style2">
                        <svg data-name="Fun fact" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="62" height="60" viewBox="0 0 62 60">
                            <g id="_02" data-name="02">
                              <g>
                                <image id="dictionary" width="62" height="60" xlink:href="data:img/png;base64,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"/>
                              </g>
                            </g>
                        </svg>
                    </div>
                    <div class="box-content box">
                        <div class="number-content clr-pri-1">
                            <span class="number" data-speed="3000" data-to="36" data-inviewport="yes">36</span>+
                        </div>
                        <p class="clr-pri-1">Број одељења</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                <div class="sc-fun-fact st-3 themesflat-counter wow fadeIn animated" data-wow-delay="0.2ms" data-wow-duration="1300ms">
                    <div class="box-icon">
                        <svg data-name="Fun fact" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="61" height="55" viewBox="0 0 61 55">
                            <g id="_03" data-name="03">
                              <g>
                                <image id="online-class" width="61" height="55" xlink:href="data:img/png;base64,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"/>
                              </g>
                            </g>
                        </svg>
                    </div>
                    <div class="box-content box">
                        <div class="number-content clr-pri-1">
                            <span class="number" data-speed="3000" data-to="64" data-inviewport="yes">64</span>+
                        </div>
                        <p class="clr-pri-1">Укупан број наставног кадра</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                <div class="sc-fun-fact st-3 themesflat-counter mgbt-0 wow fadeIn animated" data-wow-delay="0.2ms" data-wow-duration="1300ms">
                    <div class="box-icon">
                        <svg data-name="Fun fact" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="61" height="59" viewBox="0 0 61 59">
                            <g id="_04" data-name="04">
                              <g>
                                <image id="notes" width="61" height="59" xlink:href="data:img/png;base64,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"/>
                              </g>
                            </g>
                        </svg>
                    </div>
                    <div class="box-content box">
                        <div class="number-content clr-pri-1">
                            <span class="number" data-speed="3000" data-to="2" data-inviewport="yes">2</span>+
                        </div>
                        <p class="clr-pri-1">Продужени боравак</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-12">
                <div class="sc-fun-fact st-3 themesflat-counter mgbt-0 wow fadeIn animated" data-wow-delay="0.2ms" data-wow-duration="1300ms">
                    <div class="box-icon">
                        <svg data-name="Fun fact" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="61" height="59" viewBox="0 0 61 59">
                            <g id="_04" data-name="04">
                              <g>
                                <image id="notes" width="61" height="59" xlink:href="data:img/png;base64,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"/>
                              </g>
                            </g>
                        </svg>
                    </div>
                    <div class="box-content box">
                        <div class="number-content clr-pri-1">
                            <span class="number" data-speed="3000" data-to="10" data-inviewport="yes">10</span>+
                        </div>
                        <p class="clr-pri-1">Обогаћени једносменски рад</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section tf-service">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-heading st-3">
                    <div class="sub-heading clr-pri-1 f-mulish">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30" viewBox="0 0 77 30">
                            <g>
                              <image width="77" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAER0lEQVRogd2Ze6gUZRjGf552NC8du8hRJ2+hcqwUtPpLzUAkFScFMbwQZoX/JIUhhEUkFWphBGmYiGQFQSJS5IhlWQe7kXRRgy5e02zU1Io4ZTl2TrzyjAzDrrtn98zeHhhmd2e/me975n3f533fr8v5rf3JgquAbsCZbBfrCY4XdHg1DTl+3w3cVu+EFYtspN0CjAB+qI0llB/ZSHsf+B34qd4XXyySpI0GrgV21c4Syo8kac/q/EG9L7wUZGJjuwMT9bkjpBnxw2WlQ4H+Ut8IfwCngP3AXuAw0FbxlZeAOGmTTYGB4wWIwJXADB2T5dIRzgF/AqHI6wVcEbt+RnFzG/A28Fe1kFEo4qR5Ou+8zNgBwCPAA0BvEbAD+BDYB3wvwuKwFzFIijwOGA/MBuYCrcAmYBXwY0WZ6ADipE3SuSXL8GuAJ4CH5I5bgI2ymP/yPM4s7pCObfqtCZgFLNILuB94E3gMOFpWBopAJAQDgcH6/EniNrNkQYuB1xS/zFLeLYCwXPgVWAuMBKYC38jy7DlLE+5cdYhIu0NnqykO6rMJwwZgs4L3GGAhcKQTF9Eu8q36WKB4uFLufn21kzZO5y90Nvf5SAsxt7xdMSsttMuKbwa2AxNUyo0pPyX5EZEW1Zm7Few/U+CeAiwvwQ07ipPAXRIGV0n22DI9u2A0SAxGacAxCUFvWVclklx7QY9KFHrJ8kZXYB45YaTdpDaQYRlwtZLcbys8N6tOHgcaFfcGVnIyoe/2CX3X4vxF0m6MXbsBmFkFhEUwUXgZ6KtEuEcF57Ia+Dv03UxGsSvCMlUEcXewjP034Gxl5srDQLOs3wi8t9wTCH3XwsR0yywcL7iQ0YQirNCRDecU834GDqiO/Bj4LuU5XwDmKJebD3wOrEv5mUncA/QEXkIi0FrgwO4iuDlWPRh+Ad5RldCSktKeVkJt938R+FpKnzpC3+2q2IoScqI9gsFyyS6xSfRQYd4oFbPjOqUCTUo+mxLZu7n2q8AzwPkUFrQEeF7WfqvILAn59ghC3zUlf85KSMcLLlkaqveKqflMSPqoIDcRGSZSu6ZE2gvK20ys3pLF/5PCcy4i9F0r856S96yNfs9cflhetKmOtOPLtCYfQ7uEYLiqmNdVs3Z6SAh911WDwbxtvOMFl3qAuXajqhmtUjKLpXeLuE4t8EPf7Qe8Jw/a6XjBp/HrtUga2vS5U/28eYCvpLxkhL7bLIUeqRczLXnPWiUNpToT1IGZoobC9GJvFvpuQ+i7DwJfAUP0YsY6XvBv8r+5dthrCSZEb8jyUD/waXWgC9mL6Cayn5R1odbUPMcLTmUbUA+kRZiv7kiTvp9QXDJX26PNnTaJX18RNFHu16gxp0Xe+njgT6KeSEMJ+H1qy48o4P8RrPH6CrDG8YK8yX69kRaHkWatdEvarSlhFmilkMUoszqLWVZVtDheEDVf8wP4H8nX9kp9LftGAAAAAElFTkSuQmCC"/>
                            </g>
                        </svg>
                        <span class="inner-sub st-1">Наша школа </span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30" viewBox="0 0 77 30">
                            <g>
                              <image width="77" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAEUUlEQVRoge2Ze4ycUxjGf1YPXd2o0CqfbYug22r0EvcGjcQtPRqUuEQoCREJ8QeCEIm4hT+Ie4I0+o9EpNH0iKIu0ZaQiGqbaoLedA8aNCjanl3k5Znk82VnzE7nspPsk0y+mflOvnPOM+953+d5Z6/dSw6lneF8bMjqU8jGALucj78W73W0NWONxfHAJwPNMExaeawHelLIZhZHDJNWBs7HTcB24O3iiGHSKuMD4MAUsun5UcOkVcYy3X04P6rtq6d++COBacAxwDjggNx9q37fAl8Dq4AvnY9/VvPgFLIe4At7C4x2Pv5BG5M2CrgAmAOcBYzJ3esHdogsB+wPdObu/wS8CSy2l/NxZ6WJUsi+AbqBC52Pr9l3Ixq2rcZgEnAbcCnQBVjErARW6GoVb4vzMRU2bsRNBo4DzhTRlwM/p5C9CDzmfNxaZsXvAFcDHviHtHaJtInAQ8BltmZgHfA08KrzcdtgH5ZCtreIuwaYJ/KfBO53Pm4vjJ0PLAA2Ox8Ppw0KgW3uDuUVi4zPgPOAqcAzwKAJ41850e98XOp8tIg9GngJuMXmSSGbVxi+QteJKWTjGeKkHQa8qwizBDxfKn0p8Fe9JnE+bnQ+XgfMADZY9KaQvZBC1qn7XwElr3YGQ5i0GbIwpwNvAMcqGupGVhHOx9XAacDd+oHeSyE7WMM+1nUWQ5S0UyUqM+BR4Hzgu2ZMrGP7AHCuWSjgwxSy7pwHtUgfcqRNV2RZZbwTuF0SoqlwPi5T1I0G3reKrPmnppCNKJHWWdA6rcB45SuTB3cVVXgLiFsjeWJC+V59PRKY0iGt9jvwRAvXuJ80kKn5Z5X8Ww4RdxFwRG4tk42wPsAqxFwdix0tWKwRNVPV8uZWkZVCdpAZdDmOErYq0h7U556SI3gKeBy4EniuyWu9AbgK6JV47Wv0hClkU5SzpkmnWWqYULBb5TCp5AjMo+0GzGcdpffNwInAchWk2bJCg0I17W45gNlS/3OlAWvF86VIM692k6yEKeNHmkDYWBOSwD7ArbUQ9n9IIbNn3yPd1Z0b3i830aurMf+jUpO9fgF2KteXYBpxlfNxc957dijCjMATgLX13kQOI9WrMrG4CLi4VuFaKdJSyLpUVKLy9kbJhx+qbQ8NhKJhnyWvZQ8+JWcf6gk7Ki8DlwBrJGZrLj6N+jeqEoridqVaIRPUczqkzvMZYQtFWK/ySyuq9R5hIEcwRxuyTsJH6mHVAyYSA3CFHQ/gbGBTe9D0XwxE2i4dGduQ9Y8+BW7cQ8tlEbVanm6DjPi6emygFShHhOW0kyU2R6nh97mO1b5VrrNDjb7lai2bFnoLOEn9sbZFpXb399r09cB9Oq6vqBy/LkLXalyfSBon021F5BygVGW2qU29sJ3JKqHadneXdNy1Er/VYr203wI1EuuOVlTPWv4jsONl6trUvOU8iy47sr8pouzo2V9l1uIx0hqKppMG/A3vOSa5mVQNggAAAABJRU5ErkJggg=="/>
                            </g>
                        </svg>
                    </div>
                    <p class="sub f-mulish clr-pri-1">„Учење је као веслање узводно;
                        чим се престане, одмах се креће назад.“
                        Лао Це</p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="sc-service st-3 fl-scale wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="800ms">
                    <div class="box-feature inner-scale"><img src="assets/images/common/dnevnik1.jpg" alt="Image"></div>
                    <div class="box-content">
                        <h4 class="title"><a href="/rasporedisr" class="clr-pri-1">Распореди</a></h4>
                        {{-- <h4 class="sub f-mulish clr-pri-1">Распореди</h4> --}}
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="sc-service st-4 fl-scale wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                    <div class="box-feature inner-scale"><img src="assets/images/common/onlajn-nastava.jpg" alt="Image"></div>
                    <div class="box-content">
                        <h4 class="title"><a href="https://classroom.google.com/u/0/" class="clr-pri-1">ONLINE настава</a></h4>
                        {{-- <p class="sub f-mulish clr-pri-1">Quis autem vel eum rehenderit</p> --}}
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="sc-service fl-scale wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
                    <div class="box-feature inner-scale"><img src="assets/images/common/prvaci.jpg" alt="Image"></div>
                    <div class="box-content">
                        <h4 class="title"><a href="/upis_prvaka" class="clr-pri-1">Упис првака</a></h4>
                        {{-- <p class="sub f-mulish clr-pri-1">Quis autem vel eum rehenderit</p> --}}
                    </div>
                </div>
            </div>



            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="sc-service st-4 fl-scale wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1000ms">
                    <div class="box-feature inner-scale"><img src="assets/images/common/besplatni_udzbenici.jpg" alt="Image"></div>
                    <div class="box-content">
                        <h4 class="title"><a href="spisak_udzbenika" class="clr-pri-1">Списак уџбеника</a></h4>
                        {{-- <p class="sub f-mulish clr-pri-1">Quis autem vel eum rehenderit</p> --}}
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="sc-service fl-scale wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
                    <div class="box-feature inner-scale"><img src="assets/images/common/zbirke-za.jpg" alt="Image"></div>
                    <div class="box-content">
                        <h4 class="title"><a href="/zavrsni_ispit" class="clr-pri-1">Завршни испит</a></h4>
                        {{-- <p class="sub f-mulish clr-pri-1">Quis autem vel eum rehenderit</p> --}}
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="sc-service st-2 fl-scale wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1400ms">
                    <div class="box-feature inner-scale"><img src="assets/images/common/produzeni-boravak.jpg" alt="Image"></div>
                    <div class="box-content">
                        <h4 class="title"><a href="produzeni_boravak" class="clr-pri-1">Продужени боравак</a></h4>
                        {{-- <p class="sub f-mulish clr-pri-1">Quis autem vel eum rehenderit</p> --}}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>



<section class="tf-section tf-galley">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-heading st-4">
                    <div class="sub-heading clr-pri-3 f-mulish">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30" viewBox="0 0 77 30">
                            <g>
                              <image width="77" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAEPklEQVRogd2Ze4hVVRTGf+pNHRtnegxqlonUMJYGY/pXWoFEJpVBTFRDaBbOVmxC/5GUUFJMqQh6MLUjfARBUVGEYi9rqFQU0UrQ8pXvMkcLmbJSZ2TdvlOHy73de+fOmXPv/eCwD+ewz9n7O2utb611enU2NZEGA4F+QFu6m2UF7/PeTe8M17cA48qesC4iHWk3AiOB70tiBzEgHWmfAr8CB8p+911EKmn1wGXAlyWzgxiQStpyjZ+V/c4LQCI0tQKYqPN8SDPia2Wl1wBXSH0D/AYcB3YD3wL7gY64N14IwqRNAi4CjuQgAv2Be3RMkksHOAOcBs6KvEqgT+h+m+LmWuAD4PeiYSNHhEm7S+P6/5l6FTAXeBSoFgGfAJ8D3wG7RFgY9iGuliKPByYA9wMPAu3A28CzwA9xEpEPwqTdprE1zfxLgSeBZrnje8BKWcz5LO8zi9unY62uDQIagNn6AI8AbwHzgYM9S0H+CIRgGDBc51+nPKVBFjQHWK34ZZbyUQ6EZcIvQAswGpgMbJfl2XueSHHnokNA2q0ajwF7dW7C8DrwjoL3GGAG8GM3bqJT5Fv18bDi4TK5+5XFTtp4jZs1mvt8oY2YW96smBUVOmXFo4B1wC0q5cb0PCXZEZAW1JlbFOw3KnDfASwtwA3zxc/A3RKGoUqyb+qhd+eM3hKDGzThkISgWtYVR5JrH2ieRKFSllcfwzoywki7Xm0gwyLgEiW5O2Jem1UnC4Aqxb1hsa7GuRqcszifJO260K0RwL1FQFgAE4VXgMFKhAfEuJYXgT9wLpFQ7AqwSBVB2B0sYz8FnIxnrTwO1Mn6jcBpPb4C5yxMTElmFt6fS2hBAZ7WkQ5nFPMOA3tUR34F7Ix4yeeAB5TLTQU2Aa9G/M5UPARcDLyMRKA9x4kVIrguVD0YjgIfqkpojUhpTyihtue/AGyT0kcP5/oqtqKEPElak9IKc8leoUUMUGFeJRWz43KlAoOUfAbjLB3m2quAJcDf3byhDaoWngPeBcaKzKgxRyLUjPdnCdWeB7tY85mQ1KggNxG5VqT2jYA0w/PK20ys3pfF/xnBe/6Bc1bmPSXvaQkuJ7JMy4YO1ZF2bI1s8f+hU0JQqyrmDdWs3R8SnBuqBkP/ZGfG+397gJn+RhUz2qVkFkvvE3HdW+A7NwT4WB60Hu83hG+XImnop8/t6uc1AmuUlBcO5+qk0KP1Ye5MfWah7hkndqqwX6Ma2RoKj0nJ84dzZkAzgWeUXhxIdn+8/yv1WZn+sJcSTIjelOWhfuBidaBz+RfRT+6+UNaFWlONeH883YRStrQAbfpPMVXdkQlqwf+kuGSu9o1+7nRoz4NF0ES5X5WedULkvRYO/KkoB0sLwxLw6WrLj8x9WrLxugJ4Ce+zJvvlRloYRpq10i1pt6aEJeIWqyxGmdVZzLKqohXvg+ZrdgAXAIwK6LO/4gPOAAAAAElFTkSuQmCC"/>
                            </g>
                        </svg>
                        <span class="inner-sub st-1">Галерија</span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30" viewBox="0 0 77 30">
                            <g>
                              <image width="77" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAEMUlEQVRoge2Ze4hVVRTGf46WMyWmZvkaNSWfST7I1EINyVQ0kSxsQiyS3JFo/lGhUQSCJokk5aONhijhHyGRkKTlI3JMFKQaBx2o1HS0klSs66ucGVl3vhOnw73XwblPnQ8OZ+acfc/e+zvr8a11mtXNmsUtDe8T79659sAVvP87eqvo1mYsJR4C9ica0ERaclQBfXFuSHREE2nJ4P0x4BzwdXREE2mp8S3QDucGhUc1kZYa23V3SXhUizxb5I3AXnxPYCDQG+gAtAk9x7Lfb8AvwA/AT0BtA+cJSBuDcyV4f4kCJu1OYAowERgLtA/dqwFiIus2oDVQErp/FtgGbNZxOeks3lfhXDVQCowDPqcASesDvA5MA1rJYvYA5TpbxjsO/Bv5nRHXD3gwbjX1RJcB53HuY+B9vK9OMucO4HlgUkBaocS07sBG4DAwU8TMBjoBo4A3gS1ywShhhr+AfcAakdURmCCLexU4gnPLcK5tgt9+o/PjwYV8J605MF9k2Wa/12YHAKuA0zf4XHPhrbLYXsB6YF58HuemRsaW69wd57qS56R1AXYC7wIWgF+QSrfN1qVtFu+P4v1LwOC4xcEmnFsbD/z1938GTmn0aPKYtMEqYcz1vgQekDWkj6wovK8ARgJv6QXtwrl7NWqfzo+Sp6Q9IlHZGVgKPAn8npWZva/B+0XA+HgJBd/hXGmoBjVLzzvSBsmyLDMuAN5Q/MkuvN8uq7tLieC45h+Acy0C0koiWicX6Kp41VrZcElOV+P9QckTE8rv6Gox0L9IWu0i8EEOl3iHNJCp+dUK/rlHPXFPAT1Ca+lnhF0FLENMllvEcrBYI2qIsuXcnJHl3N3xAr2+4ghQLUtbrP/7BhXBCmA5MB34KMtLfRmYAZwEntVLzDT6K2YNxLleCg3dIuVWMvQJ2t1Wo/0DnADu19/ZwMPAbiWkx1QKZQLN9fyp8qgujZhjTWBpVnrMAT6UMn4vC4TdExeScDvwWoYIs2e/Ld1VGrpeo2ripM4mXs8oNMVUdl1WrA9QF++SeP9r+MNKkSzMCBwKVGZgEwGK1XYxsfgZ8HSGhGsrJZVTittHJR/+/K89lOzDSgqEuxy1KhPKVfyOCJUP6YS5ygYRdlAdhEwp/Zg8KK2Iits9aoV0UwegY4YIe0auMTlH2bpRSFQRTNSGrJOwVz2sdMBE4hfAc3KPJ4BjhUHT/5GItCuq/2xD9wEHgFcaWXKZRVWopjuiQvxQOjaQCyQjwoLlcIlNE3orgR/lVi0buM4idUh3q61sWugrYJj6YwWLVO3uP7RpS68L5a6fKh1vEaGVGndVJHVQ0T1CPfVOetZptak3FDJZAa73jaBWFcInykIvSvyW6bgeqqT91qmReFOgoR9WYtI7dph7mbo2NW8xz6zLXPaCLMpczz6VWYvHSLu5AFwD7u/9V73LPFIAAAAASUVORK5CYII="/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="title clr-pri-2">Ваша деца су и наша деца</h3>
                </div>
            </div>
            @foreach ($images as $image)
                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                    <div class="sc-gallery wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
                        <div class="box-feature">
                            <img id="myImg" src="/storage/galerija/{{$image->name}}" alt="Image">
                        </div>
                    </div>
                </div>
                
            @endforeach

            <div class="style fx fx-style2">
                <div class="box-btn">
                    <a href="/galerija" class="fl-btn st-9">
                        <span class="inner">Галерија</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="tf-sc-contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="sc-contact wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
                    <div class="wrap">
                        <h3 class="title clr-pri-1">Желите да упишете дете у нашу школу ?</h3>
                        <p class="sub clr-pri-1 f-mulish">Чекамо Вас!</p>
                    </div>
                    <div class="inner-sc-contact">
                        <div class="box-btn">
                            <a href="/kontakt" class="fl-btn st-9">
                                <span class="inner">Контакт</span>
                            </a>
                        </div>
                        <div class="inner-contact fx">
                            <svg id="CTA" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="47" viewBox="0 0 49 47">
                                <g>
                                  <image width="49" height="47" xlink:href="data:img/png;base64,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"/>
                                </g>
                            </svg>
                            <ul>
                                <p class="clr-pri-1">Директор школе direktor@migumanovic.edu.rs</p>
                                <p class="clr-pri-1">031/ 781 - 442</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="tf-section tf-sc-blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-heading st-4">
                    <div class="sub-heading clr-pri-3 f-mulish">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30" viewBox="0 0 77 30">
                            <g>
                              <image width="77" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAEPklEQVRogd2Ze4hVVRTGf+pNHRtnegxqlonUMJYGY/pXWoFEJpVBTFRDaBbOVmxC/5GUUFJMqQh6MLUjfARBUVGEYi9rqFQU0UrQ8pXvMkcLmbJSZ2TdvlOHy73de+fOmXPv/eCwD+ewz9n7O2utb611enU2NZEGA4F+QFu6m2UF7/PeTe8M17cA48qesC4iHWk3AiOB70tiBzEgHWmfAr8CB8p+911EKmn1wGXAlyWzgxiQStpyjZ+V/c4LQCI0tQKYqPN8SDPia2Wl1wBXSH0D/AYcB3YD3wL7gY64N14IwqRNAi4CjuQgAv2Be3RMkksHOAOcBs6KvEqgT+h+m+LmWuAD4PeiYSNHhEm7S+P6/5l6FTAXeBSoFgGfAJ8D3wG7RFgY9iGuliKPByYA9wMPAu3A28CzwA9xEpEPwqTdprE1zfxLgSeBZrnje8BKWcz5LO8zi9unY62uDQIagNn6AI8AbwHzgYM9S0H+CIRgGDBc51+nPKVBFjQHWK34ZZbyUQ6EZcIvQAswGpgMbJfl2XueSHHnokNA2q0ajwF7dW7C8DrwjoL3GGAG8GM3bqJT5Fv18bDi4TK5+5XFTtp4jZs1mvt8oY2YW96smBUVOmXFo4B1wC0q5cb0PCXZEZAW1JlbFOw3KnDfASwtwA3zxc/A3RKGoUqyb+qhd+eM3hKDGzThkISgWtYVR5JrH2ieRKFSllcfwzoywki7Xm0gwyLgEiW5O2Jem1UnC4Aqxb1hsa7GuRqcszifJO260K0RwL1FQFgAE4VXgMFKhAfEuJYXgT9wLpFQ7AqwSBVB2B0sYz8FnIxnrTwO1Mn6jcBpPb4C5yxMTElmFt6fS2hBAZ7WkQ5nFPMOA3tUR34F7Ix4yeeAB5TLTQU2Aa9G/M5UPARcDLyMRKA9x4kVIrguVD0YjgIfqkpojUhpTyihtue/AGyT0kcP5/oqtqKEPElak9IKc8leoUUMUGFeJRWz43KlAoOUfAbjLB3m2quAJcDf3byhDaoWngPeBcaKzKgxRyLUjPdnCdWeB7tY85mQ1KggNxG5VqT2jYA0w/PK20ys3pfF/xnBe/6Bc1bmPSXvaQkuJ7JMy4YO1ZF2bI1s8f+hU0JQqyrmDdWs3R8SnBuqBkP/ZGfG+397gJn+RhUz2qVkFkvvE3HdW+A7NwT4WB60Hu83hG+XImnop8/t6uc1AmuUlBcO5+qk0KP1Ye5MfWah7hkndqqwX6Ma2RoKj0nJ84dzZkAzgWeUXhxIdn+8/yv1WZn+sJcSTIjelOWhfuBidaBz+RfRT+6+UNaFWlONeH883YRStrQAbfpPMVXdkQlqwf+kuGSu9o1+7nRoz4NF0ES5X5WedULkvRYO/KkoB0sLwxLw6WrLj8x9WrLxugJ4Ce+zJvvlRloYRpq10i1pt6aEJeIWqyxGmdVZzLKqohXvg+ZrdgAXAIwK6LO/4gPOAAAAAElFTkSuQmCC"/>
                            </g>
                        </svg>
                        <span class="inner-sub st-1">Информиши се</span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30" viewBox="0 0 77 30">
                            <g>
                              <image width="77" height="30" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAEMUlEQVRoge2Ze4hVVRTGf46WMyWmZvkaNSWfST7I1EINyVQ0kSxsQiyS3JFo/lGhUQSCJokk5aONhijhHyGRkKTlI3JMFKQaBx2o1HS0klSs66ucGVl3vhOnw73XwblPnQ8OZ+acfc/e+zvr8a11mtXNmsUtDe8T79659sAVvP87eqvo1mYsJR4C9ica0ERaclQBfXFuSHREE2nJ4P0x4BzwdXREE2mp8S3QDucGhUc1kZYa23V3SXhUizxb5I3AXnxPYCDQG+gAtAk9x7Lfb8AvwA/AT0BtA+cJSBuDcyV4f4kCJu1OYAowERgLtA/dqwFiIus2oDVQErp/FtgGbNZxOeks3lfhXDVQCowDPqcASesDvA5MA1rJYvYA5TpbxjsO/Bv5nRHXD3gwbjX1RJcB53HuY+B9vK9OMucO4HlgUkBaocS07sBG4DAwU8TMBjoBo4A3gS1ywShhhr+AfcAakdURmCCLexU4gnPLcK5tgt9+o/PjwYV8J605MF9k2Wa/12YHAKuA0zf4XHPhrbLYXsB6YF58HuemRsaW69wd57qS56R1AXYC7wIWgF+QSrfN1qVtFu+P4v1LwOC4xcEmnFsbD/z1938GTmn0aPKYtMEqYcz1vgQekDWkj6wovK8ARgJv6QXtwrl7NWqfzo+Sp6Q9IlHZGVgKPAn8npWZva/B+0XA+HgJBd/hXGmoBjVLzzvSBsmyLDMuAN5Q/MkuvN8uq7tLieC45h+Acy0C0koiWicX6Kp41VrZcElOV+P9QckTE8rv6Gox0L9IWu0i8EEOl3iHNJCp+dUK/rlHPXFPAT1Ca+lnhF0FLENMllvEcrBYI2qIsuXcnJHl3N3xAr2+4ghQLUtbrP/7BhXBCmA5MB34KMtLfRmYAZwEntVLzDT6K2YNxLleCg3dIuVWMvQJ2t1Wo/0DnADu19/ZwMPAbiWkx1QKZQLN9fyp8qgujZhjTWBpVnrMAT6UMn4vC4TdExeScDvwWoYIs2e/Ld1VGrpeo2ripM4mXs8oNMVUdl1WrA9QF++SeP9r+MNKkSzMCBwKVGZgEwGK1XYxsfgZ8HSGhGsrJZVTittHJR/+/K89lOzDSgqEuxy1KhPKVfyOCJUP6YS5ygYRdlAdhEwp/Zg8KK2Iits9aoV0UwegY4YIe0auMTlH2bpRSFQRTNSGrJOwVz2sdMBE4hfAc3KPJ4BjhUHT/5GItCuq/2xD9wEHgFcaWXKZRVWopjuiQvxQOjaQCyQjwoLlcIlNE3orgR/lVi0buM4idUh3q61sWugrYJj6YwWLVO3uP7RpS68L5a6fKh1vEaGVGndVJHVQ0T1CPfVOetZptak3FDJZAa73jaBWFcInykIvSvyW6bgeqqT91qmReFOgoR9WYtI7dph7mbo2NW8xz6zLXPaCLMpczz6VWYvHSLu5AFwD7u/9V73LPFIAAAAASUVORK5CYII="/>
                            </g>
                        </svg>
                    </div>
                    <h3 class="title clr-pri-2">Важни линкови</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="box-artice fl-scale st-2 wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
                    <div class="box-feature inner-scale"><a href="https://mpn.gov.rs/"><img src="assets/images/post/ministarstvo_prosvete_1100x600.jpg" alt="Image"></a></div>
                    <div class="box-content">
                        <div class="meta-post st-1">
                            
                        </div>
                        <h6 class="title-article-post"><a href="https://mpn.gov.rs/">Министарство просвете, науке и технолошког развоја</a></h6>
                        <div class="btn-rm">
                            <a href="https://mpn.gov.rs/" class="fl-btn st-4">
                                <span class="inner">Детаљније</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="box-artice fl-scale st-2 wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
                    <div class="box-feature inner-scale"><a href="https://zuov.gov.rs/"><img src="assets/images/post/Завод За Унапређивање Образовања И Васпитања.png" alt="Image"></a></div>
                    <div class="box-content">
                        <div class="meta-post st-1">
                            
                        </div>
                        <h6 class="title-article-post"><a href="https://zuov.gov.rs/">Завод за унапређивање образовања и васпитања</a></h6>
                        <div class="btn-rm">
                            <a href="https://zuov.gov.rs/" class="fl-btn st-4">
                                <span class="inner">Детаљније</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                <div class="box-artice fl-scale st-2 wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
                    <div class="box-feature inner-scale"><a href="https://ceo.edu.rs/"><img src="assets/images/post/Завод За Вредновање Квалитета Образовања И Васпитања.jpg" alt="Image"></a></div>
                    <div class="box-content">
                        <div class="meta-post st-1">
                            
                        </div>
                        <h6 class="title-article-post"><a href="https://ceo.edu.rs/">Завод за вредновање квалитета образовања и васпитања</a></h6>
                        <div class="btn-rm">
                            <a href="https://ceo.edu.rs/" class="fl-btn st-4">
                                <span class="inner">Детаљније</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection