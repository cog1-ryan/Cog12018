(function($) {
	$(document).ready(function() {
		
		// Function to open and close hamburger menu
		function bindmenus()	{
			$('.menu').click( function ( event ) {
				var $full = $('.full-menu');
			    if( $('.menu').hasClass('open') ) {
					$full.velocity({ width: 0}, { duration: 300, delay:200 }, "easeInExpo");
					$('.menu-items, .fifty.menu-open .panel-one').velocity({ opacity: 0}, { duration: 100 }, "easeInOutQuart");
					$('.menu').removeClass('open');
					$full.addClass('hide-menu');
			    } else {
			        $full.velocity({ width: "100%"}, { duration: 300 }, "easeInExpo");
			        $('.menu-items, .fifty.menu-open .panel-one').velocity({ opacity: 1}, { duration: 200, delay: 302 }, "easeInOutQuart");
					$full.removeClass('hide-menu');
					$('.menu').addClass('open');
			    }
			});
		}
		
		// Function for adding and removing classes while elements come into view
		function runwaypoints() {
		    var $mainw = $('.waypoint');
			$mainw.waypoint(function(direction) {
				if (direction === 'down') {
					    $(this.element).velocity({ opacity: 1,translateY:[0,40] }, { duration: 300 });
				}
			}, {
				offset: '99%'
			});
			$mainw.waypoint(function(direction) {
				if (direction === 'up') {
					$(this.element).velocity({ opacity: 0,translateY:40 }, { duration: 300 });
				}
			}, {
				offset: '101%'
			});
		}
		
		
		
		
		

		
		function formhandler()	{
			var $elem = $('.form-top');
			$(document).on('click', '.form-top .button', function(){
			    $elem.velocity('scroll');
			});
			jQuery(document).bind('gform_confirmation_loaded', function(event, formId){
			    $(window).trigger('resize');
			});
		}
		
		runwaypoints();
		bindmenus();
		formhandler();

		// Function for smoothstate.js
		jQuery(function(){
			'use strict';
			var $main = $('#main');
			var $page = jQuery('#main'),
			options = {
				debug: true,
				anchors: 'a',
				blacklist: '.no-ajax,#gform_submit_button_1,.gform_button,.gravity-contact',
				prefetch: true,
				prefetchOn: 'mouseover touchstart',
				cacheLength: 5,
				forms: 'form',
		        onBefore: function($currentTarget, $container) {
					$main.velocity({opacity: 0}, {duration: 400, delay:150});
			        $('.full-menu').addClass('hide-menu');
		        },
		        onStart: {
					duration: 800,
					render: function ($container) {
						smoothState.restartCSSAnimations();
						$("body").velocity("scroll", { offset: "0", delay: 600, duration: 200, mobileHA: false });
						$('.spinner').velocity({opacity: 1}, {duration: 400, delay: 300});
					}
		        },
		        onProgress: {
		            duration: 200,
		            render: function ($container) {
		               	
		            }
		        },
		        onReady: {
					duration: 300,
					render: function ($container, $newContent) {
						$container.html($newContent);
						$('.spinner').velocity({opacity: 0}, {duration: 400});
						$main.velocity({opacity: 1}, {duration: 400, delay: 500});
						$('.full-menu').addClass('hide-menu');
						setTimeout((function() {
						   bindmenus();
						   runwaypoints();
						   formhandler();
						}), 900);
					}
		        }
		    },
		    smoothState = $page.smoothState(options).data('smoothState');
		});


	});
})( jQuery );








