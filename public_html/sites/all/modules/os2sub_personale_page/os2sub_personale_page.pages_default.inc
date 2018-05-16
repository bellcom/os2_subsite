<?php
/**
 * @file
 * os2sub_personale_page.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function os2sub_personale_page_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'term_view__personale';
  $handler->task = 'term_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Personale',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'personale',
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'entity_bundle:taxonomy_term',
          'settings' => array(
            'type' => array(
              'personale' => 'personale',
            ),
          ),
          'context' => 'argument_term_1',
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'ballerup-stripes';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'sidebar-right' => NULL,
      'content' => NULL,
      'bottom' => NULL,
      'sidebar-left' => NULL,
      'footer' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '%term:name';
  $display->uuid = '28130b0e-1a98-4858-b7fc-109a80a82dde';
  $display->storage_type = 'page_manager';
  $display->storage_id = 'term_view__personale';
  $display->content = array();
  $display->panels = array();
  $pane = new stdClass();
  $pane->pid = 'new-69ec1c11-1ade-44fb-a2a9-0d39a2391c33';
  $pane->panel = 'content';
  $pane->type = 'term_name';
  $pane->subtype = 'term_name';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'link' => 0,
    'markup' => 'h1',
    'id' => '',
    'class' => '',
    'context' => 'argument_term_1',
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
  $pane->uuid = '69ec1c11-1ade-44fb-a2a9-0d39a2391c33';
  $display->content['new-69ec1c11-1ade-44fb-a2a9-0d39a2391c33'] = $pane;
  $display->panels['content'][0] = 'new-69ec1c11-1ade-44fb-a2a9-0d39a2391c33';
  $pane = new stdClass();
  $pane->pid = 'new-e9e3df0a-e67c-42bc-a71a-75346753b3b7';
  $pane->panel = 'content';
  $pane->type = 'entity_view';
  $pane->subtype = 'taxonomy_term';
  $pane->shown = FALSE;
  $pane->access = array();
  $pane->configuration = array(
    'view_mode' => 'full',
    'context' => 'argument_term_1',
    'override_title' => 0,
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
  $pane->uuid = 'e9e3df0a-e67c-42bc-a71a-75346753b3b7';
  $display->content['new-e9e3df0a-e67c-42bc-a71a-75346753b3b7'] = $pane;
  $display->panels['content'][1] = 'new-e9e3df0a-e67c-42bc-a71a-75346753b3b7';
  $pane = new stdClass();
  $pane->pid = 'new-9e1bb426-b1e5-418c-8f17-d583140b4caf';
  $pane->panel = 'content';
  $pane->type = 'views_panes';
  $pane->subtype = 'ballerup_personale-panel_pane_1';
  $pane->shown = TRUE;
  $pane->access = array();
  $pane->configuration = array(
    'context' => array(
      0 => 'argument_term_1',
    ),
  );
  $pane->cache = array();
  $pane->style = array(
    'settings' => NULL,
  );
  $pane->css = array();
  $pane->extras = array();
  $pane->position = 2;
  $pane->locks = array();
  $pane->uuid = '9e1bb426-b1e5-418c-8f17-d583140b4caf';
  $display->content['new-9e1bb426-b1e5-418c-8f17-d583140b4caf'] = $pane;
  $display->panels['content'][2] = 'new-9e1bb426-b1e5-418c-8f17-d583140b4caf';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['term_view__personale'] = $handler;

  return $export;
}
