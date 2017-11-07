<?php use Roots\Sage\Titles; ?>

<!-- Show the pagetitle -->
<?php if(get_field('pagetitle')): ?>
 <div class="page-header">
  <h1><?= Titles\title(); ?></h1>
 </div>

<!-- Security Advirsories -->
<?php elseif(is_post_type_archive('advisories')): ?>
  <h1>Security Advisories</h1>

<!-- Security Advirsories Archive -->
<?php elseif(is_tax('platform') || is_tax('version')): ?>
  <?php $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );?>
  <h2>Security Advisories for <?php echo $term->name; ?></h2>

<?php endif; ?>
