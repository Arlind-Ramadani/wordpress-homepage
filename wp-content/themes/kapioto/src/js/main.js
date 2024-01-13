$(document).ready(function () {
    $(".menubar").click(() => {
        $(".menubar").toggleClass("active");
        $(".menu").toggleClass("active");
        $(".actions").toggleClass("active");
    });
});
