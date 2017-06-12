<?php

//GET ALL SUPPORTED PROVIDERS
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//


$args = array(
	'numberposts'	=> -1,
	'post_type'			=> 'faq',
	'orderby' 				=> 'menu_order',
	'order' 					 => 'ASC',
 'meta_key'				=> 'category',
 'meta_value'		=> $filter_key
 );

// query
$the_query = new WP_Query( $args );

if( $the_query->have_posts() ): ?>

		<div class="faq-item row">
			<div class="col col-md-8 offset-md-2">

				<?php if ($headline): ?>
					<h2><?php echo $headline; ?></h2>
				<?php endif; ?>

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php
					$link_id = get_field('link_id');
					$link_id = preg_replace('/[^A-Za-z0-9]/', '', $link_id);
					?>

					<a name="<?php echo $link_id; ?>"></a>
					<?php the_content(); ?>


				<?php endwhile; ?>

				</div>
		</div>

<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
