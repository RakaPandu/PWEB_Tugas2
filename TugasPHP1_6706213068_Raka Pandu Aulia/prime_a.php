<?php

$input = 2;
$hitungan = 0;

for ($i = 1; $i <= $input; $i++){
    if ($input % $i == 0 ){
        $hitungan++;
    }
}

if ($hitungan == 2){
    echo "$input is Prime <br>";
}
else {
    echo "$input is not Prime <br>";
}

?>