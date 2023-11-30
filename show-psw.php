<?php
include __DIR__ . "/partials/header.php";

if (!isset($_SESSION['psw'])) {
    header('Location: index.php');
    session_destroy();
    die();

}
session_destroy();

?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <?php
                if (isset($_SESSION['psw'])) { ?>
                    <div class="alert alert-success">
                        Ecco la tua nuova password:
                        <h3>
                            <?php echo $_SESSION['psw'] ?>
                        </h3>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/partials/footer.php';
?>