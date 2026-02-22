<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest()) {
  session_start();
  unset($_SESSION['progress']);
  echo <<<NOWDOC
<div hx-trigger="done" hx-get="done.php" hx-swap="outerHTML" hx-target="this">
  <h3 role="status" id="pblabel" tabindex="-1" autofocus>Running</h3>

  <div
    hx-get="progress.php"
    hx-trigger="every 600ms"
    hx-target="this"
    hx-swap="innerHTML">
    <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" aria-labelledby="pblabel">
      <div id="pb" class="progress-bar" style="width:0%">
    </div>
  </div>
</div>
NOWDOC;

}
