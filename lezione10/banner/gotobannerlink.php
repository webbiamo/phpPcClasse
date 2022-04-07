<?php

require('banner.php');

// riceve l'id del banner cliccato dall'utente
// memorizza il click su quel banner
// redirige il browser al link specifico

$index=$_GET['id'];

// salva il click 
save_banner_clicks($index);


//redirigi il browser: 
header('Location: '.$banners[$index]['url'] );





