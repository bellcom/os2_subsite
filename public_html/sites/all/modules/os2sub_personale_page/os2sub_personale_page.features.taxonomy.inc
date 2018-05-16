<?php
/**
 * @file
 * os2sub_personale_page.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function os2sub_personale_page_taxonomy_default_vocabularies() {
  return array(
    'personale' => array(
      'name' => 'Personale',
      'machine_name' => 'personale',
      'description' => '',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
    ),
  );
}
