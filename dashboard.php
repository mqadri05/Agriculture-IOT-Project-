
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Monitoring System</title>
	<style>
		body{
			background-image: url('images/farm.jpg');
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
	<title>Monitoring</title>
	
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Grafik
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="temperature.php"><table><tr><td><div style="width:20px;height:20px;background-color:#e3e3e3;border-radius:30px;"></div></td><td>&nbsp;</td><td>Suhu</td></tr></table></a>
          <a class="dropdown-item" href="Humidity.php"><table><tr><td><div style="width:20px;height:20px;background-color:#e3e3e3;border-radius:30px;"></div></td><td>&nbsp;</td><td>Kelembapan</td></tr></table></a>
		  <a class="dropdown-item" href="ph.php"><table><tr><td><div style="width:20px;height:20px;background-color:#e3e3e3;border-radius:30px;"></div></td><td>&nbsp;</td><td>pH</td></tr></table></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
     <a <button type="button" class="btn btn-primary" style="width:200%;" href="logout.php">Log Out</button></a>

    </form>
  </div>
</nav>
    <div class="container-fluid" style="">

	</div>




   <!-- Clear -->
<div class="row" style="margin:3%;">
  <div class="col-sm-4" style="text-align:center;height:90%;">

    <div class="card" style="height:80%;">
      <div class="card-body">
        <div id="show_temperature" style="margin-bottom:4%;background-color:#FF4F4F;line-height: 150px;height:150px;width:150px;color:#fff;display: inline-block;border-radius:100px;font-family: 'Roboto', sans-serif;font-size:200%;" >
          0&deg; C
        </div>
        <h5 class="card-title">Suhu Tanah</h5>
        <!--<h5 class="card-title" style="color:#00E68A;">Normal</h5>-->
        <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
        <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
      </div>
    </div>
  </div>
  
  <div class="col-sm-4" style="text-align:center;height:90%;">
    <div class="card" style="height:80%;">
      <div class="card-body">
        <div id="show_humidity" style="margin-bottom:4%;background-color:#FF4F4F;line-height: 150px;height:150px;width:150px;color:#fff;display: inline-block;border-radius:100px;font-family: 'Roboto', sans-serif;font-size:200%;" >
          0%
        </div>
        <h5 class="card-title">Kelembapan Tanah</h5>
        <!--<h5 class="card-title" style="color:#00E68A;">Normal</h5>-->
        <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
        <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
      </div>
    </div>
  </div>
  
  <div class="col-sm-4" style="text-align:center;height:90%;">
    <div class="card" style="height:80%;">
      <div class="card-body">
        <div id="show_ph" style="margin-bottom:4%;background-color:#FF4F4F;line-height: 150px;height:150px;width:150px;color:#fff;display: inline-block;border-radius:100px;font-family: 'Roboto', sans-serif;font-size:200%;" >
          0
        </div>
        <h5 class="card-title">pH Tanah</h5>
        <!--<h5 class="card-title" style="color:#00E68A;">Normal</h5>-->
        <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
        <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
      </div>
    </div>
  </div>
    
</div>
<!-- Clear -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function () {
		$('#show_temperature').load('data.php?data=temperature')
        $('#show_humidity').load('data.php?data=humidity')
        $('#show_ph').load('data.php?data=ph')
			}, 1000);
		});
	</script>
</body>
</html>

