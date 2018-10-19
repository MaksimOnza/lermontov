<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- CSS Custom -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- favicon Icon -->
    <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
    <!-- CSS Plugins -->
    
    <!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>


<header class="navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="header_top">
                <div class="col-md-2">
                    <div class="logo_img">
                        <a href="#"><?php the_custom_logo(); ?></a>
                    </div>
                </div>
                    
                <div class="col-md-10">
                    <div class="menu_bar">  
                        <nav role="navigation" class="navbar navbar-default">
                            <div class="navbar-header">
                                <button id="menu_slide"  aria-controls="navbar" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                               </div>
                               
                              <div class="collapse navbar-collapse" id="navbar">
                                    <?php 
                                      wp_nav_menu(array(
                                        'theme_location' => 'primary',
                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'menu_class' => 'nav navbar-nav',
                                        'menu_id' => '',
                                        'depth' => 1));
                                    ?>
                                    <!-- <ul class="nav navbar-nav"> -->
                                      <!-- <li><a href="#home" class="js-target-scroll">Home</a></li>
                                      <li><a href="#services" class="js-target-scroll">Services</a></li>
                                      <li><a href="#portfolio" class="js-target-scroll">Portfolio</a></li>
                                      <li><a href="#pricing" class="js-target-scroll">Pricing</a></li>
                                      <li><a href="#team" class="js-target-scroll">Team</a></li>
                                      <li><a href="#testimonial" class="js-target-scroll">Testimonial</a></li>
                                      <li><a href="#blog" class="js-target-scroll">Blog</a></li>
                                      <li><a href="#contact" class="js-target-scroll">Contact</a></li>
                                      <li  class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown"> page  </a>
                                         <ul class="dropdown-menu"> 
                                            <li><a href="#">List  Width</a></li>
                                            <li><a href="#">List  Sidebar</a></li>
                                            <li><a href="#">List  Sidebar</a></li>
                                            <li><a href="#">List Sidebar</a></li>
                                         </ul>
                                      </li>
                                    </ul>       -->
                                </div>
                              
                             
                
                        </nav>
                    </div>
                </div>
              
              </div>
            </div>
        </div>
</header>