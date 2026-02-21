<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isPost()) {
  // The current URL.
  $currentUrl = Htmx::getCurrentUrl();

  // Generate a unique filename for this URL.
  $currentUrl = sha1($currentUrl);
  $countFile = $currentUrl . '.txt';

  if (!file_exists($countFile)) {
    // If the file doesn't exist then create it and write 1 to it.
    file_put_contents($countFile, 1);
    // Return the number 1 to display on the page.
    echo 1;
  } else {
    // If the file does exist then load the current counter and increment it.
    $count = (int)file_get_contents($countFile);
    $count++;
    file_put_contents($countFile, $count);
    // Display the new counter result on th page.
    echo '<p>' . number_format($count) . '</p>';
  }
}
