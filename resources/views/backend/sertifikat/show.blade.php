<!DOCTYPE html>
<html>
<head>
	<title>{{$namePdf}}</title>
	<style type="text/css">
		@page { margin:0; }
		body{ margin: 10px; margin-bottom: -50px; padding: 20px; border: 30px solid #e58e26; }
		h1{ font-size: 50px; margin: 0px; font-style: italic; font-weight: normal; color: #e67e22; }
		#nilek{ margin: 0px;  font-family: Tahoma,Geneva,sans-serif; color: #2980b9;}
		#logo1 { position: absolute; top: 0px;  width: 110px; height: 110px;  }
		#logo2 { position: absolute; top: 15px; right: 25px; width: 110px; height: 110px;}
		hr{ height: 2px; color: #f39c12; width:80%; background: #f39c12; }
		#content{
			margin: auto;
			width: 70%;
			font-size: 20px;
			margin-bottom: 0px;
		}
		p{text-align: justify; word-wrap: break-word; word-spacing: 11px; line-height: 1.8; margin-top: 5px; margin-bottom: 2px;}
		#bio{ margin: 0px; width: 100%; }
		#bio td{ padding: 13px; padding-left: 0;}
		.tit{width: 200px;}
		.colon{width: 20px;}
		#bio th{ border-bottom: 1px solid #444; }
		#no_ser{ margin: 0px; font-family: Tahoma,Geneva,sans-serif; color: #000; letter-spacing:5px; font-size: default;}
		#foot{
			float: right;
			font-size: 18px;
			text-align: right;
		}
		#sice td{
			padding: 29px;
			padding-left: 5px;
			padding-right: 5px;
		}
		#sice th #th{
			padding: 38px;
			border: 1px solid #444;
			text-align: center;
			vertical-align: text-bottom;
			height: 50px;
			
		}

	</style>
</head>
<body>
	<div id="head">
		<div id="logo1"><img src="{{$logo1}}" height="100%" width="100%" /></div>
		<div id="title">
			<center><h1>Sertifikat</h1></center><br>
			<center><h3 id="nilek">NILEK &nbsp; NASIONAL &nbsp; : {{$nilek}}</h3></center>
		</div>
		<div id="logo2"><img src="{{$logo2}}" height="100%" width="100%" /></div>
	</div>
	<hr>
	<div id="content">
		<center><h3 id="no_ser">No.{{$no_ser}}</h3></center>
		<p>Diberikan kepada :</p>
		<table id="bio">
			<tr><td class="tit">Nama</td><td class="colon">:</td><th>&nbsp;{{$nama}}</th></tr>
			<tr><td class="tit">Nomor Induk</td><td class="colon">:</td><th>&nbsp;{{$induk}}</th></tr>
			<tr><td class="tit">Tempat Tanggal Lahir</td><td class="colon">:</td><th>&nbsp;{{$ttl}}</th></tr>
		</table>
		<p>Telah mengikuti dan menyelesaikan <strong>Kursus {{$program}}</strong> dari tanggal <strong>{{$start}} s/d {{$end}}</strong> di LKP Cendana dan dinyatakan <strong>LULUS</strong> dengan Predikat <strong>{{$predikat}}</strong>.</p>
	</div>
	<div id="foot">
		<table id="sice">
			<tr> 
				<th rowspan="3"><p id="th">Foto</p></th> 
			
				<td>Samarinda,</td> 
				<td><u>{{$date}}</u></td> 
			
		
			</tr> 
			<tr style="margin-bottom: 0px; padding-bottom: 0px;"> 
				<td></td> 
				<td style="margin-bottom: 0px !important; padding-bottom: 0px !important;"><strong><u>Warsi SH.M.Pd</u></strong></td> 
			</tr>
			<tr style="margin-top:-15px !important; padding: -15px !important; text-align: center;">
				<td style="margin-top:-15px !important; padding: -15px !important;"></td>
				<td style="margin-top:-15px !important; padding: -15px !important;">Pimpinan&nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
		</table>
	
	</div>
	
</body>
</html>