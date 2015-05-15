<section class="entry-content the_post">
    
<div class="blog-image">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
</div>
<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>