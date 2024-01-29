<!DOCTYPE html>
<html>
<body>

<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump (is_int($x));
?>  
<br>
<?php
$a= 12;
var_dump($a);
?>
<br>
<?php
$x="Pratibha";
var_dump($x);
?>
<br>
<?php
$x=5.6;
var_dump($x);
?>
<br>
<?php
$x=null;
var_dump($x);
?>

</body>
</html>