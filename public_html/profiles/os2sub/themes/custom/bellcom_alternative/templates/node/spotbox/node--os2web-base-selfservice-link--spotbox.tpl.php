<?php if ($view_mode == 'spotbox'): ?>
  <!-- node--os2web-base-selfservice-link--spotbox.tpl.php -->
  <article id="node-<?php print $node->nid; ?>" 
	  class="<?php print $classes; ?> os2-node-teaser os2-box os2-box-small-spacing os2web-selfservice-spotbox"<?php print $attributes; ?>> 
	<?php if (isset($node->field_spot_link['und']['0']['url'])) : ?>
	
	  <a href="<?php print $node->field_spot_link['und']['0']['url']; ?>" 
		  title="<?php print $node->field_spot_link['und']['0']['title']; ?>">
	<?php endif; ?>
    <div class="panel-pane pane-views pane-os2sub-spotboks">
      <div class="os2sub-box">
		    <?php if(empty($content['field_vist_navn'])) : ?>
          <?php if ($node->field_spot_link['und']['0']['title'] !== $node->field_spot_link['und']['0']['url']) : ?>
   				 <?php print $node->field_spot_link['und']['0']['title']; ?>
          <?php endif; ?>
        <?php else: ?>
          <?php if ($node->field_spot_link['und']['0']['title'] !== $node->field_spot_link['und']['0']['url']) : ?>
					  <?php print render($content['field_vist_navn']); ?>
          <?php endif; ?>
		    <?php endif; ?>
      </div>
    </div>  		
    <?php if (isset($node->field_spot_link['und']['0']['url'])) : ?>
   </a>
      <?php endif; ?>
  </article>
<?php endif; ?>
