<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_FILES["image"])){
    $errors= array();
    $file_name = $_FILES["image"]['name'];
    $file_size =$_FILES["image"]['size'];
    $file_tmp =$_FILES["image"]['tmp_name'];
    $file_type=$_FILES["image"]['type'];
    //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    //$expensions= array("doc","pdf","txt");

    //if(in_array($file_ext,$expensions)== false){
        //$errors[]="extension not allowed, please choose a JPEG or PNG file.";
      //}
      if($file_size > 2097152){
          $errors[]='File size must be smaller than 2 MB';
      }
      if(empty($errors)==true){
          if(move_uploaded_file($file_tmp,"../papers/".$file_name))
              echo "<font color=green>Success $file_name Uploaded</font>";
          else
              echo "Error Contact Euromed";
      }else{
            print_r($errors);
            $_SESSION['errors']=$errors;
      }
   }
    else{
}
?>
