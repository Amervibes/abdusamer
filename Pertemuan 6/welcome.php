<?php
// Start the session
session_start();

// Check if user is not logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  // If user is not logged in, redirect them back to the login page
  header("Location: index.html");
  exit();
}

// Get the username from the session
$username = $_SESSION['username'];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get input values from the form
  $product = $_POST['product'];
  $quantity = $_POST['quantity'];

  // Validate the input data
  $errors = array();

  if (empty($product)) {
    $errors[] = "Product field is required.";
  }

  if (empty($quantity) || !is_numeric($quantity) || $quantity <= 0) {
    $errors[] = "Quantity must be a positive number.";
  }

  // If no errors, process the order
  if (empty($errors)) {
    // Process the order here (you can store the order in the database or perform any other actions)
    // For this example, we'll just show an alert message for simplicity
    echo "<script>alert('Pemesanan selesai! Terima kasih atas pesanannya.');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Order Barang</title>
</head>
<body>
  <div class="container">
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>You have successfully logged in.</p>
  </div>


  <div class="container">
  <h2>Order Barang</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div>
        <label for="product">Product:</label>
        <input type="text" id="product" name="product" required>
      </div>
      <div>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>
      </div>
      <button type="submit">Order</button>
    </form>
  </div>
  <button type="submit"><a href="logout.php">Logout</a></button>
</body>
</html>
