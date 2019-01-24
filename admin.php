<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administration Space</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<?php
if (isset($_SESSION['password']) && isset($_SESSION['username'])) {
    if($_SESSION['password']!=='123a' || $_SESSION['username']!=='admin'){
        echo "<script>window.location.assign('./index.php')</script>";
        exit();
        unset($_SESSION['username']);    
        unset($_SESSION['password']);
        session_destroy();
    }
    unset($_SESSION['username']);    
    unset($_SESSION['password']);
    session_destroy();
}else{
    echo "<script>window.location.assign('./index.php')</script>";
    exit();
}
?>
    <div class="container">
        <div class="row">
            <h1 class="col-xs-6">Administration Space</h1>
            <div class="col-xs-2 col-xs-push-4 text-center">
                <p id="adminName">Imad El Azyfy</p>
                <img id="adminPicture" class="img-circle" src="assets/images/IMG-20180911-WA0000 (2).jpg" alt="administrator personal photo">
                <button id="logOutButton" class="btn btn-primary btn-info">Log out</button>
            </div>
        </div>
    </div>
</body>
</html>