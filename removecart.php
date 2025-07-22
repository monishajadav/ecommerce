<?php
session_start();

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
} else {
    $id = $_GET['id'];
    $products = array_search($id, $_SESSION['product_id']);
    if ($products !== false) {
        unset($_SESSION['product_id'][$products]); 
    }
    header('Location: cart.php');
    exit;
}
?>


