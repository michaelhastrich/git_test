<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico?v=2" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
		<!-- css + javascript -->
		
		<!-- font libraries -->
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,900,700italic' rel='stylesheet'>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<?php wp_head(); ?>
	
	</head>
	<body <?php body_class(); ?>>
	
		<!-- wrapper -->
		<div class="headwrap">
	
			<!-- header -->
			<header class="header group" role="banner">
				
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
					
					<!-- nav -->

					<nav class="nav" role="navigation">
						<a href="#" class="menu fa fa-bars"><i></i></a>
						<?php theme_nav(); ?>
					</nav>
					<!-- /nav -->
			
			</header>
			<!-- /header -->
		</div>	
		<!-- /wrapper -->
		<div class="main-content">