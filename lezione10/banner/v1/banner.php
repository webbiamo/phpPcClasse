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


function get_banner($items){
    
    $index = rand(0,count($items)-1);
    // memorizza il fatto che sarà visualizzato il banner numero $index 

    save_banner_views($index);

    $banner = $items[$index];

    $html= '<a href="' . $banner['url'] . '">' . $banner['name'] . '</a>';

    return $html;

}

function save_banner_views($index){
    // salvo l'info in un file
    if(!file_exists('count.json')){
        $count=[0,0,0,0,0,0];

    } else{
       $data_string =  file_get_contents('count.json');
       $count= json_decode($data_string,1);
    }

    $count[$index]++;

    $out_string= json_encode($count);

    file_put_contents('count.json', $out_string);
    


}