<article<?php print $attributes; ?>>
      <?php
        if (!$page ){
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);

        print "<a href='";

        print $node->field_os2web_base_field_direct['und'][0]['value'];
        print "'>" . $title . "</a>";
        }
        else {
          print render($content);

        }
      ?>
</article>

