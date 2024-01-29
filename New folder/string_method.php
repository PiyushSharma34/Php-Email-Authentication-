<?php
$x= "wellcome to Prayagraj.hello everyone.";
echo strstr ($x,"Prayagraj")."<br>";
echo strstr ($x,"Prayagraj",true)."<br>";
echo strstr ($x,"Prayagraj",false);
?>
<hr>
<?php
$x= "wellcome to Prayagraj.hello everyone.";
echo strchr ($x,"y")."<br>";
echo strchr ($x,"o",true)."<br>";
echo strchr ($x,"raj",false);
?>
<hr>
<?php
$x= "wellcome";
echo strpos ($x,"o",true)."<br>";
echo strpos ($x,"w",false);
?>
<hr>
<?php
$x= "wellcome";
echo strrpos ($x,"o")."<br>";
echo strrpos ($x,"w");
?>
<hr>