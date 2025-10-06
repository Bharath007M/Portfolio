<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
  padding: 25px 30px;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  width: 300px;
  text-align: center;
}
h2 {
  margin-bottom: 20px;
  color: #333;
}
input {
  width: 100%;
  padding: 8px;
  margin: 6px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}
button {
  width: 100%;
  padding: 9px;
  border: none;
  border-radius: 5px;
  background: #3b82f6;
  color: white;
  font-size: 15px;
  cursor: pointer;
}
button:hover {
  background: #2563eb;
}
.msg {
  color: red;
  margin-top: 10px;
  font-size: 13px;
}
a {
  color: #3b82f6;
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}
</style>
</head>
<body>
<div class="container">
  <h2>Login</h2>
  <form method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>
  <div class="msg">
  <?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $u = trim($_POST["username"]);
    $p = trim($_POST["password"]);
    $file = "user.json";
    if(!file_exists($file)){
      echo "No users found. <a href='register.php'>Register</a>";
      exit;
    }
    $users = json_decode(file_get_contents($file), true);
    if(isset($users[$u]) && password_verify($p, $users[$u]["password"])){
      $_SESSION["username"] = $u;
      header("Location: welcome.php");
      exit;
    } else {
      echo "Invalid username or password";
    }
  }
  ?>
  </div>
</div>
</body>
</html>
