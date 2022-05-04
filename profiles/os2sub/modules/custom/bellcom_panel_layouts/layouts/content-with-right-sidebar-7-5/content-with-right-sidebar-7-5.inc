<?php

/**
 * implementation of hook_panels_layouts()
 */
$plugin = array(
  'title' => t('Content with right sidebar (7/5)'),
  'category' => t('Bellcom'),
  'icon' => 'content-with-right-sidebar-7-5.png',
  'theme' => 'content-with-right-sidebar-7-5',
  'css' => 'content-with-right-sidebar-7-5.css',
  'regions' => array(
    'top' => t('Top - full width'),
    'top-container' => t('Top - with container'),
    'sidebar' => t('Sidebar'),
    'content' => t('Content'),
    'bottom-container' => t('Bottom - with container'),
    'bottom' => t('Bottom - full width'),
  ),
);
