<?php
/*
/*
Plugin Name: Featured News
Plugin URI: http://linnetdigital.com
Description: Displays Featured News
Author: Linnet
Version: 1.0
Text Domain: Linnet
Author URI: http://linnetdigital.com
*/



class featured_news_widget extends WP_Widget {	
	
/* Register the widget */
	
function __construct() {parent::__construct ('featured_news_widget', __('Featured News', 'linnet'), array ('description' => __('This widget displays a featured news',  'linnet'), ));}

/* Front end display -- $args: Widget arguments -- $instance: - saved values */	
	
public function widget( $args, $instance ) {
	global $newsPageID;
	extract ($args);
	
	$objectCategoryID = 0;
	$title =apply_filters ('widget_title', $instance['title']); 
	$category = get_the_category($newsPageID);  
	$objectCategoryName = $category[0]->cat_name; $objectCategoryID = $category[0]->term_id ;
	if ($objectCategoryID) $title = 'Related News';
	if ($objectCategoryID) : $args = array('post_type' => 'post','posts_per_page' => 2, 'cat' =>  $objectCategoryID ); 
	else: if (is_front_page()) {$args = array('post_type' => 'post','posts_per_page' => 2,  );};
	endif;
	$newsList = new WP_Query( $args );
	if ( $newsList->have_posts() ) : 
	?>
	<div class="sidebar-widget-news">
		<div class="col-lg-12"> <!-- Pull in -->
		<h6 class="widget-title"> <?php echo $title; ?></h6>
			<?php 
				while ( $newsList->have_posts() ) : $newsList->the_post();  ?>
				<div class="news-widget-meta"><?php the_date() ?></div>
				<div class="news-title">
				<a href = "<?php the_permalink() ?>" style="color:#000;"><?php the_title()?></a>
				</div>
				<div class="widget-excerpt">
				<p class="news-excerpt" style="margin-bottom:0px"><?php echo get_the_excerpt(); ?>..
				<a href="<?php the_permalink() ?>" style="color:#56a2d5;">read more</a></p></div>

				<?php endwhile; 
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
		</div> <!-- End Pull-in -->
	</div>

	<?php 
	 endif; }
 
// Widget Backend 
public function form( $instance ) 
{
if ( $instance ) { 
$title = $instance[ 'title' ]; 
} else {
$title = 'LATEST NEWS';
}
// Widget admin form
?>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) 
{
$instance = $old_instance;
$instance['title'] = strip_tags( $new_instance['title'] );
return $instance;
}

} // Class CTA_widget ends here

// Register and load the widget
function featured_news_load_widget() {register_widget( 'featured_news_widget' );}
add_action( 'widgets_init', 'featured_news_load_widget' );	
