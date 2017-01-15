<?php
if(isset($_FILES['image'])){
    $username=$_SESSION['user'];
    $text=$_POST['short_info'];
    $site=$_POST['site'];
    if(!empty($text)&&!empty($site)){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        $expensions= array("jpeg","jpg","png");
        if(in_array($file_ext,$expensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }
          if($file_size > 2097152){
              $errors[]='File size must be exactly 2 MB';
          }
          if(empty($errors)==true){
              if(move_uploaded_file($file_tmp,"../images/".$file_name)){
                  $addition="INSERT INTO `Speakers` (`Username`, `ShortInfo`, `PersonalSite`, `Image`) VALUES ('$username','$text','$site','$file_name');";
                  $res=$db->query($addition);
                  if(!$res){
                      echo "<font color=red>An error occured try later or contact Euromed!</font>";
                   }
                    else{
                        echo "<font color=green>Success!</font>";
                    }
                }
              else
                  echo "error";
          }else{
              print_r($errors);
          }
       }
       else{
           echo "<font color=red>Missing fields!</font>";
        }
    }
?>
