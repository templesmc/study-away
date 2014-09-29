<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p class="content-last-modified"><small>Content last updated <?php the_modified_time('F j, Y'); ?> at <?php the_modified_time('g:i a'); ?></small></p>
  </div>
</footer>

<?php wp_footer(); ?>
