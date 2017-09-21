<?php if ( !$page ) : ?>
  <a href="<?php
  global $base_url;
  print $base_url . $node_url;
  ?>">
    <span class="os2sub-box" style="display: block;">
      <span class="top-border" style="display: block;">
        <article id="node-<?php print $node->nid; ?>" class="row <?php print $classes . " all"; ?> clearfix"<?php print $attributes; ?> date-filter="<?php if ( isset($top_parent_term) ) print $top_parent_term ?>">
          <span class="teaser-wrapper row" style="display: block;">
            <span class="col-sm-4 col-xs-4" style="display: block;">
              <span class="h4" style="display: block">
                <?php print render($content['event_calendar_date']); ?>
              </span>
            </span>

              <span class="col-sm-8 col-xs-8" style="display: block;">
                <span style="display: block;" class="h4">
                  <?php print $node->title; ?>
                </span>
                <?php print render($content['field_os2web_base_field_summary']); ?>
              </span>
          </span>
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
      </span>
    </span>
  </a>
<?php endif; ?>