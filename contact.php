<?php
    /**
    * Template Name: Contact
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
                        <h1><?php echo the_title(); ?></h1>
                            <!-- iFrame of Cirecenster embedded from google -->
                            <div id="iframe-map">
                                <iframe height="275" frameborder="0" width="480" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19775.89631346816!2d-1.9663071000000054!3d51.71497965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48711100b7a975e9%3A0x34b6b38422d604bb!2sCirencester%2C+Gloucestershire+GL7!5e0!3m2!1sen!2suk!4v1438015396312" style="border: 0;">
                                </iframe>
                            </div>
            
                        <div class="contact-details">
                            <?php the_content(); ?>
                        </div>
                        <div class="content-top-border hidden-lg hidden-md"></div>
                     <?php endwhile; endif; ?>
                </div>       
                <div class="col-md-3 content">
                        <?php if ( is_active_sidebar( 'contact_sidebar' ) ) : ?>
                            <?php dynamic_sidebar( 'contact_sidebar' ); ?>
                        <?php endif; ?>
                </div>
            </div>
    </div>

<?php get_footer(); ?>