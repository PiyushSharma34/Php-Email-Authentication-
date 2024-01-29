<!DOCTYPE html>
<html>
<body>
<h1>Print Hello using function<hr></h1>
<?php
function a() 
{
  echo "Hello world!";
}

a();
?>
<br>
 <hr>
 <h1>Function Repeating</h1>
 <?php
 function writmsg()
 {
  echo "Hey Well-come to Prayagraj!<br>";
 }
 writmsg();
 writmsg();
 writmsg();
 writmsg();
 writmsg();
 ?>
 <br> <br> <br>
 <hr>
 
<h1>Multiplication using Funtion</h1>
 <?php
 function multiplication($a,$b)
 {
 echo "The multiplication of $a and $b=".$a*$b;
 }
  multiplication(5,4);
 ?>
 <br>
 <hr>
 <h1>String Function</h1>
<?php
function strng($name)
{
echo "Hey, I am <b><i>$name</b>";
}
strng("Pratibha raj<br>");
strng("Tnaishq")
?>
</body>
</html>

