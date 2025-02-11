<?php
/**
 * Template Name: mobile-photography 
 *
 * Selectable from a dropdown menu on the edit page screen.
 *
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?> 


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



					
					<div class="subpage-mobilebody">

							<div class="mobile-back">
								<a href="<?php echo home_url(); ?>"> <img alt="dubai lightings" src="<?php echo get_template_directory_uri().'/images/mobile-back.png'; ?>"/> </a>
							</div>

							<div style="clear:both"></div>  

							<div id="mobile-photography">

												<?php if ( have_posts() ): ?>
															<!--h2>Latest Posts</h2-->	
															<ol>

															<?php while ( have_posts() ) : the_post(); ?>
																<li>
																	<article>
																		<a class="mobile-subtitle" href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>	<div class="mobile-line"></div> <br/> 
																		<!--<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?> -->
																	</article><p><?php the_content(); ?></p>
																	
																</li>
															<?php endwhile; ?>
															</ol>
															<?php else: ?>
															<h2>No posts to display</h2>
												<?php endif; ?>

							</div>

							<div id="mobile-subpages-img">

									<h1>Artistic</h1>
										<img alt="dubai lightings" src="<?php echo get_template_directory_uri().'/images/artistic/1.jpg'; ?>"/> <br/>
										<img alt="dubai framing" src="<?php echo get_template_directory_uri().'/images/artistic/2.jpg'; ?>"/> <br/>
										<img alt="framing in dubai" src="<?php echo get_template_directory_uri().'/images/artistic/3.jpg'; ?>"/> <br/>
										<img alt="dubai furnitures" src="<?php echo get_template_directory_uri().'/images/artistic/4.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/artistic/5.jpg'; ?>"/> <br/>
										<img alt="dubai interior design" src="<?php echo get_template_directory_uri().'/images/artistic/6.jpg'; ?>"/> <br/>
										
										<br/><br/><br/>

									<h1> Historical </h1>	
										<img alt="dubai lightings" src="<?php echo get_template_directory_uri().'/images/historical/historical-1.jpg'; ?>"/> <br/>
										<img alt="dubai home furnitures" src="<?php echo get_template_directory_uri().'/images/historical/historical-2.jpg'; ?>"/> <br/>
										<img alt="dubai furnitures" src="<?php echo get_template_directory_uri().'/images/historical/historical-3.jpg'; ?>"/> <br/>
										<img alt="dubai home accessories" src="<?php echo get_template_directory_uri().'/images/historical/historical-4.jpg'; ?>"/> <br/>
										<img alt="dubai home decors" src="<?php echo get_template_directory_uri().'/images/historical/historical-5.jpg'; ?>"/> <br/>
										<img alt="dubai lighting accessories" src="<?php echo get_template_directory_uri().'/images/historical/historical-6.jpg'; ?>"/> <br/>

										<br/><br/><br/>

									
							</div>


					</div> 





















