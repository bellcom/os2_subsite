<?php
/**
 * @file
 * os2web_base.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function os2web_base_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'ballerup_afsnit';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'paragraphs_item';
  $view->human_name = 'Ballerup Afsnit';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'none';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Relationship: Paragraphs item: Entity with the Afsnit (field_afsnit) */
  $handler->display->display_options['relationships']['field_afsnit_node']['id'] = 'field_afsnit_node';
  $handler->display->display_options['relationships']['field_afsnit_node']['table'] = 'paragraphs_item';
  $handler->display->display_options['relationships']['field_afsnit_node']['field'] = 'field_afsnit_node';
  $handler->display->display_options['relationships']['field_afsnit_node']['required'] = TRUE;
  /* Field: Paragraphs item: Paragraphs item ID */
  $handler->display->display_options['fields']['item_id']['id'] = 'item_id';
  $handler->display->display_options['fields']['item_id']['table'] = 'paragraphs_item';
  $handler->display->display_options['fields']['item_id']['field'] = 'item_id';
  $handler->display->display_options['fields']['item_id']['exclude'] = TRUE;
  /* Field: Paragraphs item: Afsnit overskrift */
  $handler->display->display_options['fields']['field_paragraph_header']['id'] = 'field_paragraph_header';
  $handler->display->display_options['fields']['field_paragraph_header']['table'] = 'field_data_field_paragraph_header';
  $handler->display->display_options['fields']['field_paragraph_header']['field'] = 'field_paragraph_header';
  $handler->display->display_options['fields']['field_paragraph_header']['label'] = '';
  $handler->display->display_options['fields']['field_paragraph_header']['element_type'] = 'h3';
  $handler->display->display_options['fields']['field_paragraph_header']['element_class'] = 'js-expandmore';
  $handler->display->display_options['fields']['field_paragraph_header']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_paragraph_header']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_paragraph_header']['element_default_classes'] = FALSE;
  /* Field: Paragraphs item: Billede */
  $handler->display->display_options['fields']['field_image']['id'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
  $handler->display->display_options['fields']['field_image']['field'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['label'] = '';
  $handler->display->display_options['fields']['field_image']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_image']['settings'] = array(
    'image_style' => 'os2sub_normal_imagesize',
    'image_link' => '',
  );
  /* Field: Paragraphs item: Tekst */
  $handler->display->display_options['fields']['field_paragraph_text']['id'] = 'field_paragraph_text';
  $handler->display->display_options['fields']['field_paragraph_text']['table'] = 'field_data_field_paragraph_text';
  $handler->display->display_options['fields']['field_paragraph_text']['field'] = 'field_paragraph_text';
  $handler->display->display_options['fields']['field_paragraph_text']['label'] = '';
  $handler->display->display_options['fields']['field_paragraph_text']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_paragraph_text']['alter']['text'] = '[field_image]
[field_paragraph_text]';
  $handler->display->display_options['fields']['field_paragraph_text']['element_type'] = 'div';
  $handler->display->display_options['fields']['field_paragraph_text']['element_class'] = 'js-to_expand';
  $handler->display->display_options['fields']['field_paragraph_text']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_paragraph_text']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_paragraph_text']['element_default_classes'] = FALSE;
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['relationship'] = 'field_afsnit_node';
  $handler->display->display_options['arguments']['nid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['nid']['exception']['title'] = 'Alle';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';

  /* Display: Content pane */
  $handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');

  /* Display: Content pane */
  $handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_2');
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Paragraphs item: Paragraphs item ID */
  $handler->display->display_options['fields']['item_id']['id'] = 'item_id';
  $handler->display->display_options['fields']['item_id']['table'] = 'paragraphs_item';
  $handler->display->display_options['fields']['item_id']['field'] = 'item_id';
  $handler->display->display_options['fields']['item_id']['exclude'] = TRUE;
  /* Field: Paragraphs item: Rendered Paragraphs item */
  $handler->display->display_options['fields']['rendered_entity']['id'] = 'rendered_entity';
  $handler->display->display_options['fields']['rendered_entity']['table'] = 'views_entity_paragraphs_item';
  $handler->display->display_options['fields']['rendered_entity']['field'] = 'rendered_entity';
  $handler->display->display_options['fields']['rendered_entity']['label'] = '';
  $handler->display->display_options['fields']['rendered_entity']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['rendered_entity']['link_to_entity'] = 1;
  $handler->display->display_options['fields']['rendered_entity']['display'] = 'view';
  $handler->display->display_options['fields']['rendered_entity']['view_mode'] = 'full';
  $handler->display->display_options['fields']['rendered_entity']['bypass_access'] = 0;
  $handler->display->display_options['argument_input'] = array(
    'nid' => array(
      'type' => 'context',
      'context' => 'entity:node.nid',
      'context_optional' => 0,
      'panel' => '0',
      'fixed' => '',
      'label' => 'Indhold: Nid',
    ),
  );
  $translatables['ballerup_afsnit'] = array(
    t('Master'),
    t('more'),
    t('Apply'),
    t('Reset'),
    t('Sort by'),
    t('Asc'),
    t('Desc'),
    t('Items per page'),
    t('- All -'),
    t('Offset'),
    t('« first'),
    t('‹ previous'),
    t('next ›'),
    t('last »'),
    t('field_afsnit'),
    t('Paragraphs item ID'),
    t('.'),
    t(','),
    t('[field_image]
[field_paragraph_text]'),
    t('Alle'),
    t('Content pane'),
    t('View panes'),
  );
  $export['ballerup_afsnit'] = $view;

  return $export;
}
