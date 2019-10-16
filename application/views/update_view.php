<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
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
                    <li><?php echo anchor('home/','Tambah Data');?></li>
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
	<?php foreach($mhs as $p){ ?>
	<form action="<?php echo base_url().'home/update_act/';?>" method="post">
		<table border="2">
			<tr>
				<td>NIM</td>
				<td><input style="width: 200px" readonly type="text" name="nim" value="<?php echo $p->nim ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input style="width: 200px" type="text" name="nama" value="<?php echo $p->nama ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><select style="width: 200px" name="jenis_kelamin" required>
					<option value="<?php echo $p->jenis_kelamin ?>"><?php echo $p->jenis_kelamin ?></option>
					<?php 
					$r = $p->jenis_kelamin;
					if($r == "Laki-Laki"): ?>
					<option value="Perempuan">Perempuan</option>
					<?php else: ?> 
					<option value="Laki-Laki">Laki-Laki</option>
					<?php endif; ?>
				</select>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input style="width: 200px" type="text" name="alamat" value="<?php echo $p->alamat ?>">
			</tr>
		</table>
		<br>
		<input type="submit" value="Update Data" class="btn btn-primary">
	</form>
	<?php } ?>
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