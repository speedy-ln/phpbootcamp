<?php
function checkoddeven(){
    $num = stream_get_line(STDIN, 1024, PHP_EOL);
    if (!is_numeric($num)){
        echo "'" . $num . "' is not a number\n";
    }
    if (is_numeric($num) && $num % 2 == 0){
        echo "The number " . $num . " is even\n";
    }else if (is_numeric($num) && $num % 2 != 0){
        echo "The number " . $num .  " is odd\n";
    }
}
$count = 0;
while ($count++ < 3){
    echo "Enter a number: ";
    checkoddeven();
}
$count = 0;
while ($count++ < 3){
    echo "enter a number: ";
    checkoddeven();
}
while(true){
    echo "Entrez un nombre: ";
    checkoddeven();
}