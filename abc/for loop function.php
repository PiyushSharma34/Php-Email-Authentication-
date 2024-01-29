<!DOCTYPE html>
<html>
<body>
<h2>For function </h2>
<?php
for($a=1;$a<=10;$a++)
echo $a."<br>";
?>
<hr>
<br>

<h2>Break function </h2>
<?php
for($a=1;$a<=10;$a++)
{if($a==5){break;}
echo $a."<br>";}
?>
<br>
<hr>
<h2>Continue function </h2>
<?php
for($a=1;$a<=10;$a++)
{if($a==5){continue;}
echo $a."<br>";}
?>

<h2> Print words using function for</h2>
<?php
for($a=1;$a<=10;$a++)
echo $a." = hello"."<br>";
?>

<hr>
</body>
</html>