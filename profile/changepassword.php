<?php
   ob_start();
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>
<html>
    <link rel="stylesheet" href="../styles.css">
    <?php include ('../connect.php'); ?>
    <?php include ('../home_transfer.php'); ?>
    <title>Euromed 2016: Change Password </title>
    <body>
        <div id="frame">
            <div id="page">
                <a name="top"></a>
                <div id="header">
                    <div class="img">
                        <a href="../index.php">
                            <img class="logo" src="../images/logo.png"/>
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
                              echo "<a href=\"../login.php\"><button>Login</button></a>";
                              echo "<a href=\"../register.php\"><button>Sign Up</button></a>";
                            }
                            else {
                              $user_name=$_SESSION['user'];
                              echo "<a href=\"../profile.php\"><button>$user_name</button></a>";
                              echo "<a href=\"../logout.php\"><button>Logout</button></a>";
                            }
                        ?>
                    </div>
                </div>
                <div id="navigation">
                    <a href="index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="login.php">Profile</a> <font size="3" class="arrow">&#8594;</font> <a href="changepassword.php">Change Password</a>
                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="../learn_more.php">Learn more about Euromed 2016</a></li>
                      <li><a href="../programme.php">Programme</a></li>
                      <li><a href="../conference_registration.php">Conference Registration</a></li>
                      <li><a href="../speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <li><a href="../submitted_papers.php">Submitted Papers</a></li>
                      <li><a href="../exhibitions.php">Exhibitions</a></li>
                      <li><a href="../location_and_access.php">Location & Access</a></li>
                      <li><a href="../sponsors.php">Sponsors</a></li>
                      <li><a href="../previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Change Password</h1></div>
                    <div id="content_login">
                            <?php include ('updatepass.php');?>
                            <form role="form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
                                    <div class="field_text_login">Old password</div>
                                    <input class="field_login" type="password" name="oldpassword" value="" size="23" />
                                    <div class="field_text_login">New password</div>
                                    <input class="field_login" type="password" name="newpassword1" value="" size="23" />
                                    <div class="field_text_login">Comfirm password</div>
                                    <input class="field_login" type="password" name="newpassword2" size="23"  value=""/>
                                    <div class="login_field_error"><?php echo $errormsg;?></div>
                                    </div>
                                    <div style="height:5%;width:100%; margin-top:10%;">
                                        <input type="submit"Class = "change_info_button" style="margin-top:0%;" name="submit"value="Confirm"/>
                                        <a href="../profile.php">Cancel</a>
                                    </div>
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
                <div style=" height:100%; margin-left:1%;">Copyright: Manos Pitsikalis, Panagiotis Fotopoulos
                    <a href="#top"><button>Back to top</button></a>
                    <a href="404.php" style="float:right; margin-right:1%;">Sitemap</a>
                    <a href="contact.php" style="float:right; margin-right:1%;">Contact Info</a>
                </div>
            </div>
        </div>
    </body>
</html>
<?php ob_end_flush(); ?>
