<?php
// ໄຟລ໌ນີ້ໃຊ້ສ້າງ User ພຽງຄັ້ງດຽວແລ້ວໃຫ້ລົບຖິ້ມ
$host = 'localhost';
$db   = 'index';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    
    $username = 'ເປົາ'; 
    $password = 'ເປົາ'; // ປ່ຽນຕາມຕ້ອງການ
    
    // ເຂົ້າລະຫັດແບບ Secure Hash
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $hashed_password]);
    
    echo "ສ້າງ User ສຳເລັດແລ້ວ! ກະລຸນາລົບໄຟລ໌ນີ້ອອກເພື່ອຄວາມປອດໄພ.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>