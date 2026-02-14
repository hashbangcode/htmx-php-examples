<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isPut()) {
    echo '<p id="request-output">Button clicked at ' . date('r') . '.</p>';
}
