<?php
require "connection/koneksi.php";
if(isset($_POST['login'])){
  $email  = $_POST['email'];
  echo $email;
  $password =md5($_POST['password']);
  $query2 = mysqli_query($conn,"SELECT * FROM account where email = '$email' AND password = '$password'");

    if(mysqli_num_rows($query2) != 0){
      $row = mysqli_fetch_assoc($query2);
      session_start();

      if($row['akses']==2){
        $_SESSION['id'] = $row['id_account'];
        $_SESSION['email'] = $row['email'];

        echo"<script> alert('Login Berhasil ke user !');
        window.location.href = 'home.php';
        </script>";
      } 
    }else{
      echo"<script> alert('Login Gagal !');
        window.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Perpustakaan Daerah</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="login-container">
      <div class="login-box">
        <div class="logo-container">
          <img src="logo.png" alt="Library Logo" class="logo" />
        </div>
        <h2>Perpustakaan Daerah Kabupaten Karawang</h2>
        <form action="" method="POST">
          <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
          </div>
          <div class="forgot-password">
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" name="login" class="login-btn">Login</button>
        </form>
        <div class="signup">
          <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
      </div>
    </div>
  </body>
</html>
