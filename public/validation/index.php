<?php

require '../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isPost()) {

  $email = $_POST['email'];

  $error = '';
  if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    $error = 'This is not a valid email address.';
  }

    echo '<div hx-target="this" hx-swap="outerHTML" class="'.($error === ''?'valid':'error') .'">
  <label for="email">Email Address</label>';

  echo '<input id="email" name="email" hx-post="/validation/index.php" autocomplete="email" required value="'.$email.'">';

  if ($error) {
    echo '<div class="error-message">' . $error . '</div>';
  }
  echo '</div>';
}
