<?php
/**
 * @file
 * os2sub_kalender.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function os2sub_kalender_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view__panel_context_d8c9acb6-ba6b-43d6-8864-c0c9c2d5eb1c';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = -27;
  $handler->conf = array(
    'title' => 'Kalender',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'event_calendar' => 'event_calendar',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'content-with-right-sidebar-8-4';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'sidebar' => NULL,
      'content' => NULL,
      'bottom' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '%node:title';
  $display->uuid = '629a8920-6009-44d4-9573-077f2dcd7d67';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'node_view__panel_context_d8c9acb6-ba6b-43d6-8864-c0c9c2d5eb1c';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-41dc547c-da00-4a9e-86c9-8464e99f5887';
  $pane->panel = 'content';
  $pane->type = 'node_title';
  $pane->subtype = 'node_title';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'link' => 0,
    'markup' => 'h1',
    'id' => '',
    'class' => '',
    'context' => 'argument_entity_id:node_1',
    'override_title' => 1,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '41dc547c-da00-4a9e-86c9-8464e99f5887';
  $display->content['new-41dc547c-da00-4a9e-86c9-8464e99f5887'] = $pane;
  $display->panels['content'][0] = 'new-41dc547c-da00-4a9e-86c9-8464e99f5887';
  $pane = new stdClass();
  $pane->pid = 'new-138f91d6-5070-4e76-8906-f0870bfe1da6';
  $pane->panel = 'content';
  $pane->type = 'entity_field';
  $pane->subtype = 'node:body';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'label' => 'title',
    'formatter' => 'text_default',
    'delta_limit' => 0,
    'delta_offset' => '0',
    'delta_reversed' => FALSE,
    'formatter_settings' => array(),
    'context' => 'argument_entity_id:node_1',
    'override_title' => 1,
    'override_title_text' => '',
    'override_title_heading' => 'h2',
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 1;
  $pane->locks = array();
  $pane->uuid = '138f91d6-5070-4e76-8906-f0870bfe1da6';
  $display->content['new-138f91d6-5070-4e76-8906-f0870bfe1da6'] = $pane;
  $display->panels['content'][1] = 'new-138f91d6-5070-4e76-8906-f0870bfe1da6';
  $pane = new stdClass();
  $pane->pid = 'new-4e0a458c-8bb7-43ed-bba3-eeed624f0bdc';
  $pane->panel = 'sidebar';
  $pane->type = 'views_panes';
  $pane->subtype = 'kalender-panel_pane_1';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'context' => array(
      0 => 'argument_entity_id:node_1',
    ),
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 0;
  $pane->locks = array();
  $pane->uuid = '4e0a458c-8bb7-43ed-bba3-eeed624f0bdc';
  $display->content['new-4e0a458c-8bb7-43ed-bba3-eeed624f0bdc'] = $pane;
  $display->panels['sidebar'][0] = 'new-4e0a458c-8bb7-43ed-bba3-eeed624f0bdc';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-138f91d6-5070-4e76-8906-f0870bfe1da6';
  $handler->conf['display'] = $display;
  $export['node_view__panel_context_d8c9acb6-ba6b-43d6-8864-c0c9c2d5eb1c'] = $handler;

  return $export;
}
