<?php get_header(); ?>
    <div class="row content-projects">
    <div class="container">
        <div class="col-md-9">
				<?php if ( have_posts() ) : ?>
				<h1><?php printf( __( 'Search Results for: %s', 'map-consulting' ), get_search_query() ); ?></h1>
				<ul class="search-list">
				<?php while ( have_posts() ) : the_post(); ?>
						<li>
						<div class="row">
							<div class="col-md-3 content">
								<h3 style="margin-top:0px;"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
								<?php $SearchimageURL = wp_get_attachment_image_src( get_post_thumbnail_id( $post_array->ID , 'thumbnail' ) ); ?>
								<img src="<?php echo $SearchimageURL[0]; ?>" alt="search image" class="img-responsive search-image" />
							</div>
							<div class="col-md-9 content">
								<p><?php echo strip_tags( mapHelper::truncate( get_the_content(), 400 ) ) ?></p>
								<a href="<? the_permalink() ?>" title="<?php the_title() ?>">Read More</a>
							</div>
						</div>
						</li>
						<div class="content-top-border"> </div>
				<?php endwhile; ?>
			</ul>
		<?php else : ?>
					<h1>
						Sorry, there doesn't appear to be any articles related to that term. Please try another or return to the <a href="<?php $url = home_url();
echo $url; ?>" title="home">home page</a>
					</h1>

				<?php endif; ?>
      
        </div>
        <div class="col-md-3 content">
                <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
