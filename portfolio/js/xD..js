var typed = new Typed(".typed", {
    strings: [
        "nns",
        "Web Developer",
        "Web Designer",
        "Photography"
    ],
    smartBackspace: true,
    backSpeed: 50,
    typeSpeed: 90,
    backDelay: 30,
    loop: true
});
$(function() {
    $(document).scroll(function() {
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});