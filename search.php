<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Results</title>
  <style>
    body { font-family: Arial; background:#f4f4f4; margin:0; padding:0; }
    header { background:#111; color:#fff; padding:15px; text-align:center; }
    .container { max-width:800px; margin:40px auto; background:#fff; padding:20px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.2); }
    .domain { display:flex; justify-content:space-between; padding:10px; border-bottom:1px solid #ddd; }
    button { padding:8px 16px; background:#007bff; color:#fff; border:none; border-radius:6px; cursor:pointer; }
    button:hover { background:#0056b3; }
  </style>
</head>
<body>
<header>Search Results</header>
<div class="container">
<?php
if(isset($_GET['domain'])) {
    $search = $conn->real_escape_string($_GET['domain']);
    $sql = "SELECT * FROM domains WHERE domain_name LIKE '%$search%'";
    $result = $conn->query($sql);
 
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='domain'>
                    <span>".$row['domain_name'].$row['extension']." - $".$row['price']."</span>";
            if($row['is_taken'] == 1) {
                echo "<span style='color:red;'>Taken</span>";
            } else {
                echo "<button onclick=\"window.location.href='cart.php?add=".$row['id']."'\">Add to Cart</button>";
            }
            echo "</div>";
        }
    } else {
        echo "<p>No matching domains found.</p>";
    }
}
?>
</div>
</body>
</html>
 
