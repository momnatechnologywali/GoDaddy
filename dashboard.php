<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Dashboard</title>
  <style>
    body { font-family:Arial; background:#f9f9f9; }
    header { background:#111; color:#fff; padding:15px; text-align:center; }
    .container { max-width:800px; margin:40px auto; background:#fff; padding:20px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.2); }
    table { width:100%; border-collapse:collapse; margin-top:20px; }
    th, td { border:1px solid #ddd; padding:10px; text-align:center; }
    th { background:#333; color:white; }
    button { padding:6px 12px; margin:2px; border:none; border-radius:5px; cursor:pointer; }
    .renew { background:#28a745; color:white; }
    .transfer { background:#007bff; color:white; }
    .remove { background:#dc3545; color:white; }
    button:hover { opacity:0.85; }
  </style>
</head>
<body>
<header>My Domains Dashboard</header>
<div class="container">
<h3>Registered Domains</h3>
<table>
  <tr>
    <th>Domain</th>
    <th>Expiry Date</th>
    <th>Actions</th>
  </tr>
  <tr>
    <td>example.com</td>
    <td>2026-08-20</td>
    <td>
      <button class="renew">Renew</button>
      <button class="transfer">Transfer</button>
      <button class="remove">Remove</button>
    </td>
  </tr>
</table>
</div>
</body>
</html>
 
