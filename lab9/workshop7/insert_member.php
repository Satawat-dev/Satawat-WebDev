<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<?php
    $stmt = $pdo->prepare("INSERT INTO member VALUES ( ?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $_POST["username"]);
    $stmt->bindParam(2, $_POST["password"]);
    $stmt->bindParam(3, $_POST["name"]);
    $stmt->bindParam(4, $_POST["address"]);
    $stmt->bindParam(5, $_POST["mobile"]);
    $stmt->bindParam(6, $_POST["email"]);
    $stmt->execute(); 
    $username = $_POST["username"] ;
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
    เพิ่มสมาชิกสำเร็จ รหัสสมาชิกใหม่ คือ <?=$username ?> <br>
    <!--<a href="workshop6.php?">
        ตกลง
    </a>-->
</body>
</html>