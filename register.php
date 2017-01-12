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
                        <input class="field" type="text" name="address" size="23" value="<?php if($errors[4]==0){echo $address;}?>"/>
                        <div class="field_error"><?php echo $addressmsg; ?></div>
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

