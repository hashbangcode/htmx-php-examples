<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  echo '<p>Button clicked at ' . date('r') . '.</p>';
}
