<?php

/**
 * @file
 * Default theme implementation for a single paragraph item.
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity
 *   - entity-paragraphs-item
 *   - paragraphs-item-{bundle}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened into
 *   a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php print render($content['field_paragraph_header']); ?>
        </div>
      </div>
      <?php $col_num = 0;
        foreach (element_children($content['field_paragraph_personale']) as $col) : ?>
        <?php if (empty($col_num)): ?> <div class="row"> <?php endif;?>
        <div <?php if (!empty($col_class)): print 'class="' . $col_class . '"'; endif;?>>
          <?php print render($content['field_paragraph_personale'][$col]); ?>
        </div>
        <?php if (!empty($col_num) && $col_num == $col_amount): ?> </div> <?php endif;?>
        <?php $col_num = $col_num == $col_amount ? 0  : $col_num + 1; ?>
      <?php endforeach; ?>
  </div>
  </div>
</div>