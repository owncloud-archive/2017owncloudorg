<?php

//GET ALL SUPPORTED PROVIDERS
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//


//If no filter has been set, show all providers
if ($filter_key_1 && $filter_key_2) {

	$args = array(
		'numberposts'	=> -1,
		'post_type'			=> 'provider',
		'orderby' 			=> $order,
		'order'							=> 'ASC',
		'meta_query'		=> array(
				'relation'		=> 'AND',
				array(
					'key'	 				=> $filter_key_1,
					'value'	  	=> $filter
				),
				array(
					'key'	 				=> $filter_key_2,
					'value'	  	=> $filter
				),
			)
	 );

} else { //otherwise, get the filtered output

	$args = array(
		'numberposts'	=> -1,
		'post_type'			=> 'provider',
		'orderby' 			=> $order,
		'order'							=> 'ASC',
	 'meta_key'				=> $filter_key_1,
	 'meta_value'		=> $filter
	 );

}


// query
$the_query = new WP_Query( $args );

if( $the_query->have_posts() ): ?>

	<div class="row provider">

		<div class="col-12">
			<h3><?php echo $headline; ?></h3>
			<hr>
		</div>

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <?php

  //Logo
  $provider_logo_src = get_field('provider_logo');
  $size              = 'provider';
  $provider_logo     = $provider_logo_src['sizes'][ $size ];

  //Settings
  $focus             = get_field('provider_focus');
		$free_plans 							= get_field('provider_free_plans');
		$supported  							= get_field('provider_supported');
  $countries         = get_field('provider_country');
  $countries         = array_map('strtolower', $countries); //lowercase country codes

  ?>

		<div class="col-6 col-md-4 mb-2">
 			<a href="<?php the_field('provider_website'); ?>">

					<div class="provider-meta">
						<?php if($countries): ?>
							<span class="flag-icon <?php foreach ($countries as $country) { echo 'flag-icon-' . $country; } ?>"></span>
						<?php endif; ?>
						<?php if ($free_plans): ?>
							<span class="free-plans float-right"><i class="fa fa-plus-circle"></i> Free plans!</span>
						<?php endif; ?>
					</div>

 				<img class="lazyload" data-src="<?php echo $provider_logo; ?>" />

     <div class="card-block">

       <h4 class="card-title"><b><?php the_title(); ?></b></h4>

      <?php if($focus): ?>
       <p class="card-text">Ideal for: <span class="medium"><?php echo implode('| ', $focus); ?></span></p>
      <?php endif; ?>

     </div>
 			</a>
		</div>

	<?php endwhile; ?>

</div>

<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
