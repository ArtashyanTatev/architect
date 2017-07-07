@if(session()->has('success'))
    <div class="alert alert-success success-msg">
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger success-msg">
        {{ session()->get('error') }}
    </div>
@endif


<header class="motopress-wrapper header">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-type="header" data-motopress-id="593d75d8ac834">
                <div class="container">
                    <div class="row">
                        <div class="span12" data-motopress-type="static">
                                <span class="header-slogan">
                                    DS Archstudio
                                </span></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="span12" data-motopress-type="static">
                            <!-- BEGIN LOGO -->
                            <div class="logo">
                                <a href="{{route('home')}}" class="logo_h logo_h__img">
                                    <img src="{{asset('images/logo.png')}}" alt="" title="">
                                </a>

                            </div>
                            <!-- END LOGO -->        </div>
                    </div>
                </div>
                <div class="nav-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="span12" data-motopress-type="static"
                                 data-motopress-static-file="static/static-nav.php">
                                <!-- BEGIN MAIN NAVIGATION -->
                                <nav class="nav nav__primary clearfix">
                                    <ul id="topnav" class="sf-menu">
                                        <li id="menu-item-1940"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page-item-203 {{Request::url() == route('home')? 'current-menu-item page_item current_page_item':''}}">
                                            <a href="{{route('home')}}">@lang('message.home')</a></li>
                                        <li id="menu-item-1942"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children
{{Request::url() == route('_aboutus') ? 'current-menu-item page_item current_page_item':''}}
">
                                            <a href="{{route('_aboutus')}}">@lang('message.about_us')</a>

                                        </li>
                                        <li id="menu-item-1941"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children
{{Request::is('*/category*') ? 'current-menu-item page_item current_page_item':''}}
">
                                            <a>@lang('message.gallery')</a>
                                            <ul class="sub-menu">

                                                @foreach($categories as $cat)
                                                    <li id="menu-item-1947"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page
">
                                                        <a href="{{route('category', ['link'=>$cat->link])}}">

                                                            @if (session('locale') == 'hy')
                                                                {{$cat->name_hy}}
                                                            @elseif(session('locale') == 'ru')
                                                                {{$cat->name_ru}}
                                                            @else
                                                                {{$cat->name_en}}
                                                            @endif
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li id="menu-item-1939"
                                            class="menu-item menu-item-type-post_type menu-item-object-page
{{Request::url() == route('_news')? 'current-menu-item page_item current_page_item':''}}
"><a
                                                    href="{{route('_news')}}">@lang('message.news')</a></li>
                                        <li id="menu-item-1937"
                                            class="menu-item menu-item-type-post_type menu-item-object-page
{{Request::url() == route('_contactus') ? 'current-menu-item page_item current_page_item':''}}
"><a
                                                    href="{{route('_contactus')}}">@lang('message.contacts')</a></li>
                                        <li  class="dropdown">
                                            {{strtoupper(LaravelLocalization::setLocale()?LaravelLocalization::setLocale(): config('app.locale'))}}

                                            <span class="caret">

                                            </span>

                                            <ul class="dropdown-menu menu-item menu-item-type-post_type menu-item-object-page">
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>
                                                        <a rel="alternate" hreflang="{{ $localeCode }}"
                                                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>


                                </nav><!-- END MAIN NAVIGATION -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>