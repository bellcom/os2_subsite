<div class="row balkfp" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['top']): ?>
    <div class="col-md-12">
      <?php print $content['top']; ?>
    </div>
	<?php endif; ?>
  <?php if ($content['content']): ?>
    <div class="col-sm-12 content <?php if ($content['sidebar-right']): ?>rightsidebar-enabled<?php endif; ?>">
        <?php print $content['content']; ?>
    </div>
  <?php endif; ?>
  <?php if ($content['sidebar-right']): ?>
    <?php if ($content['sidebar-left']): ?>
      <div class="col-sm-8">
        <?php print $content['sidebar-left']; ?>
      </div>
    <?php endif; ?>    	    
    <div class="col-sm-4">
      <?php print $content['sidebar-right']; ?>
    </div>
  <?php endif; ?>

	<?php if ($content['bottom']): ?>
		<div class="col-sm-12 content-bottom">
	        <?php print $content['bottom']; ?>
	    </div>
	<?php endif; ?>
  <?php if ($content['footer']): ?>
    <div class="col-md-12">
      <?php print $content['footer']; ?>
    </div>
	<?php endif; ?>
</div>
