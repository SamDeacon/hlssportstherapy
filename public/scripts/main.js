
(function($){$(document).ready(function(){if($("#home-slick-slider").length!==0){$('#home-slick-slider').slick({fade:true,autoplay:true,infinite:true,arrows:false,dots:true,autoplaySpeed:4000,customPaging:function(slider,i){return'<a href="#"></a>';},});}
if($(".hide-this-cat").length!==0){$(".hide-this-cat").addClass("displaynone");$(".hide-this-cat").next("div").addClass("displaynone");}
if($(".testimony-slider").length!==0){$(".testimony-slider").slick({autoplay:true,infinite:true,arrows:true,dots:true,autoplaySpeed:6000,nextArrow:"<span class='slick-button slick-next'>></span>",prevArrow:"<span class='slick-button slick-prev'><</span>",customPaging:function(slider,i){return'<a href="#"></a>';},});}
$("#nav-tog").click(function(){$("body").toggleClass("show-nav-menu");});});})(jQuery);