<?php print render($title_prefix); ?>
<?php print render($title_suffix); ?>
<span role="selfservice-navigation__item" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> subsite-os2web_base_selfservice_link"<?php print $attributes; ?>>
  <a class="selfservice-navigation__item__link" title="<?php print $field_spot_link['und'][0]['title']; ?> <?php print $field_os2web_base_field_source['und'][0]['value']; ?>" href="<?php print $field_spot_link['und'][0]['url']; ?>">
      <?php print $field_vist_navn[0]['value']; ?>
  </a>
</span>
