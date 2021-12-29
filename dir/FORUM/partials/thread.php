<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Forum Website</title>
    <style>
        #ques{
            min-height:443px;
        }
    </style>
</head>

<body>
    <?php

 include 'header.php';
 include 'db.php';
 ?>



<?php
$id=$_GET['threadid'];
$sql="SELECT * FROM `threads` WHERE `thread_id`='$id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){

$title=$row['thread_name'];
$desc=$row['thread_description'];

}


?>

        <div class="container my-4">
            <div class="jumbotron">
                <h1 class="display-4"><?php echo $title;   ?> Forum</h1>
                <p class="lead"><?php  echo $desc;  ?></p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
            </div>

        </div>

        <div class="container" id="ques">
<h1 class="py-2">Brows Question</h1>
<?php
$id=$_GET['threadid'];
$sql="SELECT * FROM `threads` WHERE `thread_id`=$id";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $id=$row['thread_id'];
$title=$row['category_title'];
$desc=$row['thread_description'];


echo '
<div class="media">
    <img src="img/product01.png" width="34px" class="mr-3" alt="...">
    <div class="media-body">
        <h5 class="mt-0"> <a href="thread.php"> '.$title.'</a></h5>
        <p>'.$desc.'</p>
    </div>
</div>
</div>';
}
?>






       
        <!-- Fetch Category -->

        <!-- use a for loop to itrate through category -->




        <?php
        include 'footer.php';
         ?>





            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
            </script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>