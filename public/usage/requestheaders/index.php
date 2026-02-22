<?php

require '../../Htmx.php';

if (Htmx::isHtmxRequest()) {
  $target = Htmx::getTarget();
  $trigger = Htmx::getTrigger();
  $triggerName = Htmx::getTriggerName();
  $currentUrl = Htmx::getCurrentUrl();

  printf('Target: %s<br>Trigger: %s<br>Trigger Name: %s<br>Current URL: %s<br>', $target, $trigger, $triggerName, $currentUrl);
}
