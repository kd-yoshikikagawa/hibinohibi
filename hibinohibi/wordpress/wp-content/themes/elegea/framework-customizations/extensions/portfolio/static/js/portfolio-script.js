$(document).ready(function ( $ ) {
	
           // external js: isotope.pkgd.js, imagesloaded.pkgd.js
       // init Isotope
       var $grid = $('.portfolio-list').isotope({
           filter: '*',
           itemSelector: '.portfolio-item',
           percentPosition: true,
           masonry: {
               columnWidth: '.grid-sizer',
           }
       });
       // layout Isotope after each image loads
       $grid.imagesLoaded().progress(function () {
           $grid.isotope('layout');
       });

       var $filter = $('.filter-item').on('click', function () {
           $grid.isotope({
               filter: $(this).attr('data-filter')
           });
           $filter.removeClass('filter-item-active');
           $(this).addClass('filter-item-active');
       });
       // Portfolio Filtering End


       //Portfolio grayscale start
       var single = $('.portfolio-image');


       single.mouseenter(function () {
           single.css('filter', 'grayscale(1)');
           $(this).css('filter', 'grayscale(0)');
       });
       single.mouseleave(function () {
           single.css('filter', 'grayscale(0)');
       });
       //Portfolio grayscale end
    
});