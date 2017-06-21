<!-- Begin - outer wrapper -->
  <div class="outer-wrapper">

    <!-- Begin - sidebar left -->
      <div class="sidebar sidebar-left">

        <!-- Begin - inner wrapper -->
          <div class="sidebar-inner-wrapper">

            <!-- Begin - logo -->
              <div class="sidebar-logo">
                  <a href="<?php echo $front_page; ?>" class="sidebar-logo-link">
                    <img src="<?php echo $path_img . '/logo-sidebar-wide.png'; ?>"
                      class="sidebar-logo-image sidebar-logo-image-wide"
                      alt="<?php echo $site_name . t(' logo'); ?>"/>
                      <img src="<?php echo $path_img . '/logo-sidebar-narrow.png'; ?>"
                        class="sidebar-logo-image sidebar-logo-image-narrow"
                        alt="<?php echo $site_name . t(' logo'); ?>"/>
                  </a>
              </div>
            <!-- End - logo -->

            <?php if (isset($sidebar_tertiary)): ?>
              <!-- Begin - navigation -->
                <?php print render($sidebar_tertiary); ?>
              <!-- End - navigation -->
            <?php endif; ?>

          </div>
        <!-- End - inner wrapper -->

      </div>
    <!-- End - sidebar left -->

    <!-- Begin - inner wrapper -->
      <div class="inner-wrapper" role="document">

        <!-- Begin - simple navigation -->
        <nav class="simple-navigation">

          <!-- Begin - button list -->
            <ul class="simple-navigation-list simple-navigation-list-left">

              <!-- Begin - button -->
                <li class="simple-navigation-button">
                    <a href="#" data-sidebar-toggle="left">
                        <span class="fa icon fa-bars"></span> Menu</a>
                </li>
              <!-- End - button -->

            </ul>
          <!-- End - button list -->

          <!-- Begin - logo -->
            <a href="<?php echo $front_page; ?>"
               class="simple-navigation-logo-link">
                <img src="<?php echo $path_img . '/logo-simple-navigation.png'; ?>"
                     class="simple-navigation-logo-image"
                     alt="<?php echo t('Syddjurs.dk logo'); ?>"/>
            </a>
          <!-- End - logo -->

        </nav>
        <!-- End - simple navigation -->

        <!-- Begin - content -->
          <div class="container">
            <div class="content">
              <div class="content-inner">

                <!-- Begin - page header -->
                <div class="os2-page-header">
                  <div class="row page-header-user-rows hidden-xs col-xs-12 col-sm-9 col-sm-push-3 ">
                    <div class="row user-row">

                      <!-- Begin - preface first -->
                      <?php if (!empty($page['preface_first'])): ?>
                      <div id="region-preface-first" class="col-xs-12 region-preface-first">
                        <?php print render($page['preface_first']); ?>
                      </div>
                      <?php endif; ?>
                      <!-- End - preface first -->

                      <!-- Begin - user first -->
                      <?php if (!empty($page['user_first'])): ?>
                      <div id="region-user-first" class="col-xs-12 region-user-first">
                        <?php print render($page['user_first']); ?>
                      </div>
                      <?php endif; ?>
                      <!-- End - user first -->

                      <!-- Begin - user second -->
                      <?php if (!empty($page['user_second'])): ?>
                      <div id="region-user-second" class="col-xs-12 region-user-second">
                        <?php print render($page['user_second']); ?>
                      </div>
                      <?php endif; ?>
                      <!-- End - user second -->

                    </div>
                    <div class="row header-row">

                      <!-- Begin - header second -->
                      <?php if (!empty($page['header_second'])): ?>
                      <div id="region-header-second" class="col-xs-12 region-header-second">
                        <?php print render($page['header_second']); ?>
                      </div>
                      <?php endif; ?>
                      <!-- End - header second -->
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-sm-pull-9 hidden-xs">
                    <a href="/" rel="home" title="Syddjurs Kommune">
                      <img src="<?php echo $path_img . '/logo.png'; ?>" id="logo">
                    </a>
                  </div>
                  <div class="row menu-row">

                    <!-- Begin - menu -->
                    <?php if (!empty($page['menu'])): ?>
                    <div id="toplevelmenu" class="hidden-xs col-xs-12 col-sm-7 toplevelmenu">
                      <?php print render($page['menu']); ?>
                    </div>
                    <?php endif; ?>
                    <!-- End - menu -->

                    <!-- Begin - search -->
                    <?php if (!empty($page['search'])): ?>
                    <div id="toplevelsearch" class="col-xs-12 col-sm-5 toplevelsearch">
                      <?php print render($page['search']); ?>
                    </div>
                    <?php endif; ?>
                    <!-- End - search -->

                  </div>

                  <div class="row preface-row">

                    <!-- Begin - header first -->
                    <?php if (!empty($page['header_first'])): ?>
                    <div class="col-xs-12 col-sm-12" id="region-header-first">
                      <?php print render($page['header_first']); ?>
                    </div>
                    <?php endif; ?>
                    <!-- End - header first -->

                    <!-- Begin - preface second -->
                    <?php if (!empty($page['preface_second'])): ?>
                    <div class="col-xs-12 col-sm-12" id="region-preface-second">
                      <?php print render($page['preface_second']); ?>3434
                    </div>
                    <?php endif; ?>
                    <!-- End - preface second -->

                  </div>

                </div>
                <!-- End - page header -->

                <?php if (!empty($breadcrumb)): ?>
                <!-- Begin - breadcrumb -->
                <section class="os2-breadcrumb-container" id="breadcrumb">
                  <div class="row breadcrumb-row">
                    <div class="col-xs-12">
                     <span class="breadcrumb">Du er her: </span><?php print $breadcrumb; ?>
                    </div>
                  </div>
                  </section>
                <!-- End - breadcrumb -->
                <?php endif; ?>

                <div class="row tabs-help-row">
                  <div class="col-xs-12 col-sm-12">
                    <?php if (!empty($page['help'])): ?>
                      <?php print render($page['help']); ?>
                    <?php endif; ?>

                    <?php if (!empty($action_links)): ?>
                    <ul class="action-links">
                      <?php print render($action_links); ?>
                    </ul>
                    <?php endif; ?>

                    <?php if (!empty($tabs_primary)): ?>
                    <!-- Begin - tabs primary -->
                    <div class="os2-tabs-container os2-tabs-variant-primary">
                      <?php print render($tabs_primary); ?>
                    </div>
                    <!-- End - tabs primary -->
                    <?php endif; ?>

                    <?php if (!empty($tabs_secondary)): ?>
                    <!-- Begin - tabs secondary -->
                    <div class="os2-tabs-container os2-tabs-variant-tertiary">
                      <?php print render($tabs_secondary); ?>
                    </div>
                    <!-- End - tabs secondary -->
                    <?php endif; ?>
                  </div>
                </div>


                <a id="main-content"></a>
                <div class="message">
                  <?php print $messages; ?>
                </div>

                <div class="row content-row">
                  <div class="content-row-inner">

                    <!-- Begin - sidebar first -->

                    <?php if (!empty($page['sidebar_first'])): ?>
                    <div id="region-sidebar-first" class="col-xs-12 col-sm-3 region-sidebar-first">
                      <?php print render($page['sidebar_first']); ?>
                    </div>
                    <?php endif; ?>

                    <!-- End - sidebar first -->

                    <!-- Begin - content main -->

                    <?php if (!empty($page['sidebar_first']) && !empty($page['sidebar_second'])): ?>
                    <div class="col-xs-12 col-sm-6">
                    <?php endif; ?>

                    <?php if ( (!empty($page['sidebar_first']) && empty($page['sidebar_second'])) OR (empty($page['sidebar_first']) && !empty($page['sidebar_second']))): ?>
                    <div class="col-xs-12 col-sm-9">
                    <?php endif; ?>

                    <?php if (empty($page['sidebar_first']) && empty($page['sidebar_second'])): ?>
                    <div class="col-xs-12">
                    <?php endif; ?>

                      <div class="content-wrapper">
                        <?php print render($page['content']); ?>
                      </div>

                    </div>

                    <!-- End - content main -->

                    <!-- Begin - sidebar second -->

                    <?php if (!empty($page['sidebar_second'])): ?>
                    <div id="region-sidebar-second" class="col-xs-12 col-sm-3 region-sidebar-second">
                      <?php print render($page['sidebar_second']); ?>
                    </div>
                    <?php endif; ?>

                  <!-- End - sidebar second -->
                </div>
              </div>

                <div class="zone-footer">
                  <!-- Begin - footer first -->

                  <?php if (!empty($page['footer_first'])): ?>
                  <footer class="footer region-footer-first">
                    <div class="footer-content">
                      <div class="row">
                        <div class="col-xs-12">
                          <?php print render($page['footer_first']); ?>
                        </div>
                      </div>
                    </div>
                  </footer>
                  <?php endif; ?>
                  <!-- End - footer first -->

                  <!-- Begin - footer second -->
                  <?php if (!empty($page['footer_second'])): ?>
                  <footer class="footer region-footer-second hidden-xs">
                    <div class="footer-content">
                      <div class="row">
                        <div class="col-xs-12">
                          <?php print render($page['footer_second']); ?>
                        </div>
                      </div>
                    </div>
                  </footer>
                  <?php endif; ?>
                  <!-- End - footer second -->

                  <!-- Begin - footer third -->
                  <?php if (!empty($page['footer_third'])): ?>
                  <footer class="footer region-footer-third">
                    <div class="footer-content">
                      <div class="row">
                        <div class="col-xs-12">
                          <?php print render($page['footer_third']); ?>
                        </div>
                      </div>
                    </div>
                  </footer>
                  <?php endif; ?>
                  <!-- End - footer third -->

                </div>
              </div>
            </div>
          </div>
        <!-- End - content -->

      </div>
    <!-- End - inner wrapper -->

  </div>
<!-- End - outer wrapper -->
