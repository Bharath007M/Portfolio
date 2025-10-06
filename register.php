<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<style>
body {
  font-family: Arial, sans-serif;
  background: #f2f4f8;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.container {
  background: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  width: 320px;
  text-align: center;
}
h1 {
  color: #333;
  margin-bottom: 10px;
}
p {
  color: #555;
  margin-bottom: 20px;
}
button, a {
  display: inline-block;
  background: #3b82f6;
  color: white;
  padding: 9px 15px;
  border: none;
  border-radius: 5px;
  text-decoration: none;
  cursor: pointer;
}
button:hover, a:hover {
  background: #2563eb;
}
</style>
</head>
<body>
<div class="container">
  <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
  <p>You have successfully logged in.</p>
  <a href="logout.php">Logout</a>
</div>
</body>
</html>
