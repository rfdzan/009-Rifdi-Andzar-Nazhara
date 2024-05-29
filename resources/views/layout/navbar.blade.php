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
        @if (session()->has('user'))
        <div class="is-logged-in">
            <p style="color:white"><a href="{{route('user', session()->get('user'))}}">{{session()->get('user')}}</a></p>
        </div>
        @endif
        @if (!session()->has('user'))
        <div class="sign-in-container">
            <a class="sign-in-button" href="{{route('login')}}">
                <p>Sign Up/Log in</p>
            </a>
        </div>
        @endif
        @if (session()->get('isLoggedin'))
        <p><a href="{{route('logout')}}">logout</a></p>
        @endif
    </div>
</section>