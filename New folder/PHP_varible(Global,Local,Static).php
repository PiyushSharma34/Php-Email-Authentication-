<?php

echo"<h2><u>LOCAL VARIABLE</u></h2>";
function myTest() {
  $x = 5; // local scope
 //lobal $x;
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>


<?php
function testing(){
$x=10;
$y=5;
$z=($x+$y);
echo"EX----The no is : $z";
}
testing();
?>
<hr>
<h2><u>GLOBAL VARIABLE</u></h2>





<?php

//$x = 5; 
//function myTest() {
// global $x; 
// echo  $x;
//} 
//myTest();

//echo  $x;
?>




