@extends('admin.layouts.app')

@section('content')
    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="page-testi.php"
                     data-motopress-wrapper-type="content">
                    <div class="row">
                        <div class="span12" data-motopress-type="static"
                             data-motopress-static-file="static/static-title.php">
                            <section class="title-section">
                                <h1 class="title-header">
                                    NEWS
                                </h1>
                                <!-- BEGIN BREADCRUMBS-->
                                <ul class="breadcrumb breadcrumb__t">
                                    <li><a href="{{route('admin')}}">Home</a></li>
                                    <li class="divider"></li>
                                    <li class="active">News</li>
                                    <li class="divider"></li>
                                    <li class="active">
                                        {{$news->header_en}}
                                    </li>
                                </ul>
                            </section><!-- .title-section -->
                        </div>
                    </div>
                    <div class="row">

                        <div class="span12 right" id="content" style="padding: 40px 0px;">

                            <div class="span12" data-motopress-wrapper-file="single-portfolio.php"
                                 data-motopress-wrapper-type="content">

                                <div class="row">

                                    <h1>
                                        {{$news->header_en}}
                                    </h1>

                                    <figure class="span6 featured-thumbnail thumbnail hidden-phone">
                                        <img src="{{asset('img/'.$news->image)}}" width="100%"/>
                                    </figure>

                                    <div style="padding-bottom: 30px;">
                                        {{$news->text_en}}
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection