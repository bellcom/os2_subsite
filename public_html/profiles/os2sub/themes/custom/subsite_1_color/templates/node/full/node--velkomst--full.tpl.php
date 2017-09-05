<article role="banner" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> subsite-teaser subsite-box subsite-box-small-spacing"<?php print $attributes; ?>>
  <div class="row">
    <?php if ($field_youtube_video[0]['display_url']): ?>
      <div class="col-sm-6">
    <?php else : ?>
      <div class="col-sm-12">
    <?php endif; ?>
      <h3 class="subsite-teaser-heading-title"><a href="<?php print $node_url; ?>" style="color:#4f5b67;font-weight:500;"><?php print $title; ?></a></h3>
       <?php if (isset($content['body'])): ?>
        <div class="subsite-teaser-body-content">
          <?php print render($content['body']); ?>
        </div>
      <?php endif; ?>
    </div>
    <?php if ($field_youtube_video[0]['display_url']): ?>
    <div class="col-sm-6">
      <a href="<?php print $field_youtube_video[0]['display_url']; ?>" data-modal="button">
        <?php print render($content['field_video_placeholder']); ?>
      </a>
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
    <?php endif; ?>  
  </div>
</article>
