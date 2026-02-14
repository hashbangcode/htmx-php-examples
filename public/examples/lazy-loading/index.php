<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {

  // Sleep for a second to simulate generating something.
  sleep(1);

  // Build a table.
  $result = '<table>';
  $result .= sprintf('<tr><th>%s</th><th>%s</th><th>%s</th></tr>', 'ID', 'Value', 'Graph');
  for ($i = 1; $i <= 50; $i++) {
    $result .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td></tr>', $i, generateRandomString(), str_repeat('|', rand(1, 50)));
  }
  $result .= '</table>';

  echo $result;
}


function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';

  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[random_int(0, $charactersLength - 1)];
  }

  return $randomString;
}