<?php
/*
Template Name: Crowedsourced Page
*/


 get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="bar">
	<h1 class="entry-title"><?php the_title(); ?></h1>
</div>
<div class="section">
	<section id="content" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">





<div class="blog-section">
  
  
  
  <section class="entry-content the_post">
    
<div class="blog-image">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
</div>
<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>

<?php the_content(); ?>

</section>
  
  
  
  
  
  
  
  
  
  

  <div class="search_filter">
		  
		<div class="supplier-search">
			<ul class="hidden">
				
				
				<?php
					$filter_cat = array(
					'orderby'       => 'name',
					'order'         => 'ASC', 
					'hide_empty'    => 0,
					'hierarchical'  => 1,
					'taxonomy'      => 'cat'
				   );
				  $categories = get_categories( $filter_cat );










				
				$parentscategory ="";
	foreach( $categories as $category ) {
if ($category->category_parent == 0) {
	$parentscategory .= '	 <li> <a href="#">' .$category->name .'</a>	 </li>, ';
}
	}
	echo strtoupper(substr($parentscategory,0,-2)); 
				
				?>
			</ul>
			
			
			
			
			
					
			
			
			
		</div>
    
    
    
    
    
    
		
		<div class=" hidden search_box">
			<?php echo do_shortcode('[searchandfilter taxonomies="cat" ]'); ?> 
		</div>
	</div>


		<div id="container" class="masonary_container">

		<?php
			
			$posts = array(
				'post_type'         => array('crowedsourced'),
				'posts_per_page'    => -1,
				'post_status'       => array('publish'),
				
        'orderby'           => 'title', 
        'order'              => 'ASC'
			
				
			);
			
			
			
			query_posts($posts);
			if(have_posts())
			{
				while(have_posts())
				{
					the_post();


					
						 $cats='';
						$termsn = wp_get_post_terms( get_the_ID(), 'cat');
						
						foreach($termsn as $termn)
						{
						
						       $termcat = $termn->name.' ';
              
									$cats.= 	str_replace(' ', '', $termcat).' ';
                    
								
						}
					
					
					
					
		    ?>


		  <div class="item  item_featured <?php echo strtolower($cats); ?> <?php echo $featured_post = get_post_meta( get_the_ID(), 'featured_post', true );?> " > 
		  
		  
		  <?php 	
			global $post;
			$permalink = get_permalink($post->ID);
			//$featured_image =  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
			//$featured_image_2 = $featured_image['0'];
			$content = get_the_content();
			$post_title = rawurlencode(get_the_title($post->ID));
	
		 ?>
		  
		  
			<div class="title_area">
				<h3> <?php the_title(); ?> </h3>
				<span class="tweet_now"><a class=""
  href="https://twitter.com/intent/tweet?text=<?php echo $url_twitter = get_post_meta( get_the_ID(), 'tweet_text', true );?>"
  data-size="large">TWEET NOW</a></span>
				
					
			</div>
			
			<div class="content_area"> 
				<?php the_content(); ?> 
			</div>
			
			<div class="meta_area"> 
			  <div class="profile_pic">

 
 
			       <img src=" <?php echo $image = get_post_meta( get_the_ID(), 'headshot_image', true ); ?>"/>
			  </div>
			  
			  <div class="extra_info">
			  
					<div class="profile_name">
					  <span> <a href="<?php echo $url_twitter = get_post_meta( get_the_ID(), 'url_twitter', true );?>" target="_blank"> <img src="<?php echo get_template_directory_uri();?>/images/twitter-icon.png" /> </a></span>
					  <span><a href="<?php echo $url_twitter = get_post_meta( get_the_ID(), 'url_twitter', true );?>" target="_blank"> <?php echo $screen_name = get_post_meta( get_the_ID(), 'screen_name', true );?></a> </span>
					</div>
					
					
					
					<div class="web_url">
					  <a href="<?php echo $url_text = get_post_meta( get_the_ID(), 'url_text', true ); ?>" target="_blank" >
					  
					  
					  
					  <?php 
											  
						$url_text = get_post_meta( get_the_ID(), 'url_text', true );			  
						$url_text = preg_replace('#^https?://www.#', '', rtrim($url_text,'/'));
						$url_text = preg_replace('#^http?://www.#', '', rtrim($url_text,'/'));
						$url_text = preg_replace('#^http://#', '', rtrim($url_text,'/'));
						echo $url_text; 
                      ?></a>
					
					</div>
					
					<div class="tags">
					
					<?php  
					
						$tags='';
						$termsn = wp_get_post_terms( get_the_ID(), 'tags');
						
						$count=1;
										
						foreach($termsn as $termn)
						{
							$slassh='';
							if($count>=2){ $slassh=', ';}
							$tags.= $slassh . $termn->name;
							
							$count++;
						}
						
						if($tags!=''){
						echo 'Tags: '.$tags;
						}
					?>
					
					</div>
			  
			  
			  </div>
			</div>
			
			
			
		   </div>
	


		  <?php
			  }
			
			}
			wp_reset_query();
		?>
 

  
 
	 </div>
	 
</div>








<div class="sidebar">
<?php get_sidebar(); ?>
</div>
  
  
 
  
  
</section>
</article>
       <div class="crowedsource_footer_content">
  	
    
    <?php echo $footer_text = get_post_meta( get_the_ID(), 'crowedsource_footer_content', true );?>
  
  </div>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
    
    
</section>
 
</div>


 
<?php get_footer(); ?>