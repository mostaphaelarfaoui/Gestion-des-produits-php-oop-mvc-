<!-- php

if (isset($_POST['submit'])) {
    $creatUser = new usersController();
    $creatUser->register();
}

?>

<link rel="stylesheet" href="./views/assets/css/style.css">

<div class="container">
    <div class="form">
        php include('./views/includes/alerts.php'); ?>
        <div class="form-section">
            <form method="POST">
                <div class="group">
                    <h3 class="heading">Create account</h3>
                </div>
                <div class="group">
                    <input type="text" name="username" class="control" placeholder="Enter User Name...">
                </div>
                <div class="group">
                    <input type="text" name="email" class="control" placeholder="Enter Email..">
                </div>
                <div class="group">
                    <input type="password" name="password" class="control" placeholder="Create Password...">
                </div>
                <div class="group m20">
                    <input type="submit" name="submit" class="btn" value="Create account">
                </div>
                <div class="group m20">
                    <a href="php echo 'https://localhost/mvc/login' ?>" class="link">Already have an account ?</a>
                </div>
            </form>
        </div>
    </div>
</div> -->