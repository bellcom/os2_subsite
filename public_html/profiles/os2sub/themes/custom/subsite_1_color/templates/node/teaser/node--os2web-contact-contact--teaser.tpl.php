<article id="node-<?php print $node->nid; ?>" class="kontaktblok <?php print $classes . " all"; ?> clearfix"<?php print $attributes; ?> >
	

	<div class="kontaktblok-wrapper">
		<div class="kontaktblok-headline">
			<?php print render($content['field_os2web_contact_field_dept']); ?>
		</div>
		<div class="main-kontakt-info">
		<?php print render($content['field_distrikt']); ?>
		<?php print render($content['field_os2web_contact_field_addr']); ?>
		<?php print render($content['field_os2web_contact_field_zip']); ?>
			<?php print render($content['field_os2web_contact_field_tel']); ?>
			<div class="kontakt-employee">
			<?php print render($content['field_medarbejder_title']); ?>
			<?php print render($content['field_medarbejder']); ?>
			<?php print render($content['field_os2web_contact_field_mail']); ?>
			<?php print render($content['field_medarbejder_tlf']); ?>
			</div>
			
		</div>
		<div class="related-links">
		    <?php print render($content['field_links']); ?>
		</div>
</article>