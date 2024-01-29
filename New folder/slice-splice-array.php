<?php
echo'<H1><u>ORIGINAL VALUES</u></H1>';

$a=array('A','B','C','D','E','F','G');
echo'<pre>';print_r($a);echo'</pre>';
echo'<hr>';
echo'<h2>SLICE ARRAY</h2>';
echo'<pre>';
print_r(array_slice($a,3,4));
echo'</pre>';


echo'<h4>MINUS POSITION
 SLICE ARRAY</h>';
$a=array('A','B','C','D','E','F','G','H','I','J','K','L');
echo'<pre>';
print_r(array_slice($a,-3,2));
echo'</pre>';
?>
<hr>
<h2>SPLICE ARRAY</h2>
<?php
$a=array('A','B','C','D','E','F','G');
echo'<pre>';
print_r(array_splice($a,0,3,4));
echo'</pre>';
?>