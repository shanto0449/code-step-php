<?php
// $file = "files/21-03-24.txt";
// $myFile = fopen($file , "r") or die("Unable to read file");
// echo fread($myFile,filesize($file));
// fclose($myFile);
if(isset($_FILES['file'])){
  print_r($_FILES['file']);  
}

?>

<form   method="post" action="" enctype = "multipart/form-data">
    <input type="file" name="file">
    <br>
    <br>
    <button>Read File</button>
</form>