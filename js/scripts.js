jQuery(document).ready(function($) {
	// Anchor tag scrolling function //
	$(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            var windowWidth = $(window).width();
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    if(windowWidth > 1000) {
                        $('html,body').animate({
                            scrollTop: target.offset().top-100
                        }, 1000);
                        return false;
                    } 
                    else {
                        $('html,body').animate({
                            scrollTop: target.offset().top-20
                        }, 1000);
                        return false;
                    }
                }
            }
        });
  	});
	// Positions images inside circles centered vertically and horizontally, responsively :) //
	$('.circle img, a.scroller img, .blue-circle img').each(function() {
		var height = $(this).height();
		var calc = (height/2)*-1;
		var width = $(this).width();
		var calc_two = (width/2)*-1;
		$(this).css('margin-top',calc).css('margin-left',calc_two);
	});
	$(window).resize(function() {
		$('.circle img, a.scroller img, .blue-circle img').each(function() {
			var height = $(this).height();
			var calc = (height/2)*-1;
			var width = $(this).width();
			var calc_two = (width/2)*-1;
			$(this).css('margin-top',calc).css('margin-left',calc_two);
		});
	});
        
    $('.select-accounts').click(function() {
        var theValue = $(this).val();
        if(theValue == "select") {
            $('.account input:checkbox').each(function() {
                $(this).attr('checked','checked');  
            });    
        }
        else {
            $('.account input:checkbox').each(function() {
                $(this).removeAttr('checked');  
            });    
        }
    });
    
    $('.select-posts').click(function() {
        var theValue = $(this).val();
        if(theValue == "select") {
            $('#posts input:checkbox').each(function() {
                $(this).attr('checked','checked');  
            });    
        }
        else {
            $('#posts input:checkbox').each(function() {
                $(this).removeAttr('checked');  
            });    
        }
    });    
    
});