window.addEventListener('DOMContentLoaded', (event) => {
    body = document.getElementById('body');
});

document.getElementById('mobile-menu').addEventListener('click', event => {
    body.setAttribute('style', 'height: 100%; overflow: hidden;');
    body.insertAdjacentHTML('afterbegin',  
        `<div class="menu" id="menu">
            <div class="menu__exit" id="exit-menu">
                <hr class="menu__cross-line menu__cross-line--1">
                <hr class="menu__cross-line menu__cross-line--2">
            </div>
            <a class="menu__link" href="/">Home</a>
            <a class="menu__link" href="/blog">Blog</a>
            <a class="menu__link" href="/projects">Projects</a>
            <a class="menu__link" href="/contact">Contact</a>
            <img class="doodle doodle--menu" src="assets/illustrations/doodle8.png">  
        </div>`);

        document.getElementById('exit-menu').onclick = function exitMenu() {
            body.setAttribute('style', 'height: unset; overflow: unset;');
            document.getElementById('menu').remove();
        }
});

