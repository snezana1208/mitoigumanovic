<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">

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
                                        <img  src="/assets/images/logo/logo1.jpg" alt="Logo">
                                    </a>
                                </div>
                                <div class="btn-menu"><span></span></div>
                                <div class="nav-wrap">
                                    <nav id="mainnav" class="mainnav">
                                        <ul class="menu">
                                            <li class="menu-item {{ request()->is('/') ? 'current-menu-item' : '' }}">
                                                <a href="/">Почетна</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">О школи</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/istorijat">Историјат</a></li>
                                                    <li><a href="/zaposleni">Запослени</a></li> 
                                                    <li><a href="/savet_roditelja">Савет родитеља</a></li>           
                                                    <li><a href="/biblioteka">Библиотека</a></li> 
                                                    {{-- <li><a href="/letopis">Летопис</a></li>  --}}
                                                    <li><a href="/galerija">Галерија</a></li>  
                                                </ul>
                                            </li>
                                            <li class="menu-item {{ request()->is('/vesti') ? 'current-menu-item' : '' }}" >
                                                <a href="/vesti">Вести</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a>Организација рада</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/kalendar">Школски календар</a></li>
                                                    <li><a href="/zvono">Звоно</a></li> 
                                                    <li class="inner-menu-item current-item"><a href="/raspored">Распореди</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="/rasporedimr">Распореди за млађе разреде</a></li>
                                                            <li><a href="/rasporedisr">Распоред за старије разреде</a></li>
                                                        </ul>
                                                    </li>  
                                                    <li><a href="/jednosmenski">Једносменски обогаћени рад</a></li>         
                                                    <li><a href="/vannastavne_aktivnosti">Ваннаставне активности</a></li> 
                                                    <li><a href="/produzeni_boravak">Продужени боравак</a></li>  
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children {{ request()->is('students') ? 'current-menu-item' : '' }}">
                                                <a href="#">За Ђаке</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/djacki_parlament">Ђачки парламент</a></li>
                                                    <li><a href="/zavrsni_ispit">Завршни испит</a></li>
                                                    <li><a href="/upis_u_srednje_skole">Упис у средње школе</a></li>
                                                    <li><a href="/takmicenja">Такмичења</a></li>
                                                    <li><a href="/ucenici_generacije">Ученици генерације</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children {{ request()->is('parents') ? 'current-menu-item' : '' }}">
                                                <a href="#">За родитеље</a>
                                                <ul class="sub-menu">
                                                    <li class="inner-menu-item current-item"><a href="/otvorena_vrata">Отворена врата</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="/termini">Термини индивидуалних разговора</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="inner-menu-item current-item"><a href="/rasporedi">Распореди</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="/rasporedikosj">Распореди писаних провера за Косјерић</a></li>
                                                            <li><a href="/rasporedisc">Распоред писаних провера за Сечу реку</a></li>
                                                        </ul></li>
                                                    <li><a href="/spisak_udzbenika">Списак уџбеника</a></li>
                                                    <li><a href="/upis_prvaka">Упис првака</a></li>
                                                    <li><a href="/upis_u_srednje_skole">Упис у средње школе</a></li>
                                                    <li><a href="/psiholog_savetuje">Психолог саветује</a></li>
                                                    <li><a href="/pedagog_savetuje">Педагог саветује</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children {{ request()->is('about') ? 'current-menu-item' : '' }}">
                                                <a href="#">Документа</a>
                                                <ul class="sub-menu">
                                                    <li><a href="/javne_nabavke">Јавне набавке</a></li>
                                                    <li><a href="/skolska_dokumenta">Школска документа</a></li>
                                                    <li><a href="/zanastavnike">За наставнике</a></li>
                                                    <li><a href="/skolski_timovi">Школски тимови</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item {{ request()->is('about') ? 'current-menu-item' : '' }}">
                                                <a href="/letopis">Летопис</a>
                                            </li>
                                            <li class="menu-item {{ request()->is('about') ? 'current-menu-item' : '' }}">
                                                <a href="/kontakt">Контакт</a>
                                            </li>
                                        </ul>
                                        <!-- /.menu -->
                                    </nav>
                                </div>
                                <div class="header-right fx">
                                    
                                    <div class="header-contact fx">

                                       
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
                <div class="footer-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="widget-footer">
                                    <div class="widget widget-logo">
                                        <div class="logo-bottom" id="logo-footer">
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

    

    @yield('script')

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