<?php

echo "MultiDimentional Arrys<br>";
// array into Array is called MultiDimentional array
$multiDim=array(
                    array(2,5,7,8),
                    array(1,2,3,1),
                    array(4,5,0,1)
                );
                // Two Diamentiol Array
// echo var_dump($multiDim);
echo $multiDim[0][0];
echo $multiDim[0][1];
echo $multiDim[0][2];
echo $multiDim[0][3];
echo "<br>";
echo $multiDim[1][0];
echo $multiDim[1][1];
echo $multiDim[1][2];
echo $multiDim[1][3];
echo "<br>";
echo $multiDim[2][0];
echo $multiDim[2][1];
echo $multiDim[2][2];
echo $multiDim[2][3];
echo "<br>";
// for ($i=0 ; $i < count($multiDim)  ; $i++ ) { 

//  echo var_dump($multiDim[$i]);
//  echo "<br>";
// }
for ($i=0 ; $i < count($multiDim)  ; $i++ ) { 
    
    // echo var_dump($multiDim[$i]);
    for ($j=0; $j < count($multiDim[$i]) ; $j++) { 
     echo $multiDim[$i][$j];
    }
    echo "<br>";
   }

// $thredim=array(
// array(
//       array(
//             array(2,5,7,8),
//          array(1,2,3,1),
//          array(4,5,0,1)
//       )
//       )

// );

// for ($i=0; $i < count($thredim); $i++) { 
// //    echo var_dump($thredim[$i]);
// for ($j=0; $j <count($thredim[$i]) ; $j++) { 

//    for ($k=0; $k <count($thredim[$j]) ; $k++)
//     { 
//        echo $thredim[$i][$j][$k];
//    }
//    echo "<br>";
// }
// }

?>