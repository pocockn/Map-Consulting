<?php

// get attachments from the post, exclude post thumbnail
  $attachments = get_posts( array(
            'post_type' => 'attachment',
            'posts_per_page' => -1,
            'post_parent' => $post->ID,
            'exclude'     => get_post_thumbnail_id()
        ) );



// Get the number of attachments for indicators
$numberAttachments = count( $attachments );


?>
    <?php if ( $attachments ) { ?>
    <div class="carousel-row hidden-xs">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
            <!-- if the post has attachment images, created carousel of images-->
				<?php
                    $i=0; foreach ( $attachments as $attachment ) { ?>
					<div class="item <?php if ( $i == 0 ) { echo 'active'; } ?>" id="<?php echo $i; ?>">
						<?php $url = wp_get_attachment_image_src ( $attachment->ID, 'page_banner' ); ?>
						<img src="<?php echo $url[0]; ?>" alt="Case Study Image" width=100%; height="auto">                                                                                
                        <?php $image[$i] = wp_get_attachment_image( $attachment->ID, 'gallery_thumbnail' ); ?>
                    </div>
                    <?php $i++; }
                ?>
             </div>
                <ol class="carousel-indicators carousel-case">
                    <?php for ($x=1; $x <= $numberAttachments; $x++) {?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $x; ?>" class="active">
                        <!-- echo out the contents of the image array for thumbnails-->
                            <?php echo $image[$x]; ?> 
                    </li>
                        <?php } ?>
				</ol>
		</div>
    </div>
    <?php
    // else just display the featured image 
    }  else {
          echo  get_the_post_thumbnail( $post->ID, 'page_banner', array( 'class' => 'img-responsive single-project-img' ) );
         }
    ?>
