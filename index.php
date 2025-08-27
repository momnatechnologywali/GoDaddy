<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>GoDaddy Clone - Home</title>
  <style>
    body { font-family: Arial, sans-serif; background:#f5f5f5; margin:0; padding:0; }
    header { background:#111; color:#fff; padding:15px; text-align:center; font-size:22px; }
    .container { max-width:800px; margin:50px auto; text-align:center; }
    input[type="text"] { width:70%; padding:12px; border:2px solid #ccc; border-radius:8px; font-size:16px; }
    button { padding:12px 20px; background:#28a745; color:white; border:none; border-radius:8px; cursor:pointer; font-size:16px; }
    button:hover { background:#218838; }
    .promo { margin-top:30px; background:#fff; padding:20px; border-radius:10px; box-shadow:0 2px 6px rgba(0,0,0,0.2); }
    .promo h3 { margin:0 0 10px; }
    footer { text-align:center; margin-top:50px; padding:20px; background:#111; color:#fff; }
  </style>
</head>
<body>
  <header>GoDaddy Clone</header>
  <div class="container">
    <h2>Find your perfect domain</h2>
    <form method="GET" action="search.php">
      <input type="text" name="domain" placeholder="Enter domain name..." required>
      <button type="submit">Search</button>
    </form>
    <div class="promo">
      <h3>Popular Extensions</h3>
      <p>.com - $12.99 | .net - $10.99 | .org - $9.99</p>
    </div>
  </div>
  <footer>&copy; 2025 GoDaddy Clone. All rights reserved.</footer>
</body>
</html>
 
