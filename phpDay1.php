<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <title>PHP</title>
</head>

<body>

<!-- Exercise 1 -->

<!-- <?php
$name = "Babsi";

echo "
<div class='box'>
<h1>Hello my name is ", $name, "</h1>
</div>";
?> -->

<!-- Exercise 2  -->

<!-- <?php

$d=date("D");
if ($d=="Mon" )
echo "Have a nice Monday!";
else
echo "Have a nice day!" ;

?> -->

<!-- Exercise 3 -->

<!-- <?php
$d=date("D");
if ($d=="Mon" )
echo "Today is Monday!";
elseif ($d=="Tue" )
echo "Today is Tuesday!";
elseif ($d=="Wed" )
echo "Today is Wednesday!";
elseif ($d=="Thu" )
echo "Today is Thursday!";
elseif ($d=="Fri" )
echo "Today is Friday!";
elseif ($d=="Sat" )
echo "Today is Saturday!";
else
echo "Today is Sunday!" ;
?> -->

<!-- Exercise 4 -->

<?php
// $name = "Babsi";
// for( $i=1; $i<51; $i++)
// {
//     echo $i. ":".$name ."<br>";
// }

// $i = 1;
// $name = "Babsi";
// while( $i<51)
// {
//     echo $i. ":".$name ."<br>";
//     $i++;
// }

// $i = 0;
// $name = "Babsi";

// do
// {
// $i++;
// echo ($i. ":".$name ."<br>" );
// } while( $i < 50 );
// ?>

<!-- Exercise 5 -->

<!-- <?php

$number = array(8,9,2,5,12,56,6,2,90,2);
sort($number);

foreach ($number as $value){
    echo "Value is $value <br />";
}
?> -->

<!-- Exercise 6 -->

<?php
$cartoons = array(
"MickeyMouse" => array(
    "weight" => 10,
    "height" => 69,
    "age"  => 90
),
"DonaldDuck" =>  array(
    "weight" => 12,
    "height" => 73,
    "age"  => 85
),
"Goofy" =>  array(
    "weight" => 20,
    "height" => 82,
    "age"  => 87
)
);

$keys = array_keys($cartoons);
for($i = 0; $i < count($cartoons); $i++) {
    echo $keys[$i] . "<br>";
    foreach($cartoons[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}



// echo
// "<table class='table'>
//   <thead>
//     <tr>
//       <th scope='col'></th>
//       <th scope='col'>MickeyMouse</th>
//       <th scope='col'>DonaldDuck</th>
//       <th scope='col'>Goofy</th>
//     </tr>
//   </thead>
//   <tbody>
//     <tr>
//       <th scope='row'>weight</th>
//       <td>"$cartoons[ 'MickeyMouse']['weight']."</td>
//       <td>Otto</td>
//       <td>@mdo</td>
//     </tr>
//     <tr>
//       <th scope='row'>height</th>
//       <td>Jacob</td>
//       <td>Thornton</td>
//       <td>@fat</td>
//     </tr>
//     <tr>
//       <th scope='row'>age</th>
//       <td>Larry</td>
//       <td>the Bird</td>
//       <td>@twitter</td>
//     </tr>
//   </tbody>
// </table>"
?>
<!--
// $cartoons = array
//   (
//   array("MickeyMouse",10,69),
//   array("DonaldDuck",12,73),
//   array("Goofy",20,82),
//   );

// for ($row = 0; $row < 3; $row++) {
//   echo "<p><b>Character number". $row ."</b></p>";
//   echo "<ul>";
//   for ($col = 0; $col < 3; $col++) {
//     echo "<li>".$cartoons[$row][$col]."</li>";
//   }
//   echo "</ul>";
// }
// ?>
-->

  <!--JQuery<--->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <!--popper.js--->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <!--bootstrap.js--->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!--JS script.js-->
  <!-- <script src="../js/script.js" charset="utf-8"></script> -->
</body>

</html>