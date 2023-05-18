<?php
    require "db.php";
    require "nav.php";
    if(! isset($_SESSION['logged_user'])){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Account</title>
    <link rel="stylesheet" href="css/teachers.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;      overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;      left:0; top:0"></div></div></div>
<!--         <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ПIБ</th>
                    <th scope="col">Предмет</th>
                    <th scope="col">Класний керiвник класу</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Касянчик Петро Федорович</th>
                    <td>Укр.мова/лiтература</td>
                    <td>10</td>
                </tr>
                <tr>
                    <th scope="row">Скарвiнко Анастасiя Романiвна</th>
                    <td>Фiзика/Iнформатика</td>
                    <td>11</td>
                </tr>
                <tr>
                    <th scope="row">Бебко Павло Федорович</th>
                    <td>Фiзкультура</td>
                    <td>---</td>
                </tr>
            </tbody>
        </table> -->

        <section class="our-webcoderskull m-4">
            <div class="container">
                <div class="row">
                    <h2>Нашi Вчителi</h2>
                </div>
                <ul class="row mt-3">
                    <!-- Start list -->
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/m.jpg" class="img-responsive" alt=""></figure>
                            <h5>Директор/Правознавство</h5>
                            <p>Галалюк Iван Iванович</p>
                            <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- End list -->
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/m.jpg" class="img-responsive" alt=""></figure>
                            <h5>Укр. лiтература/ мова</h5>
                            <p>Касянчик Петро Федорович</p>
                            <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/z.jpg" class="img-responsive" alt=""></figure>
                            <h5>Укр. лiтература/ мова</h5>
                            <p>Рогова Ольга Дмитрiвна</p>
                            <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagraminstagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/z.jpg" class="img-responsive" alt=""></figure>
                            <h5>Зарубiжна лiтература </a></h5>
                            <p>Бутакова Ольга Олександрiвна</p>
                            <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/z.jpg" class="img-responsive" alt=""></figure>
                            <h5>Iноземна мова</h5>
                            <p>Судима Тетяна Михалiвна</p>
                            <ul class="follow-us clearfix">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/z.jpg" class="img-responsive" alt=""></figure>
                            <h5>Математика</h5>
                            <p>Ордiна Лариса Володимирiвна</p>
                            <ul class="follow-us clearfix">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Start list -->
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/z.jpg" class="img-responsive" alt=""></figure>
                            <h5>Iнформатика/Фiзика</h5>
                            <p>Скарвiнко Анастасiя Романiвна</p>
                            <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- End list -->
                    <!-- Start list -->
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/m.jpg" class="img-responsive" alt=""></figure>
                            <h5>Iсторiя Всесвiтня/України</h5>
                            <p>Шпак Олександр Федорович</p>
                            <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- End list -->
                    <!-- Start list -->
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/z.jpg" class="img-responsive" alt=""></figure>
                            <h5>Географiя/ Iнформатика</h5>
                            <p>Галалюк Наталя Анатолiвна</p>
                            <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- End list -->
                    <!-- Start list -->
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/m.jpg" class="img-responsive" alt=""></figure>
                            <h5>Бiологiя/Екологiя</h5>
                            <p>Корнелюк Вадим Григорович</p>
                            <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- End list -->
                    <!-- Start list -->
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/z.jpg" class="img-responsive" alt=""></figure>
                            <h5>Хiмiя</h5>
                            <p>Iвашина O.B</p>
                            <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- End list -->
                    <!-- Start list -->
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/m.jpg" class="img-responsive" alt=""></figure>
                            <h5>Фiзчна культура</h5>
                            <p>Бебко Павло Федорович</p>
                            <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- End list -->
                    <!-- Start list -->
                    <li class="col-12 col-md-6 col-lg-3">
                        <div class="cnt-block equal-hight" style="height: 349px;">
                            <figure><img src="img/z.jpg" class="img-responsive" alt=""></figure>
                            <h5>Трудове навчання/Технологiї</h5>
                            <p>Глушко Зiнаїда Анатолiвна</p>
                            <ul class="follow-us clearfix">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- End list -->
                </ul>
            </div>
        </section>
    </main>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>ї
</html>