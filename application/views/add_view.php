<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
</head>
<body>
	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="">Dashboard</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
	<div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><?php echo anchor('home/list/','Dashboard');?></li>
                    <li class="current"><?php echo anchor('home/','Tambah Data');?></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Mahasiswa</div>
		  			</div>
	<div class="content-box-large box-with-header">
	<form action="<?php echo base_url().'home/add_act/';?>" method="post">
		<table border="2">
			<tr>
				<td>NIM</td>
				<td><input style="width: 200px" type="number" placeholder="Masukkan NIM" name="nim" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input style="width: 200px" type="text" placeholder="Masukkan nama" name="nama" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><select style="width: 200px" name="jenis_kelamin" required>
					<option value="">Pilih</option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input style="width: 200px" type="text" placeholder="Masukkan alamat" name="alamat" required></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Submit" class="btn btn-success">
	</form>
<br /><br /><br /><br />
<br /><br /><br><br>
					</div>
		  		</div>
		  	</div>
		  </div>
		</div>
    </div>
<br><br><br><br><br><br><br>
    

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
</body>
</html>