<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <link rel="stylesheet" href="../../styles.css">
    <title>Euromed 2016: Exhibition area</title>
    <body>
        <div id="frame">
            <div id="page">
                <a name="top"></a>
                <div id="header">
                    <div class="img">
                        <a href="../../index.php">
                            <img class="logo" src="../../images/logo.png"/>
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
                    <a href="../../index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="../../exhibitions.php">Exhibitions</a> <font size="3" class="arrow">&#8594;</font> <a href="../info_for_exhibitors.php">Information for Exhibitors</a> <font size="3" class="arrow">&#8594;</font> <a href="exhibition_area.php">Exhibition area</a>

                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="../../learn_more.php">More about Euromed 2016</a></li>
                      <li><a href="../../programme.php">Programme</a></li>
                      <li><a href="../../conference_registration.php">Conference Registration</a></li>
                      <li><a href="../../speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <li><a href="../../submitted_papers.php">Submitted Papers</a></li>
                      <li class="lower_active"><a href="../../exhibitions.php">Exhibitions</a></li>
                      <ul>
                        <li><a href="../participating_exhibitors.php">Participating Exhibitors</a></li>
                        <li class="lower_active"><a href="../info_for_exhibitors.php">Info for Exhibitors</a></li>
                        <ul>
                          <li class="active"><a href="exhibition_area.php">Exhibition area</a></li>
                          <li><a href="contact_with_organization.php">Contact with the organization</a></li>
                        </ul>
                      </ul>
                      <li><a href="../../location_and_access.php">Location & Access</a></li>
                      <li><a href="../../sponsors.php">Sponsors</a></li>
                      <li><a href="../../previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Exhibition area & prices</h1></div>
                    <h3>Exhibition area</h3>
                    <div style="text-align:center; font-style: italic;">
                        <img style="border: 2px solid black; height:350px; width:auto;" src="../../images/exhibition_area.jpg"/>
                        <br>1-5: Exhibition kiosks
                    </div>
                    <h3>Prices & Info</h3>
                    Kiosk <div style="float:right;">Price</div>
                    <ul>
                        <li>
                            Kiosk 1 <div style="float:right;">120&euro; per slot</div><br>
                            Slots: 4<br>
                            Space per slot: 8 square meters
                        </li>
                        <li>
                            Kiosk 2 <div style="float:right;">70&euro; per slot</div><br>
                            Slots: 2<br>
                            Space per slot: 6 square meters
                        </li>
                        <li>
                            Kiosk 3 <div style="float:right;">100&euro; per slot</div><br>
                            Slots: 3<br>
                            Space per slot: 5 square meters
                        </li>
                        <li>
                            Kiosk 4 <div style="float:right;">70&euro; per slot</div><br>
                            Slots: 2<br>
                            Space per slot: 6 square meters
                        </li>
                        <li>
                            Kiosk 5 <div style="float:right;">120&euro; per slot</div><br>
                            Slots: 4<br>
                            Space per slot: 8 square meters
                        </li>
                    </ul>
                    <br>
                </div>
                <div class="ads_panel">
                        <a href="../../index.php">
                            <img class="logo" src="../../images/ad1.png"/>
                        </a>
                        <a href="../../index.php">
                            <img class="logo" src="../../images/ad2.jpg"/>
                        </a>
                        <a href="../../index.php">
                            <img class="logo" src="../../images/ad3.jpg"/>
                        </a>
                        <a href="../../index.php">
                            <img class="logo" src="../../images/ad4.jpg"/>
                        </a>
                </div>
            </div>
            <div id="footer">
                <div style=" height:100%; margin-left:1%;">Copyright: Manos Pitsikalis, Panagiotis Fotopoulos
                    <a href="#top"><button>Back to top</button></a>
                    <a href="../../404.php" style="float:right; margin-right:1%;">Sitemap</a>
                    <a href="../../contact.php" style="float:right; margin-right:1%;">Contact Info</a>
                </div>
            </div>
        </div>
    </body>
</html>


