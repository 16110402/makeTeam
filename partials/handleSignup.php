<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    include '_dbconnect.php';
    $user_email=$_POST['signupEmail'];
    $pass=$_POST['signupPassword'];
    $cpass=$_POST['signupcPassword'];

    //check whether username is exist or not
    $existSql="SELECT * FROM `team_users` WHERE user_email='$user_email'"; //"select * from `users` where user_email=$user_email";
    $result=mysqli_query($conn,$existSql);
    $numRows=mysqli_num_rows($result);
    echo $numRows;
    if($numRows>0)
    {
        $showError="Email is already exists";
    }
    else
    {
        if($pass==$cpass)
        {
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $sql="INSERT INTO `team_users` (`user_email`, `user_pass`, `timestamp`)
             VALUES ('$user_email', '$hash', CURRENT_TIMESTAMP)";
            echo $sql;
            $result=mysqli_query($conn,$sql);
            echo $result;
            if($result)
            {
                $showAlert="true";
                header("Location: /makeTeam/teamSignup.php?signupsucces=true");
                exit();
            }
        }
        else
        {
            $showError="Password do not matched";
        }
    }
    header("Location: /makeTeam/index.php?signupsucces=false&error=$showError");
}

?>