@extends('layouts.app')

@section('content')
    <div id="motopress-main" class="main-holder">
        <!--Begin #motopress-main-->

        <div class="motopress-wrapper content-holder clearfix">
            <div class="container">
                <div class="row">
                    <div class="span12" data-motopress-wrapper-file="page-Portfolio3Cols-filterable.php"
                         data-motopress-wrapper-type="content">
                        <div class="row">
                            <div class="span12" data-motopress-type="static"
                                 data-motopress-static-file="static/static-title.php">
                                <section class="title-section">
                                    <h1 class="title-header">
                                        @lang('message.gallery')
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
                                            @lang('message.gallery')
                                        </li>
                                    </ul>            <!-- END BREADCRUMBS -->
                                </section><!-- .title-section -->
                            </div>
                        </div>
                        <div id="content" class="row">
                            <div class="span12" data-motopress-type="loop"
                                 data-motopress-loop-file="loop/loop-portfolio3.php">
                                <div class="page_content">
                                    <div class="clear"></div>
                                </div>

                                <ul id="portfolio-grid" class="filterable-portfolio thumbnails portfolio-3cols"
                                    data-cols="3cols">


                                    <script>
                                        jQuery(document).ready(function ($) {
                                            var $container = $('#portfolio-grid'),
                                                    items_count = $(".portfolio_item").size();

                                            $(window).load(function () {
                                                var selector = window.location.hash.replace(/^#category/, '.term');

                                                if (selector == "#") {
                                                    selector = '';
                                                }

                                                setColumnWidth();
                                                $container.isotope({
                                                    itemSelector: '.portfolio_item',
                                                    hiddenClass: 'portfolio_hidden',
                                                    resizable: false,
                                                    transformsEnabled: true,
                                                    layoutMode: 'fitRows',
                                                    filter: selector
                                                })

                                                $('#filters .active').removeClass('active')
                                                $('#filters li a[data-filter="' + selector + '"]').parent('li').addClass('active');
                                                change_hash(selector);

                                                $(window).on("debouncedresize", function (event) {
                                                    arrange();
                                                });
                                            });

                                            function getNumColumns() {
                                                var $folioWrapper = $('#portfolio-grid').data('cols');

                                                if ($folioWrapper == '2cols') {
                                                    var winWidth = $("#portfolio-grid").width(),
                                                            column = 2;
                                                    if (winWidth < 380) column = 1;
                                                    return column;
                                                }

                                                else if ($folioWrapper == '3cols') {
                                                    var winWidth = $("#portfolio-grid").width(),
                                                            column = 3;
                                                    if (winWidth < 380) column = 1;
                                                    else if (winWidth >= 380 && winWidth < 788) column = 2;
                                                    else if (winWidth >= 788 && winWidth < 1160) column = 3;
                                                    else if (winWidth >= 1160) column = 3;
                                                    return column;
                                                }

                                                else if ($folioWrapper == '4cols') {
                                                    var winWidth = $("#portfolio-grid").width(),
                                                            column = 4;
                                                    if (winWidth < 380) column = 1;
                                                    else if (winWidth >= 380 && winWidth < 788) column = 2;
                                                    else if (winWidth >= 788 && winWidth < 1160) column = 3;
                                                    else if (winWidth >= 1160) column = 4;
                                                    return column;
                                                }
                                            }

                                            function setColumnWidth() {
                                                var columns = getNumColumns(),
                                                        containerWidth = $("#portfolio-grid").width(),
                                                        postWidth = containerWidth / columns;
                                                postWidth = Math.floor(postWidth);

                                                $(".portfolio_item").each(function (index) {
                                                    $(this).css({"width": postWidth + "px"});
                                                });
                                            }

                                            function arrange() {
                                                setColumnWidth();
                                                $container.isotope('reLayout');
                                            }

                                            // Filter projects
                                            $('.filter a').click(function () {
                                                var $this = $(this).parent('li');
                                                // don't proceed if already active
                                                if ($this.hasClass('active')) {
                                                    return;
                                                }


                                                var $optionSet = $this.parents('.filter');
                                                // change active class
                                                $optionSet.find('.active').removeClass('active');
                                                $this.addClass('active');

                                                var selector = $(this).attr('data-filter');
                                                $container.isotope({filter: selector});
                                                change_hash(selector)

                                                var hiddenItems = 0,
                                                        showenItems = 0;
                                                $(".portfolio_item").each(function () {
                                                    if ($(this).hasClass('portfolio_hidden')) {
                                                        hiddenItems++;
                                                    }
                                                    ;
                                                });

                                                showenItems = items_count - hiddenItems;
                                                if (($(this).attr('data-count')) > showenItems) {
                                                    $(".pagination__posts").css({"display": "block"});
                                                } else {
                                                    $(".pagination__posts").css({"display": "none"});
                                                }
                                                return false;
                                            });
                                            function change_hash(hash) {
                                                hash = hash.replace(/^.term/, 'category');
                                                window.location.href = '#' + hash;

                                                $('.pagination a').each(function () {
                                                    var item = $(this),
                                                            href = item.attr('href'),
                                                            end_slice = href.indexOf('#') == -1 ? href.length : href.indexOf('#');

                                                    href = href.slice(0, end_slice);
                                                    item.attr({'href': href + '#' + hash})
                                                })
                                            }
                                        });
                                    </script>

                                @foreach($products as $item)

                                        <li class="portfolio_item  term_id_21  term_id_24">
                                            <div class="portfolio_item_holder">

                                                <figure class="thumbnail thumbnail__portfolio">
                                                    <a class="image-wrap">
                                                        <img src="{{asset(
                                                          $item->images->sortBy('id')->first()['image'] ?
                                                                  "img/".$item->images->sortBy('id')->first()['image'] :
                                                                  "img/default.png"
                                                        )}}"/>
                                                    </a>
                                                </figure>

                                                <div class="caption caption__portfolio">
                                                    <h3>
                                                        <a href="{{route('view_product_user',['id'=>$item->id])}}">
                                                            @if (session('locale') == 'hy')
                                                               {{$item->title_hy}}
                                                            @elseif(session('locale') == 'ru')
                                                             {{$item->title_ru}}
                                                            @else
                                                               {{$item->title_en}}
                                                            @endif
                                                        </a>
                                                    </h3>


                                                    <p class="excerpt">
                                                        @if (session('locale') == 'hy')
                                                            {{str_limit($item->description_hy, 100)}}
                                                          {{--{{$item->description_hy}}--}}
                                                        @elseif(session('locale') == 'ru')
                                                           {{--{{$item->description_ru}}--}}
                                                            {{str_limit($item->description_ru, 100)}}
                                                        @else
                                                           {{--{{$item->description_en}}--}}
                                                            {{str_limit($item->description_en, 100)}}
                                                        @endif
                                                    </p>

                                                    <p>
                                                        <a href="{{route('view_product_user',['id'=>$item->id])}}" class="btn btn-primary">
                                                            @lang('message.more')</a>
                                                    </p>
                                                </div><!--/.caption__portfolio-->

                                            </div><!--/.portfolio_item_holder-->
                                        </li><!--/.portfolio_item-->
                                        @endforeach

                                </ul>


                                <!-- Posts navigation -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--End #motopress-main-->
    </div>

    @endsection