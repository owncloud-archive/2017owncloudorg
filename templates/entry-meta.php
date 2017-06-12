<div class="row meta">
 <div class="col col-md-12 text-center mb-2">
  <p class="byline author vcard"><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time> |
  <?= __('by', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
 </div>
</div>
