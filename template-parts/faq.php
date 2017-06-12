<?php

// Get FAQ Titles and list navigation
//-----------------------------------------------------------------------------------------------------------//


$faq_titles = array(
    'intro'         => 'Intro',
    'running'       => 'Running ownCloud',
    'technology'    => 'Technology',
    'community'     => 'ownCloud Community',
    'legal'         => 'Legal',
    'professional'  => 'ownCloud for professional use',
 );

 foreach( $faq_titles as $faq_id => $headline ) {

  $filter_key   		= $faq_id;
  $headline 						= $headline;

  include(locate_template('template-parts/faq-titles.php'));

 }


// Get FAQ Content
//-----------------------------------------------------------------------------------------------------------//


$faq_content = array(
    'intro'         => '',
    'running'       => 'Running ownCloud',
    'technology'    => 'Technology',
    'community'     => 'ownCloud Community',
    'legal'         => 'Legal',
    'professional'  => 'ownCloud for professional use',
 );

 foreach( $faq_content as $faq_id => $headline ) {

  $filter_key 	  	= $faq_id;
  $headline 						= $headline;

  include(locate_template('template-parts/faq-content.php'));

 }

?>
