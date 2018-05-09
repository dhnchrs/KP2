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
		top: -640px;
		left: -540px;
		width: 520px;
	}
	.MAB {
		height: 400px;
		border-bottom: 5px solid red;
		max-height: 500px;
		position: absolute;
		top: -640px;
		left: -540px;
		width: 520px;
	}
	.MAN {
		height: 300px;
		border-bottom: 5px solid yellow;
		max-height: 500px;
		position: absolute;
		top: -640px;
		left: -540px;
		width: 520px;
	}
	.MAMIN {
		height: 200px;
		border-bottom: 5px solid lightgreen;
		max-height: 500px;
		position: absolute;
		top: -640px;
		left: -540px;
		width: 520px;
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
			<svg height="700" width="1500" style="position:absolute;top:100px;left:20px;">
				<g>
					<polygon points="520,40 1000,540 200,540" style="fill:white;stroke:white;stroke-width:5" />
					<!--GARIS KIRI BAWAH-->
					<line x1="0" y1="200" x2="200" y2="200" style="stroke:black;stroke-width:5" transform="translate(0, 340)" />
					<!--GARIS 45 ke atas-->
					<line x1="0" y1="-100" x2="-326" y2="408" style="stroke:black;stroke-width:5;" transform="translate(524, 134)" />
					<!--LENGKUNG-->
					<line x1="0" y1="-100" x2="634" y2="560" style="stroke:black;stroke-width:5;" transform="translate(679, 136)" />
					<!--GARIS 45 ke bawah-->
					<path d="M20 80 Q 95 10 180 80" style="fill:white;stroke:black;stroke-width:5;" transform="translate(501, -42)" />
					<!--GARIS 45 ke atas-->
					<line x1="0" y1="250" x2="150" y2="100" style="stroke:black;stroke-width:5" transform="translate(1310, 446)" />
					<!--GARIS KANAN BAWAH-->
					<line x1="0" y1="200" x2="172" y2="200" style="stroke:black;stroke-width:5" transform="translate(1228, 406)" />
				</g>
			</svg>
	</div>
</body>
</html>﻿
