<?php

if(isset($_POST['name'])){

    $name=$_POST['name'];
    $id=$_POST['id'];
    echo $name . $id; 
    $conx=mysqli_connect("localhost:3306", "fitness_dbuser", "********", "fitnessWebAppData");
    $SQL="INSERT INTO `names` (`PersonID`, `Name`) VALUES ('$id', '$name');";

    $result=mysqli_query($conx,$SQL);
}

?>