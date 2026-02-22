<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest()) {

  echo <<<NOWDOC
<div hx-target="this" hx-swap="outerHTML">
    <h3>Start Progress</h3>
    <button class="btn primary" hx-post="start.php">
        Start Job
    </button>
</div>
NOWDOC;

}
