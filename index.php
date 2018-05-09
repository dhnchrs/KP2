<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bendungan</title>
	</head>
	<style>
	body{
	margin:0;
	padding:0;
	background-color:#fff;
	}
	.content{
		position: absolute;
		top: -50px;
		left: 10px;
	}
	.TMA {
		height: 500px;
		border-bottom: 5px solid blue;
		max-height: 500px;
		position: absolute;
		top: -650px;
		left: -550px;
		width: 530px;
	}
	.MAB {
		height: 400px;
		border-bottom: 5px solid red;
		max-height: 500px;
		position: absolute;
		top: -650px;
		left: -550px;
		width: 530px;
	}
	.MAN {
		height: 300px;
		border-bottom: 5px solid yellow;
		max-height: 500px;
		position: absolute;
		top: -650px;
		left: -550px;
		width: 530px;
	}
	.MAMIN {
		height: 200px;
		border-bottom: 5px solid lightgreen;
		max-height: 500px;
		position: absolute;
		top: -650px;
		left: -550px;
		width: 530px;
	}

	#rotate_{
			-webkit-transform: rotate(180deg);
			-moz-transform: rotate(180deg);
			-o-transform: rotate(180deg);
			-ms-transform: rotate(180deg);
			transform: rotate(180deg);
	}
	 </style>
<body>
	<div class="content">
			<div id="rotate_">
				<div class="TMA"></div>
				<div class="MAB"></div>
				<div class="MAN"></div>
				<div class="MAMIN"></div>
			</div>
			<svg height="600" width="900" style="position:absolute;top:140px;left:190px;">
				<polygon points="360,0 800,510 10,510" style="fill:white;stroke:black;stroke-width:5" />
			</svg>
			<!--GARIS 45 ke bawah-->
			<svg height="510" width="1000" style="position:absolute;top:140px;left:550px;">
				<line x1="0" y1="0" x2="550" y2="635" style="stroke:white;stroke-width:10" />
			</svg>
			<!--LENGKUNG-->
			<svg width="190" height="160" style="position:absolute;top:67px;left:535px;">
				<path d="M10 80 Q 95 10 180 80" style="fill:white;stroke:black;stroke-width:5"/>
			</svg>
			<!--GARIS 45 ke bawah-->
			<svg height="510" width="1000" style="position:absolute;top:140px;left:708px;">
				<line x1="0" y1="0" x2="550" y2="635" style="stroke:black;stroke-width:5" />
			</svg>
			
			<!--GARIS KIRI BAWAH-->
			<svg height="210" width="500" style="position:absolute;top:450px;left:20px;">
				<line x1="0" y1="200" x2="180" y2="200" style="stroke:black;stroke-width:5" />
			</svg>
			<!--GARIS TENGAH-->
			<svg height="210" width="2000" style="position:absolute;top:450px;left:206px;">
				<line x1="0" y1="200" x2="900" y2="200" style="stroke:white;stroke-width:10" />
			</svg>
			<!--GARIS 45 ke bawah-->
			<svg height="210" width="500" style="position:absolute;top:640px;left:1141px;">
				<line x1="0" y1="0" x2="180" y2="200" style="stroke:black;stroke-width:5" />
			</svg>
			<!--GARIS 45 ke atas-->
			<svg height="210" width="500" style="position:absolute;top:690px;left:1318px;">
				<line x1="0" y1="150" x2="160" y2="0" style="stroke:black;stroke-width:5" />
			</svg>
			<!--GARIS KANAN BAWAH-->
			<svg height="210" width="500" style="position:absolute;top:550px;left:1240px;">
				<line x1="0" y1="200" x2="175" y2="200" style="stroke:black;stroke-width:5" />
			</svg>
	</div>
</body>
</html>﻿
