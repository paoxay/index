<?php
session_start();
// 1. ກວດສອບຄວາມປອດໄພ: ຖ້າບໍ່ມີ Session ໃຫ້ກັບໄປໜ້າ Login
if (!isset($_SESSION['user_id'])) {
    // ໝາຍເຫດ: ປົດ Comment ບັນທັດລຸ່ມນີ້ເມື່ອເຈົ້າມີລະບົບ Login ແລ້ວ
    // header("Location: index.php"); exit(); 
}

// 2. ລາຍການເມນູ (ເພີ່ມ/ລົບ ໄດ້ຢູ່ບ່ອນນີ້)
$menus = [
    ['name' => 'ເຕີມບັດເຕີມເງິນ', 'link' => '/topup/', 'icon' => '💳', 'color' => '#4e73df'],
    ['name' => 'ແພັກເກັດ-js', 'link' => '/package-js/', 'icon' => '📦', 'color' => '#1cc88a'],
    ['name' => 'ຕັ້ງຄ່າລະບົບ', 'link' => '/settings/', 'icon' => '⚙️', 'color' => '#36b9cc'],
    ['name' => 'ລາຍງານ', 'link' => '/reports/', 'icon' => '📊', 'color' => '#f6c23e'],
    ['name' => 'ເຊັກປະຫວັດ mogo', 'link' => '/https://paoxai.com/apimo/%E0%BA%9B%E0%BA%B0%E0%BA%AB%E0%BA%A7%E0%BA%B1%E0%BA%94.php/', 'icon' => '📊', 'color' => '#f6c23e'],
];
?>
<!DOCTYPE html>
<html lang="lo">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ຜູ້ດູແລລະບົບ</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4A90E2;
            --bg: #f0f2f5;
            --text: #333;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Noto Sans Lao', sans-serif; }
        body { background-color: var(--bg); color: var(--text); padding: 20px; }
        
        .container { max-width: 900px; margin: 0 auto; }
        header { margin-bottom: 30px; text-align: center; padding: 20px; }
        
        .grid-menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 20px;
        }
        
        .menu-card {
            background: white;
            padding: 30px 20px;
            border-radius: 20px;
            text-decoration: none;
            color: var(--text);
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .icon-box {
            font-size: 3rem;
            margin-bottom: 15px;
        }
        
        .menu-name { font-weight: bold; font-size: 1.1rem; }

        /* Logout Button */
        .btn-logout {
            margin-top: 40px;
            display: inline-block;
            padding: 10px 25px;
            background: #e74a3b;
            color: white;
            text-decoration: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>ສະບາຍດີ, ຜູ້ດູແລລະບົບ</h1>
        <p>ເລືອກບໍລິການທີ່ເຈົ້າຕ້ອງການຈັດການ</p>
    </header>

    <div class="grid-menu">
        <?php foreach ($menus as $menu): ?>
            <a href="<?php echo $menu['link']; ?>" class="menu-card">
                <div class="icon-box"><?php echo $menu['icon']; ?></div>
                <div class="menu-name"><?php echo $menu['name']; ?></div>
            </a>
        <?php endforeach; ?>
    </div>

    <center>
        <a href="logout.php" class="btn-logout">ອອກຈາກລະບົບ</a>
    </center>
</div>

</body>
</html>