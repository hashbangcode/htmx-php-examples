<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isBoosted()) {
  echo '<h1>Page 2</h1>';
  echo '<p><a href="./">Back</a></p>';
  echo '<div id="preserve" class="description" hx-preserve="true"></div>';
}
