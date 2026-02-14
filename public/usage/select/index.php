<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
    echo '<p id="response">Button clicked at ' . date('r') . '.</p>
<p>Some extra content that won\'t get displayed.</p>';
}
