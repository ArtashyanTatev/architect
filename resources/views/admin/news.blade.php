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
                                    <a style="color:white" class="pull-right update_section" href="0"
                                       data-toggle="modal" data-target="#modalUpdate"
                                       data-update_href="{{route('create_news')}}" title="Create">
                                        <i class="fa fa-plus " style="font-size: 30px;color:#4d2117 " aria-hidden="true"></i>
                                    </a>
                                </h1>
                                <!-- BEGIN BREADCRUMBS-->
                                <ul class="breadcrumb breadcrumb__t">
                                    <li><a href="{{route('admin')}}">Home</a></li>
                                    <li class="divider"></li>
                                    <li class="active">News</li>
                                </ul>
                            </section><!-- .title-section -->
                        </div>
                    </div>
                    <div class="row">

                        <div class="span12 right right" id="content" data-motopress-type="loop"
                             data-motopress-loop-file="loop/loop-testi.php">

                            @foreach($news as $new)
                                <article id="post-137" class="testimonial clearfix" data-target="new_{{$new->id}}">
                                    <blockquote class="testimonial_bq">

                                        <div class="testimonial_content">
                                            @if(isset($new->image))
                                                <figure class="span3 featured-thumbnail thumbnail hidden-phone">
                                                    <img src="{{asset('img/'.$new->image)}}" alt="news image"
                                                         width="100%"/>
                                                </figure>
                                            @endif
                                            <div class="{{isset($new->image)?'span7':'span10'}}">
                                                {{str_limit($new->text_en , 200)}}
                                            </div>

                                            <a href="{{route('view_news',['id'=>$new->id])}}" title="more"
                                               class="btn btn-primary btn-large btn-inline "
                                               target="_self">
                                                @lang('message.more')
                                            </a><!-- .btn -->

                                            <div class="clear"></div>

                                        </div>

                                    </blockquote>
                                    <a style="color:white;position:absolute;right:0;"
                                       class="pull-right update_section" href="0"
                                       data-toggle="modal" data-target="#modalUpdate"
                                       data-update_href="{{route('news_modal')}}"
                                       data-id="{{$new->id}}" title='Edit'>
                                        <i class="fa fa-pencil " style="font-size: 30px;color:#4d2117;" aria-hidden="true"></i>
                                    </a>
                                    <a style="color:white" class="pull-right update_section" href="0"
                                       data-toggle="modal" data-target="#modalUpdate"
                                       data-update_href="{{route('delete_news')}}"
                                       data-id="{{$new->id}}" title="Delete" data-delete="new_{{$new->id}}">
                                        <i class="fa fa-trash-o" style="font-size: 30px;color:#4d2117" aria-hidden="true"></i>
                                    </a>
                                </article>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection