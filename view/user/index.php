<?php
    session_start();
    include '../../model/connect.php';
    $product_query = "SELECT * FROM products";
    $products = getAll($product_query);
    $category_query = "SELECT * FROM categories";
    $categories = getAll($category_query);
    $user_query = "SELECT * FROM users";
    $users = getAll($user_query);
    include './header.php';
    
    //controllers
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
        switch($act)
        {
            case 'product_info':
                include './products/product_info.php';
                break;
        }
    }
    else{
        include './content.php';
    }
    include './footer.php';
?>