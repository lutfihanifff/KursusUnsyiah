<!DOCTYPE html>
<html>
<head>
	<title>Instruktur PDF</title>
	<style type="text/css">
	table {
    border-spacing: 0;
    width: 100%;
  	border: 1px solid #444;
  	font-family: Helvetica;
    }
    th {
    background: transparent;
    border: 1px solid #444;
    color: #444;
    padding: 13px;
    text-align: left;
    text-transform: uppercase;
    }
   
    td {
    border: 1px solid #444;
    padding: 8px;
    }
   
    img {
    	width: 40px;
    	height: 40px;
    	border-radius: 100%;
    }
    .center {
    	text-align: center;
    }
	</style>

</head>
<body>
	<br>
	<h2 style="text-transform: uppercase; text-align: center;">Laporan Peserta Kursus {{$bulan}} {{$tahun}}</h2>
	<br>
	<table>
	  <thead>
	    <tr>
	      <th>No. Induk</th>
	      <th>Nama Peserta </th>
	      <th>Nilai Absensi </th>
	      <th>Nilai Teori </th>
	      <th>Nilai Praktek </th>
	      <th>Nilai Akhir</th>
	      <th>Huruf</th>
	      
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($kursus as $ks)
	      <tr>
	        
	        <td>{{ $ks->peserta->id }}</td>
	        <td>{{ $ks->peserta->nama }}</td>
	        <td>{{ $ks->nilai_absensi() }}</td>
	        <td>{{ $ks->nilai_teori }}</td>
	        <td>{{ $ks->nilai_praktik() }}</td>
	        <td>{{ $ks->sertifikat->nilai_akhir}}</td>
	        <td>{{ $ks->sertifikat->predikat()}}</td>
	        
	      </tr>
	    @endforeach
	  </tbody>
	</table>
</body>
</html>