<?php
    $Username=$_SESSION['user'];
    $query="SELECT * FROM users WHERE Username='$Username'";
    $res=$db->query($query);
    $row=$res->fetch_assoc();
    $Name=$row["FirstName"];
    $Lastname=$row["LastName"];
    $Email=$row["Email"];
    $Address=$row["Address"];
    $Phone=$row["PhoneNumber"];
    $Faculty=$row["Faculty"];
    $Reg=$row["RegistrationType"];
    switch ($row["RegistrationType"]) {
        case 1:
            $Regtype="Visitor";
            break;
        case 2:
            $Regtype="Visitor(Student)";
            break;
        case 3:
            $Regtype="Speaker";
            break;
        case 4:
            $Regtype="Exhibitor";
            break;
        default:
            $Regtype="";
            break;
    }
    $Name=$row["FirstName"];
?>

