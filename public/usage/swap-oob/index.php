<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  echo '<div id="div1" hx-swap-oob="true">Button clicked at ' . date('r') . '.</div>';
}
