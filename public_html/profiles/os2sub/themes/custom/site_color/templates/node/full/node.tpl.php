<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
    <header class="content-header">
      <?php if ($view_mode != 'os2web_meetings_meeting_detail_view' && !$teaser): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
      <?php elseif ($teaser): ?>
        <h3<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h3>
      <?php else: ?>
        <h3<?php print $title_attributes; ?>><?php print $title ?></h3>
      <?php endif; ?>
    </header>
  <?php elseif ($page && $title): ?>
    <header class="content-header">
      <a class="print" href="/print/<?php print $nid; ?>"></a>
      <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
    </header>
  <?php endif; ?>
  <div class="content-area clearfix">
    <?php if (!empty($content['links']) && !$teaser): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>
    <?php if ($view_mode != 'os2web_meetings_meeting_detail_view' && !$teaser && arg(0) == 'node' && is_numeric(arg(1))): $nodeid = arg(1); ?>
      <div class="printvenlig-side"><a target= "_blank" href="/print/<?php print $nodeid; ?>">&nbsp;</a></div>
    <?php endif; ?>

    <?php // print render($title_suffix); ?>
    <?php if ($display_submitted): ?>
      <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
    <?php endif; ?>

    <div<?php print $content_attributes; ?>>
      <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['social_share']);
      print render($content);
      if ($teaser && $node->type == 'os2web_ofir_job') {
         print '<div class="changed"> Opdateret: ' . date('d/m/Y - H:i', $node->changed) . '</div>';
      }
      ?>
    </div>
  </div>
  <?php if ($view_mode != 'os2web_meetings_meeting_detail_view'): ?>

    <?php print render($content['comments']); ?>
    <?php if (arg(0) == 'node' && is_numeric(arg(1)) && $page) : ?>
      <div class="del-bund">
        <div class="del">
          <?php print render($content['social_share']); ?>
        </div>
        <div class="fandt-du"><a href="/contact?<?php print urlencode('edit[subject]=' . $node_url); ?>">Fandt du ikke det du søgte</a></div>
      </div>

    <?php endif; ?>
    <?php if (!$teaser) {
      print "<div class='last-updated-node'> Opdateret: " . format_date($node->changed, "short") . "</div>";}
    ?>
  <?php endif; ?>
</article>
