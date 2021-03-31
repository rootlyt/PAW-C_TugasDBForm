<html>
	<head>
		<title>Tugas DB Form</title>
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div style="position: absolute; width:100%; top:550;">
			<img style="position: relative; display: block; float: left;" src="image/himemiya_left.png" width="468" />
			<img style="position: relative; display: block; float: right;" src="image/himemiya_right.png" width="400"/>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Isikan data Anda di sini</h3>
					<form method="post" action="/mvc-example/?act=simpan">
					  <div class="form-group">
					    <label for="exampleInputNim">NIM</label>
					    <input type="text" class="form-control" id="exampleInputNim" name="nim" placeholder="NIM">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputNama">Nama</label>
					    <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="Nama">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputUsers">Username</label>
					    <input type="text" class="form-control" id="exampleInputUsers" name="users" placeholder="Username">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassw">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword" name="pasw" placeholder="Password Jangan Samakan Dengan Email Anda">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail">Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Email Aktif Anda">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputKotaAs">Kota Asal</label>
					    <input type="text" class="form-control" id="exampleInputKotaAs" name="kotaAs" placeholder="Kota Anda">
					  </div>

					  <button type="submit" class="btn btn-success">Submit</button>

					</form>
					<br/>
					<a href="/mvc-example/?act=tampil-data">Lihat Hasil Input</a>
					<p style="text-align:center; float:center; padding: 5px; background-color:#ace8e6 ; opacity: 0.4;" >Maaf pak gambar nya ndak nyambung, lucu tapi 😂</p>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>