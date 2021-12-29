<?php
include 'db.php';
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">Forum</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="signup.php">Signup</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Category
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
      $sql="SELECT category_name,category_id FROM `categories`";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result)){
     echo   ' <a class="dropdown-item" href="threadlist.php?catid='.$row['category_id'].'">'.$row['category_name'].'</a>';
     

      }
  echo'  </div>
   </li>
    <li class="nav-item">
      <a class="nav-link " href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
    </li>
  </ul>
 
  <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
    <div class=" row mx-2">
       <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>

  </form>
 

</div>
</div>
</nav>';



?>