<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <link rel="stylesheet" href="../../styles.css">
    <title>Euromed 2016: General Information</title>
    <body>
        <div id="frame">
            <div id="page">
                <a name="top"></a>
                <div id="header">
                    <div class="img">
                        <a href="../index.php">
                            <img class="logo" src="../../images/logo.png"/>
                        </a>
                    </div>
                    <div class="search_bar">
                        <form action="../../search_results.php">
                            <input type="text" id="fname" name="firstname" placeholder="Search for papers, speakers, etc.">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    <div class="login">
                      <?php
                           if(!isset($_SESSION['user']) ){
                              echo "<a href=\"../../login.php\"><button>Login</button></a>";
                              echo "<a href=\"../../register.php\"><button>Sign Up</button></a>";
                            }
                            else {
                              $user_name=$_SESSION['user'];
                              echo "<a href=\"../../profile.php\"><button class=\"logged_in\">$user_name</button></a>";
                              echo "<a href=\"../../logout.php\"><button class=\"logged_in\">Logout</button></a>";
                            }
                        ?>
                    </div>
                </div>
                <div id="navigation">
                    <a href="../../index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="../../speakers_and_researchers.php">Speakers & Researchers </a> <font size="3" class="arrow">&#8594;</font> <a href="../info_for_speakers.php">Information for Speakers</a> <font size="3" class="arrow">&#8594;</font> <a href="information.php">General Information</a>

                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="../../learn_more.php">More about Euromed 2016</a></li>
                      <li><a href="../../programme.php">Programme</a></li>
                      <li><a href="../../conference_registration.php">Conference Registration</a></li>
                      <li class="lower_active"><a href="../../speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <ul>
                        <li><a href="../conference_speakers.php">Conference Speakers</a></li>
                        <li class="lower_active"><a href="../info_for_speakers.php">Info for Speakers & Researchers</a></li>
                        <ul>
                          <li class="active"><a href="information.php">General Information</a></li>
                          <li><a href="paper_submission.php">Paper Submission</a></li>
                        </ul>
                      </ul>
                      <li><a href="../../submitted_papers.php">Submitted Papers</a></li>
                      <li><a href="../../exhibitions.php">Exhibitions</a></li>
                      <li><a href="../../location_and_access.php">Location & Access</a></li>
                      <li><a href="../../sponsors.php">Sponsors</a></li>
                      <li><a href="../../previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>General Information</h1></div>
                    <h3>Full Papers</h3>
                    Authors of accepted full papers will have to give a 25 minute oral presentation (including 5-10 minutes for questions from the audience).<br>
                    Please present yourself to the Session Chair well before your session start.<br>
                    Authors slides will be presented via a video projector (see details below).<br>
                    <h3>Short/Project Papers</h3>
                    Authors of accepted SHORT and PROJECT papers will be required to do a short presentation (15 minutes net time). Project Paper presentations will have a duration of 15 minutes long. Short Paper presentations will have a duration of 10 minutes long. Moreover, there will be an opportunity for informal questions and discussion during the dedicated Short Paper posters breaks. Each SHORT paper will be also presented in a poster session (during the coffee break following oral presentation). It is therefore a REQUIREMENT for publication that you prepare both a short oral presentation and a poster of your short paper for display. The exact lay out of the poster is at your discretion but the poster should be of A0 size and preferably laminated (<a href="http://www.euromed2016.eu/index.php/download_file/view/89/201">Guidelines</a>). If you have any queries regarding these final requirements, feel free to <a href="../../contact.php">contact us</a>.
                    <h3>Audio Visual Equipment</h3>
                    Conference presentation rooms will be equipped with:
                    <ul>
                        <li>Large screen and video projector.
                        </li>
                        <li>Projectors in the General Session have a maximal resolution of 1280x1024 with a native resolution of 1024x768.
                        </li>
                        <li>Switched connections for portable laptops.
                        </li>
                        <li>Standalone Windows 7, Windows 8, Windows 10 (with Internet connection) with :
                            <ul>
                                <li>Microsoft Office 2010/2013.
                                </li>
                                <li>CD-ROM/DVD drive.
                                </li>
                                <li>Medium quality accelerated 3D graphics.
                                </li>
                                <li>USB2/USB3 ports
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <h3>Paper submission instructions & information</h3>
                    <p> Submissions for the joint event are completely electronic, and both the paper and all supplementary material must be submitted through the online submission website.<br>
                        The EuroMed2016 Proceeding will be published by Springer Verlag in the Lecture Notes in Computer Science (LNCS) series (<a href="www.springer.com/lncs">www.springer.com/lncs</a>).
                    </p>
                    <p> 
                        The Symposium&nbsp;<span style="font-style:italic">accepts only original, unpublished work written in English</span>.&nbsp;<span style="font-weight:bold">All the papers</span>&nbsp;will be published by Springer Verlag in LNCS. We are soliciting three types of contributions: The FULL (Research), PROJECT (on-going projects) and SHORT Papers (Posters).
                    </p>
                    <p> However, the 15 best submitted papers will be published on a special issue of the International Journal Heritage in the Digital Era, published by <a href="https://uk.sagepub.com/en-gb/eur/home">SAGE Publisher, UK</a>.
                    </p><br>
                    <p> For your convenience, we have summarized in the Author Guidelines document how a proceeding paper should be structured, how elements (headings, figures, references) should be formatted using our predefined styles, etc.
                    </p>
                    <p> We also give some insight on how your paper will be typeset at Springer. 
                    </p>
                    <p> The PDF of the Authors Guidelines can be downloaded <a href="http://www.euromed2016.eu/index.php/download_file/view/90/190">here</a> or as part of the zip files containing the complete sets of instructions and templates for the different text preparation systems.
                    </p>
                    <div style="font-weight:bold">Downloads</div>
                    <ul>
                        <li><div style="font-weight:bold">Template in MS Word Format</div><a href="http://www.euromed2016.eu/index.php/download_file/view/131/190">Download Springer Verlag guidelines for the EuroMed2016 papers in MS-WORD including the Copyright-Form</a>
                        </li>
                        <li><div style="font-weight:bold">Template in LaTeX Format</div><a href="http://www.euromed2016.eu/index.php/download_file/view/132/190">Download Springer Verlag guidelines for the EuroMed2016 Latex including the Copyright-Form</a>
                        </li>
                    </ul>
                    <div style="font-weight:bold">Copyright form</div>
                    <p> Each contribution must be accompanied by a Springer copyright form, a so-called <a href="http://www.euromed2016.eu/index.php/download_file/view/92/190">'Consent to Publish' form</a>. Modified forms are not acceptable.
                    </p>
                    <p> Authors will be asked to transfer the copyright of the paper to the Springer. This will ensure the widest possible protection and dissemination of information under copyright laws.
                    </p>
                    <p> One author may sign on behalf of all of the authors of a particular paper. In this case, the author signs for and accepts responsibility for releasing the material on behalf of any and all co-authors.
                    </p>
                    <div style="font-weight:bold">Permissions</div>
                    <p> Authors wishing to include figures, tables, or text passages that have already been published elsewhere are required to obtain permission from the copyright owner(s) for both the print and online format before their paper is submitted to Springer.
                    </p>
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


