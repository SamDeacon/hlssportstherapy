/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  $(document).ready(function() {
    if($("#home-slick-slider").length !== 0) {
      $('#home-slick-slider').slick({
        fade: true,
        autoplay: true,
        infinite: true,
        arrows: false,
        dots: true,
        autoplaySpeed: 4000,
        customPaging : function(slider, i) {
          return '<a href="#"></a>';
      },
      });
    }
    if($(".testimony-slider").length !== 0) {
    $(".testimony-slider").slick({
      autoplay: true,
      infinite: true,
      arrows: true,
      dots: true,
      autoplaySpeed: 6000,
      nextArrow:"<span class='slick-button slick-next'>></span>",
      prevArrow:"<span class='slick-button slick-prev'><</span>",
      customPaging : function(slider, i) {
        return '<a href="#"></a>';
    },
    });
  }
    $( "#nav-tog" ).click(function() {
      $( "body" ).toggleClass( "show-nav-menu" );
    });
  });

})(jQuery); // Fully reference jQuery after this point.
