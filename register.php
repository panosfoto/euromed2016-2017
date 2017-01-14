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
    <?php include ('connect.php'); ?>
    <?php include ('home_transfer_logged_in.php'); ?>
    <title>Euromed 2016: Register</title>
    <body>
        <div id="frame">
            <div id="page">
                <a name="top"></a>
                <div id="header">
                    <div class="img">
                        <a href="index.php">
                            <img class="logo" src="images/logo.png"/>
                        </a>
                    </div>
                    <div class="search_bar">
                        <form action="search_results.php">
                            <input type="text" id="fname" name="firstname" placeholder="Search for papers, speakers, etc.">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    <div class="login">
                        <?php
                           if(!isset($_SESSION['user']) ){
                              echo "<a href=\"login.php\"><button>Login</button></a>";
                              echo "<a href=\"register.php\"><button>Sign Up</button></a>";
                            }
                            else {
                              $user_name=$_SESSION['user'];
                              echo "<a href=\"profile.php\"><button class=\"logged_in\">$user_name</button></a>";
                              echo "<a href=\"logout.php\"><button class=\"logged_in\">Logout</button></a>";
                            }
                        ?>
                    </div>
                </div>
                <div id="navigation">
                    <a href="index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="register.php">Sign up</a>
                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="learn_more.php">More about Euromed 2016</a></li>
                      <li><a href="programme.php">Programme</a></li>
                      <li><a href="conference_registration.php">Conference Registration</a></li>
                      <li><a href="speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <li><a href="submitted_papers.php">Submitted Papers</a></li>
                      <li><a href="exhibitions.php">Exhibitions</a></li>
                      <li><a href="location_and_access.php">Location & Access</a></li>
                      <li><a href="sponsors.php">Sponsors</a></li>
                      <li><a href="previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Site Registration</h1></div>
                    <div>
                    <?php include ('field_check.php'); ?>
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
                        <input class="field" type="password" name="password1" class="password" size="23" value=""/>
                        <div class="field_error"><?php echo $passwordmsg2; ?></div>
                        </div>

                        <div class="field_text">Full address</div>
                        <div>
                        <input class="field" type="text" name="address" size="23" value="<?php if($errors[5]==0){echo $address;}?>"/>
                        <div class="field_error"><?php echo $addressmsg; ?></div>
                        </div>

                        <div class="field_text">Phone number</div>
                        <div>
                        <input class="field" type="text" name="phone" size="23" value="<?php if($errors[6]==0){echo $phone;}?>" />
                        <div class="field_error"><?php echo $phonemsg; ?></div>
                        </div>

                        <div class="field_text">Faculty</div>
                        <div>
                        <input class="field" type="text" name="faculty" size="23" value="<?php if($errors[7]==0){echo $faculty;}?>" />
                        <div class="field_error"><?php echo $facultymsg; ?></div>
                        </div>
                        <div class="field_text">Registration type</div>
                        <div>
                        <select class="field" name="signup_type">
                            <option value="0"<?php if($errors[8]==1) echo "selected disabled";?>>Select...</option>
                            <option value="1"<?php if($errors[8]== 0&& !strcmp($reg,"0")){echo "selected";}?>>Visitor</option>
                            <option value="2"<?php if($errors[8]== 0&& !strcmp($reg,"1")){echo "selected";}?>>Visitor(Student)</option>
                            <option value="3"<?php if($errors[8]== 0&& !strcmp($reg,"2")){echo "selected";}?>>Speaker</option>
                            <option value="4"<?php if($errors[8]== 0&& !strcmp($reg,"3")){echo "selected";}?>>Exhibitor</option>
                        </select>
                        <div class="field_error"><?php echo $signupmsg; ?></div>
                        </div>
                        <input type="submit" name="submit"value="Register"/>
                    </form>
                    </div>
               </div>
                <div class="ads_panel">
                        <a href="index.php">
                            <img class="logo" src="images/ad1.png"/>
                        </a>
                        <a href="index.php">
                            <img class="logo" src="images/ad2.jpg"/>
                        </a>
                        <a href="index.php">
                            <img class="logo" src="images/ad3.jpg"/>
                        </a>
                        <a href="index.php">
                            <img class="logo" src="images/ad4.jpg"/>
                        </a>
                </div>
            </div>
            <div id="footer">
                <div style=" height=100%; margin-left:1%;">Copyright: Manos Pitsikalis, Panagiotis Fotopoulos
                    <a href="#top"><button>Back to top</button></a>
                    <a href="404.php" style="float:right; margin-right:1%;">Sitemap</a>
                    <a href="contact.php" style="float:right; margin-right:1%;">Contact Info</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php ob_end_flush(); ?>
