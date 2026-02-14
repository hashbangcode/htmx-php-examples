<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  if (rand(1, 10) > 5) {
    Htmx::cancelPolling();
    echo '<p>Polling stopped.</p>';
  }
  echo '<p>Time: ' . date('r') . '.</p>';
}
