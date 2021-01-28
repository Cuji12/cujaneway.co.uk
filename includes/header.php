<?php 
    $URLs = ['about-this-site',  'contact', 'blog'];
    $currentURL = $_SERVER['REQUEST_URI'];
    $karry = false;
    foreach($URLs as $URL){
        if(stripos($currentURL, $URL)) {
            $karry = true;
            break;
        } 
    }
?>
<html lang="en">
<head>
    <title>Cu Janeway - Web Developer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Web Developer based in Manchester, UK specialising in PHP and JavaScript to build awesome websites.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="icon" href="assets/favicon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
</head>
<body id="body">
    <header class="header <?= $karry == true ? 'header--karry' : '';?>">
        <a href="/">
            <img class="header__logo" src="assets/logo.png">
        </a>
        <div class="header__mobile-menu desktop-hide" id="mobile-menu">
            <hr class="header__burger-line">
            <hr class="header__burger-line color-japanese-laurel" id="mobile-menu-middle">
            <hr class="header__burger-line">
        </div>
        <nav class="header__desktop-menu desktop-show">
            <a class="header__link" href="/">Home</a>
            <a class="header__link" href="/">Blog</a>
            <a class="header__link" href="/">Projects</a>
            <a class="header__link" href="/">Contact</a>
        </nav>
    </header>