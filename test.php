<?php
function a($uid) {
  $uids = '163,46,789';
  if (strpos($uids, $uid) === false) {
    echo  'false';
  }
  echo 'true';
}
a(163);
