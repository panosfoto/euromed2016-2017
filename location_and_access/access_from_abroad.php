<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <link rel="stylesheet" href="../styles.css">
    <title>Euromed 2016: Access from abroad</title>
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
                    <a href="../index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="../location_and_access.php">Location & Access</a> <font size="3" class="arrow">&#8594;</font> <a href="access_from_abroad.php">Access from abroad</a>

                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="../learn_more.php">More about Euromed 2016</a></li>
                      <li><a href="../programme.php">Programme</a></li>
                      <li><a href="../conference_registration.php">Conference Registration</a></li>
                      <li><a href="../speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <li><a href="../submitted_papers.php">Submitted Papers</a></li>
                      <li><a href="../exhibitions.php">Exhibitions</a></li>
                      <li class="lower_active"><a href="../location_and_access.php">Location & Access</a></li>
                      <ul>
                        <li class="active"><a href="access_from_abroad.php">Access from abroad</a></li>
                        <li><a href="accomodation_transportation_in_city.php">Accomodation and transportation in the city</a></li>
                      </ul>
                      <li><a href="../sponsors.php">Sponsors</a></li>
                      <li><a href="../previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Access from abroad</h1></div>
                    <p> <h3>Airports</h3> 
                        There are direct flights to Cyprus from most of the biggest European and Middle Eastern airports.<br>
                        You can find further details in the <a target="_blank" href="http://www.cyprusairports.com.cy/">official webpage of the two airports in Cyprus</a>
                        <br><br>
                    </p>
                    <p><h3>Bus transfer from the airports</h3>
                        There is a possibility to take advantage of the bus transfer service available 
                        by private companies just outside of the two airports (Larnaca and Paphos). 
                        This service is offered everyday mostly between 05:00am and 24:00 (mid night) 
                        and current costs run at approximately max. 9&euro; (one way).<br> 
                        The hotels in Limassol are approx. 35-45 minutes drive from Larnaca International 
                        Airport and approx. 40 minutes from Paphos International Airport.<br>
                        For more information: 
                    </p>
                    <ul>
                        <li><a target="_blank" href="http://www.cyprusbybus.com/default.aspx">Bus Timetable from/to Larnaca</a></li>
                        <li><a target="_blank" href="http://www.kapnosairportshuttle.com/">Kapnos Airport Shuttle Bus</a></li>
                        <li><a target="_blank" href="http://www.pafosbuses.com/cyprus/buses/42">Paphos Buses</a></li>
                    </ul>
                    <br>
                    <p><h3>Accomodation in the city & more</h3>
                        Go to the <a href="accomodation_transportation_in_city.php">Accomodation and transportation in the city</a> page.
                    </p>
                    <br><br>
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


