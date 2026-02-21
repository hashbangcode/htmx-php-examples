<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isPut()) {
  echo '<p id="div1">Button clicked at ' . date('r') . '.</p>';
}
