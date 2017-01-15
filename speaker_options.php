<?php include('imageupload.php');
    if($Reg==3){
        echo <<<END
        <div id="signup_info_head">Speaker Options</div>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" />
            <input action="submit" style="float:left;"value="Submit Photo"/>
        </form>
END;
    }
?>
