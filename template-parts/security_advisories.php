<?php

// Get the affected platform
 $advisory_platforms = get_terms('platform', array(
   'order'      => 'DESC',
   'orderby'    => 'count',
 ));

 if ($advisory_platforms): ?>

 <div class="row security_advisories">

   <div class="col-12 ">  <!-- Add the separator -->
     <div class="posts">
     </div>
   </div>

 <?php

 // Loop through every platform
 foreach( $advisory_platforms as $advisory_platform ):
 ?>
    <div class="col-md-4">
     <h2><?php echo $advisory_platform->name; ?></h2>
       <?php

          // Get the affected versions
          $advisory_versions = get_terms('version', array(
            'order'      => 'ASC',
          ));

           // Loop through every version
          foreach( $advisory_versions as $advisory_version ): ?>

            <?php
           // Select all advisories for the given platform and version
           $posts = get_posts(array(
             'post_type'           => 'advisories',
             'nopaging'            => true,
             'posts_per_page'      => - 1,
             'tax_query'           => array(
                 'relation' => 'AND',
                 array(
                     'taxonomy'    => 'platform',
                     'field'       => 'slug',
                     'terms'       => array( $advisory_platform->slug )
                 ),
                 array(
                     'taxonomy'    => 'version',
                     'field'       => 'slug',
                     'terms'       => array( $advisory_version->slug )
                 )
             )
           ));

           if ($posts): ?>

           <h4 class="tag"><?php echo $advisory_version->name; ?></h4>
           <ul>

             <?php foreach($posts as $post):
               setup_postdata($post); ?>
                 <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
             <?php endforeach; ?>

           </ul>

         <?php endif; ?>
       <?php endforeach; ?>

       <a class="btn btn-primary btn-small" href="https://owncloud-org-relaunch:8890/feed/?post_type=advisories&platform=<?php echo $advisory_platform->slug  ?>" target="_blank">Follow <?php echo $advisory_platform->name; ?> advisories via RSS</a>

   </div>

 <?php endforeach; ?>
 </div> <!-- Close the row -->

 <?php endif; //$advisory_platforms ?>
