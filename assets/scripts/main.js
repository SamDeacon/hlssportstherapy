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
    if($(".hide-this-cat").length !== 0) {
      $(".hide-this-cat").addClass("displaynone");
      $(".hide-this-cat").next("div").addClass("displaynone");
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
///// GOOGLE MAP BEGIN
var map;
var bounds = new google.maps.LatLngBounds();

var locations = [
  ['Location 1', 52.293943,-0.609664, 2],
  ['Location 2', 52.343062, -0.537199, 1],
];

function bindInfoWindow(marker, map, infowindow, strDescription) {
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(strDescription);
    infowindow.open(map, marker);
  });
}

function setMarkers(map, locations) {
  var infowindow =  new google.maps.InfoWindow({
    content: ""
  });


  var i, location, myLatLng, marker;

  for (i = 0; i < locations.length; i++) {
    location = locations[i];
    myLatLng = new google.maps.LatLng(location[1], location[2]);
    marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: location[0],
      icon : "http://maps.google.com/mapfiles/ms/icons/pink-dot.png",
      zIndex: location[3]
    });
    bounds.extend(marker.getPosition());

    bindInfoWindow(marker, map, infowindow, location[0]);
  }
}

function initialize() {
  var mapOptions = {
    zoom: 13,
    center: new google.maps.LatLng(52.318885, -0.577713),
    panControl: false,
    disableDefaultUI: true,
    zoomControl: true,
    scrollwheel: false,
    panControl: false,
     mapTypeId: google.maps.MapTypeId.ROADMAP,
    // This is where you would paste any style found on Snazzy Maps.
    styles: [{"featureType":"all","elementType":"all","stylers":[{"invert_lightness":true},{"saturation":20},{"lightness":50},{"gamma":0.4},{"hue":"#00cdff"}]},{"featureType":"all","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"all","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"all","stylers":[{"color":"#ffffff"},{"visibility":"simplified"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.stroke","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#405769"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#232f3a"}]}]
  };
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  setMarkers(map, locations);
  map.fitBounds(bounds);
}

google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(window, 'resize', initialize);
window.onpopstate = initialize();
///// GOOGLE MAP END
})(jQuery); // Fully reference jQuery after this point.
