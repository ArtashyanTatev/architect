@extends('admin.layouts.app')

@section('content')

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
                                    About Us
                                </h1>
                                <!-- BEGIN BREADCRUMBS-->
                                <ul class="breadcrumb breadcrumb__t">
                                    <li>
                                        <a href="{{route('admin')}}">Home</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="active">About Us</li>
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
                                        <a style="color:white;position:absolute;right:0;top:50%;z-index:333"
                                           class="pull-right update_section" href="0"
                                           data-toggle="modal" data-target="#modalUpdate"
                                           data-update_href="{{route('aboutus_1')}}">
                                            <i class="fa fa-pencil " style="font-size: 30px; color:#4d2117"
                                               aria-hidden="true"></i>
                                        </a>
                                        <div class="row ">
                                            <div class="span6 offset6">
                                                <div class="content_box content_box__style-1 content_box__align-right ">
                                                    @if($about_us->title_en)
                                                        <div class="title-box clearfix title-box__style-1">
                                                            <h2 class="title-box_primary" style="font-size:{{$about_us->fs}}px;">
                                                                {{$about_us->title_en}}
                                                            </h2>
                                                        </div>
                                                    @endif

                                                    <h5>
                                                        {{$about_us->header_en}}
                                                    </h5>
                                                    <p>
                                                        {{$about_us->decsription_en}}
                                                    </p>
                                                    <div class="list styled circle-arrow-list">
                                                        <ul>
                                                            <li>{{$about_us->l1_en}}</li>
                                                            <li>{{$about_us->l2_en}}</li>
                                                            <li>{{$about_us->l3_en}}</li>
                                                            <li>{{$about_us->l4_en}}</li>
                                                            <li>{{$about_us->l5_en}}</li>
                                                            <li>{{$about_us->l6_en}}</li>
                                                            <li>{{$about_us->l7_en}}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="clear">
                                                    </div>
                                                </div><!-- .content_box (end) -->
                                            </div>
                                        </div><!-- .row (end) -->
                                        {{--first img--}}
                                        <div class="clear"></div>
                                    </div>
                                    <div class="parallax-bg" data-parallax-type="image"
                                         data-img-url="{{asset('img/'.$about_us->image)}}" data-speed="1.5"
                                         data-invert="false" data-fullwidth="true"></div>
                                </section>
                                <section
                                        class="parallax-box image-parallax-box parallax-box__style-1 parallax-box__bottom-indent">
                                    <div class="parallax-content">
                                        <div class="title-box clearfix title-box__style-1">
                                            <h2 class="title-box_primary" style="font-size:{{$our_mission->fs}}px;">
                                                <a style="color:white;margin-left:25px;"
                                                   class="pull-right update_section" href="0"
                                                   data-toggle="modal" data-target="#modalUpdate"
                                                   data-update_href="{{route('ourmission_update')}}">
                                                    <i class="fa fa-pencil " style="font-size: 30px;color:#4d2117"
                                                       aria-hidden="true"></i>
                                                </a>
                                                {{$our_mission->title_en}}
                                            </h2>
                                        </div><!-- //.title-box -->
                                        @foreach($aboutus->chunk(2) as $chunk)
                                            <div class="row ">

                                                @foreach($chunk as $a)
                                                    <div class="span6 "><span class="dropcap">0{{$a->id}}.</span>
                                                        <!-- .dropcap (end) -->
                                                        <h5> {{$a->title_en}}
                                                            <a style="color:white" class="pull-right update_section"
                                                               href="0"
                                                               data-toggle="modal" data-target="#modalUpdate"
                                                               data-id="{{$a->id}}"
                                                               data-update_href="{{route('missionlist_update')}}">

                                                                <i class="fa fa-pencil "
                                                                   style="font-size: 30px; color:#4d2117"
                                                                   aria-hidden="true"></i>
                                                            </a>
                                                        </h5>
                                                        <p>
                                                            {{$a->description_en}}
                                                        </p>
                                                    </div>

                                                @endforeach
                                            </div>

                                        @endforeach


                                        <div class="clear"></div>
                                    </div>

                                    <div class="parallax-bg" data-parallax-type="image"
                                         data-img-url="{{asset('img/'.$our_mission->image)}}"
                                         data-speed="1.5" data-invert="false" data-fullwidth="true"></div>
                                </section>
                                <div class="title-box clearfix title-box__style-1">
                                    <h2 class="title-box_primary"  style="font-size:{{$upcoming_works->fs}}px;" >
                                        {{$upcoming_works->title_en}}
                                        <a style="color:white;margin-left:10px" class="pull-right update_section"
                                           href="0"
                                           data-toggle="modal" data-target="#modalUpdate"
                                           data-update_href="{{route('upcoming_title')}}">
                                            <i class="fa fa-pencil " style="font-size: 30px;color:#4d2117"
                                               aria-hidden="true"></i>
                                        </a>
                                    </h2></div><!-- //.title-box -->

                                <section class="parallax-box image-parallax-box parallax-box__negative-indent">
                                    <div class="parallax-content">
                                        <div class="row ">
                                            <a style="color:white;position:absolute;right:0;top:50%;z-index:333"
                                               class="pull-right update_section" href="0"
                                               data-toggle="modal" data-target="#modalUpdate"
                                               data-update_href="{{route('newest_releases')}}">
                                                <i class="fa fa-pencil " style="font-size: 30px;color:#4d2117"
                                                   aria-hidden="true"></i>
                                            </a>
                                            <div class="span6 ">
                                                <div class="content_box content_box__style-1 content_box__align-left content_box__negative-indent ">

                                                    @if($newest_release->title_en)
                                                        <div class="title-box clearfix title-box__style-1">
                                                            <h2 class="title-box_primary" style="font-size:{{$newest_release->fs}}px;">
                                                                {{$newest_release->title_en}}
                                                            </h2>
                                                        </div><!-- //.title-box -->
                                                    @endif

                                                    <h5>
                                                        {{$newest_release->header_en}}
                                                    </h5>
                                                    <p>
                                                        {{$newest_release->description_en}}
                                                    </p>
                                                    <a href="{{route('news')}}" title="more"
                                                       class="btn btn-primary btn-large btn-inline " target="_self">
                                                        More
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

@endsection