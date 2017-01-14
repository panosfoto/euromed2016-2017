<?php
    $query="SELECT * FROM users WHERE RegistrationType='3';";
    $result = $db->query($query);
    for($i=0;$i<$result->num_rows;$i++){
        $row=$result->fetch_assoc();
        $name=$row["FirstName"];
        $surname=$row["LastName"];
        echo  "<option>$name $surname</option>";
    }
?>

