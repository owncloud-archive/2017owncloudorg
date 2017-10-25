<?php

 $temp = $wp_query;
 $wp_query= null;

 // Get all blog posts or exclude the category Planet ownCloud
 //
 if(get_field('planet_owncloud')) {

   $args = array(
   'posts_per_page'    => 5,
   'paged' => $paged
  );

} else {

  $args = array(
   'posts_per_page'    => 5,
   'paged' => $paged,
   'category__not_in' => array(25)
 );

}

// Set the query
//
 $wp_query = new WP_Query($args);

 if ($wp_query->have_posts()): ?>

 <div class="posts">

   <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <article <?php post_class(); ?>>

     <div class="col-md-2">
      <time class="updated text-center" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
      <div class="author-avatar hidden-sm-down">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 130 ); ?>
      </div>
     </div>

     <div class="col">
     <header>
      <div class="author-avatar-small hidden-md-up">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
      </div>
      <p class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
       <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
     </header>

     <?php if(get_the_post_thumbnail()): ?>
       <div class="entry-summary thumb">
        <div class="post-thumbnail">
         <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail();  ?>
         </a>
        </div>
      <?php else: ?>
       <div class="entry-summary thumbnail">
      <?php endif; ?>

      <?php the_excerpt(); ?>


     </div>
     </div>

    </article>

   <?php endwhile;

   get_template_part('template-parts/post-navigation');

   wp_reset_postdata(); ?>

 </div>

 <?php endif; ?>
