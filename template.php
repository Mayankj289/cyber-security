<?php
include 'ip.php';
$redirect_url = 'forwarding_link'; // This will be replaced with the actual URL
header('Location: ' . $redirect_url);
exit;
?>
