<?php

/**
 * @file
 * Customize the display of a webform submission.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $submission: The Webform submission array.
 * - $email: If sending this submission in an e-mail, the e-mail configuration
 *   options.
 * - $format: The format of the submission being printed, either "html" or
 *   "text".
 * - $renderable: The renderable submission array, used to print out individual
 *   parts of the submission, just like a $form array.
 */
?>

<?php if (array_key_exists($node->nid, $_SESSION['webform'])): ?>

  <?php
  $result = array();

  // Store submission id, so we know exactly which submission the session data belongs to
  if (!array_key_exists('submission_id', $_SESSION)) {
    $_SESSION['submission_id'] = arg(3);
  }
  ?>

  <?php if ($_SESSION['submission_id'] == arg(3)): ?>

    <?php
    // Print the webform submission to the submitter with values from SESSION variable.
    foreach ($_SESSION['webform'][$node->nid]['submitted'] as $key => $value) {

      // Get field label from database
      $query = db_select('webform_component', 'wc')
        ->fields('wc', array('name'))
        ->condition('nid', $_SESSION['webform'][$node->nid]['details']['nid'])
        ->condition('form_key', $key)
        ->execute();
      $result[$key] = $query->fetchAssoc();
    }
    ?>

    <?php if (count($result) > 0): ?>
      <div class="webform-submission">

        <?php foreach($result as $key => $value): ?>
        <?php $output = $_SESSION['webform'][$node->nid]['submitted'][$key]; ?>
        <?php if (is_array($_SESSION['webform'][$node->nid]['submitted'][$key])) {
          $output = '';
          $data = $_SESSION['webform'][$node->nid]['submitted'][$key];
          if (isset($data['day'])) {
            $output = $data['day'] . '-' . $data['month'] . '-' . $data['year'];
          }
          else {
            foreach ($data as $key => $elelment) {
              if ($elelment) {
                $output .= $elelment . '  /  ';
              }
            }
          }
        }?>

          <div class="form-item webform-component webform-component-display webform-component--<?php print $key; ?>">
            <label for="edit-submitted-<?php print $key; ?>"><?php print $value['name']; ?></label>
            <div class="form-item webform-component webform-component-display"><?php print $output; ?></div>
          </div>

        <?php endforeach; ?>

      </div>
    <?php endif; ?>

  <?php else: ?>

    <?php print drupal_render_children($renderable); ?>

  <?php endif; ?>

<?php else: ?>

  <?php print drupal_render_children($renderable); ?>

<?php endif; ?>