<?php

 // Retrieve all the featured slideslow images
    $args = array(
    'sort_order'    =>      'ASC',
    'sort_column'   =>      'post_title',
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
    'post_type' => 'slideshow_images',
    'post_status' => 'publish'
);

// put all the posts in an array 
$posts_array = get_posts( $args ); 

// Count the amount of SlideShow images for the indicators
$slideShow_number = count( $posts_array );

?>

<div class="row-carousel">
    <!-- Carousel
    ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php for ( $i = 0; $i < $slideShow_number; $i++ ) { if ( $i == 0 ) {?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active">
                <?php } else { ?>
                </li>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>">
                </li>
                <?php } } ?>
            </ol>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <?php $i = 0;
            foreach ( $posts_array as $post_array ) {
                $imageURL = wp_get_attachment_image_src( get_post_thumbnail_id( $post_array->ID ), 'carousel_image' );
                $post_caption = $post_array->post_title;
            if ( $i ==  0) { echo '<div class="item active">';
            }
            else { 
                echo '<div class="item">';
            }
        ?>
        <!-- Set the first background image using inline CSS below. -->
            <img src="<?php echo $imageURL[0]; ?> " alt="<?php echo $post_caption ?>"/>
                <div class="carousel-caption">
                    <h1><?php echo $post_caption; ?></h1>
                </div>
        </div>
            <?php $i++; } ?>
        </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
