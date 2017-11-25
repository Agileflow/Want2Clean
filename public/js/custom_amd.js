"use strict";

jQuery(document).ready(function($){
	
	
/*------------------------------------------------------------------------*/
/*	1.	Plugins Init
/*------------------------------------------------------------------------*/


	/************** LightBox *********************/
	$(function(){
		$('[data-rel="lightbox"]').lightbox();
	});

/*------------------------------------------------------------------------*/
/*	2.	Site Specific Functions
/*------------------------------------------------------------------------*/


	/************** Go Top *********************/
	$('#go-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, 800);
        return false;
    });



    /************** Responsive Navigation *********************/
	$('.toggle-menu').click(function(){
        $('.menu').stop(true,true).toggle();
        return false;
    });
    $(".responsive-menu .menu a").click(function(){
        $('.responsive-menu .menu').hide();
    });

});