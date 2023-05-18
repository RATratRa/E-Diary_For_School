<?php
    require "db.php";
/*     require "nav.php"; */
/*     $name_db; */
    $name = $_SESSION['logged_user']->name;
    if(! isset($_SESSION['logged_user'])){
        header('Location: index.php');
    }

    $ocinka = R::getCol( 'SELECT ocinka FROM ' . $name_db );
    $date = R::getCol( 'SELECT date FROM ' . $name_db );
    $lesson = R::getCol( 'SELECT lesson FROM ' . $name_db );
    /* echo $date . '<br>'; */


    /* var_dump($date); */
    
    for($i = 0; $i < 5; $i++){
        echo '<div class="col-md-3">
        <div class="card border-info mx-sm-1 p-3 mb-4">
            <div class="card border-info shadow text-info p-3 my-card" ><span aria-hidden="true">'. $date[$i] .'</span></div>
            <div class="text-info text-center mt-3"><h4>'. $lesson[$i] .'</h4></div>
            <div class="text-info text-center mt-2"><h1>'. $ocinka[$i] .'</h1></div>
        </div>'; 
    }
    $count_ocinok = count($ocinka);
    echo $count_ocinok;
    
    
?>
