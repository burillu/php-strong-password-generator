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
    //var_dump($sel_char);





    // if (isset($_GET['type'])) {
    //     $array_types = $_GET['type'];
    //     var_dump($array_types);
    //     if ($array_types['sym']) {
    //         $sel_char .= $symbols;
    //     }
    //     if ($array_types['num']) {
    //         $sel_char .= $numbers;
    //     }
    //     if ($array_types['char']) {
    //         $sel_char .= $char . $char_capital;
    //     }
    //     var_dump($sel_char);

    // }

    return $sel_char;
}





//funzione per generare password
function generate_password()
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $char = 'abcdefghijklmnopqrstuvwxyz';
    $char_capital = strtoupper($char);
    $all_char = $symbols . $char . $char_capital;
    //var_dump($all_char);
    $new_pasw = '';
    while (strlen($new_pasw) < $_GET['length']) {
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



    }
    var_dump($new_pasw);
    $_SESSION['psw'] = $new_pasw;
    var_dump($_GET);

    //header('Location: show-psw.php');
    return $new_pasw;
}




?>