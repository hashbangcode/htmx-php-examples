<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  echo '<button hx-get="index.php" hx-select-oob="#div1" hx-swap="outerHTML">Request Sent</button>';
  echo '<div id="div1">Button clicked at ' . date('r') . '.</div>';
}
