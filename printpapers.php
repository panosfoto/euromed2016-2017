<?php
    $query="SELECT FirstName,LastName,users.Username,Papers.ShortInfo,PersonalSite,Type FROM `Papers`,`users`,`Speakers` WHERE Papers.Username=users.Username AND Papers.Username=Speakers.Username ORDER BY Username;";
    $result = $db->query($query);
    $prev="";
    for($i=0;$i<$result->num_rows;$i++){
        $row=$result->fetch_assoc();
        $name=$row["FirstName"];
        $username=$row["Username"];
        $surname=$row["LastName"];
        $title=$row["Type"];
        $shortinfo=$row["ShortInfo"];
        $site=$row["site"];
        $sv=$i+1;
        $sumbittedpapers="../submitted_papers.php"."#".$username;
        $programme="../programme.php";

        echo <<<END
                <div class="conf_speaker" data-name="$name" data-famous="$sv">
END;

                if(strcmp($prev,$username)) echo "<a name=\"$username\"></a>";
                $prev=$username;
        echo <<<END
                    <div style="height:auto;width:100%;border-bottom-style:solid;">
                        <div style="width:100%;"><font size="4">$name $surname : $title</font></div>
                    </div>
                    <div style="float:left;width:100%;">
                    <p>
                        $shortinfo
                    </p>
                        <div style="width:100%;"><a href="$site">Author personal Page</a></div>
                        <div style="width:100%;"><a href="$programme">Download Paper</a></div>
                    </div>
                </div>
END;
    }
?>
