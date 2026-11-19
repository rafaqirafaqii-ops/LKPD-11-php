<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['user'] ?? '';
    $password = $_POST['pass'] ?? '';

    if ($username === "admin" && $password === "12345") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("Location: Dashboard.php");
        exit;
    } else {
        echo "<script>alert('LOGIN BERHASIL!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Login</h2>
<form method="POST">
  Username: <input type="text" name="user" required><br><br>
  Password: <input type="password" name="pass" required><br><br>
  <button type="submit">Login</button>
</form>
</body>
</html>