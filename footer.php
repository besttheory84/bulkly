<div class="clearfix"></div>
</div>
<div class="prefooter">
	<section class="info">
    	<img src="<?=get_bloginfo('template_directory');?>/images/white-logo.png" width="160" class="logo" />
        <ul id="social">
        	<li><a href="http://facebook.com/bulkly" class="fade" target="_blank"><img src="<?=get_bloginfo('template_directory');?>/images/facebook.png" width="40" /></a></li>
            <li><a href="http://twitter.com/bulkly" class="fade" target="_blank"><img src="<?=get_bloginfo('template_directory');?>/images/twitter.png" width="40" /></a></li>
            <li><a href="http://plus.google.com/+bulkly/posts" class="fade" target="_blank"><img src="<?=get_bloginfo('template_directory');?>/images/google.png" width="40" /></a></li>
            <li><a href="http://linkedin.com/company/bulkly" class="fade" target="_blank"><img src="<?=get_bloginfo('template_directory');?>/images/linkedin.png" width="40" /></a></li>
            <div class="clearfix"></div>
        </ul>
    </section>
</div>
<footer id="footer" role="contentinfo">
    <div id="copyright">
    	<nav id="footer-nav">
        	<ul>
            	<li><a href="/about" class="fade">About</a></li>
                <li><a href="/contact" class="fade">Contact</a></li>
                <li><a href="/terms" class="fade">Terms</a></li>
                <div class="clearfix"></div>
            </ul>
        </nav>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?=get_bloginfo('template_directory');?>/js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="<?=get_bloginfo('template_directory');?>/js/jquery-ui-timepicker-addon-i18n.min.js"></script>
		<script type="text/javascript" src="<?=get_bloginfo('template_directory');?>/js/jquery-ui-sliderAccess.js"></script>
		
		<script src="<?=get_bloginfo('template_directory');?>/js/jquery.isotope.min.js"></script>
	    <script src="<?=get_bloginfo('template_directory');?>/js/jquery.isotope.perfectmasonry.js"></script>
		
<script src="<?=get_bloginfo('template_directory');?>/js/wow.js"></script>
<script src="<?=get_bloginfo('template_directory');?>/js/scripts.js"></script>
<script>
new WOW().init();
</script>
<? if(is_page('14')) { ?>
<script>
	jQuery(document).ready(function($) {
		
	jQuery('#alt_example_4').datetimepicker({
		altField: "#alt_example_4_alt",
		altFieldTimeOnly: false
	});
	
		jQuery('#alt_example_5').datetimepicker({
		altField: "#alt_example_5_alt",
		altFieldTimeOnly: false
	});

		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
		$('.trigger').click(function() {
			var which = $(this).attr('rel');
			$('#overlay').fadeIn(250, function() {
				$('.wrap.overlay #'+which).fadeIn(250);
			});
		});
		$('.close').click(function() {
			$('#overlay').fadeOut(250, function() {
				$('.wrap.overlay div').hide();
			});
		});
		$('.triggerme').click(function() {
			var out = $(this).attr('out');
			var into = $(this).attr('into');
			$('#'+out).fadeOut(500, function() {
				$('#'+into).fadeIn(250);
                if(into == "posts") {
                    $('.entry-title').text('What Will You Be Posting?');
                }
                else if (into == "accounts") {
                    $('.entry-title').text('What Accounts Should We Post To?');
                }
                else {
                    $('.entry-title').text('When do you want to post?');
                }
			});
                $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 500);
		});
	});
</script>
<? } ?>
</body>
</html>