<?php


 get_header(); ?>

<div class="bar">
	<h1 class="entry-title"><?php the_title(); ?></h1>
</div>
<div class="section">
	<section id="content" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-content">





<div class="blog-section">

  

		<div class="tweet_container">

		<?php
			
		
				while(have_posts())
				{
					the_post();


					
						
					
					
					
					
		    ?>


		  <div class="item  item_featured  <?php echo $featured_post = get_post_meta( get_the_ID(), 'featured_post', true );?> "  style="margin:20px auto;  float: none;"> 
		  
		  
		
		  
		  
			<div class="title_area">
				<h3> <?php the_title(); ?> </h3>
				
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
					  <a href="<?php echo $url_text = get_post_meta( get_the_ID(), 'url_text', true );?>" target="_blank" >www.site.com</a>
					
					</div>
					
					<div class="tags">
					
					<?php  
					
						$tags='';
						$termsn = wp_get_post_terms( get_the_ID(), 'tags');
						
						$count=1;
										
						foreach($termsn as $termn)
						{
							$slassh='';
							if($count>=2){ $slassh=',';}
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
			
	
		?>
 

  
 
	 </div>
	 
</div>








<div class="sidebar">
<?php get_sidebar(); ?>
</div>
</section>
</article>


</section>

</div>


<?php get_footer(); ?>