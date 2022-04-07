<?php



function html_combo(string $name, array $items, int $selected=0) :string {
     // <select name="towns" >
    $html ='<select name="' . $name . '">' ;
        // <option value="0" selected> Torino</option>
        foreach($items as $index => $value){
            $html .= '<option value="' . $index . '" ';
            if($index==$selected){
                $html .='selected';
            }
            
            $html .='>' .$value . '</option>';

        }

    // </select >
   $html .= '</select>';

    return $html;

}