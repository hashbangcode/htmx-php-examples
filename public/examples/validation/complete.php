<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isPost()) {
  echo 'Form submitted.';
}
