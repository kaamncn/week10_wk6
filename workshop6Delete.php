<?php include "errordb.php"?>
<?php
    $stmt = $pdo->prepare("delete from member where username=?");
    $stmt -> bindParam(1,$_GET["username"]);
    if($stmt->execute())
    {
        header("location:workshop6.php");
    }
?>