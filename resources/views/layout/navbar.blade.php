<link rel="stylesheet" href="css/default/sign-in-button.css">
<link rel="stylesheet" href="css/default/home-button.css">
<link rel="stylesheet" href="css/default/search.css">
<section id="navbar">
    <div class="navbar-container">
        <div class="site-logo-container">
            <a href="/">
                <img class="site-logo" src="{{asset('logo.svg')}}">
            </a>
        </div>
        <div class="home-link-container">
            <a class="home-link-button" href="/">
                <p>Home</p>
            </a>
        </div>
        <form id="search-form">
            <input id="input-field-search" type="search" name="q" placeholder="Search..">
        </form>
        @if (session()->has(request()->cookie('sessionId')))
        <div class="is-logged-in">
            <p style="color:white"><a class="is-logged-in-link" href="{{route('user', session()->get(request()->cookie('sessionId'))['user'])}}">{{session()->get(request()->cookie('sessionId'))["user"]}}</a></p>
        </div>
        @endif
        @if (!session()->has(request()->cookie('sessionId')))
        <div class="sign-in-container">
            <a class="sign-in-button" href="{{route('login')}}">
                <p>Sign Up/Log in</p>
            </a>
        </div>
        @endif
        @if (session()->has(request()->cookie('sessionId')))
        <p class="logout-link-p"><a class="logout-link" href="{{route('logout')}}">Logout</a></p>
        @endif
    </div>
</section>