<article role="listitem" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> subsite-spotbox subsite-box subsite-box-small-spacing"<?php print $attributes; ?>>
  <a class="news-spot-link" href="<?php print $node_url; ?>">
  <span class="h4 subsite-spot-heading-title"><?php print $title; ?></span>
  <?php if (isset($content['body'])): ?>
    <span class="subsite-teaser-body-content">
      <?php print render($content['body']); ?>
    </span>
  <?php endif; ?>

   <span class="date-in-parts">
       <span class="day"><?php  echo date("j", $node->created); ?>. </span>
       <span class="month"><?php echo date("M", $node->created); ?></span>
       <span class="year"><?php echo date("Y", $node->created); ?></span>
    </span>

  </a>
</article>


