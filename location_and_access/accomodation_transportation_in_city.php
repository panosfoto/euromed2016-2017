<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <link rel="stylesheet" href="../styles.css">
    <title>Euromed 2016: Accomodation and transportation in the city</title>
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
                    <a href="../index.php">Home</a> <font size="4">&#8594;</font> <a href="../location_and_access.php">Location & Access</a> <font size="4">&#8594;</font> <a href="accomodation_transportation_in_city.php">Accomodation and transportation in the city</a>

                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="../learn_more.php">Learn more about Euromed 2016</a></li>
                      <li><a href="../announcements.php">Announcements</a></li>
                      <li><a href="../programme.php">Programme</a></li>
                      <li><a href="../conference_registration.php">Conference Registration</a></li>
                      <li><a href="../speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <li><a href="../submitted_papers.php">Submitted Papers</a></li>
                      <li><a href="../workshops.php">Workshops</a></li>
                      <li><a href="../exhibitions.php">Exhibitions</a></li>
                      <li><a href="../other_activities.php">Other activities</a></li>
                      <li class="lower_active"><a href="../location_and_access.php">Location & Access</a></li>
                      <ul>
                        <li><a href="access_from_abroad.php">Access from abroad</a></li>
                        <li class="active"><a href="accomodation_transportation_in_city.php">Accomodation and transportation in the city</a></li>
                      </ul>
                      <li><a href="../faq.php">FAQ</a></li>
                      <li><a href="../contact.php">Contact Info</a></li>
                      <li><a href="../sponsors.php">Sponsors</a></li>
                      <li><a href="../previous_conferences.php">Previous Conferences</a></li>
                      <li><a href="../downloads.php">Downloads</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Accomodation and transportation in the city</h1></div>
                    <p> Lorem ipsum </p>
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
                <div id="footer">
                    <div style=" height=100%; margin-left:1%;">Copyright: Manos Pitsikalis, Panagiotis Fotopoulos
                        <a href="#top"><button>Back to top</button></a>
                        <a href="404.php" style="float:right; margin-right:1%;">Sitemap</a>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>

