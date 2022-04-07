<?php


class Abbonamento{

    function __construct(){
      
        session_start();
    }


    function display0(){
        $html='<h1>richiedi informazioni';
        $html.='<form action="passo1.php" method="GET">';
       
        $html.='<input type="submit" value="chiedi informazioni">';
        $html.='</form>';
        return $html;
        

}
    function display1(){
            $html='<form action="passo1.php" method="POST">';
            $html.='<label for="nome">nome</label><input id="nome" type="text" name="nome">';
         
            $html.='<label for="nome">cognome</label><input id="cognome" type="text" name="cognome">';
            $html.='<input type="submit" value="avanti">';
            $html.='</form>';
            return $html;
            

    }

    function display2(){
        $html='<form action="passo2.php" method="POST">';
        $html.='<label for="rivista">rivista</label>';
        $html.='<select id="rivista" name="rivista">';
        $html.='<option value="auto storiche">auto storiche</option>';
        $html.='<option value="moto storiche">moto storiche</option>';
        $html.='<option value="camion storici">camion storiche</option>';
        $html.='</select>';
        

     
     
        $html.='<input type="submit" value="avanti">';
        $html.='</form>';
        return $html;
        

}
function display21(){
    $html='<form action="passo2_1.php" method="POST">';
    $html.='<label for="abbonamento">abbonamento</label>';
    $html.='<select id="abbonamento" name="abbonamento">';
    $html.='<option value="trimestrale">trimestrale</option>';
    $html.='<option value="semestrale">semestrale</option>';
    $html.='<option value="annuale">annuale</option>';
    $html.='<option value="biennale">biennale</option>';
    $html.='</select>';
    

 
 
    $html.='<input type="submit" value="avanti">';
    $html.='</form>';
    return $html;
    

}
function display3(){
    $html='<form action="passo3.php" method="POST">';
    $html.='<label for="email">email</label><input id="email" type="text" name="email">';
 
 
    $html.='<input type="submit" value="avanti">';
    $html.='</form>';
    return $html;
    

}
function display4(){
    // devi mostrare il contenuto della 
    $html='<h1>grazie</h1>';
    $html.='<ul>';
    $html.='<li>nome:' . $_SESSION['nome'] . '</li>';
    $html.='<li>cognome:' . $_SESSION['cognome'] . '</li>';
    $html.='<li>rivista:' . $_SESSION['rivista'] . '</li>';
    $html.='<li>email:' . $_SESSION['email'] . '</li>';
    $html.='</ul>';
    
    return $html;
    

}


    function save1(){
        $_SESSION['nome']=$_POST['nome'];
        $_SESSION['cognome']=$_POST['cognome'];
    }

    function save2(){
        $_SESSION['rivista']=$_POST['rivista'];
       
    }

    function save3(){
        $_SESSION['email']=$_POST['email'];
       
    }
}
