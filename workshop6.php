<?php include "errordb.php" ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script>
        function confirmDelete(username) {
            var ans = confirm("ต้องการลบ username : " + username);
            if (ans == true) {
                document.location = "workshop6Delete.php?username=" + username;
            }
        }
    </script>
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) :
    ?>
        ชื่อสมาชิก : <?= $row["name"] ?><br>
        ที่อยู่ : <?= $row["address"] ?><br>
        อีเมล์ :<?= $row["email"] ?><br>
        <br>
        <a href='#' onclick='confirmDelete("<?=$row["username"]?>")'>Delete</a>
        <hr><br>
    <?php endwhile; ?>
</body>

</html>