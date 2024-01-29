<h2><u>Array SHIFT</u></h2>
<?php
$a= array('agra','jammu','bnaras','kolkata');
echo"<h4>Before shifting</h4>";
echo'<pre>';
print_r($a);
echo'</pre>';
echo '<h4>After shifting</h4>';
echo'<pre>';
array_shift($a);
Print_r($a);
echo'</pre>';
?>

<hr>

<?php
$a=array('tanu','jolly','peter');
echo"<h4>Before un_shifting</h4>";
echo'<pre>';
print_r($a);
echo'</pre>'; 
echo '<h4>After un_shifting</h4>';
echo'<pre>'; array_unshift($a,'polly','john').'<br>';
print_r ($a)
;echo'</pre>';
?>