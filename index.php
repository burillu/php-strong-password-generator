<?php
include __DIR__ . "/partials/header.php";

//print_prova();
if (isset($_GET["length"]) && isset($_GET['types'])) {
  $length = (int) $_GET["length"];
  //var_dump($length);




  //char_builder($_GET['types']);
  $result = generate_password();
  //var_dump($result);


}

?>

<main>
  <div class="container">

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" class="row justify-content-center mb-4">
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
              <input type="radio" id="radio-false" class="form-check-input" name="repeat" value="0" checked>
              <label for="radio-false"> No</label>
            </div>

            <div class="checkbox">
              <input class="form-check-input" name="types[]" value="char" type="checkbox" id="char">
              <label class="form-check-label" for="char"> Lettere </label><br>
              <input class="form-check-input" name="types[]" value="num" type="checkbox" id="numbers">
              <label class="form-check-label" for="numbers"> Numbers </label><br>
              <input class="form-check-input" name="types[]" value="sym" type="checkbox" id="symbols">
              <label class="form-check-label" for="symbols"> Simboli </label>
            </div>




          </div>
        </div>
        <button type="submit" class="btn btn-primary"> Generate </button>
    </form>
    <?php if (isset($_GET['types']) && $result) {

      echo " <div class='alert alert-danger'>$result </div> ";
    } ?>

  </div>




  </div>
</main>

<?php
include __DIR__ . "/partials/footer.php";
// Milestone 4 Completed
?>
