<?php

require '../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isPost()) {
  $page = $_GET['id'] ?? 1;
  $page++;
  echo '<li><input type="text" name="text' . $page . '"/></li>';
  // The use of hx-swap-oob means that we inject this element into the page
  // with the ID of add-more, which replaces the add more button with an
  // updated version.
  echo '<button id="add-more" hx-post="index.php?id=' . $page . '" hx-target=".list" hx-swap="beforeend" hx-swap-oob="true">Add more</button>';
}
