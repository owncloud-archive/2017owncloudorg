<?php

// Get all supported providers
//-----------------------------------------------------------------------------------------------------------//

$filter 								= 1;
$filter_key_1 		= 'provider_supported';
$filter_key_2 		= false;
$order 									= 'title';
$headline 						= 'Supported Providers';

include(locate_template('template-parts/providers-content.php'));


// Get all providers with free plans
//-----------------------------------------------------------------------------------------------------------//

$filter 								= 1;
$filter_key_1 		= 'provider_free_plans';
$filter_key_2 		= false;
$order 									= 'title';
$headline 						= 'Free Plans';

include(locate_template('template-parts/providers-content.php'));


// Get all other providers
//-----------------------------------------------------------------------------------------------------------//

$filter 								= 0;
$filter_key_1 		= 'provider_free_plans';
$filter_key_2 		= 'provider_supported';
$order 									= 'title';
$headline 						= 'Other Providers';

include(locate_template('template-parts/providers-content.php'));


?>
