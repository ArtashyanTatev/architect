@extends('layouts.app')

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
                                    @lang('message.news')
                                </h1>
                                <!-- BEGIN BREADCRUMBS-->
                                <ul class="breadcrumb breadcrumb__t">
                                    <li>
                                        <a href="{{route('home')}}">
                                            @lang('message.home')
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{route('_news')}}">
                                            @lang('message.news')
                                        </a>
                                        {{--@lang('message.news')--}}
                                    </li>
                                    <li class="divider"></li>
                                    <li class="active">

                                        @if (session('locale') == 'hy')
                                            {{$news->header_hy}}
                                        @elseif(session('locale') == 'ru')
                                            {{$news->header_ru}}
                                        @else
                                            {{$news->header_en}}
                                        @endif
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
                                        @if (session('locale') == 'hy')
                                            {{$news->header_hy}}
                                        @elseif(session('locale') == 'ru')
                                            {{$news->header_ru}}
                                        @else
                                            {{$news->header_en}}
                                        @endif
                                    </h1>

                                    <figure class="span6 featured-thumbnail thumbnail hidden-phone">
                                        <img src="{{asset('img/'.$news->image)}}" width="100%"/>
                                    </figure>

                                    <div style="padding-bottom: 30px;">

                                        @if (session('locale') == 'hy')
                                            {{$news->text_hy}}
                                        @elseif(session('locale') == 'ru')
                                            {{$news->text_ru}}
                                        @else
                                            {{$news->text_en}}
                                        @endif
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