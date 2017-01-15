<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <link rel="stylesheet" href="styles.css">
    <title>Euromed 2016: Speakers & Researchers</title>
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
                    <a href="index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="speakers_and_researchers.php">Speakers & Researchers </a>
                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="learn_more.php">More about Euromed 2016</a></li>
                      <li><a href="programme.php">Programme</a></li>
                      <li><a href="conference_registration.php">Conference Registration</a></li>
                      <li class="active"><a href="speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <ul>
                        <li><a href="speakers_and_researchers/conference_speakers.php">Conference Speakers</a></li>
                        <li><a href="speakers_and_researchers/info_for_speakers.php">Info for Speakers & Researchers</a></li>
                      </ul>
                      <li><a href="submitted_papers.php">Submitted Papers</a></li>
                      <li><a href="exhibitions.php">Exhibitions</a></li>
                      <li><a href="location_and_access.php">Location & Access</a></li>
                      <li><a href="sponsors.php">Sponsors</a></li>
                      <li><a href="previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Speakers and Researchers</h1></div>
                    <div>
                        <p>
                            The ultimate aim of the 6th EuroMed conference will be to bring together as many stakeholders
                            as possible from different backgrounds in order to achieve a high level of mutual understanding of the needs,
                            the requirements and the technical means of meeting them. Therefore, our common goal is to focus on
                            interdisciplinary and multi-disciplinary research on tangible and intangible Cultural Heritage,
                            the use of cutting edge technologies for the protection, preservation, conservation,
                            massive digitalisation and visualization/presentation of the Cultural Heritage content
                            (archeological sites, artifacts, monuments, libraries, archives, museums, etc).
                            At the same time, the event is intended to cover topics of research ready for exploitation,
                            demonstrating the acceptability of new sustainable approaches
                            and new technologies by the user community, SME's, owners, managers and conservators of
                            cultural patrimony. Below there is a link to the list of all confernece speakers.
                        </p>
                    </div>
                    <div style="margin-left:2%;"> &#11044;  <a href="speakers_and_researchers/conference_speakers.php" style="margin-left:1%;">Conference Speakers</a></div>
                    <div>
                        <p>
                            The Conference is an entity in its own right representing the collective accredited members. Speakers or Researchers
                            that meet the criteria set out in the Conferences rules and procedures can apply to be members. There are over 100
                            monkeys and baboons accredited to the Conference with more joining each year. Certain baboons
                            may also observe the closed session of the annual meeting.
                            Find out more below about the Conference membership and how to become an accredited baboon or a monkey.
                        </p>
                    </div>
                <div style="margin-left:2%;"> &#11044;  <a href="speakers_and_researchers/info_for_speakers.php" style="margin-left:1%;">Info for Speakers & Researchers</a></div>
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

