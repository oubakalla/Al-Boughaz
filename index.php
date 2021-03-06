<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Al Boughaz</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <?php 
    if (!empty($_POST['password']) && !empty($_POST['username'])) {
        if($_POST['password']=='123a' && $_POST['username']=='admin'){
            session_start();
            $_SESSION["password"]="123a";
            $_SESSION["username"]="admin";
            echo "<script>window.location.assign('./admin.php');</script>";
        }
    }
    ?>
    <div class='container'>
        <div id="html">
            <button id="logInButton" data-toggle="modal" data-backdrop="false" href="#form" class="btn btn-primary col-xs-2 col-xs-push-5 text-center">Log in</button>
        </div>
        <div class="modal fade" id="form">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">x</button>
                        <h4 class="modal-title pull-left">Log in:</h4>
                    </div>
                    <div class="modal-body">
                        <form action="./index.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password"> </div>

                            <button type="submit" class="btn btn-default">Enter</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='assets/jquery-3.3.1.min.js'></script>
    <script src='assets/bootstrap/js/bootstrap.min.js'></script>
    <script>
        $(function() {
            $("form").submit(function(e) {
                e.preventDefault();
                var $form = $(this);
                $.post($form.attr("action"), $form.serialize())
                    .done(function(data) {
                        $("#html").html(data);
                        $("#form").modal("hide");
                    })
                    .fail(function() {
                        alert("it doesn’t work yet...");
                    });
            });
        });

    </script>
</body>

</html>
