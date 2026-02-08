<?php

require '../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
    echo '<button hx-get="index.php">Send Request</button>
<div id="request-output" hx-swap-oob="true">Button clicked at ' . date('r') . '.</div>';
}
