<?php
    $query="SELECT * FROM users WHERE RegistrationType='3';";
    $result = $db->query($query);
    for($i=0;$i<$result->num_rows;$i++){
        $row=$result->fetch_assoc();
        $name=$row["FirstName"];
        $surname=$row["LastName"];
        $sv=$i+1;
        $val="speaker$sv";
        echo $_SESSION['SELECTED_SPEAKER'];
        if(isset($_SESSION['SELECTED_SPEAKER']) && !strcmp($_SESSION['SELECTED_SPEAKER'],$val))
            echo  "<option value=\"speaker$sv\" selected>$name $surname</option>";
        else
            echo  "<option value=\"speaker$sv\">$name $surname</option>";
    }
?>

