<?php
// print_r($_POST);

if( $_POST){
    echo "User Name is: " . $_POST['user_name'];
    echo "<br>";
    echo "User Name is: " . $_POST['user_password'];
    echo "<br>";
    echo "User Name is: " . $_POST['user_email'];
}

?>