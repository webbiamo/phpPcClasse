<?php


session_start();
    $_SESSION['informazioni']='dati per la pagina 2';
    $_SESSION = ['informazioni'=>'dati per la pagina2'];

    echo 'ho salvato dei dati in sessione';

    