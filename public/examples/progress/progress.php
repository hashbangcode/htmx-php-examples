<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest()) {
  // Get range of the progress bar. We set this in a range of 0 to 100 for convenience when working out the width of the progress bar.
  $progress = range(0, 100, 10);

  // Start the session so we can pull the progress out of session storage.
  session_start();
  if (!isset($_SESSION['progress'])) {
    // If the progress variable isn't set then initialise it.
    $_SESSION['progress'] = 0;
  }
  // Extract the progress.
  $value = $_SESSION['progress'];

  if ($value == count($progress)) {
    // If the current progress is the same as the number of steps then issue the Hx-Trigger header and quit the program.
    Htmx::setTrigger('done');
    exit;
  }

  // Render out the next iteration of the progress bar.
  echo <<<NOWDOC
    <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="{$progress[$value]}" aria-labelledby="pblabel">
      <div id="pb" class="progress-bar" style="width:{$progress[$value]}%">
    </div>
NOWDOC;

  // Increment the progress counter and store it in the session.
  $value++;
  $_SESSION['progress'] = $value;
}
