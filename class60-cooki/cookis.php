<?php
setcookie("fruit","apple",time()+(86400));

if(isset($_COOKIE['fruit'])){
    // print_r($_COOKIE);
    echo "Current cookie is " . $_COOKIE['fruit'];
}else{
    echo "No cookie set";
}
?>