<link rel="stylesheet" href="css/default/sign-in-button.css">
<link rel="stylesheet" href="css/default/home-button.css">
<link rel="stylesheet" href="css/default/search.css">
<section class="navbar">
    <div class="navbar-container">
        <div class="site-logo-container">
            <a href="/">
                <img class="site-logo" src="{{asset('placeholder_logo.png')}}" width="50" height="50">
            </a>
        </div>
        <div class="home-link-container">
            <a class="home-link-button" href="/">
                <p>Home</p>
            </a>
        </div>
        <div class="search-box-container">
            <form id="search-form">
                <input id="main-search" type="search" name="q" placeholder="Search..">
            </form>
        </div>
        <div class="sign-in-container">
            <a class="sign-in-button" href="/registration">
                <p>Sign Up/Log in</p>
            </a>
        </div>
    </div>
</section>