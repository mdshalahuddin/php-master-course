<?php

$var = 120;
$filter = var_dump(filter_var($var,FILTER_VALIDATE_INT));

if($filter){
    echo 'is a INT';
}else{
    echo 'not a INT';
}



?>