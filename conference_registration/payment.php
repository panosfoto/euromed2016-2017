<?php
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
    <title>Euromed 2016: Payment</title>
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
                        <form action="../search_results.php">
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
                              echo "<a href=\"../profile.php\"><button class=\"logged_in\">$user_name</button></a>";
                              echo "<a href=\"../logout.php\"><button class=\"logged_in\">Logout</button></a>";
                            }
                        ?>

                    </div>
                </div>
                <div id="navigation">
                    <a href="../index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="../conference_registration.php">Conference Registration</a> <font size="3" class="arrow">&#8594;</font> <a href="payment.php">Payment</a>
                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="../learn_more.php">More about Euromed 2016</a></li>
                      <li><a href="../programme.php">Programme</a></li>
                      <li class="lower_active"><a href="../conference_registration.php">Conference Registration</a></li>
                      <ul>
                        <li class="active"><a href="payment.php">Payment</a></li>
                      </ul>
                      <li><a href="../speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <li><a href="../submitted_papers.php">Submitted Papers</a></li>
                      <li><a href="../exhibitions.php">Exhibitions</a></li>
                      <li><a href="../location_and_access.php">Location & Access</a></li>
                      <li><a href="../sponsors.php">Sponsors</a></li>
                      <li><a href="../previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Payments</h1></div>
                    <p>Gimme dem greens</p>
                    <?php include('../login_info.php')?>
                    <div id="signup_info_head"style="width:50%;"> Personal info</div>
                    <div>
                        <div class="user_info_profile"style="margin-top:0%;">Name : <?php echo "$Name";?></div>
                        <div class="user_info_profile"style="margin-top:0%;">Last name : <?php echo "$Lastname";?></div>
                        <div class="user_info_profile"style="margin-top:0%;">Username : <?php $user_name = $_SESSION['user'];echo " $user_name";?></div>
                        <div class="user_info_profile"style="margin-top:0%;">Email : <?php echo " $Email";?></div>
                        <div class="user_info_profile"style="margin-top:0%;">Adress : <?php echo " $Address";?></div>
                        <div class="user_info_profile"style="margin-top:0%;">Phone number : <?php echo "$Phone";?></div>
                        <div class="user_info_profile"style="margin-top:0%;">Faculty : <?php echo " $Faculty";?></div>
                        <div class="user_info_profile"style="margin-top:0%;">Registration type : <?php echo "$Regtype";?></div>
                    </div>
                    <div id="signup_info_head" style="width:50%;"> Cost</div>
                    <div>
                        <div class="user_info_profile" style="margin-top:0%;">Number of Days : 3</div>
                        <div class="user_info_profile" style="margin-top:0%;">Extras : 140</div>
                        <div class="user_info_profile" style="margin-top:0%;">Type : Student</div>
                        <div id="signup_info_head" style="width:30%;margin-top:1%"></div>
                        <div class="user_info_profile" style="margin-top:0%;">Total : 605</div>
                    </div>
                    <div style="width:100%;">
                    Payment Method :
                      <input type="radio" name="gender" > CreditCard
                      <input type="radio" name="gender" > Paypal
                    </div>
                    <div style="margin-top:3%;">
                    <a href="../index.php">Cancel</a>
                    <input type="submit" style="float:right;width:auto;"value="Confirm & Pay!"/>
                    </div>
                </div>
                <div class="ads_panel">
                        <a href="../index.php">
                            <img class="logo" src="../images/ad1.png"/>
                        </a>
                        <a href="../index.php">
                            <img class="logo" src="../images/ad2.jpg"/>
                        </a>
                        <a href="../index.php">
                            <img class="logo" src="../images/ad3.jpg"/>
                        </a>
                        <a href="../index.php">
                            <img class="logo" src="../images/ad4.jpg"/>
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

