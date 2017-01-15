<?php
    $query="SELECT * FROM `Speakers`,`users` WHERE Speakers.Username=users.Username ";
    $result = $db->query($query);
    for($i=0;$i<$result->num_rows;$i++){
        $row=$result->fetch_assoc();
        $name=$row["FirstName"];
        $username=$row["Username"];
        $surname=$row["LastName"];
        $image=$row["Image"];
        $shortinfo=$row["ShortInfo"];
        $site=$roe["site"];
        $sv=$i+1;
        $sumbittedpapers="../submitted_papers.php"."#".$username;
        $programme="../programme.php";
        echo <<<END
                <div class="conf_speaker" data-name="$name" data-famous="$sv">
                    <a name="$username"></a>
                    <div style="height:auto;width:100%;border-bottom-style:solid;"><font size="4">$name $surname</font></div>
                    <div style="float:left;width:100%;">
                    <p>
                        <img style="height:15%;float:left;margin:5px" src="../images/$image"/>
                        $shortinfo;
                    </p>
                        <div style="width:100%;"> <a href="$site">Personal Page</a></div>
                        <div style="width:100%;"><a href="$programme">See in Programme</a></div>
                        <div style="width:100%;"><a href="$sumbittedpapers">Submitted Papers</a></div>
                    </div>
                </div>
END;
    }
?>
