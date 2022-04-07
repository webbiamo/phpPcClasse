<?php





function width(string ...$words){
    $widths=[];
    foreach($words as $word){
        $widths[]=strlen($word);
    }
    return $widths;
}

$widths=width('hello','ciao','bonjour');

print_r($widths);

//se non avessi l'operatore variadic come potrei fare?