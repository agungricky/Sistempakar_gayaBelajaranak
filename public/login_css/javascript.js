$(document).ready(function () {
    // Setelah halaman di-load, tunggu 2 detik
    // dan lalu scroll ke bawah
    $("html, body").delay(500).animate({
        scrollTop: $("#content").offset().top
    }, 500);
});