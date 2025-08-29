$(document).ready(function () {
  $('a[href*="#"]').on("click", function (event) {
    if (
      this.pathname.replace(/^\//, "") ==
        location.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        event.preventDefault();
        $("html, body").animate(
          {
            scrollTop: target.offset().top - 70,
          },
          800
        );
      }
    }
  });
});
