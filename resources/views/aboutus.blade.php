@extends('layouts.app')

@section('content')
    <div id="motopress-main" class="main-holder">

        <div class="motopress-wrapper content-holder clearfix">
            <div class="container">
                <div class="row">
                    <div class="span12" data-motopress-wrapper-file="page-fullwidth.php"
                         data-motopress-wrapper-type="content">
                        <div class="row">
                            <div class="span12" data-motopress-type="static"
                                 data-motopress-static-file="static/static-title.php">
                                <section class="title-section">
                                    <h1 class="title-header">
                                        @lang('message.about_us')
                                    </h1>
                                    <!-- BEGIN BREADCRUMBS-->
                                    <ul class="breadcrumb breadcrumb__t">
                                        <li>
                                            <a href="{{route('home')}}">
                                                @lang('message.home')
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="active">
                                            @lang('message.about_us')
                                        </li>
                                    </ul>            <!-- END BREADCRUMBS -->
                                </section><!-- .title-section -->
                            </div>
                        </div>
                        <div id="content" class="row">
                            <div class="span12" data-motopress-type="loop"
                                 data-motopress-loop-file="loop/loop-page.php">
                                <div id="post-1797" class="page post-1797 type-page status-publish hentry">
                                    <section class="parallax-box image-parallax-box ">
                                        <div class="parallax-content">
                                            <div class="row ">

                                                <div class="span6 offset6">
                                                    <div class="content_box content_box__style-1 content_box__align-right ">


                                                        @if($about_us->title_hy || $about_us->title_ru || $about_us->title_en)
                                                            <div class="title-box clearfix title-box__style-1">
                                                                <h2 class="title-box_primary" style="font-size:{{$about_us->fs}}px;">

                                                                    @if (session('locale') == 'hy')
                                                                        {{$about_us->title_hy}}
                                                                    @elseif(session('locale') == 'ru')
                                                                        {{$about_us->title_ru}}
                                                                    @else
                                                                        {{$about_us->title_en}}
                                                                    @endif

                                                                </h2>
                                                            </div><!-- //.title-box -->
                                                        @endif

                                                        <h5>
                                                            @if (session('locale') == 'hy')
                                                                {{$about_us->header_hy}}
                                                            @elseif(session('locale') == 'ru')
                                                                {{$about_us->header_ru}}
                                                            @else
                                                                {{$about_us->header_en}}
                                                            @endif

                                                        </h5>
                                                        <p>
                                                            @if (session('locale') == 'hy')
                                                                {{$about_us->decsription_hy}}
                                                            @elseif(session('locale') == 'ru')
                                                                {{$about_us->decsription_ru}}
                                                            @else
                                                                {{$about_us->decsription_en}}
                                                            @endif

                                                        </p>
                                                        <div class="list styled circle-arrow-list">
                                                            <ul>
                                                                <li>

                                                                        @if (session('locale') == 'hy')
                                                                            {{$about_us->l1_hy}}
                                                                        @elseif(session('locale') == 'ru')
                                                                            {{$about_us->l1_ru}}
                                                                        @else
                                                                            {{$about_us->l1_en}}
                                                                        @endif

                                                                </li>
                                                                <li>

                                                                        @if (session('locale') == 'hy')
                                                                            {{$about_us->l2_hy}}
                                                                        @elseif(session('locale') == 'ru')
                                                                            {{$about_us->l2_ru}}
                                                                        @else
                                                                            {{$about_us->l2_en}}
                                                                        @endif

                                                                </li>
                                                                <li>

                                                                        @if (session('locale') == 'hy')
                                                                            {{$about_us->l3_hy}}
                                                                        @elseif(session('locale') == 'ru')
                                                                            {{$about_us->l3_ru}}
                                                                        @else
                                                                            {{$about_us->l3_en}}
                                                                        @endif

                                                                </li>
                                                                <li>

                                                                        @if (session('locale') == 'hy')
                                                                            {{$about_us->l4_hy}}
                                                                        @elseif(session('locale') == 'ru')
                                                                            {{$about_us->l4_ru}}
                                                                        @else
                                                                            {{$about_us->l4_en}}
                                                                        @endif

                                                                </li>
                                                                <li>

                                                                        @if (session('locale') == 'hy')
                                                                            {{$about_us->l5_hy}}
                                                                        @elseif(session('locale') == 'ru')
                                                                            {{$about_us->l5_ru}}
                                                                        @else
                                                                            {{$about_us->l5_en}}
                                                                        @endif

                                                                </li>
                                                                <li>

                                                                        @if (session('locale') == 'hy')
                                                                            {{$about_us->l6_hy}}
                                                                        @elseif(session('locale') == 'ru')
                                                                            {{$about_us->l6_ru}}
                                                                        @else
                                                                            {{$about_us->l6_en}}
                                                                        @endif

                                                                </li>
                                                                <li>

                                                                        @if (session('locale') == 'hy')
                                                                            {{$about_us->l7_hy}}
                                                                        @elseif(session('locale') == 'ru')
                                                                            {{$about_us->l7_ru}}
                                                                        @else
                                                                            {{$about_us->l7_en}}
                                                                        @endif

                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div><!-- .content_box (end) --></div>
                                            </div><!-- .row (end) -->
                                            <div class="clear"></div>
                                        </div>
                                        <div class="parallax-bg" data-parallax-type="image"
                                             data-img-url="{{asset('img/'.$about_us->image)}}" data-speed="1.5"
                                             data-invert="false" data-fullwidth="true"></div>
                                    </section>
                                    <section
                                            class="parallax-box image-parallax-box parallax-box__style-1 parallax-box__bottom-indent">
                                        <div class="parallax-content">

                                            @if($our_mission->title_hy || $our_mission->title_ru || $our_mission->title_en )
                                                <div class="title-box clearfix title-box__style-1">
                                                    <h2 class="title-box_primary" style="font-size:{{$our_mission->fs}}px;">
                                                        @if (session('locale') == 'hy')
                                                            {{$our_mission->title_hy}}
                                                        @elseif(session('locale') == 'ru')
                                                            {{$our_mission->title_ru}}
                                                        @else
                                                            {{$our_mission->title_en}}
                                                        @endif
                                                    </h2>
                                                </div><!-- //.title-box -->
                                            @endif

                                            @foreach($mission_list->chunk(2) as $chunk)
                                                <div class="row ">

                                                    @foreach($chunk as $list)
                                                        <div class="span6 ">
                                                            <span class="dropcap">0{{$list->id}}.</span>
                                                            <!-- .dropcap (end) -->
                                                            <h5>

                                                                @if (session('locale') == 'hy')
                                                                    {{$list->title_hy}}
                                                                @elseif(session('locale') == 'ru')
                                                                    {{$list->title_ru}}
                                                                @else
                                                                    {{$list->title_en}}
                                                                @endif

                                                            </h5>
                                                            <p>
                                                                @if (session('locale') == 'hy')
                                                                    {{$list->description_hy}}
                                                                @elseif(session('locale') == 'ru')
                                                                    {{$list->description_ru}}
                                                                @else
                                                                    {{$list->description_en}}
                                                                @endif
                                                            </p>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            @endforeach


                                            <div class="clear">

                                            </div>
                                        </div>

                                        <div class="parallax-bg" data-parallax-type="image"
                                             data-img-url="{{asset('img/'.$our_mission->image)}}"
                                             data-speed="1.5" data-invert="false" data-fullwidth="true"></div>
                                    </section>

                                    @if($upcoming_works->title_hy || $upcoming_works->title_ru || $upcoming_works->title_en)
                                        <div class="title-box clearfix title-box__style-1">
                                            <h2 class="title-box_primary" style="font-size:{{$upcoming_works->fs}}px;">

                                                @if (session('locale') == 'hy')
                                                    {{$upcoming_works->title_hy}}
                                                @elseif(session('locale') == 'ru')
                                                    {{$upcoming_works->title_ru}}
                                                @else
                                                    {{$upcoming_works->title_en}}
                                                @endif

                                            </h2>
                                        </div><!-- //.title-box -->
                                    @endif


                                    <section class="parallax-box image-parallax-box parallax-box__negative-indent">
                                        <div class="parallax-content">
                                            <div class="row ">
                                                <div class="span6 ">
                                                    <div class="content_box content_box__style-1 content_box__align-left content_box__negative-indent ">

                                                        @if($newest_release->title_hy || $newest_release->title_en || $newest_release->title_ru)
                                                            <div class="title-box clearfix title-box__style-1">
                                                                <h2 class="title-box_primary" style="font-size:{{$newest_release->fs}}px;">

                                                                    @if (session('locale') == 'hy')
                                                                        {{$newest_release->title_hy}}
                                                                    @elseif(session('locale') == 'ru')
                                                                        {{$newest_release->title_ru}}
                                                                    @else
                                                                        {{$newest_release->title_en}}
                                                                    @endif

                                                                </h2>
                                                            </div><!-- //.title-box -->
                                                        @endif

                                                        <h5>

                                                            @if (session('locale') == 'hy')
                                                                {{$newest_release->header_hy}}
                                                            @elseif(session('locale') == 'ru')
                                                                {{$newest_release->header_ru}}
                                                            @else
                                                                {{$newest_release->header_en}}
                                                            @endif


                                                        </h5>
                                                        <p>
                                                            @if (session('locale') == 'hy')
                                                                {{$newest_release->description_hy}}
                                                            @elseif(session('locale') == 'ru')
                                                                {{$newest_release->description_ru}}
                                                            @else
                                                                {{$newest_release->description_en}}
                                                            @endif
                                                        </p>
                                                            <a href="{{route('_news')}}" title="more"
                                                               class="btn btn-primary btn-large btn-inline "
                                                               target="_self">
                                                                @lang('message.more')
                                                            </a><!-- .btn -->
                                                        <div class="clear"></div>
                                                    </div><!-- .content_box (end) --></div>
                                            </div><!-- .row (end) -->
                                            <div class="clear"></div>
                                        </div>
                                        <div class="parallax-bg" data-parallax-type="image"
                                             data-img-url="{{asset('img/'.$newest_release->image)}}" data-speed="1.5"
                                             data-invert="false" data-fullwidth="true">

                                        </div>
                                    </section>
                                    <div class="clear"></div>
                                    <!--.pagination-->
                                </div><!--post-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--End #motopress-main-->
    </div>
    <div id="back-top-wrapper" class="visible-desktop">
        <p id="back-top">
            <a href="#top"><span></span></a></p>
    </div>

@endsection
{{--</body>--}}