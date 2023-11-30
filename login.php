<?php 
include __DIR__ . '/partials/header.php';

if (isset($_POST['email'])) {
// $SESSION ['auth_token]= rand(10000,99999) . $email;
}

?>


<form class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</form>


<?php 
include __DIR__ . '/partials/footer.php'
?>