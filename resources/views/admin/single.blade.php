@extends('admin.layouts.app')

@section('content')

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
                                        {{$product->title_en}}
                                    </h1>
                                    <!-- BEGIN BREADCRUMBS-->
                                    <ul class="breadcrumb breadcrumb__t">
                                        <li><a href="{{route('admin')}}">Home</a></li>
                                        <li class="divider"></li>
                                        <li>
                                            {{$product->parent->name_en}}
                                        </li>
                                        <li class="divider"></li>
                                        <li class="active">
                                            {{$product->title_en}}
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
                                                        {{$product->description_en}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- END .entry-content -->
                                    </div><!-- .row -->
                                    <div class="row">
                                        <div class="span12">


                                            <div class="related-posts"><h3 class="related-posts_h">Related Posts</h3>
                                                <ul class="related-posts_list clearfix">

                                                    @foreach($rnd_products as $img)

                                                        <li class="related-posts_item">
                                                            <figure class="thumbnail featured-thumbnail">
                                                                <a href="{{route('view_product', ['id'=>$img->id])}}">
                                                                    <img class="new_img"
                                                                         src="{{asset('img/'.$img->images->sortBy('id')->first()['image'])}}"/>
                                                                </a>
                                                            </figure>
                                                            <a href="{{route('view_product', ['id'=>$img->id])}}">{{$img->title_en}}</a>
                                                        </li>

                                                    @endforeach
                                                </ul>
                                            </div><!-- BEGIN Comments -->


                                            <div id="respond">

                                                <form action="{{route('comment', ['id' => $product->id])}}"
                                                      method="post"
                                                      id="commentform">

                                                    <p class="field">
                                                        <input type="text" name="author" id="author"
                                                               placeholder="Name*" style="display:none;" value="ADMIN"
                                                               onfocus="if(this.value=='Name*'){this.value=''}"
                                                               onblur="if(this.value==''){this.value='Name*'}"
                                                               size="22" tabindex="1"
                                                               aria-required='true'/>
                                                    </p>

                                                    <p class="field">
                                                        <input type="text" name="email" id="email"
                                                               placeholder="Email (will not be published)*"
                                                               onfocus="if(this.value=='Email (will not be published)*'){this.value=''}" style="display:none";value=""
                                                               onblur="if(this.value==''){this.value='Email (will not be published)*'}"
                                                               size="22" tabindex="2"
                                                               aria-required='true'/>
                                                    </p>

                                                    <p class="field"><input type="text" name="url" id="url"
                                                                            value="http://architect.dev"
                                                                            style="display:none"
                                                                            onfocus="if(this.value=='Website'){this.value=''}"
                                                                            onblur="if(this.value==''){this.value='Website'}"
                                                                            size="22" tabindex="3"/></p>


                                                    <p>
                                                        <textarea name="comment" id="comment" cols="58" rows="10"
                                                                  tabindex="4"
                                                                  onfocus="if(this.value=='Your comment*'){this.value=''}"></textarea>
                                                    </p>

                                                    <div class="row" id="error_box" style="display:none;color:red;">
                                                        Please, fill in all required fields
                                                    </div>
                                                    <p class="comment_submit">
                                                        <input name="submit" type="submit"
                                                               class="btn btn-primary" id="submit"
                                                               tabindex="5"
                                                               value="Submit Comment" style="margin-top:15px;"/>
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
                                                        {{'No Comments Yet.'}}
                                                    @endif
                                                </p>

                                                <div class="row" id="comments">
                                                    <hr>
                                                    @if ($has_comments)
                                                        @foreach($has_comments as $comment)
                                                            <h5>
                                                                @if($comment->name)
                                                                    <i class="fa fa-user"  aria-hidden="true"></i>
                                                                    {{$comment->name}}
                                                                @endif
                                                            </h5>

                                                            <p style="display: block;padding-left: 25px;">
                                                                {{$comment->comment}}
                                                            </p>

                                                            @if($comment->site)
                                                                <h4> (Site)
                                                                    {{$comment->site}}
                                                                </h4>
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

@endsection