<?php
    if(!$error){
        $addition="INSERT INTO `users` (`FirstName`, `LastName`, `Username`, `Password`, `Email`, `Address`, `PhoneNumber`, `Faculty`, `RegistrationType`) VALUES ('$name','$surname' , '$username', '$password1', '$email', '$address', '$phone', '$faculty', '$reg');";
        $res=$db->query($addition);
        $_SESSION['user']=$username;
        header("Location: signup_success.php");
    }
    if(!$res){
        echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
        $error=1;
    }
    $Username=
    $query="SELECT * FROM users WHERE Username='$username'";
    $res=$db->query($query);
    $row=$res->fetch_assoc();

?>

