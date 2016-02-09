<?php get_header(); 

?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row content-projects">
        <div class="container">
            <div class="col-md-9">
                    <?php get_template_part( 'partials/projects', 'gallery' ); ?>

                    <div class="member-details content"> 
                        <!-- Echo Project Name using the_title() WordPress Function -->
                        <div class="member-name-single"><h1><?php the_title(); ?></h1></div>
                            <!-- Check the meta data is there - if so print it out -->
                            <?php if (get_post_meta($post->ID, 'profession', true) !='') ?><div class="member-profession-single"><p><?php echo get_post_meta($post->ID, 'profession', true); ?></div>
                            <p><?php echo the_content(); ?> </p>
                            <?php $telephone = get_post_meta($post->ID, 'telephone', true); if (strlen($telephone) >0) :?><div class="member-contacts-single"><p>T&nbsp; <?php echo get_post_meta($post->ID, 'telephone', true); ?></p></div><?php endif ?>
                            <?php $mobile =(get_post_meta($post->ID, 'mobile', true)); if (strlen($mobile) >0)  :?><div class="member-contacts-single"><p>M&nbsp; <?php echo get_post_meta($post->ID, 'mobile', true); ?></p></div><?php endif ?>
                            <?php $fax =(get_post_meta($post->ID, 'fax', true)); if (strlen($fax) >0) :?><div class="member-contacts-single"><p>F&nbsp; <?php echo get_post_meta($post->ID, 'fax', true); ?></p></div><?php endif ?>
                            <?php if (get_post_meta($post->ID, 'company', true)): ?><div class="member-contacts-single"><p> <?php echo get_post_meta($post->ID, 'company', true);?></p></div><?php endif ?>
                            <?php if (get_post_meta($post->ID, 'email', true)): ?><div class="member-contacts-single"><span style="font-size:12px"><p><?php echo get_post_meta($post->ID, 'email', true);?></p></span></div><?php endif ?>
                            <?php if (get_post_meta($post->ID, 'website', true)): ?><div class="member-website-single"><a href="<?php echo get_post_meta($post->ID, 'website', true);?>"><p><?php echo get_post_meta($post->ID, 'website', true);?></p></a></div><?php endif ?>
                            <?php if (get_post_meta($post->ID, 'presentation', true)): ?><div class="member-website-single"><a href="<?php echo get_post_meta($post->ID, 'presentation', true);?>" target="_blank"><img src="http://www.capitalbni.co.uk/wp-content/uploads/2014/06/download-icon.jpg"> Presentation</a></div><?php endif ?>
                    
                        </div>
                    </div>
                    <div class="content-top-border hidden-md hidden-lg"></div>
              
        <div class="col-md-3 content">
                <?php get_sidebar(); ?>
        </div>
    </div>
            <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>