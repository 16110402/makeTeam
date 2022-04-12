<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'partials/_dbconnect.php';
    $district=$_POST['district'];
    $nearest_ground=$_POST['nearground'];
    $distance=$_POST['distance'];

            $sql="SELECT * FROM `teammake` where district='$district' and nearest_ground='$nearest_ground' and distance<='$distance'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
                $district=$row['district'];
                $nearest_ground=$row['nearest_ground'];  
                $distance=$row['distance'];  
                echo $district;
                echo "\n";
                echo $nearest_ground;
                echo "\n";
                echo $distance;
              }
}

?>