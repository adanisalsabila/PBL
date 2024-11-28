<?php
session_start();
include '../backend/config_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $role = strtolower($_POST['role']);
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validasi input
    if (empty($username) || empty($password) || empty($role)) {
        header("Location: login.php?error=All fields are required");
        exit();
    }
    
    try {
        switch ($role) {
            case 'admin':
                $stmt = $conn->prepare("SELECT * FROM Admin WHERE Nama = :username AND PasswordAdmin = :password");
                break;
            case 'dosen':
                $stmt = $conn->prepare("SELECT * FROM Dosen WHERE NIP = :username AND PasswordDosen = :password");
                break;
            case 'mahasiswa':
                $stmt = $conn->prepare("SELECT * FROM Mahasiswa WHERE NIM = :username AND PasswordMahasiswa = :password");
                break;
            default:
                header("Location: login.php?error=Invalid role");
                exit();
        }

        $stmt->execute([
            ':username' => $username,
            ':password' => $password // Idealnya password di-hash
        ]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Set session variables
            $_SESSION['user_id'] = $user[$role.'ID'];
            $_SESSION['role'] = $role;
            $_SESSION['nama'] = $user['Nama'];
            
            // Redirect to dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: login.php?error=Invalid username or password");
            exit();
        }
    } catch(PDOException $e) {
        header("Location: login.php?error=Database error: " . urlencode($e->getMessage()));
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
        <div class="container-fluid vh-100 d-flex flex-column align-items-center justify-content-center" style="background-color: #483D8B;">
            <h1 class="text-white">Polinema Tertib</h1>
            <div class="p-4 rounded" style="background-color: #e9e6fd; max-width: 400px; width: 100%;">
                <form action="index.html" method="post">
                    <div class="text-center">
                        <img src="img/logoJti.svg" alt="" style="width: 70px; height: 70px;">
                    </div>
                    <input type="text" class="form-control m-2" name="username" id="username" placeholder="Username">
                    <input type="password" class="form-control m-2" name="password" id="password" placeholder="Password">
                    <div class="text-center">
                        <button href="index.html" type="submit" class="btn btn-primary m-2">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>