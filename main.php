<style>
  .dream {
    font-weight: bold;
    color: #fff;
    text-align: center;
    text-shadow:
      3px 3px 4px rgba(0, 0, 0, 0.3),
      0px 0px 25px rgba(0, 0, 0, 0.5),
      0px 0px 5px rgba(0, 0, 0, 0.7);
  }
</style>
<?php
//session_start();
if (empty($_SESSION['username_dorawingo'])) {
  header('location:login');
}
include "proses/koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_dorawingo]'");
$hasil = mysqli_fetch_array($query);


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dorawingo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height: 3000px">
  <!-- Header -->
  <?php include "header.php"; ?>
  <!-- End Header -->
  <div class="container-lg">
    <div class="row">
      <!-- Sidebar -->

      <!-- End Sidebar -->

      <!-- Content-->
      <?php
      include $page;
      ?>
      <!-- End Content -->
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>