<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>          
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

		<div id="content">

			<div id="bodycontent">

				<div id="pagepost">

					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				

						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<?php comments_template( '', true );?>
						<?php endwhile; ?>

				</div>

					<div id="right">
 
							<div id="rightbanner">
							

							</div>


               		</div>

         	</div>
        </div>

	<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>

			

