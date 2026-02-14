<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  echo 'Request Sent';
  echo '<div id="div1">Button clicked at ' . date('r') . '.</div>';
  echo '<div id="div2">More content here.</div>';
  echo '<div id="div3">And some more.</div>';
  echo '<div id="div4">Yet more.</div>';
  echo '<div id="div5">There goes another one.</div>';
  echo '<div id="div6">And again.</div>';
}
