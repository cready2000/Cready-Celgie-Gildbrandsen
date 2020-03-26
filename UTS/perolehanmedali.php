<!DOCTYPE html>
<html>
<head>
	<title> PEROLEHAN MEDALI </title>
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
	.main h2{
		text-decoration: underline;
	}
	.peringkat{
		color: #FFD700;
		background-color: #000000;
		font-family: sans-serif;
		font-size: 20px;
		border-collapse: collapse;
	}
	</style>
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
<center>
<?php
echo "<h2> Data Perolehan Medali Kejuaraan Taekwondo Sepanjang Masa </h2>";
echo "<b> Update Terakhir : </b>";
date_default_timezone_set('Asia/Jakarta');
echo date("<b> d-F-Y (g:i:s a) </b>");
?>
<br>
<br>
	<center>
		<table class="peringkat" border="1" width="600">
			<tr>
				<td> <b> NO </b> </td>
				<td align="center"> <b> NEGARA </b> </td>
				<td> <b> EMAS </b> </td>
				<td> <b> PERAK </b> </td>
				<td> <b> PERUNGGU </b> </td>
				<td> <b> JUMLAH </b></td> </center>
			</tr>
			<?php
			include ("koneksi.php");
			$sql="SELECT * FROM taekwondo";
			$result=mysqli_query($conn, $sql);
			while($jumlah=mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>".$jumlah['id_taekwondo']."</td>";
			echo "<td>".$jumlah['negara']."</td>";
			echo "<td>".$jumlah['emas']."</td>";
			echo "<td>".$jumlah['perak']."</td>";
			echo "<td>".$jumlah['perunggu']."</td>";
			echo "<td>".$jumlah['jumlah']."</td>";
			echo "</tr>";
			}
			?>
		</table>
	</center>
</center>
</div>
</body>
</html>