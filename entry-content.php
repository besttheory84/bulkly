<section class="entry-content the_post">
    
<div class="blog-image">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
</div>
<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
  
  
<?php if ( !is_single() ){ ?>
<?php  echo wp_trim_words( get_the_content(), $num_words = 50, $more = '');  ?>

<p style="text-align:left;" class="ecae-button ecae-buttonskin-none">  <a href="<?php the_permalink(); ?>" class="ecae-link"><span>Read more</span></a></p>
  
  <?php }else{ 
	
        the_content();
}
?>
  
<?php //the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>