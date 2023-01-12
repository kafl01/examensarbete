jQuery(document).ready(function () {
  jQuery(".menu-btn").click(function (e) {
    jQuery(".nav-menu").toggleClass("open");

    e.preventDefault();
  });
});
