<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
<div class="navbar">
  <div class="row">
  <div class="social-share"><a href="#"><img src="<?php print base_path() . drupal_get_path('theme', 'site_6juli') . '/dist/img/share.svg'; ?>"></a></div>
   <div class="header-logo">
		  <a class="image-top-logo__link" href="<?php print $front_page; ?>"><img
			  src="<?php print base_path() . drupal_get_path('theme', 'site_6juli') . '/dist/img/logo/6-juli-dagene-fredericia.png'; ?>"></a>
			  <div class="site-name">
		  6. juli-dagene <br> Fredericia
		</div>
		</div>
      
      
       
           	<div class="menu">
		  <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
           <div class="mobile-nav">
  		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  			<span class="sr-only"><?php print t('Toggle navigation'); ?></span>
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
  			<span class="icon-bar"></span>
  		  </button>
  		  </div>
		  <?php endif; ?>


		  <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
  		  <div class="navbar-collapse collapse">
  			<nav id="navigation-menu" role="navigation">
				<?php if (!empty($primary_nav)): ?>
				  <?php print render($primary_nav); ?>
				<?php endif; ?>
				<?php if (!empty($secondary_nav)): ?>
				  <?php print render($secondary_nav); ?>
				<?php endif; ?>
				<?php if (!empty($page['navigation'])): ?>
				  <?php print render($page['navigation']); ?>
				<?php endif; ?>
  			</nav>
  		  </div>
		  <?php endif; ?>
		</div>        
        </div>
        
</div>
    
</header>
  <!--Slideshow begin-->
<div class="container-fluid">
    <div class="background-slideshow row">
      <?php
      $view_popular_tags = views_get_view('os2web_events_slideshow');
      $view_popular_tags->set_display('block_slideshow');
      print $view_popular_tags->preview('block_slideshow');
      ?>
    </div>
  </div>
<!--Slideshow end-->
	  <div class="main-container <?php print $container_class; ?>">

		<header role="banner" id="page-header">
		  <?php if (!empty($site_slogan)): ?>
  		  <p class="lead"><?php print $site_slogan; ?></p>
		  <?php endif; ?>

		  <?php print render($page['header']); ?>
		</header> <!-- /#page-header -->
     <div class="content-width">			

       <div class="row">
  		

		  <?php if (!empty($page['sidebar_first'])): ?>
  		  <aside class="col-sm-3" role="complementary">
			  <?php print render($page['sidebar_first']); ?>
  		  </aside>  <!-- /#sidebar-first -->
		  <?php endif; ?>

		  <section<?php print $content_column_class; ?>>
			<?php if (!empty($page['highlighted'])): ?>
  			<div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
			<?php endif; ?>
			<?php
			if (!empty($breadcrumb)): print $breadcrumb;
			endif;
			?>
			<a id="main-content"></a>
			<?php print render($title_prefix); ?>
			<?php if (!empty($title)): ?>
  			<h1 class="page-header"><?php print $title; ?></h1>
			<?php endif; ?>
			<?php print render($title_suffix); ?>
			<?php print $messages; ?>
			<?php if (!empty($tabs)): ?>
			  <?php print render($tabs); ?>
			<?php endif; ?>
			<?php if (!empty($page['help'])): ?>
			  <?php print render($page['help']); ?>
			<?php endif; ?>
			<?php if (!empty($action_links)): ?>
  			<ul class="action-links"><?php print render($action_links); ?></ul>
			<?php endif; ?>
			<?php print render($page['content']); ?>
		  </section>

		  <?php if (!empty($page['sidebar_second'])): ?>
  		  <aside class="col-sm-3" role="complementary">
			  <?php print render($page['sidebar_second']); ?>
  		  </aside>  <!-- /#sidebar-second -->
		  <?php endif; ?>

		</div>
	  </div>
	  </div>

	  <?php //if (!empty($page['footer'])):    ?>

	  <footer class="footer">
		<div class="social-links">
  		  <h2><?php print t('Mød os på'); ?></h2>
  		  		  
  		  <?php if ($theme_settings['social_links']['facebook']['active']): ?>
    		  <a class="image-social-links__link social-icon social-icon-facebook" 
      		  data-toggle="tooltip" 
        		data-placement="top" 
        	  title="<?php print $theme_settings['social_links']['facebook']['tooltip']; ?>" 
            href="<?php print $theme_settings['social_links']['facebook']['url']; ?>">
              <img src="<?php print base_path() . drupal_get_path('theme', 'site_6juli') . '/dist/img/social/facebook.png'; ?>" title="<?php print $theme_settings['social_links']['facebook']['tooltip']; ?>">
          </a>
        <?php endif; ?>
        
        <?php if ($theme_settings['social_links']['instagram']['active']): ?>
    		  <a class="image-social-links__link social-icon social-icon-instagram" 
      		   data-toggle="tooltip" 
        		 data-placement="top" 
             title="<?php print $theme_settings['social_links']['instagram']['tooltip']; ?>" 
             href="<?php print $theme_settings['social_links']['instagram']['url']; ?>">
      		  <img src="<?php print base_path() . drupal_get_path('theme', 'site_6juli') . '/dist/img/social/instagram.png'; ?>" title="<?php print $theme_settings['social_links']['instagram']['tooltip']; ?>">
  			  </a>
        <?php endif; ?>
    
  			<?php if ($theme_settings['social_links']['youtube']['active']): ?>
  		    <a class="image-social-links__link social-icon social-icon-youtube"
    		    data-toggle="tooltip" 
      		  data-placement="top"
        		title="<?php print $theme_settings['social_links']['youtube']['tooltip']; ?>"
      		  href="<?php print $theme_settings['social_links']['youtube']['url']; ?>">
    		    <img src="<?php print base_path() . drupal_get_path('theme', 'site_6juli') . '/dist/img/social/youtube.png'; ?>" title="<?php print $theme_settings['social_links']['youtube']['tooltip']; ?>">
    		  </a>
        <?php endif; ?>
  			<?php if ($theme_settings['social_links']['twitter']['active']): ?>  
  		    <a class="image-social-links__link social-icon social-icon-twitter" 
    		    data-toggle="tooltip" 
      		  data-placement="top" 
        		title="<?php print $theme_settings['social_links']['twitter']['tooltip']; ?> "
  		    href="<?php print $theme_settings['social_links']['twitter']['url']; ?>">
    		    <img src="<?php print base_path() . drupal_get_path('theme', 'site_6juli') . '/dist/img/social/twitter.png'; ?>" title="<?php print $theme_settings['social_links']['twitter']['tooltip']; ?> ">
    		  </a>
        <?php endif; ?>
  
        <?php if ($theme_settings['social_links']['pinterest']['active']): ?>
  		    <a class="image-social-links__link social-icon social-icon-pinterest" 
  		      data-toggle="tooltip" 
  		      data-placement="top" 
  		      title="<?php print $theme_settings['social_links']['pinterest']['tooltip']; ?>" 
  		      href="<?php print $theme_settings['social_links']['pinterest']['url']; ?>">
    		    <img src="<?php print base_path() . drupal_get_path('theme', 'site_6juli') . '/dist/img/social/snapchat.png'; ?>" title="<?php print $theme_settings['social_links']['pinterest']['tooltip']; ?>">
    		  </a>
        <?php endif; ?>			  
  			  
  		</div> 
		<div class="social-footer">
		</div>
		<div class="<?php print $container_class; ?>">
		  <?php print render($page['footer']); ?>
		</div>
	  </footer>
	  <?php //endif; ?>
