<?php
    $username=$_SESSION['user'];
    $query="DELETE FROM users WHERE Username='$username';";
    $result = $db->query($query);
    $header("Location: ../logout.php");
?>
