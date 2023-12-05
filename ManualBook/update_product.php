<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Produk</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Update Produk</h1>

    <?php
    include 'connect.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM products WHERE id=$id";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
    }
    ?>

    <div class="add-product">
      <form method="post" action="edit_product.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <input type="number" name="price" value="<?php echo $row['price']; ?>" required>
        <button type="submit" name="updateProduct">Update Produk</button>
      </form>
    </div>
  </div>
</body>
</html>
