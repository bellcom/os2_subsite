<?php if ($view_mode == 'teaser'): ?>
  <!-- node--teaser.tpl.php -->
  <!-- Begin - teaser -->
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> subsite-teaser subsite-box subsite-box-small-spacing"<?php print $attributes; ?>>

    <!-- Begin - heading -->
    <div class="col-md-6">
      <h3 class="subsite-teaser-heading-title"><a href="<?php print $node_url; ?>" style="color:#4f5b67;font-weight:500;"><?php print $title; ?></a></h3>
       <?php if (isset($content['body'])): ?>
        <!-- Begin - body -->
        <div class="subsite-teaser-body-content">
          <?php print render($content['body']); ?>
        </div>
        <!-- End - body -->
      <?php endif; ?>
    </div>
    <!-- End - heading -->

    <!-- Begin - body -->
    <div class="col-md-6">
      	
       
        
        <a href="<?php print $field_youtube_video[0]['display_url']; ?>" data-modal="button"> <?php print render($content['field_video_placeholder']); ?></a>

<?php
print_r ($node->field_youtube_video[0]['view']);
?>

   <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div>
          <iframe width="100%" height="350" src=""></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
    <!-- End - body -->

  </article>
  <!-- End - teaser -->

<?php endif; ?>
