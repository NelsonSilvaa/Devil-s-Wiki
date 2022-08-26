$(document).ready(function() {
    $('.menu-toggle').on('click', function() {
        $('.nav').toggleClass('showing');
        $('.nav ul').toggleClass('showing');
        $('.main').toggleClass('showing');
        $('.main ul').toggleClass('showing');
    });
});