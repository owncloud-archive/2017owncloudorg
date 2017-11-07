<?php $platforms = wp_get_post_terms($post->ID, 'platform', array("fields" => "all"));?>
<?php foreach($platforms as $platform) { ?>
      <a href="<?php echo get_term_link($platform) ?>"><?php echo $platform->name ?></a>

<?php } ?> |

<?php $versions = wp_get_post_terms($post->ID, 'version', array("fields" => "all"));?>
<?php foreach($versions as $version) { ?>
      <a href="<?php echo get_term_link($version) ?>"><?php echo $version->name ?></a>
<?php } ?>
