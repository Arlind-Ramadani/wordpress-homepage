$(document).ready(function () {
    $(".menubar").click(() => {
        $(".menubar").toggleClass("active");
        $(".menu").toggleClass("active");
        $(".actions").toggleClass("active");
    });

    $(".up-arrow").click((e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});
