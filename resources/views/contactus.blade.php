@extends('layouts.app')

@section('content')

    <div id="motopress-main" class="main-holder">
        <!--Begin #motopress-main-->

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
                                        @lang('message.contacts')
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
                                            @lang('message.contacts')
                                        </li>
                                    </ul>            <!-- END BREADCRUMBS -->
                                </section><!-- .title-section -->
                            </div>
                        </div>
                        <div id="content" class="row">
                            <div class="span12" data-motopress-type="loop"
                                 data-motopress-loop-file="loop/loop-page.php">
                                <div id="post-103" class="page post-103 type-page status-publish hentry">

                                    @if($contact_title->title_hy || $contact_title->title_ru || $contact_title->title_en)
                                        <div class="title-box clearfix title-box__style-1">
                                            <h2 class="title-box_primary" style="font-size: {{$contact_title->fs}}px">
                                                @if (session('locale') == 'hy')
                                                    {{$contact_title->title_hy}}
                                                @elseif(session('locale') == 'ru')
                                                    {{$contact_title->title_ru}}
                                                @else
                                                    {{$contact_title->title_en}}
                                                @endif
                                            </h2>
                                        </div><!-- //.title-box -->
                                    @endif

                                    <h5>We'd love to hear from you.</h5>
                                    <p>Please allow up to 72 hours for a response. If you'd like to join our team,
                                        please send a request via the form with your name, pen name, and a sample of
                                        your work and we'd be happy to get back to you! Always look for new voices!<br/>
                                    <address>
                                        <strong>No Boundaries<br/>
                                            Diversified throughout the US,<br/>
                                            Anywhere we can find a place to write.</strong><br/>
                                        Facebook: +1 800 603 6035<br/>
                                        Google+: +1 800 889 9898<br/>
                                        E-mail: <a href="mailto:info@diversereads.com" target="_blank">info@diversereads
                                            .com</a><br/>
                                    </address><!-- address (end) -->

                                    <div class="span12">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195168.32764022387!2d44.348481592772025!3d40.15330599674781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406aa2dab8fc8b5b%3A0x3d1479ae87da526a!2z0JXRgNC10LLQsNC9LCDQkNGA0LzQtdC90LjRjw!5e0!3m2!1sru!2sru!4v1498301433512"
                                                width="600" height="450" frameborder="0" style="border:0"
                                                allowfullscreen>
                                        </iframe>
                                    </div>

                                    <div class="span8 ">
                                        <div class="title-box clearfix title-box__style-1">
                                            <h2 class="title-box_primary">
                                                @lang('message.contact_form')
                                            </h2>
                                        </div>
                                        <!-- //.title-box -->
                                        <div role="form" class="wpcf7" id="wpcf7-f208-p103-o1" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="{{route('send_email')}}" method="post" class="wpcf7-form">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="208"/>
                                                    <input type="hidden" name="_wpcf7_version" value="4.8"/>
                                                    <input type="hidden" name="_wpcf7_locale" value=""/>
                                                    <input type="hidden" name="_wpcf7_unit_tag"
                                                           value="wpcf7-f208-p103-o1"/>
                                                    <input type="hidden" name="_wpcf7_container_post" value="103"/>
                                                    <input type="hidden" name="_wpcf7_nonce" value="2cf684a5fa"/>
                                                </div>
                                                <div class="row-fluid">
                                                    <p class="span4 field">
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <input type="text" name="name" value="" size="40"
                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                   aria-required="true" aria-invalid="false"
                                                                   placeholder="@lang('message.name'):"/>
                                                        </span>
                                                    </p>
                                                    <p class="span4 field"><span
                                                                class="wpcf7-form-control-wrap your-email"><input
                                                                    type="email" name="email" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="@lang('message.email')*:" required/></span></p>
                                                    <p class="span4 field"><span
                                                                class="wpcf7-form-control-wrap your-phone"><input
                                                                    type="text" name="phone" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text"
                                                                    aria-invalid="false"
                                                                    placeholder="@lang('message.phone')*:" required/></span>
                                                    </p>
                                                </div>
                                                <p class="field"><span
                                                            class="wpcf7-form-control-wrap your-message"><textarea
                                                                name="text" cols="40" rows="10"
                                                                class="wpcf7-form-control wpcf7-textarea"
                                                                aria-invalid="false"
                                                                placeholder="@lang('message.message')*:" required></textarea></span>
                                                </p>
                                                <p class="submit-wrap"><input type="reset"
                                                                              value="@lang('message.clear')"
                                                                              class="btn btn-primary"/><input
                                                            type="submit" value="@lang('message.send')"
                                                            class="wpcf7-form-control wpcf7-submit btn btn-primary" />
                                                </p>
                                                {{csrf_field()}}
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="clear"></div>

                                </div><!--post-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--End #motopress-main-->
    </div>

@endsection