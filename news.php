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
    <title>News</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="w-50 text-center py-2 m-auto">
           <h2>Новини</h2>
        </div>
        <div class="m-10" style="color: #36968e">
            30.09.2019
        </div>
        <div class="mt-3">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis nemo nisi officia rerum accusantium, consequuntur asperiores minus voluptas commodi ipsum omnis voluptatum quia consequatur natus neque harum ipsam magni maiores.
            Voluptate exercitationem commodi voluptatem cum dolore tenetur, enim suscipit fuga! Officia rem cupiditate, ad, error, itaque possimus delectus omnis voluptatibus repellendus veritatis architecto. Doloribus error cumque possimus, dolores rem aliquam!
            Ad, unde pariatur maxime sed sunt at doloribus rem aperiam obcaecati nulla esse mollitia quasi distinctio, beatae placeat asperiores totam exercitationem porro tempora labore, delectus quae ipsum? Porro, delectus recusandae!
            Animi at quod obcaecati magni dolores veniam, distinctio fuga asperiores molestias dicta quam tempora maxime numquam perferendis nulla cumque sit quisquam neque. Maxime velit iure officia? Incidunt sequi libero eligendi!
            Asperiores nulla cum tempore dolores ea modi nemo enim aperiam, quaerat reprehenderit obcaecati possimus nobis esse, aliquid minus ipsa vero. Officia, error rem. Nemo commodi doloribus nihil cum? Voluptas, facere!
            Fugit sequi illo cum explicabo recusandae placeat quo doloribus architecto quisquam atque ipsum consequatur at rerum iste debitis commodi odio ut, amet enim, voluptatum quaerat eligendi similique. Dicta, nesciunt culpa!
            Excepturi laboriosam ipsa inventore consequuntur quam ab? Ut quam perferendis, soluta nesciunt aliquam amet unde pariatur vero placeat impedit ducimus cumque temporibus quidem labore voluptatibus hic deserunt qui adipisci est?
            Amet, id? Ut consequuntur at distinctio consectetur quos eum magnam ab rem repellat voluptatibus quidem obcaecati, eaque ipsa minus quis necessitatibus veritatis possimus! Laudantium pariatur blanditiis vitae odit a ullam.
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>