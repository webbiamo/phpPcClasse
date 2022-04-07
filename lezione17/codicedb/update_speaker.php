<?php
require 'connessionedb.php';


if ($_SERVER['REQUEST_METHOD']== 'POST'){
    //var_dump($_POST);
    // salvare i dati

    $sql = 'UPDATE speakers SET name=:name, title=:title, company=:company, url=:url, twitter=:twitter
    WHERE id =:id';
    $sth= $db->prepare($sql);

    $data['id']=$_POST['id'];
    $data['name']=$_POST['name'];
    $data['title']=$_POST['title'];
    $data['company']=$_POST['company'];
    $data['url']=$_POST['url'];
    $data['twitter']=$_POST['twitter'];

if (! $sth->execute($data)) {
    throw new Exception(sprintf(
        "Error PDO exec: %s", implode(',', $db->errorInfo())
    ));
}

header('Location:list_speakers.php');
die();


    

}
$id = $_GET['id']; //leggo input utente

//echo 'vuoi modificare id: ' . 'id';
$sql= 'SELECT * FROM  speakers where id=:id';
$sth = $db->prepare($sql);
$data=['id'=>$id];


if (! $sth->execute($data)) {
    throw new Exception(sprintf(
        "Error PDO exec: %s", implode(',', $db->errorInfo())
    ));
}

$speaker = $sth->fetch(PDO::FETCH_OBJ);
//var_dump($speaker);

// <?php echo viene sostituito nel codice seguente con l'abbreviato <?=

?>


<form action='' method='post'>
<input type="hidden" name="id" value="<?= $speaker->id ?>">
name : <input type="text" name="name" value="<?= $speaker->name ?>"><br>    
title : <input type="text" name="title" value="<?= $speaker->title ?>"><br>
company : <input type="text" name="company" value="<?= $speaker->company ?>"><br>
url : <input type="text" name="url" value="<?= $speaker->url ?>"><br>
twitter : <input type="text" name="twitter" value="<?= $speaker->twitter ?>"><br>
<input type="submit">
</form>