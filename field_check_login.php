<?php
    $username=$_POST['username'];
    $password1=$_POST['password'];
    if(empty($username)||empty($password1) ){
        $errormsg='Missing Fields';
    }
    else{
        $query="SELECT * FROM users WHERE Username='$username'";
        $result = $db->query($query);
        if($result->num_rows==0){
            $errormsg='Username doesn\'t exist';
        }
        else{
            $res=1;
            $passworddb="";
            $query="SELECT Password FROM users WHERE Username='$username'";
            $res=$db->query($query);
            $row=$res->fetch_assoc();
            $passworddb=$row["Password"];
            if(!$res || !$res->num_rows){
                $errormsg="Something went wrong try again later or Contact euromed if problem persists";
            }
            else if(strcmp($password1,$passworddb)){
                $errormsg ='Passwords don\'t match!';
            }
            else{
                $_SESSION['user']=$username;
                if($_SESSION['FROM_PAPERSUBM']){
                    $_SESSION['FROM_PAPERSUBM']=0;
                    header("Location: speakers_and_researchers/info_for_speakers/paper_submission.php ");
                }else{
                    header("Location: index.php");
                }
            }
        }
    }
   ?>

