<?php
include 'db.php';
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?,?,?)");
    $stmt->bind_param("sss", $name, $email, $password);
 
    if ($stmt->execute()) {
        echo "<script>alert('Registration successful! Please login.');window.location='login.php';</script>";
    } else {
        echo "<script>alert('Error: Email already registered.');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register - GoDaddy Clone</title>
  <style>
    body {font-family: Arial; background:#eef2f7; display:flex; justify-content:center; align-items:center; height:100vh;}
    .reg-box {background:#fff; padding:30px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.2); width:350px;}
    h2 {margin-bottom:20px; text-align:center;}
    input {width:100%; padding:10px; margin:10px 0; border:1px solid #ccc; border-radius:5px;}
    button {width:100%; padding:10px; background:#28a745; color:white; border:none; border-radius:5px; cursor:pointer;}
    button:hover {background:#218838;}
    a {display:block; text-align:center; margin-top:10px; color:#0073e6; text-decoration:none;}
  </style>
</head>
<body>
  <div class="reg-box">
    <h2>User Registration</h2>
    <form method="POST">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Register</button>
    </form>
    <a href="login.php">Already have an account? Login</a>
  </div>
</body>
</html>
 
