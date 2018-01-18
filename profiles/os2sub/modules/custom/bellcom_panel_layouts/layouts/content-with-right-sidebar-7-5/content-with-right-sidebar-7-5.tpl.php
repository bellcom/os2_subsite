<div <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="container">
    <div class="row">

      <?php if ($content['top']): ?>

        <!-- Begin - top -->
        <div class="col-xs-12">
          <div class="panel-pane-region panel-pane-region--top">
            <?php print $content['top']; ?>
          </div>
        </div>
        <!-- End - top -->

      <?php endif; ?>

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

      <?php if ($content['bottom']): ?>

        <!-- Begin - bottom -->
        <div class="col-xs-12">
          <div class="panel-pane-region panel-pane-region--bottom">
            <?php print $content['bottom']; ?>
          </div>
        </div>
        <!-- End - bottom -->

      <?php endif; ?>

    </div>
  </div>
</div>
