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