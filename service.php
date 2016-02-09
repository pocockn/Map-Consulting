<?php
    /**
    * Template Name: Service
    */

    // use the get_the_post_id function to get the post ID outside the loop
    $postID = get_the_post_id();

    $titlePage = get_the_title( $postID );
?>

<?php get_header(); ?>

    <div class="row content-projects">
            <div class="container">
                <div class="col-md-9">
                 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="row" style="margin-bottom:25px;">
                    <div class="col-md-11 content services-content">
                        <h1><?php echo the_title(); ?></h1>
                       <p><?php echo get_post_meta($post->ID, 'service-header', true); ?></p> 
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-xs-8 content services-content">
                       <?php echo get_the_post_thumbnail($post->ID , 'full', array( 'class' => 'img-responsive service-img-mobile' ) ); ?>
                    </div>
                    <div class="col-md-4 content services-content">
                        <?php echo get_post_meta($post->ID, 'service-side', true); ?> 
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 content services-content">
                            <p><?php echo the_content(); ?></p>
                        </div>
                        <div class="content-top-border hidden-md hidden-lg"></div>
                    </div>
                </div> 
                <?php endwhile; endif; ?>      
                <div class="col-md-3 content">
                        <?php if ( is_active_sidebar( 'contact_sidebar' ) ) : ?>
                            <?php dynamic_sidebar( 'contact_sidebar' ); ?>
                        <?php endif; ?>
                </div>
            </div>
    </div>

<?php get_footer(); ?>
