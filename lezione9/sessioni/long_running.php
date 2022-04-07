<?php

session_start ();
//usa i dati di sessione e li modifica 
$var=$_SESSION();
session_commit();

sleep(20);

echo "ho finito";