<?php
$insert=false;
$update=false;
$delete=false;
$server="localhost";
$username="root";
$password="";
$database="php2";

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("Connection faild".mysqli_error());
}else{
    echo "Connection succefully connected";
}
if(isset($_GET['delete'])){
    $sno=$_GET['delete'];
    $delete=true;
$sql="DELETE FROM `crud` WHERE `sno`=$sno";
$result=mysqli_query($conn,$sql);
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['snoedit'])){
        $sno=$_POST['snoedit'];
        $title=$_POST['editmytitle'];
        $description=$_POST['editmydescription'];
        
        $mysql="UPDATE `crud` SET `title` = '$title', `description` = '$description' WHERE `crud`.`sno` = $sno";
        
        $result=mysqli_query($conn,$mysql);
        
        if($result){
            $update=true;
        }else{
            echo "record Not update";
        }
        
    }else{
$title=$_POST['mytitle'];
$description=$_POST['mydescription'];

$mysql="INSERT INTO `crud` (`title`, `description`) VALUES ('$title', '$description');";

$result=mysqli_query($conn,$mysql);

if($result){
    $insert=true;
}else{
    echo "Record Not Insert";
}
}
}
?>



    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Crud</title>
    </head>

    <body>


        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModal">Edit title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                        <form action="crud.php" method="POST">

                            <div class="form-group">
                                <input type="hidden" name="snoedit" id="snoedit">
                                <h1>Edit Note</h1>
                                <label for="title">Edit Title</label>
                                <input type="text" class="form-control" id="editmytitle" name="editmytitle" aria-describedby="emailHelp" placeholder="title">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">

                                <div class="form-group">
                                    <label for="description">Edit Description</label>
                                    <textarea class="form-control" name="editmydescription" id="editmydescription" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>




        <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: black;">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <?php
if($insert){
    echo"
<div class='container my-5'>

<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>SUCESSFULLY INSERT!</strong> YOUR DATA INSERTED SUCCEFULLY!
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>  
</div>";
}
?>
            <?php
if($update){
     echo"
<div class='container my-5'>

<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>SUCESSFULLY UPDATE!</strong> YOUR DATA UPDATED SUCCEFULLY!
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>  
</div>";
}
?>
            <?php
if($delete){
     echo"
<div class='container my-5'>

<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>SUCESSFULLY Delete!</strong> YOUR DATA deleted SUCCEFULLY!
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>  
</div>";
}
?>


                <div class="container my-5">


                    <form action="crud.php" method="POST">
                        <div class="form-group">
                            <h1>Add Note</h1>
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="mytitle" name="mytitle" aria-describedby="emailHelp" placeholder="title">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="mydescription" id="mydescription" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                    </div>


                    <div class="container my-3">

                        <?php

// $mysql="SELECT * FROM `crud`";
// $result=mysqli_query($conn,$mysql);
// while($row=mysqli_fetch_assoc($result)){
//   echo $row['sno'].".Title ".$row["title"] .".Desc is ". $row['description'];
//   echo "<br>";
// }
?>

                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Sno</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Descripton</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>


                                <?php
 
 $mysql="SELECT * FROM `crud`";
 $result=mysqli_query($conn,$mysql);
 while($row=mysqli_fetch_assoc($result)){

    echo" <tr>
    <th scope='row'>".$row['id']."</th>
    <td>".$row['title']."</td>
    <td>".$row['description']."</td>
    <td> <button  class='delete btn btn-sm btn-danger ' id=d".$row['id'].">Delete</button> <button class='edit btn btn-sm btn-primary' id=".$row['id'].">Edit</button></td>
  </tr>";


 }
 
 
 ?>


                                    <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody> -->
                            </table>



                    </div>



                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

                    <script>
                        edits = document.getElementsByClassName('edit');
                        Array.from(edits).forEach((element) => {
                            element.addEventListener("click", (e) => {
                                console.log("edit ", );
                                tr = e.target.parentNode.parentNode;
                                title = tr.getElementsByTagName("td")[0].innerText;
                                description = tr.getElementsByTagName("td")[1].innerText;
                                console.log(title, description);
                                editmytitle.value = title;
                                editmydescription.value = description;
                                snoedit.value = e.target.id;
                                console.log(e.target.id);
                                $('#editModal').modal('toggle');
                            })
                        })
                        deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("delete",);
        sno=e.target.id.substr(1,);  
       if (confirm("Are You Sure you want to delete!")){
           console.log("yes");
           window.location=`32_crud.php?delete=${sno}`;
       }
       else{
           console.log("no");
       }
      })
    })
                    </script>

    </body>

    </html>