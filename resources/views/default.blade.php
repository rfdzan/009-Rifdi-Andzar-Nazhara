<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kanvas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="top-bar-container">
        <div class="img-container">
            <img class="site-logo" src="placeholder_logo.png" width="50" height="50">
        </div>
        <div class="home-link-container">
            <p class="home-link">Home</p>
        </div>
        <div class="search-box-container">
            <form id="search-box">
                <input id="main-search" type="search" name="q" placeholder="Search..">
                <button>Search</button>
            </form>
        </div>
        <div class="sign-in-container">
            <p class="sign-in-text">Sign Up/Log in</p>
        </div>
    </div>
    @yield("content")
</body>

</html>