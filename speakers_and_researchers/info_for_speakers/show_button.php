<?php

if(!isset($_SESSION['user']) ){

    echo <<<END
            <div style="width:100%;margin-top:10%;text-align:middle;">
            <font color="red">*To upload a paper you have to be logged in and registered in Euromed conference.</font>
            <a href=../../login.php> <input type="submit" style="float:right;"value="Submit Paper*"/></a>
            </div>
END;
    $_SESSION['FROM_PAPERSUBM']=1;
}
else{
    if($Reg==3){
        include("uptxt.php");
        echo <<<END
        <form action="" method="POST" enctype="multipart/form-data"/>
        <div style="width:100%;height:auto;">
        <textarea name="Abstract" cols="40" rows="5" style="width:50%;height:25%"placeholder="Paper Summary (abstract)..."value=""></textarea>
        <select class="field" style="width:25%;float:right;" name="type">
            <option value="0"selected disabled>Select field</option>
            <option value="1">Earthquake</option>
            <option value="2">3D Mapping</option>
            <option value="3">Museum</option>
            <option value="4">Yadayada</option>
        </select>
        </div>
        <div style="width:100%;margin-top:10%;text-align:middle;">
            <input type="submit" style="float:right;"value="Upload"/>
            <input type="file" style="float:left;"name="image" />
        </div>
        </form>
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
}
?>
