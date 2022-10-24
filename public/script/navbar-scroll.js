//fungsi jquery untuk nafbar  saat di scroll maka akan muncul navbarnya
$(function () {
    $(document).scroll(function () {
      let $nav = $(".navbar-fixed-top");
      $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height()); // melakukan pengecekan saat di scroll di cek apakah scrolltop lebih panjang dari panjangnya layout dalam hitungan pixel
    });
  });