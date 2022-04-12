<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <style>
    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.con{
  font-size: 35px;
  font-weight: bold;
}
.con1{
  font-size: 45px;
  font-weight: bold;
  padding-top: 20px;
  padding-bottom: 20px;
}
.cont{
color: white;
list-style:none;
}
#up-car{
  width: 35rem;
  height: 50rem;
}
#up-car1{
  margin-left: 25rem;
}

  </style> 
</head>
<body>
  <?php include 'partials/_header.php'; ?>
  <div class="container-fluid">
    <img src="img/6.jpg" alt="Snow" class="w-100">
    <div class="centered">
      <ul class="cont">
    <li class="con">WELCOME TO YOUR ACADEMY</li>
    <li class="con1">MAKE YOURSELF FOR YOUR COUNTRY</li>
    <a href="training.html"><li><button type="button" id="bt1" class="btn btn-light">Get Started</button></li></a>
    </ul>
    </div>
    </div>
    <div class="container" id="up-car1">
    <div class="card" id="up-car">
    <img src="img/5.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <div class="container text-center my-5">
    <h3>Select Your District And Place </h3>
    <!-- --------- -->
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=="true")
    {
    echo '<form action="/makeTeam/team.php" method="post">
  <div class="mb-3">
    <label for="district" class="form-label">District</label>
    <input type="text" class="form-control" id="disrict" name="district" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="nearground" class="form-label">Nearest Ground</label>
    <input type="text" class="form-control" id="nearground" name="nearground">
  </div>
  <div class="mb-3">
    <label for="distance" class="form-label">Nearest Ground</label>
    <input type="number" class="form-control" id="distance" name="distance">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>';
    }
    else
{
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Need Login!</strong> You are not logged in.Please login for discussion.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>
    <!-- --------- -->
    </div>
    </div>
    <?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include 'partials/_dbconnect.php';
    $district=$_POST['district'];
    $nearest_ground=$_POST['nearground'];
    $distance=$_POST['distance'];
    // $like =1;             
            $sql="SELECT * FROM `teammake` where district='$district' and nearest_ground='$nearest_ground' and distance<='$distance'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
                $name=$row['name'];
                $district=$row['district'];
                $nearest_ground=$row['nearest_ground'];  
                $distance=$row['distance'];  
                // echo '<h5 class="text-center"> Name =>' . $name . '</h5>';
                // echo '<h5 class="text-center"> District =>' . $district . '</h5>';
                // echo '<h5 class="text-center"> Nearest ground =>' . $nearest_ground . '</h5>';
                // echo '<h5 class="text-center">Distance =>' .  $distance . '(KM)</h5>';
                // echo '<hr>';
                echo '<div class="card bg-info border border-primary my-2" style="width: 18rem;color: blue;"><h6 class="text-center"> Name =>' . $name . '</h6>
                <h6 class="text-center"> District =>' . $district . '</h6>
                <h6 class="text-center"> Nearest ground =>' . $nearest_ground . '</h6>
                <h6 class="text-center">Distance =>' .  $distance . '(KM)</h6>
               </div>';
              }
}

?>
    </div>
    </div>

     <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  -->
  <?php
  echo '';
   if(isset($_SESSION[`loggedin`]) && $_SESSION[`loggedin`]==true)
    {
      $existSql="SELECT * FROM `team_like` WHERE like_email=' . $_SESSION[useremail]. '";
      $result=mysqli_query($conn,$existSql);
      $numRows=mysqli_num_rows($result);
      echo $numRows;
      if($numRows>0)
      {
          $showError="Email is already exists";
      }
      else
      {
        $sql="INSERT INTO `team_like` (`user_email`, `like_no`,)
             VALUES (' . $_SESSION[useremail]. ', 1 )";
            echo $sql;
            $result=mysqli_query($conn,$sql);
      }
    }
  '<script>
    function myFunction(){
      document.getElementById("demo").innerHTML = "Hello World";
    }
  </script>';
  ?>
</body>
</html>