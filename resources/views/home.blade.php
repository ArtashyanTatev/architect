@extends('layouts.app')

@section('content')

    <!--Begin #motopress-main-->
    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
                    <div class="row">
                        <div class="span12" data-motopress-type="static"
                             data-motopress-static-file="static/static-slider.php">
                            <div id="slider-wrapper" class="slider">
                                <div class="container"></div>
                            </div><!-- .slider -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
                            <div id="post-203" class="page post-203 type-page status-publish hentry">
                                <div class="mp-row-fluid motopress-row">
                                    <div class="mp-span12 motopress-clmn">
                                        <section class="parallax-box image-parallax-box ">
                                            <div class="parallax-content">
                                                <div class="row ">
                                                    <div class="span6 offset6">
                                                        <div class="content_box content_box__style-1 content_box__align-right ">

                                                            @if($section_2->title_en || $section_2->title_ru || $section_2->title_hy)
                                                                <div class="title-box clearfix title-box__style-1">
                                                                    <h2 class="title-box_primary" style="font-size: {{$section_2->fs}}px;">
                                                                        @if (session('locale') == 'hy')
                                                                            {{ $section_2->title_hy}}
                                                                        @elseif(session('locale') == 'ru')
                                                                            {{ $section_2->title_ru}}
                                                                        @else
                                                                            {{ $section_2->title_en}}
                                                                        @endif
                                                                    </h2>
                                                                </div><!-- //.title-box -->
                                                            @endif


                                                            <section
                                                                    class="lazy-load-box  trigger effect-slidefromright"
                                                                    data-delay="0" data-speed="600"
                                                                    style="-webkit-transition: all 600ms ease; -moz-transition: all 600ms ease; -ms-transition: all 600ms ease; -o-transition: all 600ms ease; transition: all 600ms ease;">

                                                                @if($section_2->logo)
                                                                    <img class="wp-image-2122 size-medium"
                                                                         src="{{asset('img/'.$section_2->logo)}}"
                                                                         width="450" height="450"/>

                                                                    @endif

                                                                    <p style="margin-top:30px">

                                                                    @if (session('locale') == 'hy')
                                                                    {{$section_2->description_hy}}
                                                                    @elseif(session('locale') == 'ru')
                                                                    {{ $section_2->description_ru}}
                                                                    @else
                                                                    {{$section_2->description_en}}
                                                                    @endif

                                                                    </p>
                                                            </section>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="parallax-bg" data-parallax-type="image"
                                                 data-img-url="{{asset('img/'.$section_2->image)}}"
                                                 data-speed="1.5" data-invert="false" data-fullwidth="true"></div>
                                        </section>
                                        <section class="parallax-box image-parallax-box parallax-box__style-1">
                                            <div class="parallax-content">

                                                @if($section_3->title_en || $section_3->title_ru || $section_3->title_hy)

                                                    <div class="title-box clearfix title-box__style-1">
                                                        <h2 class="title-box_primary" style="font-size: {{$section_3->fs}}px;">
                                                            @if (session('locale') == 'hy')
                                                                {{$section_3->title_hy}}
                                                            @elseif(session('locale') == 'ru')
                                                                {{$section_3->title_ru}}
                                                            @else
                                                                {{$section_3->title_en}}
                                                            @endif

                                                        </h2>
                                                    </div>
                                                    <!-- //.title-box -->

                                                @endif


                                                <section class="lazy-load-box  trigger effect-zoomin" data-delay="0"
                                                         data-speed="600"
                                                         style="-webkit-transition: all 600ms ease; -moz-transition: all 600ms ease; -ms-transition: all 600ms ease; -o-transition: all 600ms ease; transition: all 600ms ease;">
                                                    <ul class="posts-grid row-fluid unstyled posts-grid__style-1 ul-item-0">

                                                        @foreach($categories as $cat)
                                                            <li class="span3 list-item-1">
                                                                <h5>
                                                                    <a href="{{route('category', ['link' => $cat->link])}}">
                                                                        @if (session('locale') == 'hy')
                                                                            {{$cat->name_hy}}
                                                                        @elseif(session('locale') == 'ru')
                                                                            {{$cat->name_ru}}
                                                                        @else
                                                                            {{$cat->name_en}}
                                                                        @endif

                                                                    </a>
                                                                    <span
                                                                            class="counter">0{{$cat->id}}.</span></h5>
                                                                <figure class="featured-thumbnail thumbnail span12">
                                                                    <img src="{{asset('img/prod/'.$cat->image)}}"/>
                                                                </figure>
                                                                <div class="clear"></div>

                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                    </ul><!-- .posts-grid (end) -->
                                                </section>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="parallax-bg" data-parallax-type="image"
                                                 data-img-url="{{asset('img/Resident-Authors.jpg')}}"
                                                 data-speed="1.5" data-invert="false" data-fullwidth="true"></div>
                                        </section>
                                        <section class="parallax-box image-parallax-box parallax-box__style-2">
                                            <div class="parallax-content">
                                                <div class="row banner-wrapper">
                                                    <section class="lazy-load-box  trigger effect-slidefromleft"
                                                             data-delay="0" data-speed="600"
                                                             style="-webkit-transition: all 600ms ease; -moz-transition: all 600ms ease; -ms-transition: all 600ms ease; -o-transition: all 600ms ease; transition: all 600ms ease;">
                                                        <div class="span6 banner banner-left"><a
                                                                    href="portfolio/portfolio-3/category-1/index.html"
                                                                    title=" Sweet "
                                                                    class="btn btn-link btn-large btn-inline "
                                                                    target="_self"> Sweet </a><!-- .btn -->
                                                            <h2>Book</h2>
                                                            <a href="portfolio/portfolio-3/category-2/index.html"
                                                               title="Graphic"
                                                               class="btn btn-link btn-large btn-inline "
                                                               target="_self">Graphic</a><!-- .btn --></div>
                                                    </section>
                                                    <section class="lazy-load-box  trigger effect-slidefromright"
                                                             data-delay="0" data-speed="600"
                                                             style="-webkit-transition: all 600ms ease; -moz-transition: all 600ms ease; -ms-transition: all 600ms ease; -o-transition: all 600ms ease; transition: all 600ms ease;">
                                                        <div class="span6 banner banner-right"><a
                                                                    href="portfolio/portfolio-3/category-3/index.html"
                                                                    title="Adult"
                                                                    class="btn btn-link btn-large btn-inline "
                                                                    target="_self">Adult</a><!-- .btn -->
                                                            <h2>Ratings</h2>
                                                            <a href="portfolio/index.html" title="Edgy"
                                                               class="btn btn-link btn-large btn-inline "
                                                               target="_self">Edgy</a><!-- .btn --></div>
                                                    </section>
                                                </div><!-- .row (end) -->
                                                <div class="clear"></div>
                                            </div>


                                            <div class="parallax-bg" data-parallax-type="image"
                                                 data-img-url="{{asset('img/prod/1.jpg')}}"
                                                 data-speed="1.5" data-invert="false" data-fullwidth="true"></div>
                                        </section>
                                        @if($section_5->title_en || $section_5->title_ru || $section_5->title_hy)
                                            <div class="title-box clearfix title-box__style-1">
                                                <h2 class="title-box_primary" style="font-size: {{$section_5->fs}}px;">

                                                    @if (session('locale') == 'hy')
                                                        {{$section_5->title_hy}}
                                                    @elseif(session('locale') == 'ru')
                                                        {{$section_5->title_ru}}
                                                    @else
                                                        {{$section_5->title_en}}
                                                    @endif

                                                </h2>
                                            </div>
                                            <!-- //.title-box -->
                                        @endif
                                        <section class="lazy-load-box  trigger effect-zoomin" data-delay="0"
                                                 data-speed="600"
                                                 style="-webkit-transition: all 600ms ease; -moz-transition: all 600ms ease; -ms-transition: all 600ms ease; -o-transition: all 600ms ease; transition: all 600ms ease;">
                                            @foreach($products->chunk(4) as $chunck)
                                                <ul class="posts-grid row-fluid unstyled posts-grid__style-2 ul-item-0">

                                                    <div class="row">
                                                        @foreach($chunck as $prod)
                                                            <li class="span3 list-item-1">
                                                                <a href="{{route('view_product_user',['id'=>$prod->id])}}">

                                                                    <h5>
                                                                        @if (session('locale') == 'hy')
                                                                            {{$prod->title_hy}}
                                                                        @elseif(session('locale') == 'ru')
                                                                            {{$prod->title_ru}}
                                                                        @else
                                                                            {{$prod->title_en}}
                                                                        @endif
                                                                    </h5>

                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </div>

                                                    <div class="row">
                                                        @foreach($chunck as $prod)
                                                            <li class="span3 list-item-1">
                                                                <figure class="featured-thumbnail thumbnail">
                                                                    <a href="{{route('view_product_user',['id'=>$prod->id])}}">
                                                                        <img src="{{asset(
                                                                             $prod->images->sortBy('id')->first()['image'] ?
                                                                               "img/".$prod->images->sortBy('id')->first()['image'] :
                                                                               "img/default.png" )}}"/>
                                                                    </a>
                                                                </figure>
                                                                <div class="clear"></div>
                                                                <p class="excerpt">
                                                                    @if (session('locale') == 'hy')
                                                                        {{--{{$prod->description_hy}}--}}
                                                                        {{str_limit($prod->description_hy, 100)}}
                                                                    @elseif(session('locale') == 'ru')
                                                                        {{--{{$prod->description_ru}}--}}
                                                                        {{str_limit($prod->description_ru, 100)}}
                                                                    @else
                                                                        {{--{{$prod->description_en}}--}}
                                                                        {{str_limit($prod->description_en, 100)}}
                                                                    @endif
                                                                </p>
                                                                <a href="{{route('view_product_user',['id'=>$prod->id])}}"
                                                                   class="btn btn-primary">
                                                                    @lang('message.more')
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </div>

                                                </ul>
                                            @endforeach


                                        </section>
                                        <section class="parallax-box image-parallax-box ">
                                            <div class="parallax-content">
                                                <div class="row ">
                                                    <div class="span6 ">
                                                        <div class="content_box content_box__style-1 content_box__align-left ">

                                                            @if($section_6->title_en || $section_6->title_ru || $section_6->title_hy)

                                                                <div class="title-box clearfix title-box__style-1">
                                                                    <h2 class="title-box_primary" style="font-size: {{$section_6->fs}}px;">
                                                                        @if (session('locale') == 'hy')
                                                                            {{$section_6->title_hy}}
                                                                        @elseif(session('locale') == 'ru')
                                                                            {{$section_6->title_ru}}
                                                                        @else
                                                                            {{$section_6->title_en}}
                                                                        @endif
                                                                    </h2>
                                                                </div>
                                                                <!-- //.title-box -->
                                                            @endif

                                                            <section class="lazy-load-box  trigger effect-slidefromleft"
                                                                     data-delay="0" data-speed="600"
                                                                     style="-webkit-transition: all 600ms ease; -moz-transition: all 600ms ease; -ms-transition: all 600ms ease; -o-transition: all 600ms ease; transition: all 600ms ease;">
                                                                <div class="list styled circle-arrow-list">
                                                                    <ul>
                                                                        <li>

                                                                                @if (session('locale') == 'hy')
                                                                                    {{$section_6->li1_hy}}
                                                                                @elseif(session('locale') == 'ru')
                                                                                    {{$section_6->li1_ru}}
                                                                                @else
                                                                                    {{$section_6->li1_en}}
                                                                                @endif

                                                                        </li>
                                                                        <li>

                                                                                @if (session('locale') == 'hy')
                                                                                    {{$section_6->li2_hy}}
                                                                                @elseif(session('locale') == 'ru')
                                                                                    {{$section_6->li2_ru}}
                                                                                @else
                                                                                    {{$section_6->li2_en}}
                                                                                @endif

                                                                        </li>
                                                                        <li>

                                                                                @if (session('locale') == 'hy')
                                                                                    {{$section_6->li3_hy}}
                                                                                @elseif(session('locale') == 'ru')
                                                                                    {{$section_6->li3_ru}}
                                                                                @else
                                                                                    {{$section_6->li3_en}}
                                                                                @endif

                                                                        </li>
                                                                        <li>

                                                                                @if (session('locale') == 'hy')
                                                                                    {{$section_6->li4_hy}}
                                                                                @elseif(session('locale') == 'ru')
                                                                                    {{$section_6->li4_ru}}
                                                                                @else
                                                                                    {{$section_6->li4_en}}
                                                                                @endif

                                                                        </li>
                                                                        <li>

                                                                                @if (session('locale') == 'hy')
                                                                                    {{$section_6->li5_hy}}
                                                                                @elseif(session('locale') == 'ru')
                                                                                    {{$section_6->li5_ru}}
                                                                                @else
                                                                                    {{$section_6->li5_en}}
                                                                                @endif

                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </section>
                                                            <div class="clear"></div>
                                                        </div><!-- .content_box (end) --></div>
                                                </div><!-- .row (end) -->
                                                <div class="clear"></div>
                                            </div>
                                            <div class="parallax-bg" data-parallax-type="image"
                                                 data-img-url="{{asset('img/'.$section_6->image)}}"
                                                 data-speed="1.5" data-invert="false" data-fullwidth="true">
                                            </div>
                                        </section>
                                    </div>
                                </div>
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

@endsection
