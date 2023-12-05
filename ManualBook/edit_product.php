<?php
include 'connect.php';

if (isset($_POST['updateProduct'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $query = "UPDATE products SET name='$name', price='$price' WHERE id='$id'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        die("Gagal memperbarui produk: " . mysqli_error($connection));
    }
}
?>
