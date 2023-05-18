<?php
                /* start check */
    require "db.php";
    require "nav.php";
    $data = $_POST;
    if(! isset($_SESSION['logged_user'])){
        header('Location: index.php');
    }
                /* end check */
    
                /* start ocinky */
    $count_ocinok = count($ocinka);
    /* $count_ocinok++; */
    $ocinka = R::getCol( 'SELECT ocinka FROM ' . $name_db );
    $date = R::getCol( 'SELECT date FROM ' . $name_db );
    $lesson = R::getCol( 'SELECT lesson FROM ' . $name_db );
                /* end ocinky */
    
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
    <!--    Main Sheet    -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <div class="m-4">
                <h2 class="">Оцiнки напротязi року</h2>               
            </div>             
                <div class="row w-100">
                    <?php for($i = 0; $i < count($ocinka); $i++){
                        echo '  
                                    <div class="col-md-3">
                                        <div class="card border-info mx-sm-1 p-3 mb-4">
                                            <div class="card border-info shadow text-info p-3 my-card" ><span aria-hidden="true">'. $date[$i] .'</span></div>
                                            <div class="text-info text-center mt-3"><h4>'. $lesson[$i] .'</h4></div>
                                            <div class="text-info text-center mt-2"><h1>'. $ocinka[$i] .'</h1></div>
                                        </div>
                                    </div>
                                        
                                '; 
                    } ?>
                </div>
                    
                    <!-- <div class="col-md-3">
                        <div class="card border-info mx-sm-1 p-3">
                            <div class="card border-info shadow text-info p-3 my-card" ><span aria-hidden="true">5.08.2018</span></div>
                            <div class="text-info text-center mt-3"><h4></h4></div>
                            <div class="text-info text-center mt-2"><h1></h1></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </main>
               
    <!--    Scripts    -->    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>