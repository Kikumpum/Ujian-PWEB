<?php
include 'connect.php';

if (isset($_POST['addProduct'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];

    $query = "INSERT INTO products (name, price) VALUES ('$name', '$price')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        die("Gagal menambahkan produk: " . mysqli_error($connection));
    }
}
?>
