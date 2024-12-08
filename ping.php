<?php
if(isset($_POST['ip'])){
$host = $_POST['ip'];
$pingtime = shell_exec('ping -qc1 google.com 2>&1 | awk -F'/' 'END{ print (/^rtt/? $5" ms":"FAIL") }'');
echo $pingtime
}
?>
