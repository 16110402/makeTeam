<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'partials/_dbconnect.php';
    $name=$_POST['name'];
    $district=$_POST['district'];
    $nearest_ground=$_POST['nearground'];
    $postion_place=$_POST['place'];
    $distance=$_POST['distance'];

    $sql="INSERT INTO `teammake` (`name`, `district`, `nearest_ground`, `position_place`, `distance`, `timestamp`)
    VALUES ('$name', '$district', '$nearest_ground', '$postion_place', $distance, CURRENT_TIMESTAMP);";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    echo $result;
    if($result)
    {
        $showAlert="true";
        header("Location: /makeTeam/index.php?signupsucces=true");
        exit();
    }
    header("Location: /makeTeam/index.php?signupsucces=false&error=$showError");
}

?>