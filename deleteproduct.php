<?php
require_once "./config.php";
session_start();

if (isset($_GET['id'])) {
    $product_id = intval($_GET['id']);

    $stmt = mysqli_prepare($link, "DELETE FROM products WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $product_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
            alert('Product deleted successfully!');
            window.location.href = 'manageproduct.php';
        </script>";
    } else {
        echo "<script>
            alert('Error deleting product');
            window.location.href = 'manage-product.php';
        </script>";
    }

    mysqli_stmt_close($stmt);
    exit();
}

header("Location: manageproduct.php");
exit();
?>
