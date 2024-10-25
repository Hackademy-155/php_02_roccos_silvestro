<?php


$firstRule = false;
$secondoRule = false;
$thirdRule = false;
$fourthRule = false;
  


$password = readline('inserisci password:');

// echo "la password è $password";

// var_dump(strlen($password));


// PRIMA REGOLA
if(strlen($password) >= 8){
    $firstRule = true;
}


// SECONDA REGOLA
for($i = 0; $i < strlen($password); $i++){
    if(is_numeric($password[$i])){
        $secondoRule = true;
        break;
    }
} 


// TERZA REGOLA
for($i = 0; $i < strlen($password); $i++){
    if(ctype_upper($password[$i])){
        $thirdRule = true;
        break;
    }
}


// QUARTA REGOLA
$specialChars = ['!', '"', '|', '?', '@', '£', '$', '%', '()', '#', '°'];
for($i = 0; $i < strlen($password); $i++){
   if(in_array($password[$i], $specialChars)){
       $fourthRule = true;
       break;
   }
}



if($firstRule && $secondoRule && $thirdRule && $firstRule){
    echo "La password è valida";
}else{
    echo "La password non è valida";
}