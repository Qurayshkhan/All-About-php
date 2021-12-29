<?php
session_start();
?>


    <?php

    $server="localhost";
    $username="root";
    $password="";
    $dbname="php2";
    $conn=mysqli_connect($server,$username,$password,$dbname);
    if ($conn) {
        // echo "DB Connect successfully";
    }else {
        echo "DB NOT CONNECT";
    }
    ?>


        <?php

include ("other/nav.php");

?>

            <!doctype html>
            <html lang="en">

            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

                <title>Registration Form</title>
            </head>

            <body>












                <?php

    if (isset($_POST['submit'])) {
        
        $username=mysqli_real_escape_string($conn,$_POST['fname']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);

        $pass=password_hash($password,PASSWORD_BCRYPT);
        $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

    $sql="SELECT * FROM reg where `email`='$email'";
    $query=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($query);

    if ($count > 0) {
        ?>
                    <script>
                        alert("Email Already Exist");
                    </script>
                    <?php
    }else {
        if ($password===$cpassword) {
        
    $insert="INSERT INTO `reg` (`name`, `email`, `phone`, `password`, `cpassword`) VALUES ('$username', '$email', '$phone', '$pass', '$cpass')";
     $iquery=mysqli_query($conn,$insert);
     if ($query) {
         ?>
                        <script>
                            alert("Your account create successfully");
                            location.replace("41_login.php");
                        </script>
                        <?php
     }   else {
         ?>
                            <script>
                                alert("Registration Faild");
                            </script>
                            <?php
     }


 }  else {
            ?>
                                <script>
                                    alert("Password Did Not Match");
                                </script>
                                <?php
        }
  

    }
    }

    ?>




                                    <h1 class="text-center my-5"> Create Account</h1>
                                    <h4 class="text-center my-1"> Get Started With Your Free Account</h4>

                                    <div class="container">

                                        <form action="40_signup.php" method="POST">

                                            <div class="form-group">
                                                <label for="FullName">Full Name</label>
                                                <input type="text" class="form-control" minlength="4" maxlength="15" d="fname" name="fname" placeholder="Enter Your Full name" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your email" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Your contact" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" maxlength="15" minlength="8" class="form-control" id="password" name="password" placeholder="type password" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="Confirmpass">Confirmpassword</label>
                                                <input type="password" maxlength="15" minlength="8" class="form-control" id="cpassword" name="cpassword" placeholder="Enter Your Confirm password" required>

                                            </div>

                                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Create Account</button>
                                            <span class="">Already Have an Account <a href="41_login.php">login Here</a></span>


                                        </form>
                                    </div>



                                    <!-- Optional JavaScript; choose one of the two! -->

                                    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

                                    <!-- Option 2: Separate Popper and Bootstrap JS -->
                                    <!--
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
            -->
            </body>

            </html>