<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  echo '<button hx-get="index.php" hx-select-oob="#request-output" hx-swap="outerHTML">Request Sent</button>';
  echo '<div id="request-output">Button clicked at ' . date('r') . '.</div>';
}
