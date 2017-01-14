<?php include('imageupload.php');
    if($Reg==3){
        echo <<<END
        <div id="signup_info_head">Speaker Info</div>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" />
            <input type="submit"/>
            </form>
END;
    }
?>
