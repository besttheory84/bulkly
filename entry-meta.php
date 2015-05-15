<section class="entry-meta">
<div class="row">
<? echo get_avatar( $post->post_author, 40 ); ?>
<span class="author vcard"><?php the_author_posts_link(); ?></span>
<div class="social">
<a target="_blank" class="hover" href="http://twitter.com/home?status=Currently reading <?php the_permalink(); ?>"><i class="fade fa fa-twitter"></i></a>
<a target="_blank" class="hover" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>"><i class="fade fa fa-pinterest"></i>
<a target="_blank" class="hover" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"><i class="fade fa fa-facebook"></i></a>
<a target="_blank" class="hover" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fade fa fa-google-plus"></i></a>
<a target="_blank" class="hover" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"><i class="fade fa fa-linkedin"></i></a>
</div>
<div class="clearfix"></div>
</div>
<!-- <span class="meta-sep"> | </span>
<span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span> -->
</section>