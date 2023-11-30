<?php
function print_prova()
{
    var_dump("Pippo");
    ;
}

function char_builder($array)
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $char = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $char_capital = strtoupper($char);
    $sel_char = '';
    foreach ($array as $value) {
        if ($value === 'sym') {
            $sel_char .= $symbols;
        }
        if ($value === 'num') {
            $sel_char .= $numbers;
        }
        if ($value === 'char') {
            $sel_char .= $char . $char_capital;
        }
    }

    return $sel_char;
}





//funzione per generare password
function generate_password()
{
   // var_dump($_GET['types'][0]);
    $all_char= char_builder($_GET['types']);
 if ( strlen($all_char)< (int) $_GET['length']){
    return 'Non è possibile generare una password di soli numeri, che non si ripetano, e che superi la lunghezza di 10 caratteri';
 }
    
    //var_dump($all_char);
    $new_pasw = '';

    $counter = 0;
    while (strlen($new_pasw) < (int) $_GET['length'] && $counter < 100) {
        //ripetizione caratteri
        if ($_GET['repeat']) {
            $new_pasw .= $all_char[rand(0, strlen($all_char) - 1)];
        }
        
        //NON ripetizione caratteri
        if (!$_GET['repeat']) {
            $new_char = $all_char[rand(0, strlen($all_char) - 1)];
            //var_dump($new_char);
            if (!str_contains($new_pasw, $new_char)) {
                $new_pasw .= $new_char;
            }


        }
        $counter++;



    }
    //var_dump($new_pasw);
    $_SESSION['psw'] = $new_pasw;
    //var_dump($_GET);

    header('Location: show-psw.php');
    
}




?>