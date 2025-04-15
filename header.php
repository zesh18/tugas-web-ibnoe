<style>
  .hwhw {
    font-weight: bold;
    color: #fff;
    text-align: center;
  }
</style>
<?php
//session_start(); // Mulai sesi untuk mendapatkan data dari session
?>
<nav class="navbar navbar-expand sticky-top" style="background-color:#0d6efd">
  <div class="container-lg">
    <a class="hwhw" class="navbar-brand" href=".">the 1809</a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">


          <a class="hwhw" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
            // Pastikan session sudah dimulai sebelumnya
            if (isset($_SESSION['username_dorawingo'])) {
              echo $_SESSION['username_dorawingo']; // Tampilkan nama pengguna yang sedang login
            } else {
              echo "Guest"; // Jika belum login, tampilkan "Guest"
            }
            ?>
          </a>

          <ul class="dropdown-menu dropdown-menu-end mt-2">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profil</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Setting</a></li>
            <li><a class="dropdown-item" href="logout"><i class="bi bi-arrow-left-circle-fill"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>