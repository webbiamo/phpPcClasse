<?php

$banners =[
    [
        'name'=> 'banner1',
        'url'=>'https://www.ibm.com'
    ],
    [
        'name'=>'banner2',
        'url'=>'https://www.nasa.gov'
    ],
    [
        'name'=>'banner3',
        'url'=> 'https://www.lastampa.it'

    ],
    [
        'name'=> 'banner4',
        'url'=>'https://www.ibm.com'
    ],
    [
        'name'=>'banner5',
        'url'=>'https://www.nasa.gov'
    ],
    [
        'name'=>'banner6',
        'url'=> 'https://www.lastampa.it'

    ]
];

function get_var_banners(){
    global $banners;
    return $banners;


}



function get_banner($items){
    
    //$index = rand(0,count($items)-1);
  //  $index = rand(0,count($_SESSION['valid_ids'])-1 );

    $indexes = $_SESSION['valid_ids'];
    shuffle($indexes);
    $index = $indexes[0];


    // memorizza il fatto che sarà visualizzato il banner numero $index 

    save_banner_views($index);

    $banner = $items[$index];
    
    $html ='<a href="removebanner.php?id=' .$index . '"> rimuovi! </a><br>';
 
    $html .='<a href="gotobannerlink.php?id=' . $index . '">' . $banner['name'] . '</a>';

    return $html;

}

function save_banner_views($index){
    // salvo l'info in un file
    if(!file_exists('count.json')){
        $banners = get_var_banners();

        $count=array_fill(0,count($banners), 0);

    } else{
       $data_string =  file_get_contents('count.json');
       $count= json_decode($data_string,1);
    }

    $count[$index]++;

    $out_string= json_encode($count);

    file_put_contents('count.json', $out_string);
    


}

function save_banner_clicks($index){
    // salvo l'info in un file
    if(!file_exists('count_clicks.json')){
        $banners = get_var_banners();

        $count=array_fill(0,count($banners), 0);

    } else{
       $data_string =  file_get_contents('count_clicks.json');
       $count= json_decode($data_string,1);
    }

    $count[$index]++;

    $out_string= json_encode($count);

    file_put_contents('count_clicks.json', $out_string);
    


}