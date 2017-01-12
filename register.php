<?php
   ob_start();
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="styles.css">
    <title>Euromed 2016: Home</title>
    <body>
        <div id="frame">
            <div id="page">
                <a name="top"></a>
                <div id="header">
                    <div class="img">
                        <a href="index.html">
                            <img class="logo" src="logo.png"/>
                        </a>
                    </div>
                    <div class="search_bar">
                        <form action="action_page.php">
                            <input type="text" id="fname" name="firstname" placeholder="Search for papers, speakers, etc.">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    <div class="login">
                        <button onclick="document.getElementById('id01').style.display='block'">Login</button>
                        <button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
                    </div>
                </div>
                <div id="navigation">
                    <a href="index.html">Home</a> <font size="4">&#8594;</font> <a href="register.html">Sign up</a>
                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="learn_more.html">Learn more about Euromed 2016</a></li>
                      <li><a href="announcements.html">Announcements</a></li>
                      <li><a href="programme.html">Programme</a></li>
                      <li><a href="conference_registration.html">Conference Registration</a></li>
                      <li><a href="speakers_and_researchers.html">Speakers & Researchers</a></li>
                      <li><a href="submitted_papers.html">Submitted Papers</a></li>
                      <li><a href="workshops.html">Workshops</a></li>
                      <li><a href="exhibitions.html">Exhibitions</a></li>
                      <li><a href="other_activities.html">Other activities</a></li>
                      <li><a href="location_and_access.html">Location & Access</a></li>
                      <li><a href="faq.html">FAQ</a></li>
                      <li><a href="contact.html">Contact Info</a></li>
                      <li><a href="sponsors.html">Sponsors</a></li>
                      <li><a href="previous_conferences.html">Previous Conferences</a></li>
                      <li><a href="downloads.html">Downloads</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Site Registration</h1></div>
                    <div>
                    <?php
                        $errors=array(0,0,0,0,0,0,0);
                        $namemsg = '';
                        $name=$_POST['name'];
                        if (empty($_POST['name'])){
                            $namemsg='*';
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
                        }
                        else if(strlen($name)<4 || strlen($name)>32)
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
                        $emailmsg = '';
                        $email=$_POST['email'];
                        if (empty($_POST['email'])){
                            $emailmsg='*';
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
                        }
                        else if(empty($password2)){
                            $passwordmsg='Confirm password!';
                            $passwordmsg2='*';
                        }
                        else if(strlen($password1)<4 || strlen($password1)>32)
                        {
                            $usermsg='Your password must be between 3 and 32 characters!';
                        }
                        else if(strcmp($password1,$password2)){
                            $passwordmsg ="Passwords don't match!";
                        }
                        $adressmsg = '';
                        $adress=$_POST['adress'];
                        if (empty($_POST['adress'])){
                            $adressmsg='*';
                        }
                        else if(strlen($adress)<4 || strlen($adress)>32)
                        {
                            $adressmsg='Your adress value must be between 3 and 32 characters!';
                            $errors[4]=1;
                        }
                        else if(!preg_match("/^[a-zA-Z\-0-9 ]*$/",$name))
                        {
                            $adressmsg='Your adress contains invalid characters!';
                            $errors[4]=1;
                        }
                        $phonemsg = '';
                        $phone=$_POST['phone'];
                        if (empty($phone)){
                            $phonemsg='*';
                        }
                        else if(strlen($phone)<6 || strlen($adress)>20)
                        {
                            $phonemsg='Your phone number is not supported , contact Euromed!';
                            $errors[5]=1;
                        }
                        else if(!preg_match("/^[0-9]*$/",$name))
                        {
                            $phonemsg='Your phone number contains invalid characters!';
                            $errors[5]=1;
                        }
                    ?>
                    <form role="form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">

                        <div class="field_text">Name</div>
                        <div>
                        <input class="field" type="text" name="name" value="<?php if($errors[0]==0){echo $name;}?>" size="23"/>
                        <div class="field_error"><?php echo $namemsg; ?></div>
                        </div>

                        <div class="field_text">Surname</div>
                        <div>
                        <input class="field" type="text" name="surname" value="<?php if($errors[1]==0){echo $surname;}?>" size="23"/>
                        <div class="field_error"><?php echo $surnamemsg; ?></div>
                        </div>

                        <div class="field_text">Username</div>
                        <div>
                        <input class="field" type="text" name="username" value="<?php if($errors[2]==0){echo $username;}?>" size="23" />
                        <div class="field_error"><?php echo $usermsg; ?></div>
                        </div>

                        <div class="field_text">Email</div>
                        <div>
                        <input class="field" type="text" name="email" size="23" value="<?php if($errors[3]==0){echo $email;}?>" />
                        <div class="field_error"><?php echo $emailmsg; ?></div>
                        </div>

                        <div class="field_text">Password</div>
                        <div>
                        <input class="field" type="password" name="password" class="password" size="23"  value=""/>
                        <div class="field_error"><?php echo $passwordmsg; ?></div>
                        </div>

                        <div class="field_text">Confirm Password</div>
                        <div>
                        <input class="field" type="password" name="confirmpass" class="password" size="23" value=""/>
                        <div class="field_error"><?php echo $passwordmsg2; ?></div>
                        </div>

                        <div class="field_text">Full adress</div>
                        <div>
                        <input class="field" type="text" name="adress" size="23" value="<?php if($errors[4]==0){echo $adress;}?>"/>
                        <div class="field_error"><?php echo $adressmsg; ?></div>
                        </div>

                        <div class="field_text">Phone number</div>
                        <div>
                        <input class="field" type="text" name="phone" size="23" value="<?php if($errors[5]==0){echo $phone;}?>" />
                        <div class="field_error"><?php echo $phonemsg; ?></div>
                        </div>

                        <input type="submit" name="submit"value="Register" class="bt_register" />
                    </form>
                    </div>
               </div>
                <div class="ads_panel">
                        <a href="index.html">
                            <img class="logo" src="ad1.png"/>
                        </a>
                        <a href="index.html">
                            <img class="logo" src="ad2.jpg"/>
                        </a>
                        <a href="index.html">
                            <img class="logo" src="ad3.jpg"/>
                        </a>
                        <a href="index.html">
                            <img class="logo" src="ad4.jpg"/>
                        </a>
                </div>
                <div id="footer">
                    <div style=" height=100%; margin-left:1%;">Copyright: Manos Pitsikalis, Panagiotis Fotopoulos
                        <a href="#top"><button>Back to top</button></a>
                        <a href="404.html" style="float:right; margin-right:1%;">Sitemap</a>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>

