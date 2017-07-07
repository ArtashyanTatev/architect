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

@if($errors->first())
    <div class="alert alert-danger alert-dismissable fade in" style="position: relative">
        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif

<header class="motopress-wrapper header">

    <div class="container">

        <div class="row">

            <div>
                <a style="color:white;margin-right:40px;" class="pull-right" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="span12" data-motopress-wrapper-type="header" data-motopress-id="593d75d8ac834">
                <div class="container">
                    <div class="row">
                        <div class="span12" data-motopress-type="static">
                                <span class="header-slogan">
                                    DS Archstudio
                                </span>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="span12" data-motopress-type="static">
                            <!-- BEGIN LOGO -->
                            <div class="logo">
                                <a href="{{route('admin')}}" class="logo_h logo_h__img">
                                    <img src="{{asset('images/logo.png')}}" alt="logo">
                                </a>

                                <a style="color:white" class="pull-right update_section" href="0"
                                   data-toggle="modal" data-target="#modalUpdate"
                                   data-update_href="{{route('update_1')}}">
                                    <i class="fa fa-pencil " style="font-size: 30px;color:#4d2117"
                                       aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
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
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-203
{{Request::url() == route('admin')? 'current-menu-item page_item current_page_item':''}}">
                                            <a href="{{route('admin')}}">Home</a></li>
                                        <li id="menu-item-1942"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children
{{Request::url() == route('aboutus')? 'current-menu-item page_item current_page_item':''}}">
                                            <a href="{{route('aboutus')}}">About Us</a>

                                        </li>
                                        <li id="menu-item-1941"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children {{
                                            Request::segment(2) == 'category' || Request::segment(3) == 'category' ?

                                             'current-menu-item page_item current_page_item':''}}">
                                            <a>Gallery</a>
                                            <ul class="sub-menu">
                                                @foreach($categories as $cat)
                                                    <li id="menu-item-1947"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{route('adminCategory',['link'=>$cat->link])}}">{{$cat->name_en}}</a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </li>

                                        <li id="menu-item-1939"
                                            class="menu-item menu-item-type-post_type menu-item-object-page
{{Request::url() == route('news')? 'current-menu-item page_item current_page_item':''}}"><a
                                                    href="{{route('news')}}">News</a></li>
                                        <li id="menu-item-1937"
                                            class="menu-item menu-item-type-post_type menu-item-object-page
{{Request::url() == route('contactus')? 'current-menu-item page_item current_page_item':''}}"><a
                                                    href="{{route('contactus')}}">Contacts</a></li>



                                        <li class="dropdown zIndex menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="#" class="dropdown-toggle general"
                                               data-toggle="dropdown"> Admin
                                                <span class="caret"></span></a>
                                            <ul id="login-dp" class="dropdown-content">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <form class="form" role="form" method="post"
                                                                  action="{{route('changeLogin')}}"
                                                                  accept-charset="UTF-8"
                                                                  id="login-nav">
                                                                <h6 style="color: black">Change login and password</h6>
                                                                {{ csrf_field() }}
                                                                <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                                                                    <input id="email" type="text"
                                                                           class="form-control product_search product_search for_button_fade"
                                                                           name="email" value="{{Auth::user()->email}}"
                                                                           placeholder="New Login"
                                                                           required>
                                                                    @if ($errors->has('login'))
                                                                        <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                                                    @endif
                                                                </div>
                                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                    <input id="password" type="password"
                                                                           class="form-control product_search product_search for_button_fade"
                                                                           name="password" placeholder="Password"
                                                                           required>

                                                                    @if ($errors->has('password'))
                                                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                                    @endif

                                                                </div>

                                                                <div class="form-group">
                                                                    <input id="password-confirm" type="password"
                                                                           class="form-control product_search product_search for_button_fade "
                                                                           name="password_confirmation"
                                                                           placeholder="Confirm Password"
                                                                           required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit"
                                                                            class="btn btn-primary btn-block">Save
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>






                                    </ul>

                                </nav><!-- END MAIN NAVIGATION -->            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
