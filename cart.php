<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>My Cart</title>
  <style>
    body { font-family:Arial; background:#f0f0f0; }
    header { background:#111; color:#fff; padding:15px; text-align:center; }
    .container { max-width:700px; margin:40px auto; background:#fff; padding:20px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.2); }
    .item { display:flex; justify-content:space-between; padding:10px; border-bottom:1px solid #ddd; }
    button { padding:10px 16px; background:#28a745; color:white; border:none; border-radius:6px; cursor:pointer; }
    button:hover { background:#218838; }
  </style>
  <script>
    function checkout() {
      alert("Proceeding to checkout...");
      window.location.href = "dashboard.php"; // JS redirection
    }
  </script>
</head>
<body>
<header>Shopping Cart</header>
<div class="container">
<?php
if(isset($_GET['add'])) {
    $id = intval($_GET['add']);
    $sql = "SELECT * FROM domains WHERE id=$id";
    $res = $conn->query($sql);
    if($res->num_rows > 0) {
        $domain = $res->fetch_assoc();
        echo "<div class='item'><span>".$domain['domain_name'].$domain['extension']." - $".$domain['price']."</span></div>";
    }
}
?>
<br>
<button onclick="checkout()">Proceed to Checkout</button>
</div>
</body>
</html>
 
