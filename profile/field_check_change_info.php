<?php
$errors=array(0,0,0,0,0,0,0,0,0);
$changed=array(0,0,0,0,0,0,0,0,0);
if(!$_SESSION['first_changeinfo']){
    $namemsg = '';
    $name=$_POST['name'];
    if(strcmp($name,$Name)){
        if (empty($_POST['name'])){
            $namemsg='Cannot be left empty!';
            $errors[0]=1;
        }
        else if(strlen($name)<3 || strlen($name)>32)
        {
            $namemsg='Your Name must be between 3 and 32 characters!';
            $errors[0]=1;
        }
        else if(!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $namemsg='Your Name contains invalid characters!';
            $errors[0]=1;
        }
        else{
            $namemsg='Changed';
            $changed[0]=1;
        }
    }
    $surnamemsg = '';
    $surname=$_POST['surname'];
    if(strcmp($surname,$Lastname)){
        if (empty($_POST['surname'])){
            $surnamemsg='Cannot be left empty!';
            $errors[1]=1;
        }
        else if(strlen($surname)<4 || strlen($surname)>32)
        {
            $surnamemsg='Your Surname must be between 3 and 32 characters!';
            $errors[1]=1;
        }
        else if(!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $surnamemsg='Your Surname contains invalid characters!';
            $errors[1]=1;
        }
        else{
            $surnamemsg = 'Changed';
            $changed[1]=1;
        }
    }
    $usermsg = '';
    $username=$_POST['username'];
    if(strcmp($Username,$username)){
        if (empty($_POST['username'])){
            $usermsg='Cannot be left empty';
            $errors[2]=1;
        }
        else if(strlen($username)<4 || strlen($username)>32)
        {
            $errors[2]=1;
            $usermsg='Your username must be between 3 and 32 characters!';
        }
        else if(!preg_match("/^[a-zA-Z0-9 ]*$/",$username))
        {
            $errors[2]=1;
            $usermsg='Your username contains invalid characters!';
        }
        else{
            $query="SELECT * FROM users WHERE Username='$username'";
            $result = $db->query($query);
            if($result->num_rows >0){
                $errors[2]=1;
                $usermsg='Username exists try another';
            }
            else
            {
                $changed[2]=1;
                $usermsg = 'Changed';
            }
        }
    }
    $emailmsg = '';
    $email=$_POST['email'];
    if(strcmp($email,$Email)){
        if (empty($_POST['email'])){
            $emailmsg='Cannot be left empty!';
            $errors[3]=1;
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[3]=1;
            $emailmsg = "Invalid email format";
        }
        else{
            $changed[3]=1;
            $emailmsg = "Changed";
        }
    }
    $addressmsg = '';
    $address=$_POST['address'];
    if(strcmp($Address,$address)){
        if (empty($_POST['address'])){
            $addressmsg='Cannot be left empty!';
            $errors[5]=1;
        }
        else if(strlen($address)<4 || strlen($address)>32)
        {
            $addressmsg='Address too short/long';
            $errors[5]=1;
        }
        else if(!preg_match("/^[a-zA-Z\-0-9 ]*$/",$address))
        {
            $addressmsg='Your address contains invalid characters!';
            $errors[5]=1;
        }
        else{
            $changed[5]=1;
            $addressmsg = "Changed";
        }

    }
    $phonemsg = '';
    $phone=$_POST['phone'];
    if(strcmp($Phone,$phone)){
        if (empty($phone)){
            $phonemsg='Cannot be left empty!';
            $errors[6]=1;
        }
        else if(strlen($phone)<6 || strlen($phone)>20)
        {
            $phonemsg='Your phone number is not supported , contact Euromed!';
            $errors[6]=1;
        }
        else if(!preg_match("/^[ 0-9 ]*$/",$phone))
        {
            $phonemsg='Your phone number contains invalid characters!';
            $errors[6]=1;
        }
        else{
            $changed[6]=1;
            $phonemsg = "Changed";
        }

    }
    $facultymsg = '';
    $faculty=$_POST['faculty'];
    if(strcmp($faculty,$Faculty)){
        if(!empty($faculty)){
            if(strlen($faculty)<3 || strlen($faculty)>20)
            {
                $facultymsg='Faculty name too short/long';
                $errors[7]=1;
            }
            else{
                $facultymsg='Changed';
                $changed[7]=1;
            }
        }
        else{
            $faculty="None";
            $facultymsg='Changed';
            $changed[7]=1;
        }
    }
    $signupmsg = '';
    $reg=$_POST['signup_type'];
    if(strcmp($reg,$Reg)){
        echo $reg;
        if (empty($reg)|| !strcmp(reg,"-1")){
            $signupmsg='Cannot be left empty';
            $errors[8]=1;
        }
        else{
            $signupmsg='Changed';
            $checked[8]=1;
        }
    }
    $error=0;
    for($i=0;$i<9;$i++){
        if($errors[$i]==1){
            $error=1;
            break;
        }
    }
    $res=1;
    if(!$error){
        for($i=0;$i<9;$i++){
            if($changed[$i]==1){
                switch ($i) {
                    case 0:
                        $up="UPDATE `users` SET `FirstName` = '$name' WHERE `users`.`Username` = '$Username';";
                        $res=$db->query($up);
                        if(!$res){
                            echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
                            $error=1;
                        }
                        break;
                    case 1:
                        $up="UPDATE `users` SET `LastName` = '$surname' WHERE `users`.`Username` = '$Username';";
                        $res=$db->query($up);
                        if(!$res){
                            echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
                            $error=1;
                        }
                        break;
                    case 3:
                        $up="UPDATE `users` SET `Email` = '$email' WHERE `users`.`Username` = '$Username';";
                        $res=$db->query($up);
                        if(!$res){
                            echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
                            $error=1;
                        }
                        break;
                    case 5:
                        $up="UPDATE `users` SET `Address` = '$address' WHERE `users`.`Username` = '$Username';";
                        $res=$db->query($up);
                        if(!$res){
                            echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
                            $error=1;
                        }
                        break;
                    case 6:
                        $up="UPDATE `users` SET `PhoneNumber` = '$phone' WHERE `users`.`Username` = '$Username';";
                        $res=$db->query($up);
                        if(!$res){
                            echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
                            $error=1;
                        }
                        break;
                    case 7:
                        $up="UPDATE `users` SET `Faculty` = '$faculty' WHERE `users`.`Username` = '$Username';";
                        $res=$db->query($up);
                        if(!$res){
                            echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
                            $error=1;
                        }
                        break;
                    case 8:
                        $up="UPDATE `users` SET `RegistrationType` = '$reg' WHERE `users`.`Username` = '$Username';";
                        $res=$db->query($up);
                        if(!$res){
                            echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
                            $error=1;
                        }
                        break;
                    default:
                        break;
                }
            }
            if($changed[2]==1){
                $up="UPDATE `users` SET `Username` = '$username' WHERE `users`.`UserName` = '$Username';";
                $res=$db->query($up);
                if(!$res){
                    echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
                    $error=1;
                }
            }
        }
        if(!$error)
            $_SERVER['user']=$username;
            header("Location: changeinfo_success.php");
    }
    if(!$res){
        echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
        $error=1;
    }
}
else{
    $namemsg = '';
    $surnamemsg = '';
    $usermsg = '';
    $emailmsg = '';
    $addressmsg = '';
    $phonemsg = '';
    $facultymsg = '';
    $signupmsg = '';
}
$_SESSION['first_changeinfo']=0;
?>

