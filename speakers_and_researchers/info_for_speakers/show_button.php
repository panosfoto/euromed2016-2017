<?php include('imageupload.php');

if(!isset($_SESSION['user']) ){

    echo <<<END
            <div style="width:100%;margin-top:10%;text-align:middle;">
            <font color="red">*To upload a paper you have to be logged in and registered in Euromed conference.</font>
            <a href=../../login.php> <input type="submit" style="float:right;"value="Submit Paper*"/></a>
            </div>
END;
}
if($Reg==3){
    include("uptxt.php");
    echo <<<END
        <div style="width:100%;height:auto;">
        <input class="field" type="text" name="faculty"size="23" style="height:15%;float:left;"value="" placeholder="Short Info"/>
        <select class="field" style="width:25%;float:right;" name="signup_type">
            <option value="0"selected disabled>Select field</option>
            <option value="1">Earthquake</option>
            <option value="2">3D Mapping</option>
            <option value="3">Museum</option>
            <option value="4">Yadayada</option>
        </select>
        </div>
        <div style="width:100%;margin-top:20%;text-align:middle;">
        <form action="" method="POST" enctype="multipart/form-data"/>
            <input type="submit" style="float:right;"value="Upload"/>
            <input type="file" style="margin-right:3%;float:right;"name="image" />
        </form>
        </div>
END;
    }
    else{
        echo <<<END
            <div style="width:100%;margin-top:10%;text-align:middle;">
            <font color="red">*Only Speakers can upload papers.</font>
            <a href=../../login.php> <input type="submit" style="float:right;"value="Submit Paper*" disabled/></a>
            </div>
END;
}
?>
