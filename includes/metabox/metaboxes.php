<?php



function blackslate_metaboxes(array $crowedsourchedmeta){
	
	
	 $crowedsourchedmeta[]=array(
						'id' 		   => 'first-section',
						'title'		   => 'Info Columns',
						'object_types' =>  array('crowedsourced'),
						'fields'       => array(
						
										array(
										    'name'    => 'Screen Name',
											'desc'    => 'type screen name',
											'default' => '',
											'id'      => 'screen_name',
											'type'    => 'text'
																				 
										
										),
										
										
										array(
										'name' => __( 'Twitter ID Link', 'cmb' ),
										'id'   => 'url_twitter',
										'desc'    => 'Paste URL',
										'type' => 'text_url',
									    ),
										
										/**
										array(
										    'name'    => 'Bio',
											'desc'    => 'type bio text',
											'default' => '',
											'id'      => 'bio_text',
											'type'    => 'textarea_small'
																				 
										
										),
										
										*/
										
										array(
										    'name'    => 'Tweet',
											'desc'    => 'type your tweet',
											'default' => '',
											'id'      => 'tweet_text',
											'type'    => 'textarea_small'
																				 
										
										),
										
										array(
										'name' => __( 'Website URL', 'cmb' ),
										'id'   => 'url_text',
										'desc'    => 'Paste URL',
										'type' => 'text_url',
										// 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
									    ),
										
										
										
										
										array(
											'name'    => 'Headshot',
											'desc'    => 'Upload an image or enter an URL.',
											'id'      => 'headshot_image',
											'type'    => 'file',
											// Optionally hide the text input for the url:
											'options' => array(
												'url' => true,
											),
										),
										
									
										array(
										'name'    => 'Featured Post?',
										'id'      => 'featured_post',
										'type'    => 'radio_inline',
										'options' => array(
											'featured' => __( 'Featured', 'cmb' ),
											'notfeatured'   => __( 'Not Featured', 'cmb' ),
											
										),
									)
								
								
								
						
						)
						
	 
	 
	 );
	 
	 return $crowedsourchedmeta;
	 
	 
	 
	
}

add_filter('cmb2_meta_boxes','blackslate_metaboxes');
