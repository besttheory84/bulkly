<?php
/*
Template Name: Join / Upgrade
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="bar">
	<h1 class="entry-title"><?php the_title(); ?></h1>
</div>
<div class="section">
	<div class="slim">
	<div class="half">
    	<div class="table">
        	<div class="title">
            	<div class="circle">
                    <div class="cost">$0</div>
                    <div class="per">per month</div>
                </div>
                <h4>Basic Membership</h4>
            </div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
			<? if ( is_user_logged_in() ) :?>
            <a href="#" class="start fade">What you have</a>
            <?php else :?>
            <a href="#" class="start fade">Start now</a>
            <?php endif;?>
            
        </div>
    </div>
    <!-- end .half -->
	<div class="half">
    	<div class="table">
        	<div class="title">
            	<div class="circle">
                    <div class="cost">$100</div>
                    <div class="per">per month</div>
                </div>
                <h4>Paid Membership</h4>
            </div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
            <div class="cell"><img src="<?=get_bloginfo('template_directory');?>/images/check.png" width="20" />lorem ipsum LOREM IPSUM LOREM</div>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick" />
<input name="hosted_button_id" type="hidden" value="FAC78EBWTXPVN" />
<input alt="PayPal - The safer, easier way to pay online!" name="submit" rel="paypal" src="/wp-content/themes/blankslate/images/start.jpg" type="image" />
</form><!-- <a class="start fade" href="https://www.paypal.com/cgi-bin/webscr?cmd=_subscr-find&amp;alias=C3A39TNGPY67Q">Start now</a> -->
            <!-- <a href="#" >Start now</a> -->
        </div>
    </div>
    <!-- end .half -->
    <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>
	<section id="content" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>