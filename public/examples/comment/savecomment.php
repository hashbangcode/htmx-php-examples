<?php

require '../../Htmx.php';

$commentFile = 'comments.csv';

if (Htmx::isHtmxRequest() && Htmx::isGet()) {
  echo '<form hx-post="savecomment.php" hx-target="this" hx-swap="outerHTML">
  <div>
    <label>Name</label>
    <input type="text" name="name" value="">
  </div>
  <div>
    <label>Comment</label>
    <textarea name="comment"></textarea>
  </div>
  <button type="submit">Submit</button>
</form>';
}

if (Htmx::isHtmxRequest() && Htmx::isPost()) {
  $name = $_POST['name'] ?? FALSE;
  $comment = $_POST['comment'] ?? FALSE;
  if ($name !== FALSE && $comment !== FALSE) {
    $name = strip_tags($name);
    $name = str_replace("\n", '', $name);
    $comment = substr(strip_tags($comment), 0, 1000);

    $comment = nl2br($comment);
    $comment = str_replace("\n", '', $comment);

    $fp = fopen($commentFile, 'a');
    fputcsv($fp, [$name, $comment]);
    fclose($fp);

    echo '<li>' . $name . ' - ' . $comment . '</li>';
  }
  echo '<li><button hx-get="savecomment.php" hx-swap="outerHTML">
        Click To Add Comment
    </button></li>';
}