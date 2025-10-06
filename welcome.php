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
  width: 600px;
  max-height: 90vh;
  overflow-y: auto;
}
h1 {
  text-align: center;
  color: #333;
  margin-bottom: 20px;
}
h2 {
  color: #3b82f6;
  margin-top: 20px;
}
p, li {
  color: #555;
  line-height: 1.6;
}
ul {
  padding-left: 20px;
}
a {
  color: #3b82f6;
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}
.logout {
  display: inline-block;
  margin-top: 20px;
  padding: 9px 15px;
  background: #3b82f6;
  color: white;
  border-radius: 5px;
  text-decoration: none;
}
.logout:hover {
  background: #2563eb;
}
</style>
</head>
<body>
<div class="container">
  <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>

  <h2>About Me</h2>
  <p>Hello! I'm Bharath, a student passionate about front-end web development. 
  I enjoy learning HTML and CSS and aim to build interactive, user-friendly websites in the future.</p>

  <h2>Education</h2>
  <ul>
    <li>BCA – Hindustan University</li>
    <li>12th – Shri Natasan Vidyalaya Matriculation School</li>
  </ul>
  <p><strong>Current CGPA:</strong> 8.05</p>

  <h2>Skills</h2>
  <ul>
    <li>HTML</li>
    <li>CSS</li>
    <li>Communication</li>
    <li>Teamwork</li>
  </ul>

  <h2>Projects</h2>
  <p><strong>Personal Portfolio Website:</strong> A webpage made using HTML & CSS to showcase my skills and education.</p>
  <p><strong>Resume Website:</strong> A simple resume-style website highlighting my academic background and contact information.</p>

  <h2>Contact</h2>
  <p>Email: <a href="mailto:bhxrxthm7@gmail.com">bhxrxthm7@gmail.com</a></p>
  <p>Phone: +91 6369741109</p>

  <div style="text-align:center;">
    <a href="logout.php" class="logout">Logout</a>
  </div>
</div>
</body>
</html>
