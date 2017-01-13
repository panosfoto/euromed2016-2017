<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>
<html>
    <link rel="stylesheet" href="styles.css">
    <title>Euromed 2016: Home</title>
    <body>
        <div id="frame">
            <div id="page">
                <a name="top"></a>
                <div id="header">
                    <div class="img">
                        <a href="index.php">
                            <img class="logo" src="logo.png"/>
                        </a>
                    </div>
                    <div class="search_bar">
                        <form action="search_results.html">
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
                    <a href="index.php">Home</a>
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
                    <div><h1>Welcome to Euromed 2016</h1></div>
                    <img class="euromed_banner" src="euromed_banner_2016.png"/>
                    <p>Protecting, preserving and presenting our Cultural Heritage are frequently interpreted as
                    change management and/or change the behavior of the society. Joint European and international
                    research produces a scientific background and support for such a change. We are living in a period
                    characterized by rapid and remarkable changes in the environment, in the society and in technology.
                    Natural change, war conflicts and man-made changes, including climate, as well as technological and
                    societal change, form an ever-moving and colorful stage and a challenge for the society. Close cooperation
                    between professionals, the policy makers and authorities internationally, is necessary for research,
                    development and technology in the field of cultural heritage. </p>
                </div>
                <div class="ads_panel">
                        <a href="index.php">
                            <img class="logo" src="ad1.png"/>
                        </a>
                        <a href="index.php">
                            <img class="logo" src="ad2.jpg"/>
                        </a>
                        <a href="index.php">
                            <img class="logo" src="ad3.jpg"/>
                        </a>
                        <a href="index.php">
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

