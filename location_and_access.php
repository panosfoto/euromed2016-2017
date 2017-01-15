<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <link rel="stylesheet" href="styles.css">
    <title>Euromed 2016: Location & Access</title>
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
                    <a href="index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="location_and_access.php">Location & Access</a>
                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="learn_more.php">More about Euromed 2016</a></li>
                      <li><a href="programme.php">Programme</a></li>
                      <li><a href="conference_registration.php">Conference Registration</a></li>
                      <li><a href="speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <li><a href="submitted_papers.php">Submitted Papers</a></li>
                      <li><a href="exhibitions.php">Exhibitions</a></li>
                      <li class="active"><a href="location_and_access.php">Location & Access</a></li>
                      <ul>
                        <li><a href="location_and_access/access_from_abroad.php">Access from abroad</a></li>
                        <li><a href="location_and_access/accomodation_transportation_in_city.php">Accomodation and transportation in the city</a></li>
                      </ul>
                      <li><a href="sponsors.php">Sponsors</a></li>
                      <li><a href="previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Location of the conference:</h1></div>
                    <div><h2>Conference Venue: Filoxenia Conference Centre:</h2></div>
                    <p>"Filoxenia" is a cherished concept in Cyprus, one that has deep roots and a rich cultural heritage.
                    Hospitality, the official English translation of 'Filoxenia', doesn't do justice to the concept as it does not encompass its main element, which is generosity of spirit. What is certain is that it is one of the attributes of the Cypriot character and culture that we take pride in.
                    True to its name, the Filoxenia Conference Centrewas completely renovated to welcome guests from all over Europe during the Cypriot Presidency of the EU in 2012. Now it's a modern conference facility, which hosts a wide range of events and honor the timeless tradition of Cypriot hospitality.
                    </p>
                    <p><a target="_blank" href="http://www.fcc.com.cy/">http://www.fcc.com.cy/</a></p>
                    <p>
                    The Filoxenia Conference Centre is conveniently located, with easy access to the highway and central roads of Nicosia. If you are located in Nicosia, you can reach the center via bus. Filoxenia Conference Centre is completely wheelchair accessible and is fully equipped to accommodate people with special access needs.
                    If you are traveling via car, a large parking space outside the Centre provides easy access to the venue. A parking space for approximately 70 vehicles is also available within the Centre’s premises. 
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.0775131299147!2d33.37728665120074!3d35.154687566178474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de19d8fc1e4653%3A0xf05682dab61e0173!2zzqPPhc69zrXOtM-BzrnOsc66z4wgzprOrc69z4TPgc6_IM6mzrnOu86_zr7Otc69zq_OsQ!5e0!3m2!1sel!2sgr!4v1484476152585" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen></iframe>
                    <br><br><h2>Travelling as a foreigner:</h2>
                    Visiting us from another country? Click below for further instructions/help!
                    <div style="margin-left:2%;"> &#11044;  <a href="location_and_access/access_from_abroad.php" style="margin-left:1%;">Access from abroad</a></div>
                    <br>
                    <div><h2>Nicosia:</h2></div>
                    Need help about staying in Nicosia or moving around? Click below!
                    <div style="margin-left:2%;"> &#11044;  <a href="location_and_access/accomodation_transportation_in_city.php" style="margin-left:1%;">Accomodation and transportation in the city</a></div>
                    <br><br>
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

