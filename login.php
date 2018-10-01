<!--
IT15098474
Widanagamachchi L.L.
-->
<?php

    require_once "config.php";
    if(isset($_SESSION['access_token']))
    {
        header('Location: index.php');
        exit();

    }
    $loginURL = $gClient->createAuthUrl();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login with Google - IT15098474</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
          crossorigin="anonymous">
</head>

<body>
<div class="container" style="margin-top: 100px">
    <div class="""row justify content center">
        <div class="col-md-6 col-offset-j" align="center">

            <img src="images/logo.png" width="200"><br><br>

            <form>

                <input name="email" placeholder="Email" class="form-control"><br>
                <input type="Password" name="password" placeholder="Password"  class="form-control"><br>
                <input type="submit" value="Log in" class="btn btn-primary">
                <input type="button" onclick="window.location ='<?php echo $loginURL ?>';" value="Log in with Google" class="btn btn-primary">

            </form>
        </div>
    </div>
</div>

</body>

</html>

