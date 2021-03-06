<?php

function validate(string $username) : bool
{
    $one = (strlen($username) >= 4); //True si longitud es entre 6 y 16
    $tree = substr_count($username,"_") <= 1; //True si contiene 0 o 1 "-"
    $five = preg_match("/_$/", $username); //True solo si el caracter final es "-"

    var_dump($username);
    if(!$five && $tree && $one){
        $nusername = str_replace("_","",$username);
        var_dump($nusername);

        $two = preg_match("/[^0-9a-zA-Z]/",$nusername); //True si solo contiene alfanumericos
        $four = preg_match("/^[a-zA-Z]/", $nusername); //True si empieza con alfa

        var_dump(!$two);
        var_dump($four);
        if(!$two && $four){
            return true;
        }else{
            return false;
        }
        
    }else{
        return false;
    }
}

//echo validate('c3fccdh-sdss') ? 'Valid' : 'Invalid'; #Valid username
echo "\n";
echo validate('3ike_Standish') ? 'Valid' : 'Invalid'; #Invalid username
