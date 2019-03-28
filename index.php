<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap 3 Responsive Layout Example</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	
	img{
		height: 100px;
		width: 150px;
	}

    .lebar{
        width: 300px;
        height:150px;
    }
</style>

</head>
<body>
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">My Project</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php" target="_blank">Tugas1</a></li>
                <li><a href="#" target="_blank">Tugas2</a></li>
                <li><a href="#" target="_blank">Tugas3</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="jumbotron">
        <h2>My Bio</h2>
        <table><tr><td>Name</td><td> : </td><td>Achmad Syarif Abdullah</td></tr><tr><td>Address</td><td> : </td><td>Gesikan 3 Wijirejo Pandak Bantul Yogyakarta</td></tr><tr><td>Phone Number</td><td> : </td><td>089736437382</td></tr></table>
    </div>
    <div class="jumbotron">
        <h2>My Study Bio</h2>
        <table>
					<tr><td>Sekolah Dasar </td><td>:</td><td>SD Negeri 2 Wijirejo</td></tr>
					<tr><td>Sekolah Menengah Pertama</td><td>:</td><td>SMP Negeri 1 Pandak</td></tr>
					<tr><td>Sekolah Menengah Atas</td><td>:</td><td>SMK Negeri 2 Yogyakarta</td></tr>
					<tr><td>Kuliah </td><td>:</td><td>STMIK AKAKOM</td></tr>
		</table>
    </div>
    <h2>My Skill</h2>
    <div class="row jumbotron">
        <div class="col-sm-6 col-md-4 col-lg-2 lebar">
            <h4>Web : UI/UX Designer</h4>
            <img src="images/uiUx.png">
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 lebar">
            <h4>Web : Back-End Progammer</h4>
            <img src="images/backEnd.png">
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 lebar">
            <h4>Mobile : UI/UX Designer</h4>
            <img src="images/uiUx.png">
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 lebar">
            <h4>Mobile : Back-End Progammer</h4>
            <img src="images/backEnd.png">
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 lebar">
            <h4>Desktop : Front-End Programmer</h4>
            <img src="images/frontEnd.png">
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 lebar">
            <h4>Desktop : Back-End Progammer</h4>
            <img src="images/backEnd.png">
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 lebar">
            <h4>Network Administrator</h4>
            <img src="images/admin.jpg">
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 lebar">
            <h4>Wireless Network</h4>
            <img src="images/wireless.png">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <footer>
                <p>&copy; Copyright 2019 A_</p>
            </footer>
        </div>
    </div>
</div>
</body>
</html>                            