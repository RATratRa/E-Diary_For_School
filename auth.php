<?php

require 'db.php';

$errors = array();
$data = $_POST;
if(isset($data["singin"]))
{
  $user = R::findOne('users', "email = ?", array($data['email']));
  if( $user )
  {
    if( $data['password'] == $user->password ){
      $_SESSION['logged_user'] = $user;
      header('Location: /main.php');
    }else 
    {
      $errors = "Неправильний пароль!";
    }
  }else 
  {
    $errors = "Неправильний логiн!";
  }
  if( ! empty($errors))
  {
    echo '<div class="alert alert-danger alert-dismissible fade show text-center">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Увага! </strong>' . $errors . '</div>';
  }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">
        <a class="btn btn-warning col" href="index.php">Повернутись назад!</a>
    </div>
</body>
</html>