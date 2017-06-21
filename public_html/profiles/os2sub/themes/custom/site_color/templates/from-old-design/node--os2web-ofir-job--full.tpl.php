<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <?php if (!$teaser): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php elseif ($teaser): ?>
      <h3<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h3>
    <?php else: ?>
      <h3<?php print $title_attributes; ?>><?php print $title ?></h3>
    <?php endif; ?>
  </header>
  <?php endif; ?>
  <div class="clearfix">
    <?php if (!empty($content['links']) && !$teaser): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>
    <?php if (!$teaser && arg(0) == 'node' && is_numeric(arg(1))): $nodeid = arg(1); ?>
      <div class="printvenlig-side"><a target= "_blank" href="/print/<?php print $nodeid; ?>">&nbsp;</a></div>
    <?php endif; ?>

    <?php if ($display_submitted): ?>
      <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
    <?php endif; ?>

    <div<?php print $content_attributes; ?>>
      <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
      $emply_block = module_invoke('views','block_view','a65df961171e0f41166a39fbc1e50015');
      print render($emply_block['content']);
      if ($teaser) {
         print '<div class="changed"> Opdateret: ' . date('d/m/Y - H:i', $node->changed) . '</div>';
      }
      ?>
    </div>
  </div>

  <?php print render($content['comments']); ?>
  <?php if (arg(0) == 'node' && is_numeric(arg(1)) && $page) : ?>
    <div class="del-bund">
      <div class="del">
        <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
          <a class="addthis_button_compact">Del <img alt="blank" src="/<?php print $theme_path = drupal_get_path('theme', variable_get('theme_default', NULL)); ?>/images/blank.png"/> </a>
        </div>
      </div>
      <div class="fandt-du"><a href="/contact?<?php print urlencode('edit[subject]=' . $node_url); ?>">Fandt du ikke det du søgte</a></div>
    </div>

    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
    <div class="synes-om">
      <div class="addthis_toolbox addthis_default_style">
        <a class="addthis_button_facebook_like" fb:like:width="104"></a>
      </div>
    </div>
  <?php endif; ?>
  <?php if (!$teaser): ?>
    <div class="last-updated-node">
      Oprettet: <?php print format_date($node->created, "short"); ?><br />
      Opdateret: <?php print format_date($node->changed, "short"); ?>
    </div>
  <?php endif; ?>
</article>
