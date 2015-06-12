<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div id="banner">
			<section>
            	<h1 class="wow animated fadeInDown"><?php wp_title(); ?></h1>
                <h2 class="wow animated fadeIn"><?php bloginfo( 'description' ); ?></h2>
                <div id="buttons">
                    <a class="fade fixme active manual-optin-trigger" href="#" data-optin-slug="o3fxu9urmqtve3ni">Request Beta Access</a>
                    <a class="fade fixme" href="#itworks">How it works</a>
                    <div class="clearfix"></div>
               	</div>
            </section>
		</div>
		<!-- end #banner -->
        <div id="itworks" class="section">
			<section class="padded">
            	<header>
                	<div class="line"></div>
                	<h2>How it works</h2>
                	<div class="line"></div>
                    <div class="clearfix"></div>
                </header>
                <div class="row">
                    <span class="span3">
                        <img src="<?=get_bloginfo('template_directory');?>/images/finger.png" height="100" class="wow zoomIn animated" />
                        <span>Select source for content</span>
                    </span>
                    <span class="span3">
                        <img src="<?=get_bloginfo('template_directory');?>/images/schedule.png" height="100" class="wow zoomIn animated" />
                        <span>Set schedule and choose social channels</span>
                    </span>
                    <span class="span3">
                        <img src="<?=get_bloginfo('template_directory');?>/images/arrow.png" height="100" class="wow zoomIn animated" />
                        <span>Submit to buffer</span>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </section>
        </div>
        <!-- end #itworks -->
        <div id="ways" class="section">
			<section class="padded">
            	<header>
                	<div class="line"></div>
                	<h2>3 Ways to add Content</h2>
                	<div class="line"></div>
                    <div class="clearfix"></div>
                </header>
                <div class="row">
                    <span class="span3">
                        <div class="circle wow zoomIn animated"><img src="<?=get_bloginfo('template_directory');?>/images/upload.png" height="75" /></div>
                        <span>CSV Upload</span>
                        <a href="#csv" class="fade button">More Info</a>
                        <div class="clearfix"></div>
                    </span>
                    <span class="span3">
                        <div class="circle wow zoomIn animated"><img src="<?=get_bloginfo('template_directory');?>/images/rss.png" height="75" /></div>
                        <span>RSS Import</span>
                        <a href="#feedly" class="fade button">More Info</a>
                        <div class="clearfix"></div>
                    </span>
                    <span class="span3">
                        <div class="circle wow zoomIn animated"><img src="<?=get_bloginfo('template_directory');?>/images/around.png" height="75" /></div>
                        <span>Automatic Repost</span>
                        <a href="#buffer" class="fade button">More Info</a>
                        <div class="clearfix"></div>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </section>
        </div>
        <!-- end #itworks -->
<?php the_content(); ?>
        <div class="clearfix"></div>
        <div class="bar">
        	<section class="info">
            	<h2>Request Beta Access</h2>
                <a href="#" class="fade manual-optin-trigger" data-optin-slug="o3fxu9urmqtve3ni">Get Notified</a>
                <div class="clearfix"></div>
            </section>
        </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>