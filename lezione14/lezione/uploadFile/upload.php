<?php

//echo var_dump($_FILES);


$uploadfile ='iscrizioni/'. $_FILES['fileToUpload']['name'];

if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)){
    echo "il file è stato caricato";
}else{
    echo "c'è stato un errore";
}

?>






