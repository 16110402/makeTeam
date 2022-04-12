<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup for Make Team</title>
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php include 'partials/_header.php'; ?>
<div class="container my-5 bg-info border border-primary w-50 p-2 text-center">
            <h3>Enter Your Detail</h3>
            <form action="/makeTeam/handleTeamSignup.php" method="post">
        <div class="chip m-4">
                <img src="img/7.jpg" alt="Person" width="96" height="96">
                </div> 
        <div class="row">
        <div class="col">
  <div class="mb-3 w-100">
    <label for="name" class="form-label fw-bold">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"/>
  </div>
  <div class="mb-3 w-100">
    <label for="district" class="form-label fw-bold">District</label>
    <input type="text" class="form-control" id="district" name="district" aria-describedby="emailHelp"/>
  </div>
  <div class="mb-3 w-100">
    <label for="nearground" class="form-label fw-bold">Nearest Ground</label>
    <input type="text" class="form-control" id="nearground" name="nearground" aria-describedby="emailHelp"/>
  </div>
  </div>
  <div class="col">
  <div class="mb-3 w-100">
    <label for="place" class="form-label fw-bold">Your Postion Place</label>
    <input type="text" class="form-control" name="place" id="place" aria-describedby="emailHelp"/>
  </div>
  <div class="mb-4 w-100 my-5">
    <label for="distance" class="form-label fw-bold">Distance(in KM)</label>
    <input type="number" class="distance" name="distance" id="distance" aria-describedby="emailHelp"/>
  </div>
  </div>
  </div>
  <button type="submit" class="btn btn-dark">SignUp</button>
</form>
</div>
<!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  -->
</body>
</html>