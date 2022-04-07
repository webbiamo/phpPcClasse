<?php
session_start();

print_r(array_fill(0,10,0));
die();

require('banner.php');


//print_r($_SESSION);

if (empty($_SESSION['valid_ids'])){
    $_SESSION['valid_ids']=array_keys($banners);
 
 }





// qui va il banner
echo get_banner($banners);




// contenuto
?>
<p> qui va il contenuto </p>