<?php if ( !$page ) : ?>
  <a href="<?php
  global $base_url;
  print $base_url . $node_url;
  ?>">
    <div class="os2sub-box">
      <div class="top-border">
        <article id="node-<?php print $node->nid; ?>" class="row <?php print $classes . " all"; ?> clearfix"<?php print $attributes; ?> date-filter="<?php if ( isset($top_parent_term) ) print $top_parent_term ?>">
          <div class="teaser-wrapper">
            <?php if ( isset($content['field_os2web_base_field_lead_img']) ) : ?>
              <div class="col-xs-2">
                <?php
                $img = field_get_items('node', $node, 'field_os2web_base_field_lead_img');
                $image = $img[0];
                $style = 'os2sub_small_imagesize';
                $public_filename = image_style_url($style, $image["uri"]);
                $path = drupal_get_path_alias('node/' . $node->nid);
                print $html = '<img class="img-responsive" title = "' . $image["title"] . '" src="' . $public_filename . '"/>';
                ?>
              </div>
              <div class="col-xs-10">
                <div class="nyheder-title">
                  <?php print $node->title; ?>
                </div>
                <div class="nyheder-summary">
                  <?php print render($content['field_os2web_base_field_summary']); ?>
                </div>
              </div>
            <?php else: ?>
              <div class="col-sm-12 col-xs-12">
                <div>
                  <?php print $node->title; ?>
                </div>
                <div class="news-text-date">
                  <span class="news-date-day"><?php print date('j', $created); ?></span>
                  <span class="news-date-month"><?php
                    $m = date('M', $created);
                    print t($m);
                    ?></span>
                </div>
                <?php print render($content['field_os2web_base_field_summary']); ?>
              </div>
            <?php endif; ?>
          </div>
          <?php
          // Hide comments, tags, and links now so that we can render them later.
          hide($content['comments']);
          hide($content['links']);
          hide($content['field_tags']);
          hide($content['field_os2web_base_field_image']);
          hide($content['field_os2web_base_field_lead_img']);
          ?>
          <?php if ( !empty($content['field_tags']) || !empty($content['links']) ): ?>
            <?php hide($content['field_tags']); ?>
            <?php hide($content['links']); ?>
          <?php endif; ?>
          <?php hide($content['comments']); ?>
        </article>
      </div>
    </div>
  </a>
<?php endif; ?>