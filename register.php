<?php
    require 'db.php';
    $data = $_POST;
    if(isset($data['register'])){
      $user = R::dispense('users');
      $user->name = trim($data['name']);
      $user->email = trim($data['email']};
      $user->form = trim($data['form']);
      $user->address = trim($data['address']);
      $user->password = $data['password'];
      R::store($user);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/register.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>Checkout form</h2>
    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
  </div>

  <div class="row">
    <div class="w-50 text-center py-2 m-auto">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate method='POST'>
        <div class="mb-3">
          <label for="username">ПIБ</label>
          <div class="input-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Прiзвище iм'я по батьковi" required>
            <div class="invalid-feedback" style="width: 100%;">
              
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="email">Email<span class="text-muted"></span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required="" autofocus="">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        <div class="mb-3">
          <label for="address">Клас</label>
          <input type="text" class="form-control" id="form" name="form" placeholder="1, 2, 3, 4" required="" value="<?php  echo @$data['form']; ?>">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
        <div class="mb-3">
          <label for="address2">Мiсце проживання<span class="text-muted"></span></label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Вул.Шевченка 1/2">
        </div>
        <div class="mb-3">
          <label for="address2">Пароль<span class="text-muted"></span></label>
          <input type="password" class="form-control" id="password" name="password" placeholder="********">
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="register">Добавити у базу</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019-2020 Vladanes =)</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>