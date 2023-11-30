<?php
include __DIR__ . "/partials/header.php";

//print_prova();
if (isset($_GET["length"])) {
  $length = (int)$_GET["length"];
  //var_dump($length);

  //funzione per generare password
  function generate_password(){
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $char='abcdefghijklmnopqrstuvwxyz';
    $char_capital= strtoupper($char);
    $all_char=$symbols . $char . $char_capital;
    //var_dump($all_char);
    $new_pasw='';
    while (strlen($new_pasw) < $_GET['length']) {
      # code...
      $new_pasw .= $all_char[rand(0, strlen($all_char)- 1)] ;
    }
    var_dump($new_pasw);
  }
  generate_password();
}

?>

<main>
  <div class="container">

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" class="row justify-content-center">
      <div class="col-9">
        <div class="row justify-content-between">
          <span class="col"> Lunghezza Password:</span>
          <div class="form-floating mb-3 col">
            <input type="number" class="form-control" id="psw-input" name="length">
            <label for="psw-input">Inserisci lunghezza password</label>
          </div>
        </div>
        <div class="row justify-content-between">
          <span class="col"> Consenti ripetizione caratteri:</span>
          <div class="form-check mb-3 col">
            <div class="radio mb-3">
              <input type="radio" id="radio-true" class="form-check-input" name="repeat" value="true">
              <label for="radio-true"> Sì</label><br>
              <input type="radio" id="radio-false" class="form-check-input" name="repeat" value="false" checked>
              <label for="radio-false" > No</label>
            </div>

            <div class="checkbox">
              <input class="form-check-input" type="checkbox" value="char" id="char">
              <label class="form-check-label" for="char"> Lettere </label><br>
              <input class="form-check-input" type="checkbox" value="numbers" id="numbers">
            <label class="form-check-label" for="numbers"> Numbers </label><br>
              <input class="form-check-input" type="checkbox" value="symbols" id="symbols">
              <label class="form-check-label" for="symbols"> Simboli </label>
            </div>




          </div>
        </div>
        <button type="submit" class="btn btn-primary"> Generate </button>
    </form>
  </div>




  </div>
</main>

<?php
include __DIR__ . "/partials/footer.php";
?>