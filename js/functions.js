 /**
 * Created by Dananjaya Maha Malage on 9/13/2017.
 */

jQuery(document).ready(function() {

 // home slider height
 var intViewportWidth = window.innerWidth;
 var intViewportHeight = window.innerHeight;
 if(intViewportHeight > 600 && intViewportWidth > 768){
  // set home slider height
  //jQuery('#home-slider').css('height',intViewportHeight - 120);
  jQuery('.header-home').css('height',intViewportHeight);
  jQuery('.header-page').css('height',intViewportHeight * 0.8);
  jQuery('.home-slider-image').css('height',intViewportHeight - 160);
 }else{
  jQuery('#home-slider').css('height','500px');
 }

 if(intViewportWidth < 768){
  jQuery('.home-slider-image').css('height',intViewportHeight * 0.4);
 }


 // home slider
 var owlHome = jQuery('.home-carousel');
 owlHome.owlCarousel({
  items:1,
  loop:true,
  margin:0,
  autoplay:true,
  smartSpeed: 1500,
  nav: true,
  navText:["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
 });
 jQuery('.play').on('click',function(){
  owlHome.trigger('play.owlHome.autoplay',[1000])
 })
 jQuery('.stop').on('click',function(){
  owlHome.trigger('stop.owlHome.autoplay')
 })

 // Archive Review slider
 var archiveReview = jQuery('.archive-review-carousel');
 archiveReview.owlCarousel({
  items:1,
  loop:true,
  margin:0,
  autoplay:true,
  smartSpeed: 1500,
  nav: true,
  navText:["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
 });
 jQuery('.play').on('click',function(){
  archiveReview.trigger('play.archiveReview.autoplay',[1000])
 })
 jQuery('.stop').on('click',function(){
  archiveReview.trigger('stop.archiveReview.autoplay')
 })

 // Single product content slider
 var archiveReview = jQuery('.single-product-carousel');
 archiveReview.owlCarousel({
  items:1,
  loop:true,
  margin:0,
  autoplay:true,
  smartSpeed: 1500,
  dots: true
 });


 var owlTestimonials = jQuery('.testimonials-carousel');
 owlTestimonials.owlCarousel({
  items:1,
  loop:true,
  margin:0,
  autoplay:true,
  smartSpeed: 1500,
  nav: true,
  navText:["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
  dots: true
 });
 jQuery('.play').on('click',function(){
  owlTestimonials.trigger('play.owlTestimonials.autoplay',[1000])
 })
 jQuery('.stop').on('click',function(){
  owlTestimonials.trigger('stop.owlTestimonials.autoplay')
 })

 // match height
 jQuery('.lifestyle-category-match-height').matchHeight();
 jQuery('.category-product-match-height').matchHeight();
 jQuery('.recipes-featured-wrap').matchHeight();
 jQuery('.recipes-bottom-category-match-height').matchHeight();

 // faq js
 jQuery('.faq-list-wrap ul li p').hide();
 jQuery('.faq-list-wrap ul li').click(function(){
  jQuery(this).find('p').slideToggle('fast');
 });
});
