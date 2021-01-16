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
    <body>
    <?php include('includes/header.php'); ?>
    <main class="container">
        <div class="pink-bg pink-bg--right"></div>
        <section class="me">
            <h1 class="me__page-title bold">Cu Janeway</h1>
            <img class="me__image" src="assets/me.webp">
            <p class="me__subtitle color-japanese-laurel semi-bold">Web Development</p>
            <p class="me__description">Hey there, I'm a Web Developer from Manchester. Why don't you check out some of my work and doodles across the site.</p>
        </section>
        <section class="recent-posts">
            <h2 class="recent-posts__title">Recent Posts</h2>
            <ul class="recent-posts__list">
                <li class="recent-posts__list-item"> Lorum ipsum dulce et decorum est dulce et decorum est</li>
                <li class="recent-posts__list-item"> Lorum ipsum dulce et decorum est</li>
                <li class="recent-posts__list-item"> Lorum ipsum dulce et decorum est</li>
                <li class="recent-posts__list-item"> Lorum ipsum dulce et decorum est</li>
            </ul>
        </section>
        <img class="doodle doodle--home" src="assets/illustrations/doodle1.svg">
    </main>
    <?php include('includes/footer.php'); ?>
    </body>
</html>