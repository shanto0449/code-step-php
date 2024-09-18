<?php
print_r($_POST);
echo "<br> <br>";
if(isset($_POST['name'])){
    echo "User Name is " . $_POST['name'];
    echo "<br>";
    echo "User Skills is " . implode("," , $_POST['skills']);
}
?>