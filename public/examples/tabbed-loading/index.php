<?php

require '../Htmx.php';

$people = [
  1 => [
    'name' => 'Ivor biggun',
  ],
  2 => [
    'name' => 'IP Freely',
  ],
];

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  $id = (int) $_GET['id'];

  if (!isset($people[$id])) {
    echo '';
    die();
  }

  $person = $people[$id];
  echo '<h3>' . $person['name']. '</h3>';
}
