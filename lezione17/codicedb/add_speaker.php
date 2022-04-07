<?php

require 'connessionedb.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
// salva i dati
$sql= 'INSERT INTO speakers (name, title, company, url,twitter) VALUES(:name, :title, :company, :url, :twitter)';
$sth=$db->prepare($sql);

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

header('Location:#');
die();

};

?>

<form action='' method=''>
name : <input type="text" name="name"><br>
title : <input type="text" name="title"><br>
company : <input type="text" name="company"><br>
url : <input type="text" name="url"><br>
twitter : <input type="text" name="twitter"><br>
<input type="submit">
</form>