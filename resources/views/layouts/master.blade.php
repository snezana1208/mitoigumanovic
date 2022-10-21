<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">       

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="/assets/images/Favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/images/Favicon.png">

</head>
<body class="counter-scroll header-fixed home2">

    <!-- Preloader -->
    {{-- <div id="preload" class="preload">
        <div class="preload-logo"></div>
    </div> --}}

    <div id="wrapper">
        <div id="page" class="clearfix">
            <div class="top-bar">
                <div class="inner jus-ct">
                    <p class="clr-pri-1">Радно време: Понедељак - Петак, 08:00 - 17:00 </p>
                </div>
            </div>
            <header id="site-header" class="header_main header2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="site-header-inner fx"> 
                                <div id="site-logo" class="clearfix">
                                    <a href="/" class="logo">
                                        <img  src="/assets/images/logo/logo1.jpg" alt="Kinco">
                                    </a>
                                </div>
                                <div class="btn-menu"><span></span></div>
                                <div class="nav-wrap">
                                    <nav id="mainnav" class="mainnav">
                                        <ul class="menu">
                                            <li class="menu-item {{ request()->is('/') ? 'current-menu-item' : '' }}">
                                                <a href="/">Почетна</a>
                                            </li>
                                            {{-- <li class="menu-item {{ request()->is('about') ? 'current-menu-item' : '' }}" >
                                                <a href="/about">О школи</a>
                                            </li> --}}
                                            <li class="menu-item-has-children">
                                                <a href="/about">О школи</a>
                                                <ul class="sub-menu">
                                                    {{-- <li class="inner-menu-item"><a href="#">Историјат</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="teacher.html">Teacher</a></li>
                                                            <li><a href="teacher-details.html">Teachers Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="inner-menu-item"><a href="#">Classes</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="classes.html">Classes</a></li>
                                                            <li><a href="classe-details.html">Classes Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="inner-menu-item"><a href="#">Events</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="events.html">Event</a></li>
                                                            <li><a href="event2.html">Event 2</a></li>
                                                            <li><a href="event-details.html">Events Details</a></li>
                                                        </ul>
                                                    </li> --}}
                                                    <li><a href="/istorijat">Историјат</a></li>
                                                    <li><a href="/zaposleni">Запослени</a></li> 
                                                    <li><a href="/savet_roditelja">Савет родитеља</a></li>           
                                                    <li><a href="/biblioteka">Библиотека</a></li> 
                                                    {{-- <li><a href="/letopis">Летопис</a></li>  --}}
                                                    <li><a href="/galerija">Галерија</a></li>  
                                                </ul>
                                            </li>
                                            <li class="menu-item {{ request()->is('about') ? 'current-menu-item' : '' }}" >
                                                <a href="/vesti">Вести</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a>Организација рада</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/kalendar">Школски календар</a></li>
                                                    <li><a href="/zvono">Звоно</a></li> 
                                                    <li><a href="/raspored">Распореди</a></li>  
                                                    <li><a href="/jednosmeni_obogaceni_boravak">Jедносменски обогаћени рад</a></li>         
                                                    <li><a href="/vannastavne_aktivnosti">Ваннаставне активности</a></li> 
                                                    <li><a href="/produzeni_boravak">Продужени боравак</a></li>  
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children {{ request()->is('students') ? 'current-menu-item' : '' }}">
                                                <a href="/students">За Ђаке</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/djacki_parlament">Ђачки парламент</a></li>
                                                    <li><a href="/zavrsni_ispit">Завршни испит</a></li>
                                                    <li><a href="/upis_u_srednje_skole">Упис у средње школе</a></li>
                                                    <li><a href="/takmicenja">Такмичења</a></li>
                                                    <li><a href="/ucenici_generacije">Ученици генерације</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children {{ request()->is('parents') ? 'current-menu-item' : '' }}">
                                                <a href="/parents">За родитеље</a>
                                                <ul class="sub-menu">
                                                    <li class="inner-menu-item current-item"><a href="/otvorena_vrata">Отворена врата</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="/termini">Термини индивидуалних разговора</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/rasporedi">Распореди</a></li>
                                                    <li><a href="/spisak_udzbenika">Списак уџбеника</a></li>
                                                    <li><a href="/upis_prvaka">Упис првака</a></li>
                                                    <li><a href="/upis_u_srednje_skole">Упис у средње школе</a></li>
                                                    <li><a href="/psiholog_savetuje">Психолог саветује</a></li>
                                                    <li><a href="/pedagog_savetuje">Педагог саветује</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item {{ request()->is('about') ? 'current-menu-item' : '' }}">
                                                <a href="/dokumenta">Документа</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/javne_nabavke">Јавне набавке</a></li>
                                                    <li><a href="/skolska_dokumenta">Школска документа</a></li>
                                                    <li><a href="/projekti">Пројекти</a></li>
                                                    <li><a href="/skolski_timovi">Школски тимови</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item {{ request()->is('about') ? 'current-menu-item' : '' }}">
                                                <a href="/letopis">Летопис</a>
                                            </li>
                                        </ul>
                                        <!-- /.menu -->
                                    </nav>
                                </div>
                                <div class="header-right fx">
                                    {{-- <div id="header-search">
                                        <a href="#" class="search-box header-search-icon">
                                            <i class="far fa-search"></i>
                                        </a>
                                        <form role="search" method="get" class="header-search-form" action="#">
                                            <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                                            <button type="submit" class="header-search-submit" title="Search"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div> --}}
                                    <div class="header-contact fx">

                                        {{-- <div class="inner-contact fx">
                                            <svg data-name="Hero Area" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="47" viewBox="0 0 49 47">
                                                <g data-name="Menu Area">
                                                <g>
                                                    <image width="49" height="47" xlink:href="data:img/png;base64,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"/>
                                                </g>
                                                </g>
                                            </svg>
                                            {{-- <ul id="about-id">
                                                <li class="clr-pri-2">Број телефона</li>
                                                <li class="clr-pri-2">031/ 781 - 442</li>
                                            </ul> --}}
                                        {{-- </div> --}}
                                    </div>
                                    
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

            </header>     
            <main class="">
                @yield('content')
            </main> 

            <footer id="footer">
                {{-- <section class="tf-subcribe">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="subcribe-wp">
                                    <h2 class="title">Subscribe Our Newsletter</h2>
                                    <p class="sub f-mulish">Beet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="subcribe-form fx" id="subscribe-form">
                                    <form action="#">
                                        <input type="email" id="subscribe-email" placeholder="Email Address">
                                        <button class="fl-btn st-7" id="subscribe-button"><span class="inner">Subscribe</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <div class="footer-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="widget-footer">
                                    <div class="widget widget-logo">
                                        <div class="logo-bottom" id="logo-footer">
                                            {{-- <a href="index.html"><img src="assets/images/logo/logo1.jpg" alt="kinco"></a> --}}
                                        </div>
                                        <p class="wrap f-mulish">За додатне информације посетите</p>
                                        <div class="list-contact">
                                            <ul>
                                                <li class="fx"><span><i class="far fa-map-marker-alt"></i> Светосавска 2
                                                    31260 Косјерић</span></li>
                                                <li class="fx"><a href="mailto:hotline@gmail.com"><i class="far fa-envelope"></i> direktor@migumanovic.edu.rs</a></li>
                                                <li class="fx"><a href="tel:012345678"><i class="fal fa-phone"></i> 031/ 781 - 442</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- <div class="widget widget-business">
                                       <div class="inner">
                                            <div class="op-time">
                                                <h4 class="title-widget">Радно време</h4>
                                                <ul>
                                                    <li><span class="f-mulish">Понедељак - Петак</span></li>
                                                    <li><span class="f-mulish">08 - 17</span></li>
                                                </ul>
                                            </div>
                                            <div class="cls-time">
                                                <p>Every Satarday and Govt Holiday</p>
                                                <h4 class="title-widget">closed</h4>
                                            </div>
                                       </div>
                                    </div> --}}
                                    <div class="widget widget-link">
                                        <h4 class="title-widget">Контакт адресе</h4>
                                        <ul class="list-link">
                                            <p><span class="f-mulish">Директор школе direktor@migumanovic.edu.rs</a></p>
                                            <p><span class="f-mulish">Помоћник директора pomocnik@migumanovic.edu.rs</a></p>
                                            <p><span class="f-mulish">Секретар sekretar@migumanovic.edu.rs</a></p>
                                            <p><span class="f-mulish">Педагог mgligorijevic@migumanovic.edu.rs</a></p>
                                            <p><span class="f-mulish">Психолог jovana.radovic@migumanovic.edu.rs</a></p>
                                            <p><span class="f-mulish">Логопед logopedmito@gmail.com</a></p>
                                            <p><span class="f-mulish">Библиотека biblioteka@migumanovic.edu.rs</a></p>
                                            {{-- <li class="fx"><a href="program.html" class="wd-ctm f-mulish">Social Science</a></li> --}}
                                        </ul>
                                    </div>
                                    <div class="widget widget-link">
                                        <h4 class="title-widget">Важни телефонски бројеви</h4>
                                        <ul class="list-link">
                                            <p><span class="f-mulish">Дом здравља 031/ 781 - 253</a></p>
                                            <p><span class="f-mulish">Полицијска станица 192; 031/ 781 - 523</a></li>
                                            <p><span class="f-mulish">Ватрогасна станица 193; 031/ 781 - 223</a></li>
                                            <p><span class="f-mulish">Хитна служба 194; 031/ 781 - 224</a></li>
                                            <p><span class="f-mulish">Центар за социјални рад 031/ 782 - 541</a></li>
                                            {{-- <li class="fx"><a href="program.html" class="wd-ctm f-mulish">Продужени боравак</a></li> --}}
                                            {{-- <li class="fx"><a href="program.html" class="wd-ctm f-mulish">Social Science</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="footer-bottom jus-ct">
                                    <p class="copy-right">Copyright © 2022, Kinco - Kindergarten HTML Template. Designed by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
    </div>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>

    <!-- Javascript -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/plugin.js"></script>
    <script src="/assets/js/countto.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/owl.carousel2.thumbs.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/shortcodes.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>


</html>