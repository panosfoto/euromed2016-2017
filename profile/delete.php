<?php
    $username=$_POST['username'];
    $query="DELETE FROM users WHERE Username='$username'";
    $result = $db->query($query);
    $header("Location: ../logout.php");
?>
