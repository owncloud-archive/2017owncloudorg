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

	<div class="row faq">

		<div class="col col-md-8 offset-md-2">
			<h3><?php echo $headline; ?></h3>


		<ul>

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<?php
		$link_id = get_field('link_id');
		$link_id = preg_replace('/[^A-Za-z0-9]/', '', $link_id);
		?>

		<li><a href="#<?php echo $link_id; ?>"><?php the_title(); ?></a></li>


	<?php endwhile; ?>

		</ul>
		</div>

</div>

<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
