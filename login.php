<title> D3 RPL | LOGIN |</title>
<link rel="icon" href="logo-ubg.png">

<style type="text/css">
body {background-image:url('gedung.jpg');background-size: cover;}

.tabel1 {border-top-left-radius:15px;border-bottom-right-radius:15px; padding:10px;background-color:#004999;
		 box-shadow: 0px 0px 30px 10px #bfe6ff;}

.ubg2 { background-color:#63c5da;height:130px;width:130px;padding:3px;margin-bottom:8px;
		border-top-left-radius:66px;border-top-right-radius:66px;border-bottom-right-radius:66px;border-bottom-left-radius:66px;
		opacity: 0.8;} 
		
img:hover {opacity: 1.0;}

.lf { font-size:22px;font-family:Verdana ;color:white}

.userstyl { border-bottom:1px solid cyan;border-top:0px;border-left:0px;border-right:0px;background-color:transparent ;
			width:300px;margin-bottom:10px;
			padding:5px 0px 3px 40px;font-size:19px;font-family:Trebuchet MS;color:white;}

::placeholder { color: #acacac;}
	
.submit1 {padding-top:10px;padding-bottom:10px;}
.submitwkwk { width:90px;height:40px;font-size:14px;border-top-left-radius:13px;border-bottom-right-radius:13px;
			  background-color:d9f1f1;color:#004999;}

.iconlgn {position:absolute;margin-left:38px;margin-top:2px;}

</style>

<br>
<form action="" method="post">
<table align="center" class="tabel1" width="400" height="600">
	<tr>
		<td><center><img src="logo-ubg.png" class="ubg2"></div><br><br> 
		<span class="lf"><center>FAKULTAS TEKNIK & DESAIN</span><br>
		<font size="40px" face="Geometr415 Blk BT" color="#d9f1f1">R3 RPL 2020</font>
		</td>
	</tr>

	<tr >
		<td>
				
<?php
	if(isset($_POST['proseslog'])){
	$user = "dikamaulana";
	$pass = "dika123@";
		
	if (($_POST['username'] == $user) && ($_POST['password'] == $pass))
		{$_session['username'] = $user;
		 echo "<meta http-equiv=refresh content=0;url='berhasil.html'>";		 
		}
		
		if (empty($_POST['username']) && empty($_POST['password']))
		{
			echo "<p align=center> <span style='font-size:12px;font-family:Geometr415 Blk BT;color:yellow'> MASUKKAN USER & PASSWORD DONG! </span></p>";
			echo "<meta http-equiv=refresh content=4;url='login.php'>";
		}
		else if (($_POST['username'] <> $user) && ($_POST['password'] == $pass))
		{ 
			echo "<p align=center ><span style='font-size:12px;font-family:Geometr415 Blk BT;color:yellow'>   USERNAME SALAH! </span></p>";
			echo "<meta http-equiv=refresh content=4;url='login.php'>";
		 
		}
		else if (($_POST['username'] == $user) && ($_POST['password'] <> $pass))
		{
			echo "<p align=center><span style='font-size:12px;font-family:Geometr415 Blk BT;color:yellow'>  PASSWORD SALAH! </span></p>";
			echo "<meta http-equiv=refresh content=4;url='login.php'>";
		}
		
		else if (($_POST['username'] <> $user) && ($_POST['password'] <> $pass)){
			echo "<p align=center> <span style='font-size:12px;font-family:Geometr415 Blk BT;color:yellow'> USERNAME & PASSWORD SALAH! </span></p>";
			echo "<meta http-equiv=refresh content=4;url='login.php'>";
		}
	}
?>

			<span class="iconlgn" ><img src="icouser2.png" width="26px" height="26px"></span><center>
			<input type="text" name="username" placeholder="Username" class="userstyl">
		</td>
	</tr>	
	<tr>
		<td ><span class="iconlgn" ><img src="a.jpg" width="26px" height="26px"></span><center><center>
			<input type="password" name="password" placeholder="Password" class="userstyl">
		</td>
	</tr>
	<tr>
		
		<td class="submit1"> 
			<center><input type="submit" value="MASUK"  name="proseslog" class="submitwkwk" ><br><br><br>
			<font color="white" font-size="12">Silahkan Login Untuk Masuk Ke Halaman Utama</font>
			
		</td>
	</tr>
	</table>
	</form>
