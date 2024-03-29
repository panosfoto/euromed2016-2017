<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <link rel="stylesheet" href="styles.css">
    <title>Euromed 2016: Previous Conferences</title>
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
                    <a href="index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="previous_conferences.php">Previous Conferences</a>
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
                      <li class="active"><a href="previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Previous Euromed conferences</h1></div>
                    <div><h3><a target="_blank" href="http://www.euromed2015.eu">
                        Euromed 2015
                    <!---image here--->
                    </a></h3></div>
                    <div><h3><a target="_blank" href="http://www.culturalheritage2014.eu">
                        CIPA/EuroMed2014
                        <img class="euromed_banner" src="images/euromed2014.jpg"/>
                    </a></h3></div>
                    <div><h3><a target="_blank" href="http://www.euromed2012.eu">
                        CIPA/EuroMed2012
                        <img class="euromed_banner" src="images/euromed2012.jpg"/>
                    </a></h3></div>
                    <div><h3><a target="_blank" href="http://www.euromed2010.euromed2012.eu">
                        CIPA/EuroMed2010
                        <img class="euromed_banner" src="images/euromed2010.jpg"/>
                    </a></h3></div>
                    <div><h3><a target="_blank" href="http://vsmm2008.org">
                        CIPA/VSMM/EuroMed2008
                        <img class="euromed_banner" src="images/vsmm2008.jpg"/>
                    </a></h3></div>
                    <div><h3><a target="_blank" href="http://www.cipavast2006.org">
                        CIPA/VAST/EG/EuroMed2006
                        <img class="euromed_banner" src="images/cipavast2006.png"/>
                    </a></h3></div>
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

