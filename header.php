<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php wp_title( ' | ',  true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

 <!-- analytics tracking code -->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65972960-1', 'auto');
  ga('send', 'pageview');
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Top logo and Search Bar -->
    <div class="row header navbar">
        <div class="container">
            <div class="col-md-3 logo-header hidden-xs hidden-sm">
                <a href="<?php echo home_url(); ?>/">
                    <img src="<?php echo  bloginfo('template_directory');?>/img/logo.jpg" alt="map consulting Logo" class="img-responsive">
                </a>
            </div>

            <div class="col-md-3 logo-header hidden-lg hidden-md">
                <a href="<?php echo home_url(); ?>/">
                    <img src="<?php echo  bloginfo('template_directory');?>/img/logo.jpg" alt="map consulting Logo" class="img-responsive img-center">
                </a>
            </div>

            <div class="clear"></div>

            <div class="col-md-3 pull-right hidden-xs hidden-sm"> 
                <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                    <div class="input-group add-on">
                        <input type="text" class="form-control" placeholder="Search" name="s">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div> <!-- end of col md 3 -->
            <!-- Navigation for Phone and Tablet - hidden on large screens -->
            <div class="row hidden-lg hidden-md" id="mobileSearch" style="margin-bottom:10px;">
                <div class="col-xs-12"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="col-xs-12">
                        <?php wp_nav_menu( array( 'theme_location'    => 'main-menu',
                                           'depth'            => 1,
                                            'container_class' => 'collapse navbar-collapse',
                                            'menu_class'      => 'nav navbar-nav') ); ?>

                    </div>
                </div>
            </div>
            <!-- Navbar for large screens, hidden when on phone or tablet -->
            <div class="col-md-5 hidden-xs hidden-sm site-title pull-right">
                <div class="navbar-header">
                    <?php wp_nav_menu( array( 'theme_location'    => 'main-menu',
                                       'depth'            => 1,
                                        'container_class' => 'nav-large',
                                        'menu_class'      => 'nav navbar-nav') ); ?>
                </div> <!-- navbar collapse -->
            </div> <!-- navbar header -->
        </div> <!-- col md 4 -->
    </div> <!-- end of container -->
