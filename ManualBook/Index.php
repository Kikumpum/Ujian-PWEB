<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shope Kikumpum</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Selamat Shoping</h1>

    <div class="products">
      <h2>Daftar Produk</h2>
      <ul>
        <?php include 'fetch_products.php'; ?>
      </ul>
    </div>

    <div class="add-product">
      <h2>Tambah Produk Baru</h2>
      <form method="post" action="add_product.php">
        <input type="text" name="name" placeholder="Nama Produk" required>
        <input type="number" name="price" placeholder="Harga Produk" required>
        <button type="submit" name="addProduct">Tambah Produk</button>
      </form>
    </div>
  </div>
</body>
</html>
