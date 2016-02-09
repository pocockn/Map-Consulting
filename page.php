<?php
    /**
    * Template Name: Page
    */

?>

<?php get_header(); ?>
    <div class="row content-projects">
        <div class="container">
            <div class="col-md-9">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <div class="content-top-border"></div>
                        <?php endwhile; endif; ?>
                        <div class="content-top-border hidden-md hidden-lg"></div>      
                </div>
                <div class="col-md-3 content">
                           <?php if ( is_active_sidebar( 'home_sidebar' ) ) : ?>
                            <?php dynamic_sidebar( 'home_sidebar' ); ?>
                        <?php endif; ?>
                </div>
            </div>
        </div>
<?php get_footer(); ?>