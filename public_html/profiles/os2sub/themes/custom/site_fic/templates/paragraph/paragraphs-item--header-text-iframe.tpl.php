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
  <div class="content"<?php print $content_attributes; ?>>
    <div class="container">
      <div class="row">
        
        <!--        Check if switch is in off position-->
<?php if ( !strcasecmp($content['field_paragraph_position'][0]['#markup'], 'off') ): ?>
          <div class="col-md-12 col-lg-6 paragraph-video-container">
            <div class="paragraph-video">
          <?php print (html_entity_decode($content['field_os2web_base_field_iframe'][0]['#markup'])); ?>
              </div>
          </div>
          <div class="col-md-12 col-lg-6">
            <div class="aligner">
  <?php print render($content['field_paragraph_header']); ?>
              <?php print render($content['field_paragraph_text']); ?>
            </div>
          </div>
<?php else: ?>        <!--        Switch is in on position-->
          <div class="col-md-12 col-lg-6">
            <div class="aligner">
  <?php print render($content['field_paragraph_header']); ?>
              <?php print render($content['field_paragraph_text']); ?>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 paragraph-video-container">
            <div class="paragraph-video">
  <?php print (html_entity_decode($content['field_os2web_base_field_iframe'][0]['#markup'])); ?>
              </div>
          </div>
<?php endif; ?>
      </div>
    </div>
  </div>
</div>
