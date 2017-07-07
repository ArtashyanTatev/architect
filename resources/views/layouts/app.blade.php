<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

    <head>
        <title>{{config('app.name')}}</title>
        <meta name="description" content=""/>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="{{asset('wp-content/uploads/2011/09/cropped-content1.jpg')}}" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/bootstrap.css')}}"/>

        <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/responsive.css')}}"/>

        <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/camera.css')}}"/>
        <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/style1.css')}}"/>

        <script type="text/javascript">
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/",
                "svgExt": ".svg",
                "source": {"concatemoji": "http:\/\/diversereads.com\/wp-includes\/js\/wp-emoji-release.min.js"}
            };
            !function (a, b, c) {
                function d(a) {
                    var b, c, d, e, f = String.fromCharCode;
                    if (!k || !k.fillText)return !1;
                    switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) {
                        case"flag":
                            return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 56826, 8203, 55356, 56819), 0, 0), c = j.toDataURL(), b === c && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447), 0, 0), c = j.toDataURL(), b !== c);
                        case"emoji4":
                            return k.fillText(f(55358, 56794, 8205, 9794, 65039), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55358, 56794, 8203, 9794, 65039), 0, 0), e = j.toDataURL(), d !== e
                    }
                    return !1
                }

                function e(a) {
                    var c = b.createElement("script");
                    c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
                }

                var f, g, h, i, j = b.createElement("canvas"), k = j.getContext && j.getContext("2d");
                for (i = Array("flag", "emoji4"), c.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, h = 0; h < i.length; h++)c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
                c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                    c.DOMReady = !0
                }, c.supports.everything || (g = function () {
                    c.readyCallback()
                }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
                    "complete" === b.readyState && c.readyCallback()
                })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
            }(window, document, window._wpemojiSettings);
        </script>
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel='stylesheet' href='{{asset('css/flexslider3601.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/owl.carousel8a28.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/owl.theme8a28.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/font-awesomedeae.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/cherry-plugin03b4.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/jquery.dop.Selectef15.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/lazy-load4963.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/parallax8a54.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/stylesef15.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/frontend-style6173.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/style6173.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/main-style.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/magnific-popup81c3.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lustria&amp;subset=latin' type='text/css'
              media='all'/>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lobster&amp;subset=latin' type='text/css'
              media='all'/>
        <link rel='stylesheet' href='{{asset('css/theme694e.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/bootstrap-grid.min694e.css')}}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{asset('css/font-awesome.minb2f9.css')}}' type='text/css' media='all'/>

        <link rel="stylesheet" type="text/css" media="all" href="{{asset('css/slick.css')}}"/>


        <script type='text/javascript' src='{{asset('js/jquery-1.7.2.minba3a.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/jquery.easing.1.34e44.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/jquery.elastislide03b4.js')}}'></script>
        <script type='text/javascript'
                src='http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;ver=4.8'></script>
        <script type='text/javascript' src='{{asset('js/dop-prototypesef15.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/jquery-migrate-1.2.1.min1576.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/swfobjecteb77.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/modernizr1717.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/jflickrfeed5152.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/custom5152.js')}}'></script>
        <script type='text/javascript' src='{{asset('js/bootstrap.mina1ec.js')}}'></script>

        <script type='text/javascript' src='{{asset('js/comment.js')}}'></script>



        <style type="text/css">
            .mbt-book .mbt-book-buybuttons .mbt-book-buybutton img {
                width: 201px;
                height: 35px;
            }

            .mbt-book .mbt-book-buybuttons .mbt-book-buybutton {
                padding: 5px 10px 0px 0px;
            }

            .mbt-book-archive .mbt-book .mbt-book-buybuttons .mbt-book-buybutton img {
                width: 201px;
                height: 35px;
            }

            .mbt-book-archive .mbt-book .mbt-book-buybuttons .mbt-book-buybutton {
                padding: 5px 10px 0px 0px;
            }

            .mbt-featured-book-widget .mbt-book-buybuttons .mbt-book-buybutton img {
                width: 201px;
                height: 35px;
            }

            .mbt-featured-book-widget .mbt-book-buybuttons .mbt-book-buybutton {
                padding: 5px 10px 0px 0px;
            }</style>

        <style type='text/css'>
            body {
                {{--background-image: url({{asset('img/slider/NO-BOUNDARIES-WEBSITE-BANNER.jpg')}});--}}
                background-repeat: no-repeat;
                background-position: top left;
                background-attachment: fixed;
            }

            body {
                background-color: #1a1a1a
            }

        </style>
        <style type='text/css'>
            h1 {
                font: normal 30px/35px Lustria;
                color: #FFFFFF;
            }

            h2 {
                font: normal 45px/60px Lustria;
                color: #FFFFFF;
            }

            h3 {
                font: normal 45px/60px Lustria;
                color: #FFFFFF;
            }

            h4 {
                font: normal 14px/20px Lustria;
                color: #FFFFFF;
            }

            h5 {
                font: normal 24px/35px Lustria;
                color: #FFFFFF;
            }

            h6 {
                font: normal 12px/18px Lustria;
                color: #FFFFFF;
            }

            body {
                font-weight: normal;
            }

            .logo_h__txt, .logo_link {
                font: normal 60px/60px Lobster;
                color: #ffffff;
            }

            .sf-menu > li > a {
                font: normal 26px/26px Lustria;
                color: #e4e0ce;
            }

            .nav.footer-nav a {
                font: normal 18px/18px Lustria;
                color: #d7cfbf;
            }
        </style>
        <link rel="icon" href="{{asset('wp-content/uploads/2011/09/cropped-content1-32x32.jpg')}}" sizes="32x32"/>
        <link rel="icon" href="{{asset('wp-content/uploads/2011/09/cropped-content1-192x192.jpg')}}" sizes="192x192"/>
        <link rel="apple-touch-icon-precomposed" href="{{asset('wp-content/uploads/2011/09/cropped-content1-180x180.jpg')}}"/>
        <!--[if lt IE 9]>
        <div id="ie7-alert" style="width: 100%; text-align:center;">
            <img src="http://tmbhtest.com/images/ie7.jpg" alt="Upgrade IE 8" width="640" height="344" border="0"
                 usemap="#Map"/>
            <map name="Map" id="Map">
                <area shape="rect" coords="496,201,604,329"
                      href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank"
                      alt="Download Interent Explorer"/>
                <area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank"
                      alt="Download Apple Safari"/>
                <area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank"
                      alt="Download Opera"/>
                <area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank"
                      alt="Download Firefox"/>
                <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank"
                      alt="Download Google Chrome"/>
            </map>
        </div>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="{{asset('js/jquery.mobile.customized.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(function () {
                jQuery('.sf-menu').mobileMenu({defaultText: "Navigate to..."});
            });
        </script>
        <!--<![endif]-->
        <script type="text/javascript">
            // Init navigation menu
            jQuery(function () {
                // main navigation init
                jQuery('ul.sf-menu').superfish({
                    delay: 1000, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
                    animation: {
                        opacity: "show",
                        height: "show"
                    }, // used to animate the sub-menu open
                    speed: "normal", // animation speed
                    autoArrows: true, // generation of arrow mark-up (for submenu)
                    disableHI: true // to disable hoverIntent detection
                });

                //Zoom fix
                //IPad/IPhone
                var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
                        ua = navigator.userAgent,
                        gestureStart = function () {
                            viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
                        },
                        scaleFix = function () {
                            if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                                viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                                document.addEventListener("gesturestart", gestureStart, false);
                            }
                        };
                scaleFix();
            })
        </script>
        <!-- stick up menu -->
        <script type="text/javascript">
            jQuery(document).ready(function () {
                if (!device.mobile() && !device.tablet()) {
                    jQuery('.nav-wrapper').tmStickUp({
                        correctionSelector: jQuery('#wpadminbar')
                        , listenSelector: jQuery('.listenSelector')
                        , active: true, pseudo: true
                    });
                }
            })
        </script>
    </head>

