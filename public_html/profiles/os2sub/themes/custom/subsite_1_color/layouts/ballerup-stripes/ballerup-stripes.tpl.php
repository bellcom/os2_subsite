<div class="row" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['top']): ?>
	  <div class="col-md-12">
		  <?php print $content['top']; ?>
		</div>
	<?php endif ?>
  <div class="content <?php if ($content['sidebar-right']): ?>col-sm-8<?php else: ?>col-sm-12<?php endif ?>">
    <?php print $content['content']; ?>
  </div>
  <?php if ($content['sidebar-right']): ?>
    <div class="col-md-4">
      <?php print $content['sidebar-right']; ?>
    </div>

	<?php endif ?>
  <?php if ($content['bottom']): ?>
		<div class="col-sm-12 content-bottom">
      <?php print $content['bottom']; ?>
    </div>
	<?php endif ?>
    <?php if ($content['footer']): ?>
	    <div class="col-md-12">
        <?php print $content['footer']; ?>
	    </div>
	<?php endif ?>
</div>
