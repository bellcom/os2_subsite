<?php print render($title_prefix); ?>
<h1<?php print $title_attributes; ?> class="subsite-full-heading-title">
  <?php print $title; ?>
</h1>
<?php print render($title_suffix); ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> subsite-full"<?php print $attributes; ?>> 
  <div class="subsite-full-heading">
    <?php if (isset($content['field_os2web_base_field_image'])): ?>
      <?php print render($content['field_os2web_base_field_image']); ?>
    <?php endif; ?>
    <?php if (isset($content['field_os2web_base_field_summary'])): ?>
      <div class="lead">
        <?php print render($content['field_os2web_base_field_summary']); ?>
      </div>
    <?php endif; ?>
  </div>
  <?php if (isset($content['field_os2web_base_field_intro'])): ?>
    <div class="subsite-full-intro">
      <?php print render($content['field_os2web_base_field_intro']); ?>
    </div>
  <?php endif; ?>
  <?php if (isset($content)): ?>
    <!-- Begin - body -->
    <div class="subsite-full-body">
      <?php 
        hide($content['field_os2web_base_field_image']);
        hide($content['field_os2web_base_field_summary']);
                  
        print render($content); ?>
    </div>
  <?php endif; ?>
  <div class="subsite-full-footer subsite-links">
    <?php print render($content['links']); ?>
  </div>
</div>
