<?php

// approccio procedurale 

$link = mysqli_connect('localhost','lezione15','pippo','lezione15');//mysqli sta per mysql improved, libreria 
                                                                    //successiva ad un prima versione più vecchia

echo mysqli_get_host_info($link);//

mysqli_close($link);



//approccio ad oggetti

$mysqli = new mysqli('localhost','lezione15','pippo','lezione15');

echo $mysqli->host_info;

$mysqli->close();







?>