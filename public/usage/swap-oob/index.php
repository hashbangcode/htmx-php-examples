<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
    echo '<div id="request-output" hx-swap-oob="true">Button clicked at ' . date('r') . '.</div>';
}
