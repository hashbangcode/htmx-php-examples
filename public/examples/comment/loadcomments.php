<?php

require '../../Htmx.php';

$commentFile = 'comments.csv';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  if (!file_exists($commentFile)) {
    touch($commentFile);
  } else {
    $fh = fopen($commentFile, "r");
    while (($data = fgetcsv($fh, 0, ',', '"', '\\')) !== FALSE) {
      echo '<li>' . $data[0] . ' - ' . $data[1] . '</li>';
    }
    fclose($fh);
  }
}
