<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Suendri">
      <link href="layouts/assets/images/favicon.ico" rel="shortcut icon">
      <link href="layouts/assets/css/style.css" rel="stylesheet">
      <title>UINSU Shop</title>
</head>

<body>
      <main>
            <header>
                  <h2>UINSU Shop | Dashboard</h2>
                  <h3><?php echo $_SESSION['user_name']; ?></h3>
            </header>
            <nav>
                  <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?p=kategori">Kategori</a></li>
                        <li><a href="index.php?p=produk">Produk</a></li>
                        <li><a href="index.php?p=order">Order</a></li>
                        <li><a href="index.php?p=user">User</a></li>
                        <li><a href="index.php?p=logout">logout</a></li>
                  </ul>
            </nav>

            <section>
                  <?php
                  if (isset($_GET['p'])) {
                        include_once __DIR__ . "/../" .  $_GET['p'] . ".php";
                  } else {
                        include_once "main.php";
                  }
                  ?>
            </section>

            <footer>
                  copyright &copy; 2022
            </footer>

      </main>
</body>

</html>