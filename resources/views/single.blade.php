@extends('layouts.app')

@section('content')


    <div id="motopress-main" class="main-holder">

        <div class="motopress-wrapper content-holder clearfix">
            <div class="container">
                <div class="row">
                    <div class="span12" data-motopress-wrapper-file="single-portfolio.php"
                         data-motopress-wrapper-type="content">
                        <div class="row">
                            <div class="span12" data-motopress-type="static"
                                 data-motopress-static-file="static/static-title.php">
                                <section class="title-section">
                                    <h1 class="title-header">

                                        @if (session('locale') == 'hy')
                                            {{$product->title_hy}}
                                        @elseif(session('locale') == 'ru')
                                            {{$product->title_ru}}
                                        @else
                                            {{$product->title_en}}
                                        @endif
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
                                                @if (session('locale') == 'hy')
                                                    {{$product->parent->name_hy}}
                                                @elseif(session('locale') == 'ru')
                                                    {{$product->parent->name_ru}}
                                                @else
                                                    {{$product->parent->name_en}}
                                                @endif
</li>
                                        <li class="divider"></li>
                                        <li class="active">
                                            @if (session('locale') == 'hy')
                                                {{$product->title_hy}}
                                            @elseif(session('locale') == 'ru')
                                                {{$product->title_ru}}
                                            @else
                                                {{$product->title_en}}
                                            @endif
                                        </li>
                                    </ul>            <!-- END BREADCRUMBS -->
                                </section><!-- .title-section -->
                            </div>
                        </div>
                        <div id="content" class="row">
                            <div class="span12" data-motopress-type="loop"
                                 data-motopress-loop-file="loop/loop-single-portfolio.php">
                                <!--BEGIN .hentry -->
                                <div class="post-518 portfolio type-portfolio status-publish has-post-thumbnail hentry portfolio_category-adult portfolio_tag-alias portfolio_tag-consectetur"
                                     id="post-518">
                                    <div class="row">
                                        <div class="span7">

                                            <figure class="featured-thumbnail thumbnail large">

                                                <!-- slider -->
                                                <div class="slider-for">

                                                    @foreach($images as $img)
                                                        <div class="ok_image">
                                                            <img src="{{asset('img/'.$img->image)}}" alt=""
                                                                 width="100%">
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <div class="slider-nav">

                                                    @foreach($images as $img)
                                                        <div class=" thumb_slide">
                                                            <img src="{{asset('img/'.$img->image)}}" alt=""
                                                                 width="100%">
                                                        </div>
                                                    @endforeach

                                                </div>

                                                <!-- slider end -->

                                            </figure>

                                            <div class="clear"></div>
                                        </div>

                                        <!-- BEGIN .entry-content -->
                                        <div class="entry-content span5">
                                            <!-- BEGIN .entry-meta -->
                                            <div class="">
                                                <div class="entry-meta ">
                                                </div><!-- END .entry-meta -->
                                                <div class="">
                                                    <p>
                                                        @if (session('locale') == 'hy')
                                                            {{$product->description_hy}}
                                                        @elseif(session('locale') == 'ru')
                                                            {{$product->description_ru}}
                                                        @else
                                                            {{$product->description_en}}
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- END .entry-content -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="span12">


                                            <div class="related-posts">
                                                <h3 class="related-posts_h">
                                                    @lang('message.related_post')
                                                </h3>
                                                <ul class="related-posts_list clearfix">

                                                    @foreach($rnd_products as $img)

                                                        <li class="related-posts_item">
                                                            <figure class="thumbnail featured-thumbnail">
                                                                <a href="{{route('view_product_user',['id'=>$img->id])}}">
                                                                    <img class="new_img"
                                                                         src="{{asset('img/'.$img->images->sortBy('id')->first()['image'])}}"/>
                                                                </a>
                                                            </figure>
                                                            <a href="{{route('view_product_user',['id'=>$img->id])}}">{{$img->title_en}}</a>
                                                        </li>

                                                    @endforeach
                                                </ul>
                                            </div><!-- BEGIN Comments -->

                                            <div id="respond">

                                                <form action="{{route('user_comment', ['id' => $product->id])}}"
                                                      method="post"
                                                      id="commentform">

                                                    <p class="field">
                                                        <input type="text" name="author" id="author"
                                                               placeholder="@lang('message.name')*:"

                                                               size="22" tabindex="1"
                                                               required/>
                                                    </p>

                                                    <p class="field">
                                                        <input type="email" name="email" id="email"
                                                               placeholder="@lang('message.email'):"
                                                                aria-required="false"
                                                               size="22" tabindex="2"  />
                                                    </p>

                                                    <p class="field"><input type="text" name="url" id="url"
                                                                            placeholder="@lang('message.website'):"
                                                                            aria-required="false"
                                                                            size="22" tabindex="3"/>
                                                    </p>

                                                    <p>
                                                        <textarea name="comment" id="comment" cols="58" rows="10"
                                                                  tabindex="4" placeholder="@lang('message.comment')*:"
                                                                  required
                                                                   ></textarea>
                                                    </p>

                                                    <div class="row" id="error_box" style="display:none;color:red;">
                                                        @lang('message.form_error')
                                                    </div>

                                                    <p class="comment_submit">
                                                        <input name="submit" type="submit"
                                                               class="btn btn-primary" id="submit"
                                                               tabindex="5"
                                                               value="@lang('message.submit_comment')" style="margin-top:15px;"/>
                                                        <input type='hidden' name='comment_post_ID' value='518'
                                                               id='comment_post_ID'/>
                                                        <input type='hidden' name='comment_parent' id='comment_parent'
                                                               value='0'/>
                                                    </p>
                                                    <p style="display: none;"><input type="hidden"
                                                                                     id="akismet_comment_nonce"
                                                                                     name="akismet_comment_nonce"
                                                                                     value="87f887437a"/></p>
                                                    <p style="display: none;"><input type="hidden" id="ak_js"
                                                                                     name="ak_js"
                                                                                     value="113"/></p>
                                                    {{csrf_field()}}
                                                </form>


                                                <!-- Show comments -->
                                                <p class="nocomments">
                                                    @if (!$has_comments)
                                                        @lang('message.no_comment')
                                                    @endif
                                                </p>

                                                <div class="row" id="comments">
                                                    <hr>
                                                    @if ($has_comments)
                                                        @foreach($has_comments as $comment)
                                                            <h5>
                                                                @if($comment->name)
                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                    {{$comment->name}}
                                                                @endif
                                                            </h5>

                                                            <p style="display: block;padding-left: 25px;">
                                                                {{$comment->comment}}
                                                            </p>

                                                            @if(!$comment->site)
                                                            @if($comment->site)
                                                                <h4> (@lang('message.website'))

                                                                    {{$comment->site}}
                                                                </h4>
                                                            @endif
                                                            @endif


                                                        @endforeach

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
            </div>
        </div>

    </div>
@endsection