<html>
<body>
<?php
    if (!empty($_GET["language"])) {
        $language = $_GET["language"];
    }else{
        $language = "en";
    }
    //$language = $_GET["language"];
    //echo "language =  $language";
    if (empty($_COOKIE["lang"])) {
        if($language == "en"){
            setcookie("lang", "en", time() + 60);
        }
        else{
            setcookie("lang", "th", time() + 60);
        }
        
    } 
    if (!isset($_COOKIE["lang"])) {
        echo "yes";     
    } 
    else {
        if($language == "en"){
            setcookie("lang", "en", time() + 60);
            echo "complete";
        }
        else{
            setcookie("lang", "th", time() + 60);
            echo "เสร็จสิ้น";
        }
    }
?>
</body>
</html>