<!DOCTYPE html>
<html>
<head>
	<title> TIGA MATERI DASAR </title>
	<style type="text/css">
	*{
	margin: 5px;
	padding: 0px;
	font-family: sans-serif;
	}
	body{
	background-color: #6495ED;
	}
	ul{
	float: right;
	list-style: none;
	margin-top: 50px;
	}
	ul li {
	display: inline-block;
	}
	ul li a{
	font-size: 15.5px;
	font-weight: bold;
	text-decoration: none;
	color: #000000;
	padding: 10px 1px;
	border: 2px solid;
	transition: 1.5s;
	margin-top: 10px;
	}
	ul li a:hover{
	background-color: #8B0000;
	color: #FFFF00;
	}
	.logo img{
	float: left;
	width: 125px;
	height: auto;
	}
	.main{
	max-width: 1200px;
	margin: auto;
	}
	.materi{
	font-family: sans-serif;
	color: #000000;
	font-size: 25px;
	padding: 10px 20px;
	text-align: justify;
	}
	.materi h2{
	text-decoration: underline;
	}
</style>
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	$(".sembunyi_poomsae").click(function() {$("#foto_poomsae").hide("slow") });
	$(".tampil_poomsae").click(function() {$("#foto_poomsae").show("slow") });
	$(".sembunyi_kyorugi").click(function() {$("#foto_kyorugi").hide("slow") });
	$(".tampil_kyorugi").click(function() {$("#foto_kyorugi").show("slow") });
	$(".sembunyi_kyukpa").click(function() {$("#foto_kyukpa").hide("slow") });
	$(".tampil_kyukpa").click(function() {$("#foto_kyukpa").show("slow") });
	});
	</script>
</head>
<body>
	<header>
		<div class="main">
			<div class="logo"> <img src="logowtf.png"> </div>
			<div class="menu">
				<ul>
					<li> <a href="home.php"> HOME </a> </li>
					<li> <a href="filosofidansabuk.php"> FILOSOFI DAN TINGKATAN SABUK </a> </li>
					<li> <a href="istilah.php"> ISTILAH </a> </li>
					<li> <a href="hitungan.php"> HITUNGAN </a> </li>
					<li> <a href="3materidasar.php"> TIGA MATERI DASAR </a> </li>
					<li> <a href="teknik.php"> TEKNIK </a> </li>
					<li> <a href="perolehanmedali.php"> PEROLEHAN MEDALI </a> </li>
				<br>
				<br>
				<br>
				</ul> 
			</div>
		</div>
		<div class="materi">
		<center> <h2> Tiga Materi Dasar Taekwondo </h2> </center>
		<br>
		<center> <h3> 1. Poomsae </h3>
		<button class="sembunyi_poomsae"> Sembunyikan </button>
		<button class="tampil_poomsae"> Tampilkan </button>
		<p> <img  id="foto_poomsae" src="poomsae.jpg"> </p> </center>
		Poomsae atau rangkaian jurus merupakan serangkaian teknik gerakan dasar yang berupa serangan dan pertahanan diri, yang dilakukan guna melawan lawan yang imajiner, dengan mengikuti diagram tertentu. Setiap diagram rangkaian gerakan poomsae didasari dengan filosofi timur yang menggambarkan semangat dan cara pandang bangsa Korea.
		<br>
		<br>
		<br>
		<center> <h3> 2. Kyorugi </h3>
		<button class="sembunyi_kyorugi"> Sembunyikan </button>
		<button class="tampil_kyorugi"> Tampilkan </button>
		<p> <img  id="foto_kyorugi" src="kyorugi.jpg"> </p> </center>
		Kyorugi atau pertarungan merupakan latihan yang mengaplikasikan teknik gerakan dasar atau poomsae, yang dimana dua orang yang sedang bertarung saling mempraktekkan teknik serangan tersebut sebagai teknik pertahanan diri.
		<br>
		<br>
		<br>
		<center> <h3> 3. Kyukpa </h3>
		<button class="sembunyi_kyukpa"> Sembunyikan </button>
		<button class="tampil_kyukpa"> Tampilkan </button>
		<p> <img  id="foto_kyukpa" src="kyukpa.jpg"> </p> </center>
		Kyukpa atau teknik pemecahan benda keras merupakan latihan teknik dengan menggunakan sasaran atau obyek benda mati, guna mengukur kemampuan serta ketepatan tekniknya. Obyek sasaran yang biasanya digunakan diantaranya ialah papan kayu, batu bata, genting, dan yang lainnya. Teknik tersebut dilakukan dengan memanfaatkan tendangan, pukulan, sabetan, atau bahkan tusukan jari tangan.
		</div>
	</header>
</body>
</html>