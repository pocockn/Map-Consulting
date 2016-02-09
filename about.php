<?php

    /**
    * Template Name: About
    */

    $postID = get_the_post_id();

    $titlePage = get_the_title( $postID );
?>
<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row content-projects">
		<div class="container">
		 	<div class="col-md-9">
	        	 <h1><?php echo the_title(); ?></h1>
					<?php 
						// Check if page has a featured image, if so display it
						if ( has_post_thumbnail() ) { 
							the_post_thumbnail('banner', array('class' => 'img-responsive img-margin')); 
							the_content(); 
						} else {
						the_content(); 
						}
					endwhile; endif;
					?>
				<div class="content-top-border hidden-md hidden-lg"></div>
			</div>

			<div class="col-md-3 content">
		        	    <?php if ( is_active_sidebar( 'home_sidebar' ) ) : ?>
                            <?php dynamic_sidebar( 'home_sidebar' ); ?>
                        <?php endif; ?><
			</div>
		</div>
	</div>

<?php get_footer(); ?>

