<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <link rel="stylesheet" href="../../styles.css">
    <title>Euromed 2016: Contact with the organization</title>
    <script language="JavaScript">
        function sendmessage()
        {
            var fname = document.getElementById('fname').value;
            if(!fname.match(/\S/)) {
                alert('Missing first name');
                return false;
            }
            var sname = document.getElementById('sname').value;
            if(!sname.match(/\S/)) {
                alert('Missing last name');
                return false;
            }
            var company = document.getElementById('company').value;
            if(!company.match(/\S/)) {
                alert('Missing company name');
                return false;
            }
            var email = document.getElementById('email').value;
            if(!email.match(/\S/)) {
                alert('Missing email');
                return false;
            }
            var kisknum = document.getElementById('kisknum').value;
            if(kisknum.match(0)) {
                alert('No kisk selected');
                return false;
            }
            var description = document.getElementById('description').value;
            if(!description.match(/\S/)) {
                alert('No description provided');
                return false;
            }
            document.getElementById('success').style.display='block';
        }
    </script>
    <body>
        <div id="frame">
            <div id="page">
                <a name="top"></a>
                <div id="header">
                    <div class="img">
                        <a href="../../index.php">
                            <img class="logo" src="../../images/logo.png"/>
                        </a>
                    </div>
                    <div class="search_bar">
                        <form action="../../search_results.php">
                            <input type="text" id="search" name="search" placeholder="Search for papers, speakers, etc.">
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
                    <a href="../../index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="../../exhibitions.php">Exhibitions</a> <font size="3" class="arrow">&#8594;</font> <a href="../info_for_exhibitors.php">Information for Exhibitors</a> <font size="3" class="arrow">&#8594;</font> <a href="contact_with_organization.php">Contact with organization</a>

                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="../../learn_more.php">More about Euromed 2016</a></li>
                      <li><a href="../../programme.php">Programme</a></li>
                      <li><a href="../../conference_registration.php">Conference Registration</a></li>
                      <li><a href="../../speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <li><a href="../../submitted_papers.php">Submitted Papers</a></li>
                      <li class="lower_active"><a href="../../exhibitions.php">Exhibitions</a></li>
                      <ul>
                        <li><a href="../participating_exhibitors.php">Participating Exhibitors</a></li>
                        <li class="lower_active"><a href="../info_for_exhibitors.php">Info for Exhibitors</a></li>
                        <ul>
                          <li><a href="exhibition_area.php">Exhibition area</a></li>
                          <li class="active"><a href="contact_with_organization.php">Contact with the organization</a></li>
                        </ul>
                      </ul>
                      <li><a href="../../location_and_access.php">Location & Access</a></li>
                      <li><a href="../../sponsors.php">Sponsors</a></li>
                      <li><a href="../../previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                        <div><h1>Contact management</h1></div>
                        Name &nbsp;<span style="color:red;">*</span><br>
                        <input type="text" id="fname" name="firstname"><br><br>
                        Surname &nbsp;<span style="color:red;">*</span><br>
                        <input type="text" id="sname" name="surname"><br><br>
                        Company &nbsp;<span style="color:red;">*</span><br>
                        <input type="text" id="company" name="company"><br><br>
                        E-mail &nbsp;<span style="color:red;">*</span><br>
                        <input type="text" id="email" name="email"><br><br>
                        Interested in exhibition kisk # &nbsp;<span style="color:red;">*</span><br>
                        <select class="field" style="width:35%;" id="kisknum" name="kisknum">
                            <option value="0"selected disabled>Select number</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br><br><br>
                        Short description of your exhibition's field of interest &nbsp;<span style="color:red;">*</span><br>
                        <textarea id="description" name="Description" cols="40" rows="5" style="width:75%;height:15%"placeholder="Type your description here"value=""></textarea><br><br>
                        (Fields with &nbsp;<span style="color:red;">*</span> are required)
                        <input type="submit" onclick="javascript:sendmessage()" style="margin-top: 2%; padding:0; width:20%; height:4%" value="Send"><br><br>
                        <div id="success" style="DISPLAY:none; color:green; font-size:18;">Message successfully sent!</div>
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


