<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table border ='1'>
        <tr>
            <td>S.N</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Shanto</td>
            <td>shanto@gmail.com</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Fahim</td>
            <td>fahim@gmail.com</td>
        </tr>
    </table>
    <br>
    <br>
</body>
</html>

<?php

$user =[
    [1,"Shanto","shanto@gmail.com"],
    [2,"Fahim","fahim@gmail.com"],
    [3,"Mainul","mainul@gmail.com"],
    [4,"Tonmoy","tonmoy@gmail.com"]
];
echo "<table border ='1'>";
for($i=0; $i<count($user);$i++){
   echo "<tr>";
    for($j=0;$j<count($user[$i]);$j++){
        echo "<td>";
        echo $user[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
 echo "</table>";

?>