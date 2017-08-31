<?php
/**
 * implementation of hook_panels_layouts()
 */
$plugin = array(
  'title' => t('Ballerup Frontpage'),
  'category' => t('OS2Web'),
  'icon' => 'ballerup-frontpage.png',
  'theme' => 'ballerup-frontpage',
  'css' => 'ballerup-frontpage.css',
  'regions' => array(
    'footer' => t('Bottom'),
    'top' => t('Top'),
    'sidebar-left' => t('Left sidebar'),
    'sidebar-right' => t('Right sidebar'),
    'content' => t('Content'),
    'bottom' => t('Content Footer'),
  ),
);
