<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan Daerah</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  </head>
  <body>
    <div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
        <div class="profile">
          <img src="img/profile.jpg" alt="Profile Picture" class="profile-pic" />
          <p class="profile-name">Anita Silvana</p>
          <p class="profile-role">Administrator</p>
        </div>
        <nav>
          <ul>
            <li>
              <a href="#" class="active"><i class="fas fa-home"></i> Home</a>
            </li>
            <li>
              <a href="datasekolah.html"><i class="fas fa-school"></i> Data Sekolah</a>
            </li>
            <li>
              <a href="databuku.html"><i class="fas fa-book"></i> Data Buku</a>
            </li>
            <li>
              <a href="datapeminjaman.html"><i class="fas fa-sign-out-alt"></i> Peminjaman</a>
            </li>
            <li>
              <a href="datapengembalian.html"><i class="fas fa-sign-in-alt"></i> Pengembalian</a>
            </li>
            <li>
              <a href="dataadmin.php"><i class="fas fa-user-shield"></i> Data Admin</a>
            </li>
            <li>
              <a href="logout.php"><i class="fas fa-logout"></i> Logout</a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- Akhir Sidebar -->
      <!-- Main content -->
      <div class="main-content">
        <header>
          <h1>Perpustakaan Daerah Kabupaten Karawang</h1>
          <div class="user-icon">
            <img src="img/LAMBANG_KABUPATEN_KARAWANG.png" alt="User Icon" />
          </div>
        </header>
        <div class="dashboard">
          <div class="card">
            <div class="card-icon">
              <i class="fa fa-graduation-cap fa-3x"></i>
            </div>
            <div class="card-details">
              <p>Total Sekolah</p>
              <h2>1</h2>
            </div>
          </div>
          <div class="card">
            <div class="card-icon">
              <i class="fa fa-book fa-3x"></i>
            </div>
            <div class="card-details">
              <p>Total Buku</p>
              <h2>1</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Main Content -->
    </div>
  </body>
</html>