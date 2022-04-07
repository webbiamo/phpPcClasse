<?php
class Form {

    public  $archive_path='archivio/';

    public function __construct(){
        if (!file_exists($this->archive_path)) {
            mkdir($this->archive_path, 0777, true);
        }
    }
    public function display(){
        $html='<form action="" method="post" enctype="multipart/form-data">';
        $html.='nome<input type="text" name="name" ><br>';
        $html.='<input type="file" name="file" ><br>';
        $html.='<input type="submit"  ><br>';
        $html.='<a href=\"./list.php\">link per list.php</a><br><br>';
        $html.='</form>';
        
        return $html;
    }
    public function save(){
        $name = trim($_POST['name']);
        $file_name = $this->archive_path . $_FILES['file']['name'];
        if (move_uploaded_file($_FILES['file']['tmp_name'],$file_name)){
            return $this->_save($name, $file_name);
        } else {
            return ['status'=>'KO', 'message'=>'unable to save uploaded file'];
        }

    }
    private function _save($name,$file_name){
        $storage= $this->archive_path . uniqid() . '.json';
        $data=[];
        $data['name']=$name;
        $data['file']=$file_name;
        $json_data=json_encode($data);
        if (file_put_contents($storage,$json_data)){
            return  ['status'=>'OK', 'message'=>''];
        } else {
            return  ['status'=>'KO', 'message'=>'unable to save data file'];
        }
    }
    public function list(){
        $html='<ul>';
        $files=glob($this->archive_path .'/*.json');
        foreach($files as $file){
            $data_json= file_get_contents($file);
            $data=json_decode($data_json,1);
            $html.='<li>' . $data['name']. '<a href="'.$data['file'].'" target="blank"> apri</a></li>';
        }
        $html.='<ul>';
        return $html;


    }

    
 

}


//echo "<a href=\"./list.php\">link per list.php</a><br><br>";

