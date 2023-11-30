<?php
function print_prova()
{
    var_dump("Pippo");
    ;
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
    //var_dump($_GET);

    //header('Location: show-psw.php');
    return $new_pasw;
}


?>