<?php
$errors=array(0,0,0,0,0,0,0,0,0);
$namemsg = '';
$name=$_POST['name'];
    if (empty($_POST['name'])){
        $namemsg='*';
        $errors[0]=1;
    }
    else if(strlen($name)<3 || strlen($name)>32)
    {
        $namemsg='Your Name must be between 3 and 32 characters!';
        $errors[0]=1;
    }
    else if(!preg_match("/^[a-zA-Z ]*$/",$name))
    {
        $namemsg='Your username contains invalid characters!';
        $errors[0]=1;
    }
    $surnamemsg = '';
    $surname=$_POST['surname'];
    if (empty($_POST['surname'])){
        $surnamemsg='*';
        $errors[1]=1;
    }
    else if(strlen($surname)<3 || strlen($surname)>32)
    {
        $surnamemsg='Your Surname must be between 3 and 32 characters!';
        $errors[1]=1;
    }
    else if(!preg_match("/^[a-zA-Z ]*$/",$name))
    {
        $surnamemsg='Your Surname contains invalid characters!';
        $errors[1]=1;
    }
    $usermsg = '';
    $username=$_POST['username'];
    if (empty($_POST['username'])){
        $usermsg='*';
        $errors[2]=1;
    }
    else if(strlen($username)<3 || strlen($username)>32)
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
    }
    $emailmsg = '';
    $email=$_POST['email'];
    if (empty($_POST['email'])){
        $emailmsg='*';
        $errors[3]=1;
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[3]=1;
        $emailmsg = "Invalid email format";
    }
    $passwordmsg = '';
    $passwordmsg2 = '';
    $password1=$_POST['password'];
    $password2=$_POST['password1'];
    if (empty($password1) ){
        $passwordmsg='*';
        $passwordmsg2='*';
        $errors[4]=1;
    }
    else if(empty($password2)){
        $passwordmsg='Confirm password!';
        $passwordmsg2='*';
        $errors[4]=1;
    }
    else if(strlen($password1)<4 || strlen($password1)>32)
    {
        $passwordmsg='Password too short/long';
        $errors[4]=1;
    }
    else if(strcmp($password1,$password2)){
        $passwordmsg ='Passwords don\'t match!';
        $errors[4]=1;
    }
    $addressmsg = '';
    $address=$_POST['address'];
    if (empty($_POST['address'])){
        $addressmsg='*';
        $errors[5]=1;
    }
    else if(strlen($address)<4 || strlen($address)>32)
    {
        $addressmsg='Address too short/long';
        $errors[5]=1;
    }
    else if(!preg_match("/^[a-zA-Z\-0-9, ]*$/",$address))
    {
        $addressmsg='Your address contains invalid characters!';
        $errors[5]=1;
    }
    $phonemsg = '';
    $phone=$_POST['phone'];
    if (empty($phone)){
        $phonemsg='*';
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
    $facultymsg = '';
    $faculty=$_POST['faculty'];
    if(!empty($faculty)){
        if(strlen($faculty)<3 || strlen($faculty)>32)
        {
            $facultymsg='Faculty name too short/long';
            $errors[7]=1;
        }
    }
    else{
        $faculty="None";
    }
    $signupmsg = '';
    $reg=$_POST['signup_type'];
    if (empty($reg)|| !strcmp(reg,"-1")){
        $signupmsg='*';
        $errors[8]=1;
    }
    else{
        $signupmsg='';
        $errors[8]=0;
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
        $addition="INSERT INTO `users` (`FirstName`, `LastName`, `Username`, `Password`, `Email`, `Address`, `PhoneNumber`, `Faculty`, `RegistrationType`) VALUES ('$name','$surname' , '$username', '$password1', '$email', '$address', '$phone', '$faculty', '$reg');";
        $res=$db->query($addition);
        $_SESSION['user']=$username;
        header("Location: signup_success.php");
    }
    if(!$res){
        echo "<font color=\"red\">Something went wrong try again later or Contact euromed if problem persists</font>";
        $error=1;
    }
?>

