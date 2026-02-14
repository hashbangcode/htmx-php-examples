<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isPut()) {
  sleep(1);
    echo '<p>Button clicked at ' . date('r') . '.</p>';
}
