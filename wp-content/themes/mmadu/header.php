<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<!-- Primary Meta Tags -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta name="title" content="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>">
		<meta name="description" content="<?php wp_title(''); ?> | <?php bloginfo('description'); ?>">

		<!-- Set Viewport for Mobile Responsiveness -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">





		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://usable.community/">
		<meta property="og:title" content="Usable.ng | We are a community of humans who are interested in building beautiful & functional products.">
		<meta property="og:description" content="Usable.ng | We are a community of humans who are interested in building beautiful & functional products.">
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/usable-social-photo.jpg">

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://usable.community/">
		<meta property="twitter:title" content="Usable.ng | We are a community of humans who are interested in building beautiful & functional products.">
		<meta property="twitter:description" content="Usable.ng | We are a community of humans who are interested in building beautiful & functional products.">
		<meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/usable-social-photo.jpg">

		<?php wp_head(); ?>


	</head>

	<body <?php body_class(); ?>>

		<header class="header">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xs-5 col-3 branding">
                        <a href="<?php echo home_url(); ?>">
                            <svg class="branding__logo" viewBox="0 0 143 35" fill="none">
                              <path d="M18.17 9.25V20.07 20.11C18.17 21.9 18.17 23.78 17.85 25.15 17.57 26.67 16.88 28 15.83 28.82 14.82 29.65 13.58 30.06 12.21 30.15 10.47 30.2 8.95 29.74 7.9 28.78 5.98 27.13 5.61 24.24 5.61 21.08V9.25H0.75V21.26C0.7 25.38 0.98 29.69 4 32.35 6.25 34.32 9 34.83 11.66 34.64 13.9 34.5 16.33 33.68 17.94 31.89L18.72 30.98V34H22.98V9.25H18.17Z" fill="#252525"/>
                              <path d="M48.78 15.85C48.19 11.22 43.83 8.56 38.38 8.56 33.43 8.56 28.8 10.99 28.8 15.8 28.8 19.38 31.18 21.35 34.58 22.31L40.17 23.87C42.41 24.51 43.97 25.2 43.97 27.13 43.97 29.33 41.86 30.47 39.25 30.47 36.18 30.47 33.57 29.14 32.92 26.3L28.02 27.08C28.98 32.4 33.29 34.69 39.07 34.69 44.66 34.69 48.92 31.94 48.92 26.9 48.92 22.77 46.22 20.94 41.36 19.7 39.34 19.2 37.97 18.83 36.78 18.46 34.76 17.91 33.61 17.09 33.61 15.62 33.61 13.83 35.72 12.69 38.47 12.78 41.27 12.87 43.47 14.15 43.88 16.72L48.78 15.85Z" fill="#252525"/>
                              <path d="M74.09 34V19.01C74.09 17.45 74 16.03 73.59 14.8 72.35 10.76 69.05 8.56 64.06 8.56 58.65 8.56 54.94 11.4 53.52 15.44L57.92 16.77C58.83 14.11 61.12 13.01 63.92 13.01 66.94 13.01 69.14 14.57 69.33 18 65.11 18.6 60.99 19.01 57.64 20.25 54.43 21.35 52.6 23.64 52.6 27.08 52.6 31.66 55.9 34.69 60.76 34.69 65.02 34.69 67.77 33.36 69.88 30.47V34H74.09ZM68.41 27.17C67.22 29.42 64.65 30.79 61.72 30.79 58.92 30.79 57.32 29.19 57.32 27.17 57.32 25.2 58.83 24.05 61.08 23.46 63.46 22.77 65.66 22.54 69.33 21.99 69.33 23.37 69.28 25.66 68.41 27.17Z" fill="#252525"/>
                              <path d="M91.61 8.56C88.86 8.56 86.56 9.43 84.87 10.95V1H80.06V34H84.32V31.71C86.11 33.59 88.58 34.69 91.7 34.69 98.62 34.69 102.93 29.05 102.93 21.63 102.93 14.15 98.57 8.56 91.61 8.56ZM91.06 30.33C86.34 30.33 84.32 26.71 84.32 21.63 84.32 16.45 86.38 12.92 90.87 12.92 95.64 12.92 97.84 16.77 97.84 21.63 97.84 26.53 95.64 30.33 91.06 30.33Z" fill="#252525"/>
                              <path d="M108.44 34V0.31H113.26V34H108.44Z" fill="#252525"/>
                              <path d="M123.9 22.95H142.38C142.83 14.52 138.85 8.56 130.87 8.56 123.45 8.56 118.77 13.88 118.77 21.85 118.77 29.33 123.54 34.69 131.15 34.69 135.82 34.69 140.13 32.17 142.01 27.72L137.33 26.21C136.1 28.82 133.8 30.15 130.87 30.15 126.65 30.15 124.27 27.4 123.9 22.95ZM130.87 12.83C135.13 12.78 136.97 15.12 137.43 19.1H124.04C124.64 15.3 126.75 12.78 130.87 12.83Z" fill="#252525"/>
                            </svg>
                        </a>
                    </div>
                    <div class="col-xs-5 col">
                        <div class="header__navigation">
                            <div class="d-block d-sm-none">
                                <a id="mobileMenu" href="#" class="header__navigation__button">
                                    <div class="header__navigation__bars">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div> Menu</a>
                            </div>
                            <ul class="d-none d-sm-block header__navigation__menu" role="navigation" aria-label="Main Navigation">
                                <?php html5blank_nav(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12" aria-hidden="true">
                        <ul class="header__navigation__mobile" id="mobileNavigation">
                            <?php html5blank_nav(); ?>
                        </ul>
                    </div>
                </div>

            </div>
        </header>
