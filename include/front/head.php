<?php 

function ex_head(){
	?>
	<style type="text/css">
		/* start principle color */

		.upper-bar,
		.pricing-table .card.corporate .card-link,
		.choose-us .info:last-child{
			background-color: <?php echo get_theme_mod( 'ex_principle_color', '#08526d' );?> ;
		}
		
		.navbar-brand span:first-child,
		.features h3,
		.latest-posts .card .card-title,
		.pricing-table .card .card-title,
		.stats,
		.footer .site-info a,
		.footer .helpful-links h2, .footer .contact h2,
		.footer .helpful-links ul li:before,
		.footer .site-info h2 span:first-child,
		.pricing-table .card .card-text,
		.featured-work ul li {
			color: <?php echo get_theme_mod( 'ex_principle_color', '#08526d' ); ?> ; 
		}

		.featured-work ul li{
			border: 2px solid <?php echo get_theme_mod( 'ex_principle_color', '#08526d' );?> ;
		}

		/* End principle color */

		/* start second color */
		
		.slider .carousel-inner h1 span,
		.features i,.overview button,
		.featured-work ul li.active,
		.featured-work ul li:hover,
		.pricing-table .card.corporate .card-text,
		.pricing-table .card .card-link,
		.choose-us .read-more,
		.contact-us {
			background-color: <?php echo get_theme_mod( 'ex_second_color', '#ec1c23' );?> ;
		}

		.navbar-brand span:last-child,
		.latest-posts .card .card-link,
		.stats p,
		.footer .site-info h2 span:last-child
		{
			color: <?php echo get_theme_mod( 'ex_second_color', '#ec1c23' );?> ;
		}

		.upper-bar .get-quote,
		.featured-work ul li.active, .featured-work ul li:hover,
		.overview button{
			border: 1px solid <?php echo get_theme_mod( 'ex_second_color', '#ec1c23' );?>;
		}

		.navbar-nav .nav-link:active, .navbar-nav .nav-link:hover{
			color: <?php echo get_theme_mod( 'ex_second_color', '#ec1c23' );?> !important;

		}

		/* start second color */

	</style>
	<?php
}