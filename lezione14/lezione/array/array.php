<?php



   $dati = ['Matteo','Franca'];
   $dati = array_map('strtolower', $dati);

   echo $dati;



   

   function lista ($stringa, $item){
       return $stringa . '<li>' . $item . '<li>';
   }


   echo array_reduce($dati, 'lista');



