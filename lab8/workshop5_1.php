<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<html>
<head><meta charset="utf-8"></head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
    ?>
        <a href="workshop5_2.php?username=<?=$row["username"]?>">
            <img src='img/<?=$row["username"] ?>.jpg' width='100'>
        </a>
        <br>ชื่อสมาชิก : <?=$row ["name"]?>
    <hr>
    <?php  } ?>
</body>
</html>