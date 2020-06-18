(function($) {
  "use strict";
  $(window).on("load", function() {
    $("#preloader").fadeOut();
    $("#portfolio").mixItUp();
    var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
      var stickyHeight = sticky.outerHeight();
      var stickyTop = stickyWrapper.offset().top;
      if (scrollElement.scrollTop() >= stickyTop) {
        stickyWrapper.height(stickyHeight);
        sticky.addClass("is-sticky");
      } else {
        sticky.removeClass("is-sticky");
        stickyWrapper.height("auto");
      }
    };
    $('[data-toggle="sticky-onscroll"]').each(function() {
      var sticky = $(this);
      var stickyWrapper = $("<div>").addClass("sticky-wrapper");
      sticky.before(stickyWrapper);
      sticky.addClass("sticky");
      $(window).on("scroll.sticky-onscroll resize.sticky-onscroll", function() {
        stickyToggle(sticky, stickyWrapper, $(this));
      });
      stickyToggle(sticky, stickyWrapper, $(window));
    });
    $(".mobile-menu").slicknav({
      prependTo: ".navbar-header",
      parentTag: "liner",
      allowParentLinks: true,
      duplicate: true,
      label: "",
      closedSymbol: '<i class="lni-chevron-right"></i>',
      openedSymbol: '<i class="lni-chevron-down"></i>'
    });

    // var wow = new WOW({ mobile: false });
    // wow.init();
    // $(".lightbox").nivoLightbox({ effect: "fadeScale", keyboardNav: true });
    // $(".counterUp").counterUp({ delay: 10, time: 1000 });
    // $("#range").ionRangeSlider({
    //   hide_min_max: true,
    //   keyboard: true,
    //   min: 0,
    //   max: 5000,
    //   from: 1000,
    //   to: 4000,
    //   type: "double",
    //   step: 1,
    //   prefix: "$",
    //   grid: true
    // });

    var owl = $("#testimonials");
    owl.owlCarousel({
      navigation: false,
      pagination: true,
      slideSpeed: 1000,
      stopOnHover: true,
      autoPlay: true,
      items: 3,
      itemsDesktop: [1199, 3],
      itemsDesktopSmall: [980, 2],
      itemsTablet: [768, 1],
      itemsTablet: [767, 1],
      itemsTabletSmall: [480, 1],
      itemsMobile: [479, 1]
    });
    var owl = $("#latest-property");
    owl.owlCarousel({
      navigation: false,
      pagination: true,
      slideSpeed: 1000,
      stopOnHover: true,
      autoPlay: true,
      items: 3,
      itemsDesktopSmall: [1024, 2],
      itemsTablet: [600, 1],
      itemsMobile: [479, 1]
    });
    var owl = $("#listing-carousel");
    owl.owlCarousel({
      navigation: true,
      pagination: false,
      slideSpeed: 1000,
      stopOnHover: true,
      autoPlay: false,
      items: 1,
      itemsDesktopSmall: [1024, 1],
      itemsTablet: [600, 1],
      itemsMobile: [479, 1]
    });
    var owl = $("#property-slider");
    owl.owlCarousel({
      navigation: true,
      pagination: false,
      slideSpeed: 1000,
      stopOnHover: true,
      autoPlay: true,
      items: 1,
      itemsDesktopSmall: [1024, 1],
      itemsTablet: [600, 1],
      itemsMobile: [479, 1]
    });
    var newProducts = $("#listing-carousel");
    newProducts.find(".owl-prev").html('<i class="lni-chevron-left"></i>');
    newProducts.find(".owl-next").html('<i class="lni-chevron-right"></i>');
    var touchSlider = $("#property-slider");
    touchSlider.find(".owl-prev").html('<i class="lni-chevron-left"></i>');
    touchSlider.find(".owl-next").html('<i class="lni-chevron-right"></i>');
    var testiCarousel = $(".testimonials-carousel");
    testiCarousel.find(".owl-prev").html('<i class="lni-chevron-left"></i>');
    testiCarousel.find(".owl-next").html('<i class="lni-chevron-right"></i>');
    var owl;
    $(window).on("load", function() {
      owl = $("#owl-demo");
      owl.owlCarousel({
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        afterInit: afterOWLinit,
        afterUpdate: afterOWLinit
      });
      function afterOWLinit() {
        $(".owl-controls .owl-page").append('<a class="item-link" />');
        var pafinatorsLink = $(".owl-controls .item-link");
        $.each(this.owl.userItems, function(i) {
          $(pafinatorsLink[i])
            .css({
              background:
                "url(" +
                $(this)
                  .find("img")
                  .attr("src") +
                ") center center no-repeat",
              "-webkit-background-size": "cover",
              "-moz-background-size": "cover",
              "-o-background-size": "cover",
              "background-size": "cover"
            })
            .on("click", function() {
              owl.trigger("owl.goTo", i);
            });
        });
        $(".owl-pagination").prepend('<a href="#prev" class="prev-owl"/>');
        $(".owl-pagination").append('<a href="#next" class="next-owl"/>');
        $(".next-owl").on("click", function() {
          owl.trigger("owl.next");
        });
        $(".prev-owl").on("click", function() {
          owl.trigger("owl.prev");
        });
      }
    });
    var itemList = $(".listing-container");
    var gridStyle = $(".grid");
    var listStyle = $(".list");
    $(".list,switchToGrid").on("click", function(e) {
      e.preventDefault();
      itemList.addClass("list-layout");
      itemList.removeClass("grid-layout");
      gridStyle.removeClass("active");
      listStyle.addClass("active");
    });
    gridStyle.on("click", function(e) {
      e.preventDefault();
      listStyle.removeClass("active");
      $(this).addClass("active");
      itemList.addClass("grid-layout");
      itemList.removeClass("list-layout");
    });
    var offset = 200;
    var duration = 500;
    $(window).scroll(function() {
      if ($(this).scrollTop() > offset) {
        $(".back-to-top").fadeIn(400);
      } else {
        $(".back-to-top").fadeOut(400);
      }
    });
    $(".back-to-top").on("click", function(event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
    });
    $.stellar({ horizontalScrolling: false, verticalOffset: 40 });
  });
})(jQuery);
