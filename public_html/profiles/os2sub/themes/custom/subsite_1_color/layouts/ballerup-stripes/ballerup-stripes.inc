<?php
/**
 * implementation of hook_panels_layouts()
 */
$plugin = array(
  'title' => t('Ballerup Stripes'),
  'category' => t('OS2Web'),
  'icon' => 'ballerup-stripes.png',
  'theme' => 'ballerup-stripes',
  'css' => 'ballerup-stripes.css',
  'regions' => array(
    'footer' => t('Bottom'),
    'top' => t('Top'),
    'sidebar-left' => t('Left sidebar'),
    'sidebar-right' => t('Right sidebar'),
    'content' => t('Content'),
    'bottom' => t('Content Footer'),
  ),
);
