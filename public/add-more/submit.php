<?php

require '../Htmx.php';

if (Htmx::isPost()) {
  echo '<p>You submitted the following values.</p>';
  foreach ($_POST as $key => $data) {
    if (str_starts_with($key, 'text')) {
      echo ' - ' . $key . ' -> "' . $data . '"<br>';
    }
  }
}
?>
<p><a href="/add-more/index.html">Go back</a></p>
