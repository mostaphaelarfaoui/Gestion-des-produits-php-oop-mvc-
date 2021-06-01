<?php 
require_once './views/includes/Header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php';
$home = new HomeController();

$pages = ['add', 'update', 'delete', 'logout', 'categorie', 'addcateg', 'hooome1', 'updatecateg', 'addProduct', 'product', 'updateProduct'];

if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){

    if(isset($_GET['page'])){
        if(in_array($_GET['page'], $pages))
        {
            $page = $_GET['page'];
            $home->index($page);
        }
        else
        {
            include('views/includes/404.php');
        }
    } else{
        $home->index('hooome1');
    }

    require_once './views/includes/footer.php';
}
    else if(isset($_GET['page']) && $_GET['page']=== 'signup'){
        $home->index('signup');
    }
    else{
        $home->index('login');
    }
?>