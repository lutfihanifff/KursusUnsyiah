<!DOCTYPE html>
<html>
<head>
	<title>Instruktur PDF</title>


	<style type="text/css">
    table {
    border-spacing: 0;
    width: 100%;
    font-family: Helvetica;
    }
    th {
    background: black;
    background: linear-gradient(#687587, #404853);
    border-left: 1px solid rgba(0, 0, 0, 0.2);
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    color: #fff;
    padding: 8px;
    text-align: left;
    text-transform: uppercase;
    }
    th:first-child {
    border-top-left-radius: 4px;
    border-left: 0;
    }
    th:last-child {
    border-top-right-radius: 4px;
    border-right: 0;
    }
    td {
    border-right: 1px solid #c6c9cc;
    border-bottom: 1px solid #c6c9cc;
    padding: 15px;
    }
    td:first-child {
    border-left: 1px solid #c6c9cc;
    }
    tr:first-child td {
    border-top: 0;
    }
    tr:nth-child(even) td {
    background: #e8eae9;
    }
    tr:last-child td:first-child {
    border-bottom-left-radius: 4px;
    }
    tr:last-child td:last-child {
    border-bottom-right-radius: 4px;
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
	<h2 style="text-transform: uppercase;">Laporan Instruktur {{$bulan}} {{$tahun}}</h2>
	<table>
	  <thead>
	    <tr>
	      <th>No.</th>
	      <th>Nama </th>
	      <th>L/P </th>
	      <th>Email </th>
	      <th>Nomor HP </th>
	      <th>Jumlah Kursus</th>
	      
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($instruktur as $ins)
	      <tr>
	        <td>{{ $loop->iteration }}</td>
	        <td>{{ $ins->nama }}</td>
	        <td>{{ $ins->gender }}</td>
	        <td>{{ $ins->user->email }}</td>
	        <td>{{ $ins->nohp }}</td>
	        <td>{{ $ins->kursus_count}}</td>
	        
	      </tr>
	    @endforeach
	  </tbody>
	</table>
</body>
</html>