</head>
<body class="home page-template page-template-page-home page-template-page-home-php page page-id-203 olrk-live-chat">
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header"></div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">

                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div id="motopress-main" class="main-holder">
        <img style= "position: absolute;" src="{{asset('img/slider/'.$bodyImage)}}" style="width:100%"/>
      @section('header')
        @include('layouts.header')
        @show
        @yield('content')
        @section('footer')
            @include('layouts.footer')
        @show
    </div>

    <div id="back-top-wrapper" class="visible-desktop">
        <p id="back-top">
            <a href="#top"><span></span></a></p>
    </div>

</div>

<!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}

<script type='text/javascript' src='{{ asset('js/comment-reply.minef15.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.flexslider-min605a.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/cherry-plugin03b4.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/core.mine899.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/datepicker.mine899.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/widget.mine899.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/mouse.mine899.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/slider.mine899.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.dop.Selectef15.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.dop.frontend.BSPCalendaref15.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/frontendef15.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/frontend-depositef15.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/frontend-discountsef15.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/frontend-feesef15.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/frontend-rulesef15.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/cherry.lazy-load4963.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/device.min8a54.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.mousewheel.min7c45.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.simplr.smoothscroll.min5152.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/cherry.parallax8a54.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/scriptsef15.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/superfishe225.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.mobilemenu5152.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.magnific-popup.min81c3.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jplayer.playlist.mina1ec.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.jplayer.mind315.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/tmstickup8a54.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/device.min8a541.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.zaccordion.min3c94.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/camera.minc412.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.debouncedresize5152.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.ba-resize.min4963.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/jquery.isotopedc81.js') }}'></script>
<script type='text/javascript' src='{{ asset('js/wp-embed.minef15.js') }}'></script>
<script type='text/javascript' src='{{asset('js/slick.js')}}'></script>
<script type='text/javascript' src='{{asset('js/slider.js')}}'></script>
</body>
</html>
