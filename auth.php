<?php
session_start();
// ເຊື່ອມຕໍ່ຖານຂໍ້ມູນ (ປັບປ່ຽນຂໍ້ມູນຕາມຈິງຂອງເຈົ້າ)
$host = 'localhost';
$db   = 'index';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // 1. ໃຊ້ Prepared Statement ເພື່ອປ້ອງກັນ SQL Injection
        $stmt = $pdo->prepare("SELECT id, password FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        // 2. ກວດສອບລະຫັດຜ່ານດ້ວຍ password_verify (Secure Hash)
        if ($user && password_verify($password, $user['password'])) {
            // ຕັ້ງຄ່າ Session ເມື່ອ Login ສຳເລັດ
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $username;
            
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('ຊື່ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ!'); window.location='index.php';</script>";
        }
    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>