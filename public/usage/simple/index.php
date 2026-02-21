<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isPut()) {
  echo '<p>Button clicked at ' . date('r') . '.</p>';
}
