<!--
IT15098474
Widanagamachchi L.L.
-->
<?php

require_once "config.php";
unset($_SESSION['access_token']);
$gClient->revokeToken();
session_destroy();
header('login.php');

?>