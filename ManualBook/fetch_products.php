<?php
include 'connect.php';

$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>{$row['name']} - Rp {$row['price']} <a href='update_product.php?id={$row['id']}'>Edit</a> | <a href='delete_product.php?id={$row['id']}'>Hapus</a></li>";
}
?>
