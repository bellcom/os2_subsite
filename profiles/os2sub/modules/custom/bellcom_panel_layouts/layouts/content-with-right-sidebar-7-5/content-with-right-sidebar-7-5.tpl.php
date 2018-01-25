<div <?php if (!empty($css_id)) {
  print "id=\"$css_id\"";
} ?>>

  <?php if ($content['top']): ?>
    <!-- Begin - top -->
    <div class="panels-pane-region panels-pane-region--top">
      <?php print $content['top']; ?>
    </div>
    <!-- End - top -->
  <?php endif ?>

  <?php if ($content['top-container']): ?>
    <!-- Begin - top container -->
    <div class="container">
      <div class="panels-pane-region panels-pane-region--top-container">
        <?php print $content['top-container']; ?>
      </div>
    </div>
    <!-- End - top container -->
  <?php endif ?>

  <div class="container">
    <div class="row">

      <?php if ($content['sidebar']): ?>

        <!-- Begin - sidebar -->
        <div class="col-sm-5 col-sm-push-7 hidden-print">
          <div class="panel-pane-region panel-pane-region--sidebar">
            <?php print $content['sidebar']; ?>
          </div>
        </div>
        <!-- End - sidebar -->

        <!-- Begin - content -->
        <div class="col-sm-7 col-sm-pull-5">
          <div class="panel-pane-region panel-pane-region--content">
            <?php print $content['content']; ?>
          </div>
        </div>
        <!-- End - content -->

      <?php else: ?>

        <!-- Begin - content -->
        <div class="col-xs-12">
          <div class="panel-pane-region panel-pane-region--content">
            <?php print $content['content']; ?>
          </div>
        </div>
        <!-- End - content -->

      <?php endif ?>

    </div>
  </div>

  <?php if ($content['bottom']): ?>
    <!-- Begin - bottom -->
    <div class="panels-pane-region panels-pane-region--bottom">
      <?php print $content['bottom']; ?>
    </div>
    <!-- End - bottom -->
  <?php endif ?>

  <?php if ($content['bottom-container']): ?>
    <!-- Begin - bottom container -->
    <div class="container">
      <div class="panels-pane-region panels-pane-region--bottom-container">
        <?php print $content['bottom-container']; ?>
      </div>
    </div>
    <!-- End - bottom container -->
  <?php endif ?>

</div>
