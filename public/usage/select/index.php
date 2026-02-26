<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  echo '<div id="response">Button clicked at ' . date('r') . '.</div>
<p>Some extra content that won\'t get displayed.</p>';
}
