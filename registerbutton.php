<?php
if(!isset($_SESSION['user']) ){

    echo <<<END
            <div style="width:100%;margin-top:10%;text-align:middle;">
            <font color="red">*You have to be logged in to register in Euromed conference.</font>
            <a href="login.php"> <input type="submit" style="float:right;"value="Login"/></a>
            </div>
END;
}
else{
    echo <<<END
    <form action="" method="POST" enctype="multipart/form-data"/>
    <div style="width:100%;margin-top:10%;text-align:middle;">
        <a href="conference_registration/payment.php"><input type="submit" style="float:right;"value="Pay now!"/></a>
    </div>
    </form>
END;

}
?>
