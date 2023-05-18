<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body> 
    <nav class="navbar bg-dark navbar-dark fixed-top p-0 shadow flex-md-nowrap">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/main.php">School-of-Rokyni</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
            <a class="text-white"><?php  echo $_SESSION['logged_user']->name;  ?></a>
            <a href="logout.php" class="btn btn-dark">Sign out</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar ">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link " href="main.php">
                            Головна
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-justified" href="balls.php">
                            Табель(demo)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="teachers.php">
                            Вчителi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "  href="rozklad.php">
                            Розклад
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"   href="news.php">
                            Оголошення
                            </a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link"  href="about.php">
                            Про школу
                            </a>
                        </li>
                        <!-- <li class="nav-item" >
                            <a class="nav-link" style="color: red;" href="bad_news.php">
                            Зауваження
                            </a>
                        </li> -->
                    </ul>
                </div>
            </nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>