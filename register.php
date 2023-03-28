<?php
$ip_address = $_SERVER['REMOTE_ADDR'];
$log_file = "logs.txt";
$log_entry = date('Y-m-d H:i:s') . " - $ip_address\n";
file_put_contents($log_file, $log_entry, FILE_APPEND);
header("Location: next_page.php");
?>