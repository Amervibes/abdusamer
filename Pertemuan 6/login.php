<?php
// Start the session
session_start();

// Replace this with your actual login validation logic
function validateLogin($username, $password) {
  // For this example, assume valid login credentials are 'user123' for both username and password
  return $username === 'user123' && $password === 'user123';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get input values from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Validate the login credentials
  if (validateLogin($username, $password)) {
    // If login is successful, set session variables
    $_SESSION['username'] = $username;
    $_SESSION['logged_in'] = true;

    // Redirect user to the new page after successful login
    header("Location: welcome.php");
    exit();
  } else {
    // Redirect user back to the login page with an error message
    header("Location: index.html");
    exit();
  }
}
?>
