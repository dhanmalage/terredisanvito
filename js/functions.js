 /**
 * Created by Dananjaya Maha Malage on 9/13/2017.
 */

jQuery(document).ready(function() {

 // home slider height
 var intViewportHeight = window.innerHeight;
 if(intViewportHeight > 600){
  // set home slider height
  //jQuery('#home-slider').css('height',intViewportHeight - 120);
  jQuery('header').css('height',intViewportHeight);
  jQuery('.home-slider-image').css('height',intViewportHeight - 120);
 }else{
  jQuery('#home-slider').css('height','500px');
 }

 // home slider
 var owl = jQuery('.home-carousel');
 owl.owlCarousel({
  items:1,
  loop:true,
  margin:0,
  autoplay:true,
  smartSpeed: 1500,
  nav: true,
  navText:["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
 });
 jQuery('.play').on('click',function(){
  owl.trigger('play.owl.autoplay',[1000])
 })
 jQuery('.stop').on('click',function(){
  owl.trigger('stop.owl.autoplay')
 })

 // match height
 jQuery('.lifestyle-category-match-height').matchHeight();
 jQuery('.category-product-match-height').matchHeight();
 jQuery('.recipes-featured-wrap').matchHeight();
 jQuery('.recipes-bottom-category-match-height').matchHeight();
});
