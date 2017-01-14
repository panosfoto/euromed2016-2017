<?php
    $username=$_SESSION['user'];
    $oldpassword=$_POST['oldpassword'];
    $newpassword1=$_POST['newpassword1'];
    $newpassword2=$_POST['newpassword2'];
    if(empty($oldpassword)||empty($newpassword1)||empty($newpassword2)){
        $errormsg='Missing Fields';
    }
    else{
        $query="SELECT * FROM users WHERE Username='$username'";
        $result = $db->query($query);
        $res=1;
        $passworddb="";
        $query="SELECT Password FROM users WHERE Username='$username'";
        $res=$db->query($query);
        $row=$res->fetch_assoc();
        $passworddb=$row["Password"];
        if(!$res || !$res->num_rows){
            $errormsg="Something went wrong try again later or Contact euromed if problem persists";
        }
        else if(strcmp($oldpassword,$passworddb)){
            $errormsg ='Wrong Password!';
        }
        else{
            if (empty($newpassword1) ){
                $errormsg='Missing Fields';
            }
            else if(empty($newpassword2)){
                $errormsg='Missing Fields';
            }
            else if(strlen($newpassword1)<4 || strlen($newpassword1)>32){
                $errormsg='Password length too short/long';
            }
            else if(strcmp($newpassword1,$newpassword2)){
                $errormsg ='Passwords don\'t match!';
            }
            else{
                $_SESSION['passchange']=1;
                $_SESSION['user']=$username;
                $up="UPDATE `users` SET `Password` = '$newpassword1' WHERE `users`.`UserName` = '$username';";
                $res=$db->query($up);
                $error=0;
                if(!$res){
                    echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
                    $error=1;
                }
                if(!$error)
                    header("Location: ../profile.php");
            }
        }
    }
   ?>

