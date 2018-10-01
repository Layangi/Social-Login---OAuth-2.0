<!--
IT15098474
Widanagamachchi L.L.
-->
<?php

    session_start();

    require_once "GoogleAPI/vendor/autoload.php";
    $gClient = new Google_Client();
    $gClient->setClientId("835626639905-6ftm47qggkap0iuk43hpvc7pp2skjog3.apps.googleusercontent.com");
    $gClient->setClientSecret("2BHtQAWUBvjbIBqAhKB6w1vJ");
    $gClient->setApplicationName("My App");
    $gClient->setRedirectUri("http://localhost/MyApp/g-callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

?>
