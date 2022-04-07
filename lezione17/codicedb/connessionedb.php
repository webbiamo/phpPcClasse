<?php



try {
	$db = new PDO('mysql:host=localhost;dbname=lezione17;charset=utf8mb4', 'lezione17', 'lezione17');//qui abbiamo inserito i campi di autenticazione
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);//valorizza l'errore tramite stringa																			  			//al database. Anche l'ip dell'host lo abbiamo sosittuito 
																							//con localhost  

} catch (PDOException $e) {
	throw new Exception(sprintf(
		"PDO connection failed: %s\n", $e->getMessage()
	));
}
//var_dump($db);


