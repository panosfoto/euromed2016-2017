<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <?php include ('connect.php'); ?>
    <link rel="stylesheet" href="styles.css">
    <title>Euromed 2016: Programme</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="programfilter.js"></script>
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
                    <a href="index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="programme.php">Conference Programme</a>
                </div>
                <div class=side_menu>
                     <ul>
                      <li><a href="learn_more.php">More about Euromed 2016</a></li>
                      <li class="active"><a href="programme.php">Programme</a></li>
                      <li><a href="conference_registration.php">Conference Registration</a></li>
                      <li><a href="speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <li><a href="submitted_papers.php">Submitted Papers</a></li>
                      <li><a href="exhibitions.php">Exhibitions</a></li>
                      <li><a href="location_and_access.php">Location & Access</a></li>
                      <li><a href="sponsors.php">Sponsors</a></li>
                      <li><a href="previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Conference Programme</h1></div>
                    <form>
                        <p>Filter by Speaker</p>
                        <select class="field" name="speaker" onchange="getval(this);">
                            <option>All speakers</option>
                            <?php include('printspeakersfilter.php');?>
                        </select>
                    </form>
                    <p><br/><br/><br/><h3 style="text-align:center">November 2, Wednesday</h3></p>
                    <a href="programme.php" style="float:left;color:black;">&#8592; Previous day</a>
                    <a href="programme.php" style="float:right;color:black; margin-right:5%">Next day &#8594;</a>
                    <table class="tbl">
                       <tr>
                         <th class="tbl-cell">Time</th>
                         <th class="tbl-cell">Lecture hall A</th>
                         <th class="tbl-cell">Lecture hall B</th>
                         <th class="tbl-cell">Lecture hall C</th>
                       </tr>
                       <tr>
                         <td class="tbl-cell">9:00-11:00</td>
                         <td class="tbl-cell">Speaker (...)
                         <p>Lecture (...)</p>
                         <p>Other Info (...)</p>
                         </td>
                         <td class="tbl-cell">
                            <div class="speaker3">
                                Speaker3
                            </div>
                        </td>
                         <td class="tbl-cell">
                            <div class="speaker1">
                                Speaker1
                            </div>
                        </td>
                       </tr>
                       <tr>
                         <td class="tbl-cell">11:00-11:15</td>
                         <td class="tbl-cell">Break</td>
                         <td class="tbl-cell">Break</td>
                         <td class="tbl-cell">Break</td>
                       </tr>
                       <tr>
                         <td class="tbl-cell">11:15-13:00</td>
                         <td class="tbl-cell">
                            <div class="speaker1">
                                Speaker1
                            </div>
                        </td>
                         <td class="tbl-cell"></td>
                         <td class="tbl-cell">
                            <div class="speaker2">
                                Speaker2
                            </div>
                        </td>
                       </tr>
                       <tr>
                         <td class="tbl-cell">13:00-14:00</td>
                         <td class="tbl-cell">Lunch</td>
                         <td class="tbl-cell">Lunch</td>
                         <td class="tbl-cell">Lunch</td>
                       </tr>
                       <tr>
                         <td class="tbl-cell">14:00-17:00</td>
                         <td class="tbl-cell">
                            <div class="speaker3">
                                Speaker3
                            </div>
                        </td>
                         <td class="tbl-cell">
                            <div class="speaker2">
                                Speaker2
                            </div>
                        </td>
                         <td class="tbl-cell"></td>
                       </tr>
                       <tr>
                         <td class="tbl-cell">17:00-17:15</td>
                         <td class="tbl-cell">Break</td>
                         <td class="tbl-cell">Break</td>
                         <td class="tbl-cell">Break</td>
                       </tr>
                       <tr>
                         <td class="tbl-cell">17:15-20:00</td>
                         <td class="tbl-cell">
                            <div class="speaker2">
                                Speaker2
                            </div>
                        </td>
                         <td class="tbl-cell">
                            <div class="speaker1">
                                Speaker1
                            </div>
                        </td>
                         <td class="tbl-cell">
                            <div class="speaker3">
                                Speaker3
                            </div>
                        </td>
                       </tr>
                     </table>
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

