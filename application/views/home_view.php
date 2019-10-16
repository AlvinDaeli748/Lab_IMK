<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
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
                    <li class="current"><?php echo anchor('home/list','Dashboard');?></li>
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
		<table border="2">
		<tr>
			<th>No</th>
			<th style="width:85px;height:25px">NIM</th>
			<th style="width:85px;height:25px">Nama</th>
			<th style="width:85px;height:25px">Jenis Kelamin</th>
			<th style="width:125px;height:25px">Alamat</th>
			<th colspan="2" style="width:85px;height:25px"><center>Aksi</center></th>
		</tr>
		<?php
		 $no = 1;
		 foreach($mhs as $p){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p->nim ?></td>
			<td><?php echo $p->nama ?></td>
			<td><?php echo $p->jenis_kelamin ?></td>
			<td><?php echo $p->alamat ?></td>
			<td><?php echo anchor('home/update/'.$p->nim,'Update','class="btn btn-primary"');?>&emsp;
				<?php echo anchor('home/delete/'.$p->nim,'Delete','class="btn btn-danger"');?>
			</td>
		</tr>
		<?php } ?>
	</table>
						<br /><br />
						<br /><br />
						<br /><br />
					</div>
		  		</div>
		  	</div>
		  </div>
		</div>
    </div>
<br><br><br>
    
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
	
</body>
</html>