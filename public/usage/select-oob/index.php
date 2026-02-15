<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  echo 'Request Sent';
  echo '<div id="div1">Button clicked at ' . date('r') . '.</div>';
}
