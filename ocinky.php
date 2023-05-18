<?php
	require 'db.php';
	date_default_timezone_set('Etc/GMT+3');
	$data = $_POST;
	$id;
    if(isset($data['sbttn_ok'])){
				/* 1 */
		$user = R::dispense('holovchenko');
		$user->ocinka = $data['Holovchenko'];
		$user->date = date('l jS F');
		$user->lesson = $data['lesson'];
		R::store($user);
				/* 2 */
		$user = R::dispense('hanich');
		$user->ocinka = $data['Hanich'];
		$user->lesson = $data['lesson'];
		$user->date = date('l jS F');
		R::store($user);
				/* 3 */
		$user = R::dispense('haponiuk');
		$user->ocinka = $data['Haponiuk'];
		$user->lesson = $data['lesson'];
		$user->date = date('l jS F');
		R::store($user);
				/* 4 */
		$user = R::dispense('haponiukn');
		$user->ocinka = $data['Haponiou_N'];
		$user->lesson = $data['lesson'];
		$user->date = date('l jS F');
		R::store($user);
				/* 5 */
		$user = R::dispense('kachmaryk');
		$user->ocinka = $data['Kachmaryk'];
		$user->lesson = $data['lesson'];
		$user->date = date('l jS F');
		R::store($user);
				/* 6 */
		$user = R::dispense('korets');
		$user->ocinka = $data['Korets'];
		$user->lesson = $data['lesson'];
		$user->date = date('l jS F');
		R::store($user);
				/* 7 */
		$user = R::dispense('bondaruk');
		$user->ocinka = $data['Bondaruk'];
		$user->lesson = $data['lesson'];
		$user->date = date('l jS F');
		R::store($user);
				/* 8 */
		$user = R::dispense('buschuk');
		$user->ocinka = $data['Buschuk'];
		$user->lesson = $data['lesson'];
		$user->date = date('l jS F');
		R::store($user);
				/* 9 */
		$user = R::dispense('tarasiuk');
		$user->ocinka = $data['Tarasiuk'];
		$user->lesson = $data['lesson'];
		$user->date = date('l jS F');
		R::store($user);
	}

	switch($data['change_form']){
		case 1:
			$id = 1;
			break;
		case 2:
			$id = 2;
			break;
		case 3:
			$id = 3;
			break;
		case 4:
			$id = 4;
			break;
		case 5:
			$id = 5;
			break;
		case 6:
			$id = 6;
			break;
		case 7:
			$id = 7;
			break;
		case 8:
			$id = 8;
			break;
		case 9:
			$id = 9;
			break;
		case 10:
			$id = 10;
			break;
		case 11:
			$id = 11;
			break;
	}
	function _form($id){
		switch($id){
			case 1:
				echo '
						<tr>
						<td>
					<figure class="media">
						<div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div>
						<figcaption class="media-body">
							<h6 class="title text-truncate">Клас 1</h6>
							<dl class="param param-inline small" name="Buschuk">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>';
				break;
			case 2:
				echo '
						<tr>
						<td>
					<figure class="media">
						<div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div>
						<figcaption class="media-body">
							<h6 class="title text-truncate">Клас 2</h6>
							<dl class="param param-inline small" name="Buschuk">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>';
				break;
			case 3:
				echo '
						<tr>
						<td>
					<figure class="media">
						<div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div>
						<figcaption class="media-body">
							<h6 class="title text-truncate">Клас 3</h6>
							<dl class="param param-inline small" name="Buschuk">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>';
				break;
			case 4:
				echo '
						<tr>
						<td>
					<figure class="media">
						<div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div>
						<figcaption class="media-body">
							<h6 class="title text-truncate">Клас 4</h6>
							<dl class="param param-inline small" name="Buschuk">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>';
				break;
			case 5:
				echo '
						<tr>
						<td>
					<figure class="media">
						<div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div>
						<figcaption class="media-body">
							<h6 class="title text-truncate">Клас 5</h6>
							<dl class="param param-inline small" name="Buschuk">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>';
				break;
			case 6:
				echo '
						<tr>
						<td>
					<figure class="media">
						<div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div>
						<figcaption class="media-body">
							<h6 class="title text-truncate">Клас 6</h6>
							<dl class="param param-inline small" name="Buschuk">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>';
				break;
			case 7:
				echo '
						<tr>
						<td>
					<figure class="media">
						<div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div>
						<figcaption class="media-body">
							<h6 class="title text-truncate">Клас 7</h6>
							<dl class="param param-inline small" name="Buschuk">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>';
				break;
			case 8:
				echo '
						<tr>
						<td>
					<figure class="media">
						<div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div>
						<figcaption class="media-body">
							<h6 class="title text-truncate">Клас 8</h6>
							<dl class="param param-inline small" name="Buschuk">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>';
				break;
			case 9:
				echo '
						<tr>
						<td>
					<figure class="media">
						<div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div>
						<figcaption class="media-body">
							<h6 class="title text-truncate">Клас 9</h6>
							<dl class="param param-inline small" name="Buschuk">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>';
				break;
			
			case 10:
				echo '
						<tr>
						<td>
					<figure class="media">
						<div class="img-wrap"></div>
						<figcaption class="media-body">
							<h6 class="title text-truncate">Головченко Владислав</h6>
							
							<dl class="param param-inline small">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control" name="Holovchenko">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>
					<tr>
						<td>
					<figure class="
						<figcaption class="media-body">
							<h6 class="title text-truncate">Качмарик Богдан</h6>
							<dl class="param param-inline small">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control" name="Kachmaryk">
								<option></option>
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
								<option>12</option>
							</select> 
						</td>
					</tr>
					<tr>
						<td>
					<figure class="media">
						<figcaption class="media-body">
							<h6 class="title text-truncate">Корець Дарина</h6>
							<dl class="param param-inline small">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control" name="Korets">
								<option></option>
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
								<option>12</option>				
							</select> 
						</td>
						<tr>
						<td>
					<figure class="media">
						<figcaption class="media-body">
							<h6 class="title text-truncate">Ганiч Богдан</h6>
							<dl class="param param-inline small">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control" name="Hanich">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>
					<!-- start figure -->
					<tr>
						<td>
					<figure class="media">
						<figcaption class="media-body">
							<h6 class="title text-truncate">Гапонюк Олександр</h6>
							<dl class="param param-inline small">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control" name="Haponiuk">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>
					<!-- end figure -->
				
						<!-- start figure -->
						<tr>
						<td>
					<figure class="media">
						<figcaption class="media-body">
							<h6 class="title text-truncate">Бондарук Дмитро</h6>
							<dl class="param param-inline small">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control" name="Bondaruk">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>
					<!-- end figure -->
				
						<!-- start figure -->
						<tr>
						<td>
					<figure class="media">
						<figcaption class="media-body">
							<h6 class="title text-truncate">Тарасюк Ансатаciя</h6>
							<dl class="param param-inline small">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control" name="Tarasiuk">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>
					<!-- end figure -->
				
						<!-- start figure -->
						<tr>
						<td>
					<figure class="media">
						<figcaption class="media-body">
							<h6 class="title text-truncate">Гапонюк Ансатаciя</h6>
							<dl class="param param-inline small">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control" name="Haponiou_N">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>
					<!-- end figure -->
				
						<!-- start figure -->
						<tr>
						<td>
					<figure class="media">
						<figcaption class="media-body">
							<h6 class="title text-truncate">Бущук Ансатаciя</h6>
							<dl class="param param-inline small" name="Buschuk">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>';
				break;
			case 11:
				echo '
						<tr>
						<td>
					<figure class="media">
						<div class="img-wrap"><img src="http://bootstrap-ecommerce.com/main/images/items/2.jpg" class="img-thumbnail img-sm"></div>
						<figcaption class="media-body">
							<h6 class="title text-truncate">Клас 11</h6>
							<dl class="param param-inline small" name="Buschuk">
							<dt>Клас: </dt>
							<dd>10</dd>
							</dl>
						</figcaption>
					</figure> 
						</td>
						<td> 
							<select class="form-control">
								<option></option>
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
								<option>12</option>			
							</select> 
						</td>
					</tr>';
				break;


		}
	}
	
