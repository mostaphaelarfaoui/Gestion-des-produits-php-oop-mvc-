<?php
if (isset($_POST['submit'])) {
    $loginUser = new usersController();
    $loginUser->auth();
}

?>

<link rel="stylesheet" href="./views/assets/css/style.css">

<div class="container">
    <div class="form">
        <?php include('./views/includes/alerts.php'); ?>
        <div class="form-section">
            <form method="POST">
                <div class=" group">
                    <h3 class="heading">Admin Login</h3>
                </div>
                <div class="group">
                    <input type="text" name="username" class="control" placeholder="Enter User name..">
                </div>
                <div class="group">
                    <input type="password" name="password" class="control" placeholder="Enter Password...">
                </div>
                <div class="group m20">
                    <input type="submit" name="submit" class="btn" value="Login">
                </div>
                <!-- <div class="group m20">
                    <a href="< echo 'https://localhost/mvc/signup' " class="link">Create new account ?</a>
                </div> -->
            </form>
        </div>
    </div>
</div>