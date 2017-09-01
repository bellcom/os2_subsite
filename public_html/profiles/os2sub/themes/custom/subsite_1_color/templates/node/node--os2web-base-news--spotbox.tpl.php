<article role="listitem" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> subsite-spotbox subsite-box subsite-box-small-spacing"<?php print $attributes; ?>>
  <h3 class="subsite-spot-heading-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
  <?php if (isset($content['body'])): ?>
    <div class="subsite-teaser-body-content">
      <?php print render($content['body']); ?>
    </div>
  <?php endif; ?>
</article>
