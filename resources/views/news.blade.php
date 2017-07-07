@extends('layouts.app')

@section('content')
    <div id="motopress-main" class="main-holder">
        <!--Begin #motopress-main-->
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
                                        <li class="active">@lang('message.news')</li>
                                    </ul>
                                </section><!-- .title-section -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="span12 right right" id="content" data-motopress-type="loop"
                                 data-motopress-loop-file="loop/loop-testi.php">

                                @foreach($news as $new)

                                    <article id="post-134" class="testimonial clearfix">
                                        <blockquote class="testimonial_bq">

                                            <div class="testimonial_content">

                                                @if(isset($new->image))
                                                    <figure class="span3 featured-thumbnail thumbnail hidden-phone">
                                                        <img src="{{asset('img/'.$new->image)}}" alt="news image"
                                                             width="100%"/>
                                                    </figure>
                                                @endif
                                                <div class="{{isset($new->image)?'span7':'span10'}}">
                                                    <p>
                                                        @if (session('locale') == 'hy')
                                                            {{str_limit($new->text_hy , 200)}}
                                                        @elseif(session('locale') == 'ru')
                                                            {{str_limit($new->text_ru , 200)}}
                                                        @else
                                                            {{str_limit($new->text_en , 200)}}
                                                        @endif
                                                    </p>
                                                    <a href="{{route('_view_news',['id'=>$new->id])}}" title="more"
                                                       class="btn btn-primary btn-large btn-inline "
                                                       target="_self">
                                                        @lang('message.more')
                                                    </a><!-- .btn -->
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </blockquote>
                                    </article>

                                @endforeach

                            </div>
                            {{--<div class="span4 sidebar" id="sidebar" data-motopress-type="static-sidebar"--}}
                                 {{--data-motopress-sidebar-file="sidebar.php">--}}

                                {{--<div id="dopbspwidget-2" class="visible-all-devices widget"><h3>Reserve Your spot</h3>--}}
                                     {{--<link rel="stylesheet" type="text/css"--}}
                                          {{--href="wp-content/plugins/booking-system/templates/default/css/jquery.dop.frontend.BSPCalendar.css"/>--}}
                                    {{--<script type="text/JavaScript">--}}
                                        {{--jQuery(document).ready(function () {--}}
                                            {{--jQuery("#DOPBSPCalendar1").DOPBSPCalendar({--}}
                                                {{--"calendar": {--}}
                                                    {{--"data": {--}}
                                                        {{--"bookingStop": 0,--}}
                                                        {{--"bookingStartDate": "2017-06-11 14:26:20",--}}
                                                        {{--"hidePrice": false,--}}
                                                        {{--"dateType": 1,--}}
                                                        {{--"language": "en",--}}
                                                        {{--"languages": [{--}}
                                                            {{--"code": "af",--}}
                                                            {{--"name": "Afrikaans (Afrikaans)"--}}
                                                        {{--}, {"code": "sq", "name": "Albanian (Shqiptar)"}, {--}}
                                                            {{--"code": "ar",--}}
                                                            {{--"name": "Arabic (>\u0627\u0644\u0639\u0631\u0628\u064a\u0629)"--}}
                                                        {{--}, {--}}
                                                            {{--"code": "az",--}}
                                                            {{--"name": "Azerbaijani (Az\u0259rbaycan)"--}}
                                                        {{--}, {"code": "eu", "name": "Basque (Euskal)"}, {--}}
                                                            {{--"code": "be",--}}
                                                            {{--"name": "Belarusian (\u0411\u0435\u043b\u0430\u0440\u0443\u0441\u043a\u0430\u0439)"--}}
                                                        {{--}, {--}}
                                                            {{--"code": "bg",--}}
                                                            {{--"name": "Bulgarian (\u0411\u044a\u043b\u0433\u0430\u0440\u0441\u043a\u0438)"--}}
                                                        {{--}, {"code": "ca", "name": "Catalan (Catal\u00e0)"}, {--}}
                                                            {{--"code": "zh",--}}
                                                            {{--"name": "Chinese (\u4e2d\u56fd\u7684)"--}}
                                                        {{--}, {"code": "hr", "name": "Croatian (Hrvatski)"}, {--}}
                                                            {{--"code": "cs",--}}
                                                            {{--"name": "Czech (\u010cesk\u00fd)"--}}
                                                        {{--}, {"code": "da", "name": "Danish (Dansk)"}, {--}}
                                                            {{--"code": "nl",--}}
                                                            {{--"name": "Dutch (Nederlands)"--}}
                                                        {{--}, {"code": "en", "name": "English"}, {--}}
                                                            {{--"code": "eo",--}}
                                                            {{--"name": "Esperanto (Esperanto)"--}}
                                                        {{--}, {"code": "et", "name": "Estonian (Eesti)"}, {--}}
                                                            {{--"code": "fl",--}}
                                                            {{--"name": "Filipino (na Filipino)"--}}
                                                        {{--}, {"code": "fi", "name": "Finnish (Suomi)"}, {--}}
                                                            {{--"code": "fr",--}}
                                                            {{--"name": "French (Fran\u00e7ais)"--}}
                                                        {{--}, {"code": "gl", "name": "Galician (Galego)"}, {--}}
                                                            {{--"code": "de",--}}
                                                            {{--"name": "German (Deutsch)"--}}
                                                        {{--}, {--}}
                                                            {{--"code": "el",--}}
                                                            {{--"name": "Greek (\u0190\u03bb\u03bb\u03b7\u03bd\u03b9\u03ba\u03ac)"--}}
                                                        {{--}, {--}}
                                                            {{--"code": "ht",--}}
                                                            {{--"name": "Haitian Creole (Krey\u00f2l Ayisyen)"--}}
                                                        {{--}, {--}}
                                                            {{--"code": "he",--}}
                                                            {{--"name": "Hebrew (\u05e2\u05d1\u05e8\u05d9\u05ea)"--}}
                                                        {{--}, {--}}
                                                            {{--"code": "hi",--}}
                                                            {{--"name": "Hindi (\u0939\u093f\u0902\u0926\u0940)"--}}
                                                        {{--}, {"code": "hu", "name": "Hungarian (Magyar)"}, {--}}
                                                            {{--"code": "is",--}}
                                                            {{--"name": "Icelandic (\u00cdslenska)"--}}
                                                        {{--}, {"code": "id", "name": "Indonesian (Indonesia)"}, {--}}
                                                            {{--"code": "ga",--}}
                                                            {{--"name": "Irish (Gaeilge)"--}}
                                                        {{--}, {"code": "it", "name": "Italian (Italiano)"}, {--}}
                                                            {{--"code": "ja",--}}
                                                            {{--"name": "Japanese (\u65e5\u672c\u306e)"--}}
                                                        {{--}, {"code": "ko", "name": "Korean (\ud55c\uad6d\uc758)"}, {--}}
                                                            {{--"code": "lv",--}}
                                                            {{--"name": "Latvian (Latvijas)"--}}
                                                        {{--}, {"code": "lt", "name": "Lithuanian (Lietuvos)"}, {--}}
                                                            {{--"code": "mk",--}}
                                                            {{--"name": "Macedonian (\u043c\u0430\u043a\u0435\u0434\u043e\u043d\u0441\u043a\u0438)"--}}
                                                        {{--}, {"code": "ms", "name": "Malay (Melayu)"}, {--}}
                                                            {{--"code": "mt",--}}
                                                            {{--"name": "Maltese (Maltija)"--}}
                                                        {{--}, {"code": "no", "name": "Norwegian (Norske)"}, {--}}
                                                            {{--"code": "fa",--}}
                                                            {{--"name": "Persian (\u0641\u0627\u0631\u0633\u06cc)"--}}
                                                        {{--}, {"code": "pl", "name": "Polish (Polski)"}, {--}}
                                                            {{--"code": "pt",--}}
                                                            {{--"name": "Portuguese (Portugu\u00eas)"--}}
                                                        {{--}, {"code": "ro", "name": "Romanian (Rom\u00e2n\u0103)"}, {--}}
                                                            {{--"code": "ru",--}}
                                                            {{--"name": "Russian (P\u0443\u0441\u0441\u043a\u0438\u0439)"--}}
                                                        {{--}, {--}}
                                                            {{--"code": "sr",--}}
                                                            {{--"name": "Serbian (C\u0440\u043f\u0441\u043a\u0438)"--}}
                                                        {{--}, {"code": "sk", "name": "Slovak (Slovensk\u00fdch)"}, {--}}
                                                            {{--"code": "sl",--}}
                                                            {{--"name": "Slovenian (Slovenski)"--}}
                                                        {{--}, {"code": "es", "name": "Spanish (Espa\u00f1ol)"}, {--}}
                                                            {{--"code": "sw",--}}
                                                            {{--"name": "Swahili (Kiswahili)"--}}
                                                        {{--}, {"code": "sv", "name": "Swedish (Svenskt)"}, {--}}
                                                            {{--"code": "th",--}}
                                                            {{--"name": "Thai (\u0e20\u0e32\u0e29\u0e32\u0e44\u0e17\u0e22)"--}}
                                                        {{--}, {"code": "tr", "name": "Turkish (T\u00fcrk)"}, {--}}
                                                            {{--"code": "uk",--}}
                                                            {{--"name": "Ukrainian (\u0423\u043a\u0440\u0430\u0457\u043d\u0441\u044c\u043a\u0438\u0439)"--}}
                                                        {{--}, {--}}
                                                            {{--"code": "ur",--}}
                                                            {{--"name": "Urdu (\u0627\u0631\u062f\u0648)"--}}
                                                        {{--}, {"code": "vi", "name": "Vietnamese (Vi\u1ec7t)"}, {--}}
                                                            {{--"code": "cy",--}}
                                                            {{--"name": "Welsh (Cymraeg)"--}}
                                                        {{--}, {--}}
                                                            {{--"code": "yi",--}}
                                                            {{--"name": "Yiddish (\u05d9\u05d9\u05b4\u05d3\u05d9\u05e9)"--}}
                                                        {{--}],--}}
                                                        {{--"pluginURL": "http:\/\/diversereads.com\/wp-content\/plugins\/booking-system\/",--}}
                                                        {{--"maxYear": 2017,--}}
                                                        {{--"reinitialize": false,--}}
                                                        {{--"view": false--}}
                                                    {{--},--}}
                                                    {{--"text": {--}}
                                                        {{--"addMonth": "Add month view",--}}
                                                        {{--"available": "available",--}}
                                                        {{--"availableMultiple": "available",--}}
                                                        {{--"booked": "booked",--}}
                                                        {{--"nextMonth": "Next month",--}}
                                                        {{--"previousMonth": "Previous month",--}}
                                                        {{--"removeMonth": "Remove month view",--}}
                                                        {{--"unavailable": "unavailable"--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"cart": {--}}
                                                    {{--"data": {"enabled": false},--}}
                                                    {{--"text": {"isEmpty": "Cart is empty.", "title": "Cart"}--}}
                                                {{--},--}}
                                                {{--"coupons": {--}}
                                                    {{--"data": {"coupon": null, "id": "0"},--}}
                                                    {{--"text": {--}}
                                                        {{--"byDay": "day",--}}
                                                        {{--"byHour": "hour",--}}
                                                        {{--"code": "Enter code",--}}
                                                        {{--"title": "Coupons",--}}
                                                        {{--"use": "Use coupon",--}}
                                                        {{--"verify": "Verify code",--}}
                                                        {{--"verifyError": "The coupon code is invalid. Please enter another one.",--}}
                                                        {{--"verifySuccess": "The coupon code is valid."--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"currency": {--}}
                                                    {{--"data": {--}}
                                                        {{--"code": "USD",--}}
                                                        {{--"position": "before",--}}
                                                        {{--"sign": "&#36;",--}}
                                                        {{--"text": []--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"days": {--}}
                                                    {{--"data": {--}}
                                                        {{--"available": [true, true, true, true, true, true, true],--}}
                                                        {{--"first": 7,--}}
                                                        {{--"firstDisplayed": "2017-08-01",--}}
                                                        {{--"morningCheckOut": false,--}}
                                                        {{--"multipleSelect": false--}}
                                                    {{--},--}}
                                                    {{--"text": {--}}
                                                        {{--"names": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],--}}
                                                        {{--"shortNames": ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"deposit": {--}}
                                                    {{--"data": {--}}
                                                        {{--"deposit": 0,--}}
                                                        {{--"type": "percent",--}}
                                                        {{--"pay_full_amount": "true"--}}
                                                    {{--}, "text": {"left": "Left to pay", "title": "Deposit"}--}}
                                                {{--},--}}
                                                {{--"discounts": {--}}
                                                    {{--"data": {"discount": [], "extras": false, "id": "0"},--}}
                                                    {{--"text": {"byDay": "day", "byHour": "hour", "title": "Discount"}--}}
                                                {{--},--}}
                                                {{--"extras": {--}}
                                                    {{--"data": {"extra": [], "id": "0"},--}}
                                                    {{--"text": {--}}
                                                        {{--"byDay": "day",--}}
                                                        {{--"byHour": "hour",--}}
                                                        {{--"invalid": "Select an option from",--}}
                                                        {{--"title": "Extras"--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"fees": {--}}
                                                    {{--"data": {"fees": []},--}}
                                                    {{--"text": {--}}
                                                        {{--"byDay": "day",--}}
                                                        {{--"byHour": "hour",--}}
                                                        {{--"included": "Included in price",--}}
                                                        {{--"title": "Taxes & fees"--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"form": {--}}
                                                    {{--"data": {--}}
                                                        {{--"form": [{--}}
                                                            {{--"id": "1",--}}
                                                            {{--"form_id": "1",--}}
                                                            {{--"type": "text",--}}
                                                            {{--"position": "1",--}}
                                                            {{--"multiple_select": "false",--}}
                                                            {{--"allowed_characters": "",--}}
                                                            {{--"size": "0",--}}
                                                            {{--"is_email": "false",--}}
                                                            {{--"is_phone": "false",--}}
                                                            {{--"required": "true",--}}
                                                            {{--"add_to_day_hour_info": "false",--}}
                                                            {{--"add_to_day_hour_body": "false",--}}
                                                            {{--"translation": "First name"--}}
                                                        {{--}, {--}}
                                                            {{--"id": "2",--}}
                                                            {{--"form_id": "1",--}}
                                                            {{--"type": "text",--}}
                                                            {{--"position": "2",--}}
                                                            {{--"multiple_select": "false",--}}
                                                            {{--"allowed_characters": "",--}}
                                                            {{--"size": "0",--}}
                                                            {{--"is_email": "false",--}}
                                                            {{--"is_phone": "false",--}}
                                                            {{--"required": "true",--}}
                                                            {{--"add_to_day_hour_info": "false",--}}
                                                            {{--"add_to_day_hour_body": "false",--}}
                                                            {{--"translation": "Last name"--}}
                                                        {{--}, {--}}
                                                            {{--"id": "3",--}}
                                                            {{--"form_id": "1",--}}
                                                            {{--"type": "text",--}}
                                                            {{--"position": "3",--}}
                                                            {{--"multiple_select": "false",--}}
                                                            {{--"allowed_characters": "",--}}
                                                            {{--"size": "0",--}}
                                                            {{--"is_email": "true",--}}
                                                            {{--"is_phone": "false",--}}
                                                            {{--"required": "true",--}}
                                                            {{--"add_to_day_hour_info": "false",--}}
                                                            {{--"add_to_day_hour_body": "false",--}}
                                                            {{--"translation": "Email"--}}
                                                        {{--}, {--}}
                                                            {{--"id": "4",--}}
                                                            {{--"form_id": "1",--}}
                                                            {{--"type": "text",--}}
                                                            {{--"position": "4",--}}
                                                            {{--"multiple_select": "false",--}}
                                                            {{--"allowed_characters": "0123456789+-().",--}}
                                                            {{--"size": "0",--}}
                                                            {{--"is_email": "false",--}}
                                                            {{--"is_phone": "true",--}}
                                                            {{--"required": "true",--}}
                                                            {{--"add_to_day_hour_info": "false",--}}
                                                            {{--"add_to_day_hour_body": "false",--}}
                                                            {{--"translation": "Phone"--}}
                                                        {{--}, {--}}
                                                            {{--"id": "5",--}}
                                                            {{--"form_id": "1",--}}
                                                            {{--"type": "textarea",--}}
                                                            {{--"position": "5",--}}
                                                            {{--"multiple_select": "false",--}}
                                                            {{--"allowed_characters": "",--}}
                                                            {{--"size": "0",--}}
                                                            {{--"is_email": "false",--}}
                                                            {{--"is_phone": "false",--}}
                                                            {{--"required": "true",--}}
                                                            {{--"add_to_day_hour_info": "false",--}}
                                                            {{--"add_to_day_hour_body": "false",--}}
                                                            {{--"translation": "Message"--}}
                                                        {{--}], "id": "1"--}}
                                                    {{--},--}}
                                                    {{--"text": {--}}
                                                        {{--"checked": "!",--}}
                                                        {{--"invalidEmail": "is invalid. Please enter a valid email.",--}}
                                                        {{--"required": "is required.",--}}
                                                        {{--"title": "Contact information",--}}
                                                        {{--"unchecked": "!"--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"hours": {--}}
                                                    {{--"data": {--}}
                                                        {{--"addLastHourToTotalPrice": true,--}}
                                                        {{--"ampm": false,--}}
                                                        {{--"definitions": [{"value": "00:00"}],--}}
                                                        {{--"enabled": false,--}}
                                                        {{--"info": false,--}}
                                                        {{--"interval": false,--}}
                                                        {{--"interval_autobreak": false,--}}
                                                        {{--"multipleSelect": false--}}
                                                    {{--}, "text": []--}}
                                                {{--},--}}
                                                {{--"ID": "1",--}}
                                                {{--"months": {--}}
                                                    {{--"data": {"no": "3"},--}}
                                                    {{--"text": {--}}
                                                        {{--"names": ["January", "February", "March", "April", "May", "!", "!", "August", "September", "October", "November", "December"],--}}
                                                        {{--"shortNames": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"order": {--}}
                                                    {{--"data": {--}}
                                                        {{--"address_billing": {--}}
                                                            {{--"address_first": {--}}
                                                                {{--"enabled": true,--}}
                                                                {{--"required": true--}}
                                                            {{--},--}}
                                                            {{--"address_second": {"enabled": true, "required": false},--}}
                                                            {{--"city": {"enabled": true, "required": true},--}}
                                                            {{--"company": {"enabled": true, "required": false},--}}
                                                            {{--"country": {"enabled": true, "required": true},--}}
                                                            {{--"email": {"enabled": true, "required": true},--}}
                                                            {{--"enabled": false,--}}
                                                            {{--"first_name": {"enabled": true, "required": true},--}}
                                                            {{--"last_name": {"enabled": true, "required": true},--}}
                                                            {{--"phone": {"enabled": true, "required": true},--}}
                                                            {{--"state": {"enabled": true, "required": true},--}}
                                                            {{--"zip_code": {"enabled": true, "required": true}--}}
                                                        {{--},--}}
                                                        {{--"address_shipping": {--}}
                                                            {{--"address_first": {--}}
                                                                {{--"enabled": true,--}}
                                                                {{--"required": true--}}
                                                            {{--},--}}
                                                            {{--"address_second": {"enabled": true, "required": false},--}}
                                                            {{--"city": {"enabled": true, "required": true},--}}
                                                            {{--"company": {"enabled": true, "required": false},--}}
                                                            {{--"country": {"enabled": true, "required": true},--}}
                                                            {{--"email": {"enabled": true, "required": true},--}}
                                                            {{--"enabled": false,--}}
                                                            {{--"first_name": {"enabled": true, "required": true},--}}
                                                            {{--"last_name": {"enabled": true, "required": true},--}}
                                                            {{--"phone": {"enabled": true, "required": true},--}}
                                                            {{--"state": {"enabled": true, "required": true},--}}
                                                            {{--"zip_code": {"enabled": true, "required": true}--}}
                                                        {{--},--}}
                                                        {{--"countries": [{--}}
                                                            {{--"code2": "AF",--}}
                                                            {{--"code3": "AFG",--}}
                                                            {{--"name": "Afghanistan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AL",--}}
                                                            {{--"code3": "ALB",--}}
                                                            {{--"name": "Albania"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "DZ",--}}
                                                            {{--"code3": "DZA",--}}
                                                            {{--"name": "Algeria"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AS",--}}
                                                            {{--"code3": "ASM",--}}
                                                            {{--"name": "American Samoa"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AD",--}}
                                                            {{--"code3": "AND",--}}
                                                            {{--"name": "Andorra"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AO",--}}
                                                            {{--"code3": "AGO",--}}
                                                            {{--"name": "Angola"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AI",--}}
                                                            {{--"code3": "AIA",--}}
                                                            {{--"name": "Anguilla"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AQ",--}}
                                                            {{--"code3": "ATA",--}}
                                                            {{--"name": "Antarctica"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AG",--}}
                                                            {{--"code3": "ATG",--}}
                                                            {{--"name": "Antigua and Barbuda"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AR",--}}
                                                            {{--"code3": "ARG",--}}
                                                            {{--"name": "Argentina"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AM",--}}
                                                            {{--"code3": "ARM",--}}
                                                            {{--"name": "Armenia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AW",--}}
                                                            {{--"code3": "ABW",--}}
                                                            {{--"name": "Aruba"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AU",--}}
                                                            {{--"code3": "AUS",--}}
                                                            {{--"name": "Australia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AT",--}}
                                                            {{--"code3": "AUT",--}}
                                                            {{--"name": "Austria"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AZ",--}}
                                                            {{--"code3": "AZE",--}}
                                                            {{--"name": "Azerbaijan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BS",--}}
                                                            {{--"code3": "BHS",--}}
                                                            {{--"name": "Bahamas"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BH",--}}
                                                            {{--"code3": "BHR",--}}
                                                            {{--"name": "Bahrain"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BD",--}}
                                                            {{--"code3": "BGD",--}}
                                                            {{--"name": "Bangladesh"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BB",--}}
                                                            {{--"code3": "BRB",--}}
                                                            {{--"name": "Barbados"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BY",--}}
                                                            {{--"code3": "BLR",--}}
                                                            {{--"name": "Belarus"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BE",--}}
                                                            {{--"code3": "BEL",--}}
                                                            {{--"name": "Belgium"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BZ",--}}
                                                            {{--"code3": "BLZ",--}}
                                                            {{--"name": "Belize"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BJ",--}}
                                                            {{--"code3": "BEN",--}}
                                                            {{--"name": "Benin"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BM",--}}
                                                            {{--"code3": "BMU",--}}
                                                            {{--"name": "Bermuda"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BT",--}}
                                                            {{--"code3": "BTN",--}}
                                                            {{--"name": "Bhutan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BO",--}}
                                                            {{--"code3": "BOL",--}}
                                                            {{--"name": "Bolivia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BA",--}}
                                                            {{--"code3": "BIH",--}}
                                                            {{--"name": "Bosnia and Herzegovina"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BW",--}}
                                                            {{--"code3": "BWA",--}}
                                                            {{--"name": "Botswana"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BR",--}}
                                                            {{--"code3": "BRA",--}}
                                                            {{--"name": "Brazil"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "IO",--}}
                                                            {{--"code3": "IOT",--}}
                                                            {{--"name": "British Indian Ocean Territory"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "VG",--}}
                                                            {{--"code3": "VGB",--}}
                                                            {{--"name": "British Virgin Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BN",--}}
                                                            {{--"code3": "BRN",--}}
                                                            {{--"name": "Brunei"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BG",--}}
                                                            {{--"code3": "BGR",--}}
                                                            {{--"name": "Bulgaria"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BF",--}}
                                                            {{--"code3": "BFA",--}}
                                                            {{--"name": "Burkina Faso"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MM",--}}
                                                            {{--"code3": "MMR",--}}
                                                            {{--"name": "Burma (Myanmar)"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BI",--}}
                                                            {{--"code3": "BDI",--}}
                                                            {{--"name": "Burundi"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "KH",--}}
                                                            {{--"code3": "KHM",--}}
                                                            {{--"name": "Cambodia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CM",--}}
                                                            {{--"code3": "CMR",--}}
                                                            {{--"name": "Cameroon"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CA",--}}
                                                            {{--"code3": "CAN",--}}
                                                            {{--"name": "Canada"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CV",--}}
                                                            {{--"code3": "CPV",--}}
                                                            {{--"name": "Cape Verde"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "KY",--}}
                                                            {{--"code3": "CYM",--}}
                                                            {{--"name": "Cayman Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CF",--}}
                                                            {{--"code3": "CAF",--}}
                                                            {{--"name": "Central African Republic"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TD",--}}
                                                            {{--"code3": "TCD",--}}
                                                            {{--"name": "Chad"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CL",--}}
                                                            {{--"code3": "CHL",--}}
                                                            {{--"name": "Chile"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CN",--}}
                                                            {{--"code3": "CHN",--}}
                                                            {{--"name": "China"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CX",--}}
                                                            {{--"code3": "CXR",--}}
                                                            {{--"name": "Christmas Island"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CC",--}}
                                                            {{--"code3": "CCk",--}}
                                                            {{--"name": "Cocos (Keeling) Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CO",--}}
                                                            {{--"code3": "COL",--}}
                                                            {{--"name": "Colombia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "KM",--}}
                                                            {{--"code3": "COM",--}}
                                                            {{--"name": "Comoros"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CK",--}}
                                                            {{--"code3": "COK",--}}
                                                            {{--"name": "Cook Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CR",--}}
                                                            {{--"code3": "CRC",--}}
                                                            {{--"name": "Costa Rica"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "HR",--}}
                                                            {{--"code3": "HRV",--}}
                                                            {{--"name": "Croatia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CU",--}}
                                                            {{--"code3": "CUB",--}}
                                                            {{--"name": "Cuba"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "Cy",--}}
                                                            {{--"code3": "Cyp",--}}
                                                            {{--"name": "Cyprus"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CZ",--}}
                                                            {{--"code3": "CZE",--}}
                                                            {{--"name": "Czech Republic"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CD",--}}
                                                            {{--"code3": "COD",--}}
                                                            {{--"name": "Democratic Republic of the Congo"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "DK",--}}
                                                            {{--"code3": "DNK",--}}
                                                            {{--"name": "Denmark"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "DJ",--}}
                                                            {{--"code3": "DJI",--}}
                                                            {{--"name": "Djibouti"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "DM",--}}
                                                            {{--"code3": "DMA",--}}
                                                            {{--"name": "Dominica"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "DO",--}}
                                                            {{--"code3": "DOM",--}}
                                                            {{--"name": "Dominican Republic"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "EC",--}}
                                                            {{--"code3": "ECU",--}}
                                                            {{--"name": "Ecuador"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "EG",--}}
                                                            {{--"code3": "EGY",--}}
                                                            {{--"name": "Egypt"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SV",--}}
                                                            {{--"code3": "SLV",--}}
                                                            {{--"name": "El Salvador"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GQ",--}}
                                                            {{--"code3": "GNQ",--}}
                                                            {{--"name": "Equatorial Guinea"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "ER",--}}
                                                            {{--"code3": "ERI",--}}
                                                            {{--"name": "Eritrea"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "EE",--}}
                                                            {{--"code3": "EST",--}}
                                                            {{--"name": "Estonia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "ET",--}}
                                                            {{--"code3": "ETH",--}}
                                                            {{--"name": "Ethiopia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "FK",--}}
                                                            {{--"code3": "FLK",--}}
                                                            {{--"name": "Falkland Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "FO",--}}
                                                            {{--"code3": "FRO",--}}
                                                            {{--"name": "Faroe Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "FJ",--}}
                                                            {{--"code3": "FJI",--}}
                                                            {{--"name": "Fiji"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "FI",--}}
                                                            {{--"code3": "FIN",--}}
                                                            {{--"name": "Finland"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "FR",--}}
                                                            {{--"code3": "FRA",--}}
                                                            {{--"name": "France"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PF",--}}
                                                            {{--"code3": "PYF",--}}
                                                            {{--"name": "French Polynesia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GA",--}}
                                                            {{--"code3": "GAB",--}}
                                                            {{--"name": "Gabon"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GM",--}}
                                                            {{--"code3": "GMB",--}}
                                                            {{--"name": "Gambia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GE",--}}
                                                            {{--"code3": "GEO",--}}
                                                            {{--"name": "Georgia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "DE",--}}
                                                            {{--"code3": "DEU",--}}
                                                            {{--"name": "Germany"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GH",--}}
                                                            {{--"code3": "GHA",--}}
                                                            {{--"name": "Ghana"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GI",--}}
                                                            {{--"code3": "GIB",--}}
                                                            {{--"name": "Gibraltar"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GR",--}}
                                                            {{--"code3": "GRC",--}}
                                                            {{--"name": "Greece"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GL",--}}
                                                            {{--"code3": "GRL",--}}
                                                            {{--"name": "Greenland"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GD",--}}
                                                            {{--"code3": "GRD",--}}
                                                            {{--"name": "Grenada"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GU",--}}
                                                            {{--"code3": "GUM",--}}
                                                            {{--"name": "Guam"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GT",--}}
                                                            {{--"code3": "GTM",--}}
                                                            {{--"name": "Guatemala"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GN",--}}
                                                            {{--"code3": "GIN",--}}
                                                            {{--"name": "Guinea"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GW",--}}
                                                            {{--"code3": "GNB",--}}
                                                            {{--"name": "Guinea-Bissau"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GY",--}}
                                                            {{--"code3": "GUY",--}}
                                                            {{--"name": "Guyana"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "HT",--}}
                                                            {{--"code3": "HTI",--}}
                                                            {{--"name": "Haiti"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "VA",--}}
                                                            {{--"code3": "VAT",--}}
                                                            {{--"name": "Holy See (Vatican City)"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "HN",--}}
                                                            {{--"code3": "HND",--}}
                                                            {{--"name": "Honduras"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "HK",--}}
                                                            {{--"code3": "HKG",--}}
                                                            {{--"name": "Hong Kong"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "HU",--}}
                                                            {{--"code3": "HUN",--}}
                                                            {{--"name": "Hungary"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "IS",--}}
                                                            {{--"code3": "ISL",--}}
                                                            {{--"name": "Iceland"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "IN",--}}
                                                            {{--"code3": "IND",--}}
                                                            {{--"name": "India"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "ID",--}}
                                                            {{--"code3": "IDN",--}}
                                                            {{--"name": "Indonesia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "IR",--}}
                                                            {{--"code3": "IRN",--}}
                                                            {{--"name": "Iran"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "IQ",--}}
                                                            {{--"code3": "IRQ",--}}
                                                            {{--"name": "Iraq"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "IE",--}}
                                                            {{--"code3": "IRL",--}}
                                                            {{--"name": "Ireland"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "IM",--}}
                                                            {{--"code3": "IMN",--}}
                                                            {{--"name": "Isle of Man"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "IL",--}}
                                                            {{--"code3": "ISR",--}}
                                                            {{--"name": "Israel"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "IT",--}}
                                                            {{--"code3": "ITA",--}}
                                                            {{--"name": "Italy"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CI",--}}
                                                            {{--"code3": "CIV",--}}
                                                            {{--"name": "Ivory Coast"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "JM",--}}
                                                            {{--"code3": "JAM",--}}
                                                            {{--"name": "Jamaica"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "JP",--}}
                                                            {{--"code3": "JPN",--}}
                                                            {{--"name": "Japan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "JE",--}}
                                                            {{--"code3": "JEY",--}}
                                                            {{--"name": "Jersey"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "JO",--}}
                                                            {{--"code3": "JOR",--}}
                                                            {{--"name": "Jordan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "KZ",--}}
                                                            {{--"code3": "KAZ",--}}
                                                            {{--"name": "Kazakhstan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "KE",--}}
                                                            {{--"code3": "KEN",--}}
                                                            {{--"name": "Kenya"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "KI",--}}
                                                            {{--"code3": "KIR",--}}
                                                            {{--"name": "Kiribati"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "KW",--}}
                                                            {{--"code3": "KWT",--}}
                                                            {{--"name": "Kuwait"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "KG",--}}
                                                            {{--"code3": "KGZ",--}}
                                                            {{--"name": "Kyrgyzstan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "LA",--}}
                                                            {{--"code3": "LAO",--}}
                                                            {{--"name": "Laos"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "LV",--}}
                                                            {{--"code3": "LVA",--}}
                                                            {{--"name": "Latvia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "LB",--}}
                                                            {{--"code3": "LBN",--}}
                                                            {{--"name": "Lebanon"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "LS",--}}
                                                            {{--"code3": "LSO",--}}
                                                            {{--"name": "Lesotho"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "LR",--}}
                                                            {{--"code3": "LBR",--}}
                                                            {{--"name": "Liberia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "LY",--}}
                                                            {{--"code3": "LBY",--}}
                                                            {{--"name": "Libya"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "LI",--}}
                                                            {{--"code3": "LIE",--}}
                                                            {{--"name": "Liechtenstein"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "LT",--}}
                                                            {{--"code3": "LTU",--}}
                                                            {{--"name": "Lithuania"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "LU",--}}
                                                            {{--"code3": "LUX",--}}
                                                            {{--"name": "Luxembourg"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MO",--}}
                                                            {{--"code3": "MAC",--}}
                                                            {{--"name": "Macau"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MK",--}}
                                                            {{--"code3": "MKD",--}}
                                                            {{--"name": "Macedonia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MG",--}}
                                                            {{--"code3": "MDG",--}}
                                                            {{--"name": "Madagascar"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MW",--}}
                                                            {{--"code3": "MWI",--}}
                                                            {{--"name": "Malawi"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MY",--}}
                                                            {{--"code3": "MYS",--}}
                                                            {{--"name": "Malaysia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MV",--}}
                                                            {{--"code3": "MDV",--}}
                                                            {{--"name": "Maldives"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "ML",--}}
                                                            {{--"code3": "MLI",--}}
                                                            {{--"name": "Mali"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MT",--}}
                                                            {{--"code3": "MLT",--}}
                                                            {{--"name": "Malta"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MH",--}}
                                                            {{--"code3": "MHL",--}}
                                                            {{--"name": "Marshall Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MR",--}}
                                                            {{--"code3": "MRT",--}}
                                                            {{--"name": "Mauritania"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MU",--}}
                                                            {{--"code3": "MUS",--}}
                                                            {{--"name": "Mauritius"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "YT",--}}
                                                            {{--"code3": "MYT",--}}
                                                            {{--"name": "Mayotte"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MX",--}}
                                                            {{--"code3": "MEX",--}}
                                                            {{--"name": "Mexico"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "FM",--}}
                                                            {{--"code3": "FSM",--}}
                                                            {{--"name": "Micronesia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MD",--}}
                                                            {{--"code3": "MDA",--}}
                                                            {{--"name": "Moldova"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MC",--}}
                                                            {{--"code3": "MCO",--}}
                                                            {{--"name": "Monaco"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MN",--}}
                                                            {{--"code3": "MNG",--}}
                                                            {{--"name": "Mongolia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "ME",--}}
                                                            {{--"code3": "MNE",--}}
                                                            {{--"name": "Montenegro"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MS",--}}
                                                            {{--"code3": "MSR",--}}
                                                            {{--"name": "Montserrat"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MA",--}}
                                                            {{--"code3": "MAR",--}}
                                                            {{--"name": "Morocco"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MZ",--}}
                                                            {{--"code3": "MOZ",--}}
                                                            {{--"name": "Mozambique"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "NA",--}}
                                                            {{--"code3": "NAM",--}}
                                                            {{--"name": "Namibia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "NR",--}}
                                                            {{--"code3": "NRU",--}}
                                                            {{--"name": "Nauru"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "NP",--}}
                                                            {{--"code3": "NPL",--}}
                                                            {{--"name": "Nepal"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "NL",--}}
                                                            {{--"code3": "NLD",--}}
                                                            {{--"name": "Netherlands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AN",--}}
                                                            {{--"code3": "ANT",--}}
                                                            {{--"name": "Netherlands Antilles"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "NC",--}}
                                                            {{--"code3": "NCL",--}}
                                                            {{--"name": "New Caledonia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "NZ",--}}
                                                            {{--"code3": "NZL",--}}
                                                            {{--"name": "New Zealand"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "NI",--}}
                                                            {{--"code3": "NIC",--}}
                                                            {{--"name": "Nicaragua"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "NE",--}}
                                                            {{--"code3": "NER",--}}
                                                            {{--"name": "Niger"--}}
                                                        {{--}, {"code2": "", "code3": "", "name": "Nigeria"}, {--}}
                                                            {{--"code2": "",--}}
                                                            {{--"code3": "",--}}
                                                            {{--"name": "Niue"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "NF",--}}
                                                            {{--"code3": "NFK",--}}
                                                            {{--"name": "Norfolk Island"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "KP",--}}
                                                            {{--"code3": "PRK",--}}
                                                            {{--"name": "North Korea"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MP",--}}
                                                            {{--"code3": "MNP",--}}
                                                            {{--"name": "Northern Mariana Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "NO",--}}
                                                            {{--"code3": "NOR",--}}
                                                            {{--"name": "Norway"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "OM",--}}
                                                            {{--"code3": "OMN",--}}
                                                            {{--"name": "Oman"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PK",--}}
                                                            {{--"code3": "PAK",--}}
                                                            {{--"name": "Pakistan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PW",--}}
                                                            {{--"code3": "PLW",--}}
                                                            {{--"name": "Palau"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PA",--}}
                                                            {{--"code3": "PAN",--}}
                                                            {{--"name": "Panama"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PG",--}}
                                                            {{--"code3": "PNG",--}}
                                                            {{--"name": "Papua New Guinea"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PY",--}}
                                                            {{--"code3": "PRY",--}}
                                                            {{--"name": "Paraguay"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PE",--}}
                                                            {{--"code3": "PER",--}}
                                                            {{--"name": "Peru"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PH",--}}
                                                            {{--"code3": "PHL",--}}
                                                            {{--"name": "Philippines"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PN",--}}
                                                            {{--"code3": "PCN",--}}
                                                            {{--"name": "Pitcairn Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PL",--}}
                                                            {{--"code3": "POL",--}}
                                                            {{--"name": "Poland"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PT",--}}
                                                            {{--"code3": "PRT",--}}
                                                            {{--"name": "Portugal"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PR",--}}
                                                            {{--"code3": "PRI",--}}
                                                            {{--"name": "Puerto Rico"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "QA",--}}
                                                            {{--"code3": "QAT",--}}
                                                            {{--"name": "Qatar"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CG",--}}
                                                            {{--"code3": "COG",--}}
                                                            {{--"name": "Republic of the Congo"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "RO",--}}
                                                            {{--"code3": "ROU",--}}
                                                            {{--"name": "Romania"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "RU",--}}
                                                            {{--"code3": "RUS",--}}
                                                            {{--"name": "Russia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "RW",--}}
                                                            {{--"code3": "RWA",--}}
                                                            {{--"name": "Rwanda"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "BL",--}}
                                                            {{--"code3": "BLM",--}}
                                                            {{--"name": "Saint Barthelemy"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SH",--}}
                                                            {{--"code3": "SHN",--}}
                                                            {{--"name": "Saint Helena"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "KN",--}}
                                                            {{--"code3": "KNA",--}}
                                                            {{--"name": "Saint Kitts and Nevis"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "LC",--}}
                                                            {{--"code3": "LCA",--}}
                                                            {{--"name": "Saint Lucia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "MF",--}}
                                                            {{--"code3": "MAF",--}}
                                                            {{--"name": "Saint Martin"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "PM",--}}
                                                            {{--"code3": "SPM",--}}
                                                            {{--"name": "Saint Pierre and Miquelon"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "VC",--}}
                                                            {{--"code3": "VCT",--}}
                                                            {{--"name": "Saint Vincent and the Grenadines"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "WS",--}}
                                                            {{--"code3": "WSM",--}}
                                                            {{--"name": "Samoa"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SM",--}}
                                                            {{--"code3": "SMR",--}}
                                                            {{--"name": "San Marino"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "ST",--}}
                                                            {{--"code3": "STP",--}}
                                                            {{--"name": "Sao Tome and Principe"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SA",--}}
                                                            {{--"code3": "SAU",--}}
                                                            {{--"name": "Saudi Arabia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SN",--}}
                                                            {{--"code3": "SEN",--}}
                                                            {{--"name": "Senegal"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "RS",--}}
                                                            {{--"code3": "SRB",--}}
                                                            {{--"name": "Serbia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SC",--}}
                                                            {{--"code3": "SYC",--}}
                                                            {{--"name": "Seychelles"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SL",--}}
                                                            {{--"code3": "SLE",--}}
                                                            {{--"name": "Singapore"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SG",--}}
                                                            {{--"code3": "SGP",--}}
                                                            {{--"name": "Singapore"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SK",--}}
                                                            {{--"code3": "SVK",--}}
                                                            {{--"name": "Slovakia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SI",--}}
                                                            {{--"code3": "SVN",--}}
                                                            {{--"name": "Slovenia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SB",--}}
                                                            {{--"code3": "SLB",--}}
                                                            {{--"name": "Solomon Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SO",--}}
                                                            {{--"code3": "SOM",--}}
                                                            {{--"name": "Somalia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "ZA",--}}
                                                            {{--"code3": "ZAF",--}}
                                                            {{--"name": "South Africa"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "KR",--}}
                                                            {{--"code3": "KOR",--}}
                                                            {{--"name": "South Korea"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "ES",--}}
                                                            {{--"code3": "ESP",--}}
                                                            {{--"name": "Spain"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "LK",--}}
                                                            {{--"code3": "LKA",--}}
                                                            {{--"name": "Sri Lanka"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SD",--}}
                                                            {{--"code3": "SDN",--}}
                                                            {{--"name": "Sudan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SR",--}}
                                                            {{--"code3": "SUR",--}}
                                                            {{--"name": "Suriname"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SJ",--}}
                                                            {{--"code3": "SJM",--}}
                                                            {{--"name": "Svalbard"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SZ",--}}
                                                            {{--"code3": "SWZ",--}}
                                                            {{--"name": "Swaziland"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SE",--}}
                                                            {{--"code3": "SWE",--}}
                                                            {{--"name": "Sweden"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "CH",--}}
                                                            {{--"code3": "CHE",--}}
                                                            {{--"name": "Switzerland"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "SY",--}}
                                                            {{--"code3": "SYR",--}}
                                                            {{--"name": "Syria"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TW",--}}
                                                            {{--"code3": "TWN",--}}
                                                            {{--"name": "Taiwan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TJ",--}}
                                                            {{--"code3": "TJK",--}}
                                                            {{--"name": "Tajikistan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TZ",--}}
                                                            {{--"code3": "TZA",--}}
                                                            {{--"name": "Tanzania"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TH",--}}
                                                            {{--"code3": "THA",--}}
                                                            {{--"name": "Thailand"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TL",--}}
                                                            {{--"code3": "TLS",--}}
                                                            {{--"name": "Timor-Leste"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TG",--}}
                                                            {{--"code3": "TGO",--}}
                                                            {{--"name": "Togo"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TK",--}}
                                                            {{--"code3": "TKL",--}}
                                                            {{--"name": "Tokelau"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TO",--}}
                                                            {{--"code3": "TON",--}}
                                                            {{--"name": "Tonga"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TT",--}}
                                                            {{--"code3": "TTO",--}}
                                                            {{--"name": "Trinidad and Tobago"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TN",--}}
                                                            {{--"code3": "TUN",--}}
                                                            {{--"name": "Tunisia"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TR",--}}
                                                            {{--"code3": "TUR",--}}
                                                            {{--"name": "Turkey"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TM",--}}
                                                            {{--"code3": "TKM",--}}
                                                            {{--"name": "Turkmenistan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TC",--}}
                                                            {{--"code3": "TCA",--}}
                                                            {{--"name": "Turks and Caicos Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "TV",--}}
                                                            {{--"code3": "TUV",--}}
                                                            {{--"name": "Tuvalu"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "UG",--}}
                                                            {{--"code3": "UGA",--}}
                                                            {{--"name": "Uganda"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "UA",--}}
                                                            {{--"code3": "UKR",--}}
                                                            {{--"name": "Ukraine"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "AE",--}}
                                                            {{--"code3": "ARE",--}}
                                                            {{--"name": "United Arab Emirates"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "GB",--}}
                                                            {{--"code3": "GBR",--}}
                                                            {{--"name": "United Kingdom"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "US",--}}
                                                            {{--"code3": "USA",--}}
                                                            {{--"name": "United States"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "UY",--}}
                                                            {{--"code3": "URY",--}}
                                                            {{--"name": "Uruguay"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "VI",--}}
                                                            {{--"code3": "VIR",--}}
                                                            {{--"name": "US Virgin Islands"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "UZ",--}}
                                                            {{--"code3": "UZB",--}}
                                                            {{--"name": "Uzbekistan"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "VU",--}}
                                                            {{--"code3": "VUT",--}}
                                                            {{--"name": "Vanuatu"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "VE",--}}
                                                            {{--"code3": "VEN",--}}
                                                            {{--"name": "Venezuela"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "VN",--}}
                                                            {{--"code3": "VNM",--}}
                                                            {{--"name": "Vietnam"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "WF",--}}
                                                            {{--"code3": "WLF",--}}
                                                            {{--"name": "Wallis and Futuna"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "EH",--}}
                                                            {{--"code3": "ESH",--}}
                                                            {{--"name": "Western Sahara"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "YE",--}}
                                                            {{--"code3": "YEM",--}}
                                                            {{--"name": "Yemen"--}}
                                                        {{--}, {--}}
                                                            {{--"code2": "ZM",--}}
                                                            {{--"code3": "ZMB",--}}
                                                            {{--"name": "Zambia"--}}
                                                        {{--}, {"code2": "ZW", "code3": "ZWE", "name": "Zimbabwe"}],--}}
                                                        {{--"paymentArrival": false,--}}
                                                        {{--"paymentArrivalWithApproval": false,--}}
                                                        {{--"paymentGateways": [],--}}
                                                        {{--"redirect": "",--}}
                                                        {{--"termsAndConditions": false,--}}
                                                        {{--"termsAndConditionsLink": ""--}}
                                                    {{--},--}}
                                                    {{--"text": {--}}
                                                        {{--"addressAddressFirst": "Address line 1",--}}
                                                        {{--"addressAddressSecond": "Address line 2",--}}
                                                        {{--"addressBilling": "Billing address",--}}
                                                        {{--"addressBillingDisabled": "Billing address is not enabled.",--}}
                                                        {{--"addressCity": "City",--}}
                                                        {{--"addressCompany": "Company",--}}
                                                        {{--"addressCountry": "Country",--}}
                                                        {{--"addressEmail": "Email",--}}
                                                        {{--"addressFirstName": "First name",--}}
                                                        {{--"addressLastName": "Last name",--}}
                                                        {{--"addressPhone": "Phone number",--}}
                                                        {{--"addressSelectPaymentMethod": "Select payment method.",--}}
                                                        {{--"addressShipping": "Shipping address",--}}
                                                        {{--"addressShippingCopy": "Use billing address",--}}
                                                        {{--"addressShippingDisabled": "Shipping address is not enabled.",--}}
                                                        {{--"addressState": "State\/Province",--}}
                                                        {{--"addressZipCode": "Zip code",--}}
                                                        {{--"book": "Book now",--}}
                                                        {{--"paymentArrival": "Pay on arrival (need to be approved)",--}}
                                                        {{--"paymentArrivalWithApproval": "Pay on arrival (instant booking)",--}}
                                                        {{--"paymentArrivalSuccess": "Your request has been successfully sent. Please wait for approval.",--}}
                                                        {{--"paymentArrivalWithApprovalSuccess": "Your request has been successfully received. We are waiting you!",--}}
                                                        {{--"paymentMethod": "Payment method",--}}
                                                        {{--"paymentFull": "Pay full amount",--}}
                                                        {{--"paymentMethodNone": "None",--}}
                                                        {{--"paymentMethodArrival": "!",--}}
                                                        {{--"paymentMethodTransactionID": "Transaction ID",--}}
                                                        {{--"paymentMethodWooCommerce": "WooCommerce",--}}
                                                        {{--"paymentMethodWooCommerceOrderID": "Order ID",--}}
                                                        {{--"success": "!",--}}
                                                        {{--"termsAndConditions": "I accept to agree to the Terms & Conditions.",--}}
                                                        {{--"termsAndConditionsInvalid": "You must agree with our Terms & Conditions to continue.",--}}
                                                        {{--"title": "Order",--}}
                                                        {{--"unavailable": "The period you selected is not available anymore. The calendar will refresh to update the schedule.",--}}
                                                        {{--"unavailableCoupon": "The coupon you entered is not available anymore."--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"reservation": {--}}
                                                    {{--"data": [],--}}
                                                    {{--"text": {--}}
                                                        {{--"addressShippingCopy": "Same as billing address.",--}}
                                                        {{--"buttonApprove": "!",--}}
                                                        {{--"buttonCancel": "!",--}}
                                                        {{--"buttonClose": "!",--}}
                                                        {{--"buttonDelete": "!",--}}
                                                        {{--"buttonReject": "!",--}}
                                                        {{--"dateCreated": "!",--}}
                                                        {{--"id": "Reservation ID",--}}
                                                        {{--"instructions": "Click to edit the reservation.",--}}
                                                        {{--"language": "!",--}}
                                                        {{--"noAddressBilling": "No billing address.",--}}
                                                        {{--"noAddressShipping": "No shipping address.",--}}
                                                        {{--"noExtras": "No extras.",--}}
                                                        {{--"noDiscount": "No discount.",--}}
                                                        {{--"noCoupon": "No coupon.",--}}
                                                        {{--"noFees": "No taxes or fees.",--}}
                                                        {{--"noForm": "Form was not completed.",--}}
                                                        {{--"noFormField": "Form field was not completed.",--}}
                                                        {{--"price": "Price",--}}
                                                        {{--"priceChange": "Price change",--}}
                                                        {{--"priceTotal": "Total",--}}
                                                        {{--"selectDays": "Please select the days from calendar.",--}}
                                                        {{--"selectHours": "Please select the days and hours from calendar.",--}}
                                                        {{--"status": "!",--}}
                                                        {{--"statusApproved": "!",--}}
                                                        {{--"statusCanceled": "!",--}}
                                                        {{--"statusExpired": "!",--}}
                                                        {{--"statusPending": "!",--}}
                                                        {{--"statusRejected": "!",--}}
                                                        {{--"title": "Reservation",--}}
                                                        {{--"titleDetails": "Details"--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"rules": {--}}
                                                    {{--"data": {"rule": null, "id": "0"},--}}
                                                    {{--"text": {--}}
                                                        {{--"maxTimeLapseDaysWarning": "!",--}}
                                                        {{--"maxTimeLapseHoursWarning": "!",--}}
                                                        {{--"minTimeLapseDaysWarning": "!",--}}
                                                        {{--"minTimeLapseHoursWarning": "!"--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"search": {--}}
                                                    {{--"data": [],--}}
                                                    {{--"text": {--}}
                                                        {{--"checkIn": "Check in",--}}
                                                        {{--"checkOut": "Check out",--}}
                                                        {{--"hourEnd": "Finish at",--}}
                                                        {{--"hourStart": "Start at",--}}
                                                        {{--"noItems": "No book items",--}}
                                                        {{--"noServices": "There are no services available for the period you selected.",--}}
                                                        {{--"noServicesSplitGroup": "You cannot add divided groups to a reservation.",--}}
                                                        {{--"title": "!"--}}
                                                    {{--}--}}
                                                {{--},--}}
                                                {{--"sidebar": {--}}
                                                    {{--"data": {--}}
                                                        {{--"noItems": false,--}}
                                                        {{--"positions": {--}}
                                                            {{--"search": {"column": 1, "row": 1},--}}
                                                            {{--"extras": {"column": 1, "row": 2},--}}
                                                            {{--"coupons": {"column": 1, "row": 3},--}}
                                                            {{--"reservation": {"column": 3, "row": 1},--}}
                                                            {{--"cart": {"column": 3, "row": 1},--}}
                                                            {{--"form": {"column": 4, "row": 1},--}}
                                                            {{--"order": {"column": 4, "row": 2}--}}
                                                        {{--},--}}
                                                        {{--"style": 2--}}
                                                    {{--}, "text": []--}}
                                                {{--},--}}
                                                {{--"woocommerce": {--}}
                                                    {{--"data": {--}}
                                                        {{--"addToCart": false,--}}
                                                        {{--"cartURL": "",--}}
                                                        {{--"enabled": false,--}}
                                                        {{--"productID": 0,--}}
                                                        {{--"redirect": false--}}
                                                    {{--}, "text": {"addToCart": "!"}--}}
                                                {{--}--}}
                                            {{--});--}}
                                        {{--});--}}
                                    {{--</script>--}}
                                    {{--<div class="DOPBSPCalendar-info-message" id="DOPBSPCalendar-info-message1">--}}
                                        {{--<div class="dopbsp-icon"></div>--}}
                                        {{--<div class="dopbsp-text"></div>--}}
                                        {{--<div class="dopbsp-timer"></div>--}}
                                        {{--<a href="javascript:void(0)"--}}
                                           {{--onclick="jQuery('#DOPBSPCalendar-info-message1').stop(true, true).fadeOut(300)"--}}
                                           {{--class="dopbsp-close"></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="DOPBSPCalendar-wrapper notranslate" id="DOPBSPCalendar1"><a--}}
                                                {{--href="wp-admin/admin-ajax.html"></a></div>--}}
                                {{--</div>--}}
                                {{--<div id="categories-2" class="visible-all-devices widget"><h3>Categories</h3>--}}
                                    {{--<ul>--}}
                                        {{--<li class="cat-item-none">No categories</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div id="my_postwidget-2" class="widget"><h3>Recent Posts</h3>--}}
                                    {{--<ul class="post-list unstyled"></ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--End #motopress-main-->
    </div>

@endsection