<?php

// echo "THIS IS PHP FILTER VALIDATION FUNCTION";

// syntax--(var,fildername);

// FILTER_VALIDATE_INT
// FILTER_VALIDATE_FLOAT
// FILTER_VALIDATE_BOOLEAN
// FILTER_VALIDATE_EMAIL
// FILTER_VALIDATE_URL







$var =475;
var_dump(filter_var($var,FILTER_VALIDATE_INT));

if (filter_var($var,FILTER_VALIDATE_INT)) {
echo "<BR><br>$var is int";
} else {
 echo "<br><br>$var is not int";
}
echo "<hr>";











?>