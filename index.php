<?php

/**
* Template Name: Home
*/

// retrieve the featured projects to display on home page
  $featured_array = array(
    'sort_order'    =>      'ASC',
    'sort_column'   =>      'post_date',
    'hierarchial'   =>      0,
    'exclude'       =>      '',
    'include'       =>      '',
    'meta_value' => '1',
    'authors' => '',
    'child_of' => 0,
    'parent' => -1,
    'exclude_tree' => '',
    'number' => '',
    'offset' => 0,
    'post_type' => 'projects',
    'post_status' => 'publish'
    );

// put all the featured projects posts in an array 
$featured_project_array = get_posts( $featured_array ); 
?>

<?php get_header(); ?>
    
    <!--
    - Load carousel template
    - Split into template to allow for reuse 
    -->

    <?php get_template_part( 'partials/homepage', 'carousel' ); ?>

    <div class="row">
    <!-- Call to Action -->
    <aside class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin: 20px 0px;">
                    <p><span class="text-header"><?php echo get_post_meta($post->ID, 'company_name', true); ?></span> <?php echo get_post_meta($post->ID, 'main_blurb', true); ?></p>
                      <p><?php echo get_post_meta($post->ID, 'secondary_blurb', true); ?></p>
                </div>
            </div>
        </div>
    </aside>

    <div class="row content-projects">
        <div class="container">
            <div class="col-md-9">
                <div class="row">   
                <?php 
                    $i = 0;
                    foreach ( $featured_project_array as $featured_project ) {
                        if ( $i <= 2 ) {
                ?>
                    <div class="col-xs-4">
                        <div style="margin-top:10px; margin-bottom:10px; width:100%; max-width:300px; min-width:200px; overflow:hidden">
                        <?php $projectImageURL = wp_get_attachment_image_src( get_post_thumbnail_id( $featured_project->ID ), 'project_image_featured' ); ?>
                        <a href = "<?php echo $link['Left']; ?>"><img src="<?php echo $projectImageURL[0]; ?>" class="img-responsive">
                        <h3 class="widget-title"><?php echo $featured_project->post_title; ?></h3></a>
                        <div class="widget-excerpt"><?php echo $featured_project->post_excerpt; ?></div>
                        <a href = "<?php echo get_permalink ( $featured_project->ID ); ?>"><button type="button" class="btn btn-sm btn-default">READ MORE &raquo;</button></a></div>
                    </div>
                <?php 
                    $i ++;
                        }
                    }
                ?>
            </div>
        </div>

        <div class="col-md-3">
            <div class="col-sm-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
  </div>
</div>







<?php get_footer(); ?>
