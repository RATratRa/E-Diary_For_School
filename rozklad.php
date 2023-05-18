<?php
    require "db.php";
    require "nav.php";
    $data = $_POST;
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
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;      overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;      left:0; top:0"></div></div></div>
        <form class="mb-4" method="POST">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Клас</label>
                <select class="form-control" id="exampleFormControlSelect1" name="search_form">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php switch($data['search_form']){
            case 1:
                echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Урок</th>
                            <th scope="col">Понедiлок</th>
                            <th scope="col">Вiвторок</th>
                            <th scope="col">Середа</th>
                            <th scope="col">Четвер</th>
                            <th scope="col">Пятниця</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Укр.Мова</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>';
                break;
            case 2:
                echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Урок</th>
                            <th scope="col">Понедiлок</th>
                            <th scope="col">Вiвторок</th>
                            <th scope="col">Середа</th>
                            <th scope="col">Четвер</th>
                            <th scope="col">Пятниця</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Укр.Мова</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>';
                break;
            case 3:
                echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Урок</th>
                            <th scope="col">Понедiлок</th>
                            <th scope="col">Вiвторок</th>
                            <th scope="col">Середа</th>
                            <th scope="col">Четвер</th>
                            <th scope="col">Пятниця</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Укр.Мова</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>';
                break;
            case 4:
                echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Урок</th>
                            <th scope="col">Понедiлок</th>
                            <th scope="col">Вiвторок</th>
                            <th scope="col">Середа</th>
                            <th scope="col">Четвер</th>
                            <th scope="col">Пятниця</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Укр.Мова</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>';
                break;
            case 5:
                echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Урок</th>
                            <th scope="col">Понедiлок</th>
                            <th scope="col">Вiвторок</th>
                            <th scope="col">Середа</th>
                            <th scope="col">Четвер</th>
                            <th scope="col">Пятниця</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Укр.Мова</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>';
                break;
            case 6:
                echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Урок</th>
                            <th scope="col">Понедiлок</th>
                            <th scope="col">Вiвторок</th>
                            <th scope="col">Середа</th>
                            <th scope="col">Четвер</th>
                            <th scope="col">Пятниця</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Укр.Мова</td>
                            <td>Otto</td>
                            <td>q</td>
                            <td>@mdo</td>
                            <td>q22222</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>w</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>';
                break;
            case 7:
                echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Урок</th>
                            <th scope="col">Понедiлок</th>
                            <th scope="col">Вiвторок</th>
                            <th scope="col">Середа</th>
                            <th scope="col">Четвер</th>
                            <th scope="col">Пятниця</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Укр.Мова</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>';
                break;
            case 8:
                echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Урок</th>
                            <th scope="col">Понедiлок</th>
                            <th scope="col">Вiвторок</th>
                            <th scope="col">Середа</th>
                            <th scope="col">Четвер</th>
                            <th scope="col">Пятниця</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Укр.Мова</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>';
                break;
            case 9:
                echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Урок</th>
                            <th scope="col">Понедiлок</th>
                            <th scope="col">Вiвторок</th>
                            <th scope="col">Середа</th>
                            <th scope="col">Четвер</th>
                            <th scope="col">Пятниця</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Укр.Мова</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>';
                break;
            case 10:
                echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Урок</th>
                            <th scope="col">Понедiлок</th>
                            <th scope="col">Вiвторок</th>
                            <th scope="col">Середа</th>
                            <th scope="col">Четвер</th>
                            <th scope="col">Пятниця</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Алгебра</td>
                            <td>Фiзика</td>
                            <td>Англiйська мова</td>
                            <td>Фiзика</td>
                            <td>Польська</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Географiя</td>
                            <td>Геометрiя</td>
                            <td>Українська мова</td>
                            <td>Геометрiя</td>
                            <td>Iсторiя України</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Географiя</td>
                            <td>Англiйська мова</td>
                            <td>Англiйська мова</td>
                            <td>Iнформатика</td>
                            <td>Iнформатика</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Бiологiя</td>
                            <td>Iсторiя України</td>
                            <td>Громадянська освiта</td>
                            <td>Українська мова</td>
                            <td>Англiйська мова</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Польська</td>
                            <td>Зарубiжна лiтература</td>
                            <td>Алгебра</td>
                            <td>Фiзика</td>
                            <td>Технологiї</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Англiйська мова</td>
                            <td>Громадянська освiта</td>
                            <td>Хiмiя</td>
                            <td>Українська лiтература</td>
                            <td>Хiмiя</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Українська лiтература</td>
                            <td>Бiологiя</td>
                            <td>Фiзкультура</td>
                            <td>Всесвiтня iсторiя</td>
                            <td>Захист Вiтчизни</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Фiзкультура</td>
                            <td>Фiзкультура</td>
                            <td></td>
                            <td></td>
                            <td>Захист Вiтчизни</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>';
                break;
            case 11:
                echo '<table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Урок</th>
                            <th scope="col">Понедiлок</th>
                            <th scope="col">Вiвторок</th>
                            <th scope="col">Середа</th>
                            <th scope="col">Четвер</th>
                            <th scope="col">Пятниця</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Укр.Мова</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>Укр.Мова</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Укр.Мова</td>
                            <td>a</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>';
                break;
            
        } ?>
    </main>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>