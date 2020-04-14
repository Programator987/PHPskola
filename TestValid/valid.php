<?php

$zprava = "Tohle je ten kurva sprostý text a nam jde o to do prdele eliminovat sprosta slova pici";

$pole = array ("kurva", "prdele", "pici");
$error = "Tahle zprava obsahuje nevhodne slovo";

function isValid($string, $pole, $string2)
{
foreach ($pole as $key => $value) {
    strpos($string, $pole, $string2);
    if($value == $pole) {
        echo $error;
    } else {
        return $string2; 
    }
}
    
}

var_dump(isValid($zprava, $pole, $error));