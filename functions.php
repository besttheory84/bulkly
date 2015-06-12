<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'twentyten' ),
		'members' => __( 'Members Only Navigation', 'twentyten' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
add_filter('widget_text', 'do_shortcode');

function content_chooser()
{ ?>
    <section>
		<div class="row">
            <span class="span3">
                <div class="circle"><img src="<?=get_bloginfo('template_directory');?>/images/upload.png" height="75" /></div>
                <span>CVS Upload</span>
                <a href="#csv" class="fade button">More Info</a>
                <div class="clearfix"></div>
            </span>
            <span class="span3">
                <div class="circle"><img src="<?=get_bloginfo('template_directory');?>/images/rss.png" height="75" /></div>
                <span>Feedly Import (RSS)</span>
                <a href="#feedly" class="fade button">More Info</a>
                <div class="clearfix"></div>
            </span>
            <span class="span3">
                <div class="circle"><img src="<?=get_bloginfo('template_directory');?>/images/around.png" height="75" /></div>
                <span>Automatic Repost</span>
                <a href="#buffer" class="fade button">More Info</a>
                <div class="clearfix"></div>
            </span>
            <div class="clearfix"></div>
        </div>
    </section>	
<? }
add_shortcode('content_chooser', 'content_chooser');
}




require_once( 'includes/metabox/init.php' );
require_once( 'includes/metabox/metaboxes.php' );



/**** custom post type for crowedsourch ****/

//=========================================
// Crowedsourced Post Type
//=========================================	
add_action( 'init', 'register_crowedsourced_post_type' );
function register_crowedsourced_post_type() {
   register_post_type( 'crowedsourced',
		array(
			'labels' => array(
				'name'			=> __('Crowedsourced',"rms"),
				'singular_name' => __('Crowedsourced',"rms"),
				'add_new'		=> __('Add Crowedsourced',"rms"),
				'add_new_item'	=> __('Add New Crowedsourced',"rms"),
				'edit_item'		=> __('Edit Crowedsourced',"rms"),
				'new_item'		=> __('New Crowedsourced',"rms"),
				'not_found'		=> __('No Crowedsourced found',"rms"),
				'not_found_in_trash' => __('No Crowedsourced found in Trash',"rms"),
				'menu_name'		=> __('Crowedsourced',"rms"),
			),
			'description' => 'Manipulating with our team',
			'public' => true,
			'show_in_nav_menus' => true,
			'supports' => array(
				'title',
				'thumbnail',
				'editor'
				
			),
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 32,
			'has_archive' => true,
                        'menu_icon' => 'dashicons-grid-view',
			'query_var' => true,
			'rewrite' => array('slug' => 'crowedsourced'),
			'capability_type' => 'post',
			'map_meta_cap'=>true,
			'taxonomies' => array('tag')
			
		)
	);
	
register_taxonomy(
			'cat',
			array (0 => 'crowedsourced',),
			array(
				'hierarchical' => true,
				'label' => 'Categories',
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'cat'),
				'singular_label' => 'Category'
				)
		);
register_taxonomy(
			'tags',
			array (0 => 'crowedsourced',),
			array(
				'hierarchical' => false,
				'label' => 'Tags',
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => array('slug' => 'tags'),
				'singular_label' => 'Tag'
				)
		);
	
	
	/**
	add_custom_taxonomies_portfolio();
	**/
}

	

function change_default_title( $title ){
     $screen = get_current_screen();
 
     if  ( 'crowedsourced' == $screen->post_type ) {
          $title = 'Full Name';
     }
 
     return $title;
}
 
add_filter( 'enter_title_here', 'change_default_title' );	
	
	
	