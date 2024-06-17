<header id="header">
    <div class="logo">
        <a href="{{route('index')}}"><img src="{{ asset('assets/image/logo.png') }}" alt="logo"></a>
    </div>
    <div class="menu">
        <div class="list-menu">
            <ul>
                <li class="{{ Route::currentRouteName() == 'index' ? 'active' : '' }}"><a href="{{route('index')}}">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li class="{{ Route::currentRouteName() == 'roomlist' ? 'active' : '' }}"><a href="{{ route('roomlist')}}">ROOM</a></li>
                <li><a href="#">RESTAURANT</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </div>
    </div>
    <div class="login">
        <ul>
            @if(Auth::check())
                <li><a href="#">Hello, {{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('logout') }}">LOGOUT</a></li>
            @else
                <li><a href="{{ route('login') }}">LOGIN</a></li>
                <li><a href="{{ route('register') }}">REGISTER</a></li>
            @endif
        </ul>
    </div>
</header>