<?php


$mysqli = new mysqli('localhost','lezione15','pippo','lezione15');//connessione

echo $mysqli->host_info;
echo "<pre>";

$result = $mysqli->query('SELECT * from users limit 10');// formattazione  ed esecuzione della query

print_r($result);


$row = $result->fetch_array(MYSQLI_ASSOC);//qui formattiamo il record ricevuto come array

print_r($result);

// while($row = $result->fetch_array(MYSQLI_ASSOC)){
//     print_r($row);


// }



while($row = $result->fetch_assoc()){
    echo '<li>'. $row['firstname'] . ' ' . $row['lastname'] . ' ' . $row['email'] . '</li>';



}



