<?php

$articles=['il','lo','la','i','gli','le']

session_start();  //session start crea variabili persistenti
if(!isset($_SESSION['phrase'])){  //
    $_SESSION['phrase']='';
}


?>

<table><tr>
    <td>
        <ul>
            <?php
            foreach($articles)
            <li><a href=frase.php?word=il>il</a></li>
            <li><a href=frase.php?word=lo>lo</a></li>
            <li><a href=frase.php?word=la>la</a></li>
            <li><a href=frase.php?word=i>i</a></li>
            <li><a href=frase.php?word=gli>gli</a></li>
            <li><a href=frase.php?word=le>le</a></li>
        </ul>
    </td>
    <td>
        <ul>
            <li><a href=frase.php?word=cane>cane</a></li>
            <li><a href=frase.php?word=gatto>gatto</a></li>
            <li><a href=frase.php?word=pera>pera</a></li>
            <li><a href=frase.php?word=mela>mela</a></li>
            <li><a href=frase.php?word=arrosto>arrosto</a></li>
            <li><a href=frase.php?word=citta>citta</a></li>
        </ul>
    </td>

    <p>frase composta: 