/* 	date('l jS F');
	echo var_dump($data); */
	
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
    <link href="css/ocinky.css" rel="stylesheet">
</head>


<form action="" method="POST">
	<div class="card"> 
		<select class="form-control col-sm-2" name = 'change_form'>
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
		<button type="submit" class="col-sm-2 btn btn-success" name="bttn_ok">Вибрати</button>
		<select class="form-control mt-5" name="lesson">
			<option>Укр.Мова</option>
			<option>Англ.Мова</option>	
			<option>Фiзика</option>	
			<option>Фiзкультура</option>
			<option>5</option>	
			<option>6</option>	
			<option>7</option>	
			<option>8</option>
			<option>9</option>	
			<option>10</option>	
			<option>11</option>	
			<option>12</option>			
		</select>
		<table class="table table-hover shopping-cart-wrap ">
		<thead class="text-muted">
		<tr>
		<th scope="col">Учень</th>
		<th scope="col" width="120">Оцiнка</th>
		</tr>
		</thead>
		<tbody>
		<?php _form($id) ?>
		<!-- end figure -->
		</tbody>
		</table>
		<button type="submit" class="btn btn-success" name="sbttn_ok">Вiдправити</button>
	</div> <!-- card.// -->
	
	</form>
</div> 
<!--container end.//-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
</body>
</html>