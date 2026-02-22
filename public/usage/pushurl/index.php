<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  Htmx::pushUrl('/monkey');
  echo '<p hx-swap-oob="afterbegin:#history">/monkey<br /></p>';
}

if (Htmx::isHtmxRequest() && Htmx::isPost()) {
  echo '<p hx-swap-oob="afterbegin:#history">/some/url<br /></p>';
}
