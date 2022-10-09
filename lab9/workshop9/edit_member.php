<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<?php
    $stmt = $pdo->prepare("UPDATE member SET  password=?, name=?, address=?, mobile=?, email=? WHERE username=?");
    $stmt->bindParam(1, $_POST["password"]);
    $stmt->bindParam(2, $_POST["name"]);
    $stmt->bindParam(3, $_POST["address"]);
    $stmt->bindParam(4, $_POST["mobile"]);
    $stmt->bindParam(5, $_POST["email"]);
    $stmt->bindParam(6, $_POST["username"]);
    $stmt->execute(); 
    if ($stmt->execute()) 
        echo "แก้ไขข้อมูล " . $_POST["name"] . "สำเร็จ";
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
    
</body>
</html>