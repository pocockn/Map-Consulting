<?php
    /**
    * Template Name: Projects
    */

    // Store all the projects post type in $arg
    $args = array (
        'post_type'=> 'projects',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC'
        );

    // Custom WordPress query with our array, used to loop through later to display each Project
    $projects = new WP_Query($args);

    $postID = get_the_post_id();

    $titlePage = get_the_title( $postID );

    $count = 0;
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
                        <!-- While there are projects in our query output the following code -->
                        <?php while ( $projects->have_posts() ) : $projects->the_post(); ?>

                            <style> #thumbnail<?php echo $count?>:hover #thumbnail-mask<?php echo $count?> {display:block} </style>
                        
                            <div class="col-md-4 col-sm-6" <?php echo 'style="margin-bottom:15px"'?> >
                                <div id="thumbnail<?php echo $count?>" class="">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'project_image', array( 'class' => 'img-responsive img-thumbnail' ) );?></a>
                                    <?php else: ?>
                                    <!-- If no featured image for Project, display a placeholder instead-->
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo site_url(); ?>/images/member-placeholder.jpg" height="165px" width="150px"/></a>
                                    <?php endif; ?>
                                    
                                    <a href="<?php the_permalink(); ?>"><div class="thumbnail-mask" id="thumbnail-mask<?php echo $count?>"></div>      </a>
                                </div> 
                                <!-- Display Project information, pulled from post meta data -->
                                <div class="member-name"><?php the_title(); ?> </div>
                                    <?php $telephone = get_post_meta($post->ID, 'website', true); if (strlen($telephone) >2) :?><div class="member-contacts">W:&nbsp; <?php echo get_post_meta($post->ID, 'website', true); ?></div><?php endif ?>
                                    <?php $mobile =(get_post_meta($post->ID, 'telephone', true)); if (strlen($mobile) >2)  :?><div class="member-contacts">M:&nbsp; <?php echo get_post_meta($post->ID, 'telephone', true); ?></div><?php endif ?>
                            
                            </div>   
                        <?php endwhile;?>
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