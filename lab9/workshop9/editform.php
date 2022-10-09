<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>
<html>
<head><meta charset="UTF-8"></head>
<body>

<form action="edit_member.php" method="post">
    username: <input type="text" name="username" value="<?=$row["username"]?>"><br>
    password: <input type="text" name="password" value="<?=$row["password"]?>"><br>
    ชื่อสมาชิก: <input type="text" name="name" value="<?=$row["name"]?>"><br>
    ที่อยู่: <br>
    <textarea name="address" rows="3" cols="40" ><?=$row["address"]?></textarea><br>
    เบอร์โทรศัพท์: <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
    email: <input type="email" name="email" value="<?=$row["email"]?>"><br>
<input type="submit" value="แก้ไข ">
</form>
</body>
</html>