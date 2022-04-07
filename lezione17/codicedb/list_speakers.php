<?php
/**
 * Codice sorgente riportato nel libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2017, ISBN 978-88-481-3120-9
 * @see http://www.sviluppareinphp7.it
 */

require 'connessionedb.php';

//$sql = 'SELECT * FROM speakers WHERE company=:company';
$sql = 'SELECT * FROM speakers';// per vedere tutti gli speakers
$sth = $db->prepare($sql);
$data = [ ':company' => 'Zend Technologies' ];
if (! $sth->execute($data)) {
    throw new Exception(sprintf(
        "Error PDO exec: %s", implode(',', $db->errorInfo())
    ));
}
echo "<table border=1>";
while ($row = $sth->fetch(PDO::FETCH_OBJ)) {
    echo '<tr>';
    echo '<td>'.  $row->title   . " " . $row->name  .   '</td>';   //in nomi dei campi della tabella sono i nomi dell'oggetto
    echo '<td>'  . $row->company  . '</td>' ;
    echo '<td> <a href="update_speaker.php?id='.   $row->id .'">aggiorna </a></td>'  ;
    echo '<td> <a href="delete_by_id.php?id='.   $row->id .'">cancella </a></td>'  ;
    echo '</tr>';
    //var_dump($row);//vardump viene visualizzato prima del codice html della tabella nella 
                   //pagina web perchè non lo abbiamo inserito nella tabella stessa per es provare a visualizzare
                   //codice sorgente pagina.
}
echo "</table>";
