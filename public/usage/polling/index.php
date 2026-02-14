<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  $number = rand(1, 6);
  if ($number === 6) {
    Htmx::cancelPolling();
  }
  echo '<p>Rolled a ' . $number . ($number === 6 ? '! Stopping' : '.') . '</p>';
}
