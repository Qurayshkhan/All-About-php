    <?php

    $server="localhost";
    $username="root";
    $password="";
    $dbname="php2";
    $conn=mysqli_connect($server,$username,$password,$dbname);
    if ($conn) {
        echo "Connection succefully <br>";
    }else {
        echo "Connection faild";
    }

    $sql="SELECT * FROM `contact` WHERE `name`='Hassan1'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    echo "$count <br>";
    $no=1;
    if ($count > 0) {
        while ($row=mysqli_fetch_assoc($result)) {
            // echo var_dump($row);
        echo $no." Hi ". $row['name']. " And Your Email is  ".$row['email'];  
        echo "<br>";
    $no=$no+1;
        }
    }
    $sql="UPDATE `contact` SET `name` = 'Hassan khan i am' WHERE `contact`.`id` = 5";
    // if we want to know after update how many rows affcted then we will use
    $eff=mysqli_affected_rows($conn);
    echo "The affected row is $eff";
    $result=mysqli_query($conn,$sql);
  if ($result) {
      echo "We Update the Record successfully";
  }else {
      echo "we could not update successfully";
  }


    ?>