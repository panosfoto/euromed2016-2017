<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <link rel="stylesheet" href="../styles.css">
    <title>Euromed 2016: FAQ</title>
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
                    <a href="../index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="../learn_more.php">More about Euromed 2016</a> <font size="3" class="arrow">&#8594;</font> <a href="faq.php">FAQ</a>
                </div>

                <div class=side_menu>
                     <ul>
                      <li class="lower_active"><a href="../learn_more.php">More about Euromed 2016</a></li>
                      <ul>
                        <li><a href="../programme.php">Programme</a></li>
                        <li><a href="workshops.php">Workshops</a></li>
                        <li><a href="other_activities.php">Other activities</a></li>
                        <li class="active"><a href="faq.php">FAQ</a></li>
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
                    <div><h1>FAQ</h1></div>
                    <ul>
                        <li><h3>Who can be involved into Euromed?</h3>
                            <ul>
                                <li>Scientists from universities, organizations and institutes, at all levels, specializing in Archaeology, History, Geology, Biology, Anthropology, Chemistry, Computer Science, Physics, Mathematics, Cultural Informatics, Polytechnic (Mechanical Engineers, Civil Engineers, Architects etc. ) Labor excavations and Art, Graphic Arts etc, specializations involved in any way in the major issue of Digitization of Cultural Heritage.
                                </li>
                                <li>Executives of the Ministry of Education, Culture and Religious Affairs, the Ministry of Economy, Infrastructure, Marine and Tourism, Antiquities, ICOMOS, Museums, General Archives of the State, public and private libraries, Holy Metropolis of the Greek Church and other Churches Federation, Associations scientists, Conservators Association of Greek, Greek Archaeometry, Association of Archaeologists, Architects, ICOM Greece and Cyprus, collectivity of Consulting Companies, Institutions implementation of national and European programs, etc. Non Governmental Organisations like their counterparts in Cyprus.
                                </li>
                                <li>Executives of other Ministries and Municipalities First and Second Grade
                                </li>
                                <li>Greeks and Cypriots working in Greek and Foreign Universities, Research Centres on Culture
                                </li>
                                <li>Greeks and Cypriots students at Greek and Foreign Universities, Research Centres on Culture
                                </li>
                                <li>Independent Scientists and Researchers in Greece, Cyprus as well as worldwide
                                </li>
                                <li>In general, anyone interested in digitization of cultural heritage.
                                </li>
                            </ul>
                            For these reasons we urge you to promptly register your participation, either as Rapporteurs, either as listeners, in the "National Conference Heritage 2016 Digitization", which is the great rendezvous of the Greek and Cypriot scientists from around the world with Culture!
                        </li>
                        <li>
                            <h3>Certification procedures of student status of the student participants</h3>
                            For undergraduate student enrollments as participants with symbolic registration fee, the relevant certificate from the University where the student attends should be sent to the Secretariat of the Conference (secretary@euromed2016.eu), not later than one (1) week after the date of registration as a delegate, for certification of his/her student status.
                        </li>
                    </ul>
                    <br>
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

