<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <link rel="stylesheet" href="../styles.css">
    <title>Euromed 2016: Workshops</title>
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
                    <a href="../index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="../learn_more.php">More about Euromed 2016</a> <font size="3" class="arrow">&#8594;</font> <a href="workshops.php">Workshops</a>
                </div>

                <div class=side_menu>
                     <ul>
                      <li class="lower_active"><a href="../learn_more.php">More about Euromed 2016</a></li>
                      <ul>
                        <li><a href="../programme.php">Programme</a></li>
                        <li class="active"><a href="workshops.php">Workshops</a></li>
                        <li><a href="other_activities.php">Other activities</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                      </ul>
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
                    <div><h1>Workshops</h1></div>
                    <p><h3>Workshop 1 </h3>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p><h3>Workshop 2 </h3>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p><h3>Workshop 3 </h3>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p><h3>Workshop 4 </h3>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
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
                    <a href="../404.php" style="float:right; margin-right:1%;">Sitemap</a>
                    <a href="../contact.php" style="float:right; margin-right:1%;">Contact Info</a>
                </div>
            </div>
        </div>
    </body>
</html>

