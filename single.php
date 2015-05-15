<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="bar">
	<h1 class="entry-title">Our Blog</h1>
</div>
<div class="section">
	<section id="content" role="main">
    <div class="blog-section">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">
<?php get_template_part( 'entry' ); ?>

<?php endwhile; endif; ?>
<div class="bulkly">
<h3>Try Bulk.ly for free</h3>
<h5>Schedule posts 3 different ways</h5>
            <span class="span3">
                <div class="blue-circle"><img src="<?=get_bloginfo('template_directory');?>/images/upload.png" height="75" /></div>
                <span>CVS Upload</span>
                <div class="clearfix"></div>
            </span>
            <span class="span3">
                <div class="blue-circle"><img src="<?=get_bloginfo('template_directory');?>/images/rss.png" height="75" /></div>
                <span>Feedly Import (RSS)</span>
                <div class="clearfix"></div>
            </span>
            <span class="span3">
                <div class="blue-circle"><img src="<?=get_bloginfo('template_directory');?>/images/around.png" height="75" /></div>
                <span>Automatic Repost</span>
                <div class="clearfix"></div>
            </span>
            <div class="clearfix"></div>
            <a class="fade" href="/?page_id=5">Get started</a>
</div>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
</article>
</div>
<div class="sidebar">
<?php get_sidebar(); ?>
</div>
<div class="clearfix"></div>
</section>
</div>
<?php get_footer(); ?>