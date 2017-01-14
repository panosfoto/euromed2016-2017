<?php
    $query="SELECT * FROM users WHERE RegistrationType='3';";
    $result = $db->query($query);
    for($i=0;$i<$result->num_rows;$i++){
        $row=$result->fetch_assoc();
        $name=$row["FirstName"];
        $surname=$row["LastName"];
        $sv=$i+1;
        echo  "<option value=\"speaker$sv\">$name $surname</option>";
    }
?>

