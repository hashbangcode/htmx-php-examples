<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isPost()) {
  $id = $_GET['id'] ?? 1;
  $id++;
  echo '<li><label for="text1">Text ' . $id . ' </label><input type="text" id="text' . $id . '" name="text' . $id . '"/></li>';
  // The use of hx-swap-oob means that we inject this element into the page
  // with the ID of add-more, which replaces the add more button with an
  // updated version.
  echo '<button id="add-more" hx-post="index.php?id=' . $id . '" hx-target=".list" hx-swap="beforeend" hx-swap-oob="true">Add more</button>';
}
