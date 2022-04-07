<?php

require ('Engim/Corso2021/MyClass.php'); // questa istruzione sovrintende l'incorporo del codice 

require ('Engim/Corso2022/MyClass.php');

$class_2021 = new \Engim\Corso2021\MyClass();

$class_2021->Stampa();

$class_2022 = new \Engim\Corso2022\MyClass(); //in questo modo risolvo la duplicazione del nome 
                                              //impostando un percorso nel valore della stringa 

$class_2022->Stampa();