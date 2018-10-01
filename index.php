<!--
IT15098474
Widanagamachchi L.L.
-->

<?php

session_start();

    if(!isset($_SESSION['access_token']))
    {
        header('Location: login.php');
        exit();

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login with Google - IT15098474</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 100px">
    <div class="""row justify content center">
        <div class="col-md-3" align="center">
            <img style="width: 80% " src="<?php echo $_SESSION['picture']?>">
        </div>
        <div class="col-md-9" align="center">
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr>
                        <td>First Name</td>
                        <td><?php echo $_SESSION['givenName']?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><?php echo $_SESSION['familyname']?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['email']?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><?php echo $_SESSION['gender']?></td>
                    </tr>
                </tbody>
        </div>
    </div>
</div>
</body>
</html>