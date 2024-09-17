<?php

if(isset($_POST['filename'])){
$fileName= "files/" . $_POST['filename'];
$content = $_POST['content'] ;
$file = fopen($fileName,"w")or die ("unable to create file");
fwrite($file , $content);
fclose ($file);
echo "file created";

}


?>

<form method ="post" action="">
    <input type="text" placeholder="Enter file name" name="filename" >
    <br>
    <br>
    <textarea name="content" id="">

    </textarea>

    <br>
    <br>
    <button>Crite File</button>
</form>