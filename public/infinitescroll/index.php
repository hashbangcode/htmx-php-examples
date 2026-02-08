<?php

require '../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
    $page = $_GET['page'] ?? 0;
    $startCount = $page * 10;
    $nextPage = $page + 1;
    for ($i = $startCount; $i <= $startCount + 9; $i++) {
        if ($i == $startCount + 9) {
            echo <<<HEREDOC
    <p hx-get="/infinitescroll/index.php?page={$nextPage}"
        hx-trigger="revealed"
        hx-swap="afterend">{$i}</p>
HEREDOC;
        } else {
            echo '<p>' . $i . '</p>';
        }
    }
}
