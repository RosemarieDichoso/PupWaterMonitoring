<?php
session_start();
require_once __DIR__ . '/db_connection.php';

$login_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND status = 'active'");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['full_name'] = $user['full_name'];
        $_SESSION['role'] = $user['role'];

        header("Location: dashboard.php");
        exit();
    } else {
        $login_error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="header text-center mb-4">
            <h1>🌊 PUP AquaMonitor</h1>
            <p>Polytechnic University of the Philippines - IoT Water Level Monitoring System</p>
        </div>

        <div class="login-signup-container">
            <div class="card-login-signup mx-auto" style="max-width: 400px;">
                <form method="POST">
                    <?php if (!empty($login_error)): ?>
                        <div class="alert alert-danger"><?= $login_error ?></div>
                    <?php endif; ?>
                    <label>Email</label>
                    <input type="text" name="email" class="form-control mb-2" placeholder="Enter your email..." required>
                    <label>Password</label>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Enter your password..." required>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
