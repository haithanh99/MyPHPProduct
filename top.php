<?php
$link = new mysqli('haithanh2999.herokuapp.com','cajhsvjnfdjhcz','904383d81834d725e2c5ee06cb6044887fd36ff594218698bc6fbf474aab488f','WebASM');
if(!$link){
	echo "ket noi that bai";
}else{
	echo "ket noi thanh cong";
}
// $db = parse_url(getenv("DATABASE_URL"));

// $pdo = new PDO("pgsql:" . sprintf(
//     "host=%s;port=%s;user=%s;password=%s;dbname=%s",
//     $db["host"],
//     $db["port"],
//     $db["user"],
//     $db["pass"],
//     ltrim($db["path"], "/")
// ));

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=ege" >
	<meta  name="viewport" content="width=devce-width, initial-scale=1">
	<title>Giao dien 2 cot voi menu phai</title>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
		body{
	background: #FCC4C4;
	margin:0;
	padding:0;
	font-family: Verdana;
	font-size: 0.9em;
	line-height: 1.5em;
}
#main{
	width: 1000px;
	margin:0 auto;

}
#head{
	height: 100px;
	background: #D60A74;
	color: #fff;
}
#head h1{
	margin:0;
	padding:5px 15px 0;
	font-family: "Times New Roman";
	font-size: 1.3em;
}
#head h2{
	margin:0;
	padding:0px 10px;
	font-family: "Times New Roman";
	font-size: 1.4em;
}
#head h3{
	margin:0;
	text-align: center;
	font-family: "Times New Roman";
	font-size: 1.5em;
}
#head h4{
	margin:0;
	text-align: center;
	font-family: "Times New Roman";
	font-size: 1.5em;
}
#menutop{
	height: 35px;
	background:#B30101;
	color: #fff;

}
#menutop ul{
	margin: 0;
	padding: 0;
	list-style: none;
}
#menutop ul li a{
	float: left;
	text-decoration: none;
	color: white;
	padding: 7px 17px;
	font-weight: bold;
}
#menutop ul li a:hover{
	color: #fff000;
	background: #146834;
}
#maincontent{
	float:right;
	width: 100%;
}
#content{
	margin-right: 300px;
	background: #f1f9fd;
}
#noidung{
	padding: 15px;
	text-align:justify;
}
#right{
	float: right;
	margin-right: -100%;
	width: 300px;
	
}
#menuright{
	margin:0;
	padding: 15px 5px;
	line-height: 1.8em;
}
#menuright ul{
	margin:0;
	padding: 0;
	list-style: none;
}
#menuright ul li a{
	padding:15px;
	text-decoration:none;
	font-weight: bold;
	color: #044e63;
}
#menuright ul li a:hover{
	color: #631404;
	text-decoration:underline;

}
.dinhdang{
	width: 97%;
	background: #F1BD1F;
	margin:10px auto;
	border-radius: 7px;
	box-shadow: 2px 2px 20px #0a4567;

}
.dinhdang h1{
	margin: 0;
	padding: 5px 15px;
	font-size: 1em;
	color: #fff000;
	background: #16708a;
}
#footer{
	clear: both;
	background: #144d68;
	color: white;
	padding: 20px;
	text-align: center;
}
	</style>
</head>
<body>
	<div id="top"> <!-- mo phan top -->

	<div id="main"><!-- bao toan bo khung web site -->
		<div id="menutop"> <!-- phan menutop -->
			<ul>
				<li><a href="#">Trang chủ</a></li>
				<li><a href="#">Đồ chơi vận đông</a></li>
				<li><a href="#">Đồ choi trí tuệ</a></li>
				<li><a href="#">Phương tiện giao thông</a></li>
				<li><a href="#">Nhân vật/ Chủ đề</a></li>
				<li><a href="#">Phụ kiện/ Đô dùng</a></li>
				
				<li><a href="#">Đăng ký</a></li>
				<li><a href="#">Đăng nhập</a></li>
			</ul>
		</div><!-- ket thuc phan menutop -->
	</div> <!-- ket thuc phan top -->
		<div id="main"><!-- bao toan bo khung web site -->
		<div id="head"> <!-- phan banner -->
			<h1>VƯƠNG QUỐC ĐỒ CHƠI</h1>
			<h2>Công ty ATN Việt Nam</h2>
			<h3>CUNG CẤP ĐỒ CHƠI CAO CẤP CHÍNH HÃNG</h3>
			<h4>DÀNH CHO LỨA TUỔI TỪ 0-12 TUỔI TRỞ LÊN</h4>
		</div><!-- ket thuc phan banner -->
		
		<div id="maincontent"> <!-- phan bao cua content -->
			<div id="content"> 
				<div class="dinhdang">
					<!-- phan dinh dang chung cho content va right -->