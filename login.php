<?php
session_start();
include 'db.php';
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
 
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        echo "<script>alert('Login successful! Redirecting...');window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Invalid email or password!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login - GoDaddy Clone</title>
  <style>
    body {font-family: Arial; background:#f0f2f5; display:flex; justify-content:center; align-items:center; height:100vh;}
    .login-box {background:#fff; padding:30px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.2); width:350px;}
    h2 {margin-bottom:20px; text-align:center;}
    input {width:100%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:5px;}
    button {width:100%; padding:10px; background:#0073e6; color:white; border:none; border-radius:5px; cursor:pointer;}
    button:hover {background:#005bb5;}
    a {display:block; text-align:center; margin-top:10px; color:#0073e6; text-decoration:none;}
  </style>
</head>
<body>
  <div class="login-box">
    <h2>User Login</h2>
    <form method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <a href="register.php">New user? Register here</a>
  </div>
</body>
</html>
 
