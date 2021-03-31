<html>
	<head>
		<title>Native MVC Example</title>
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Data Mahasiswa</h3>
					<?php 

						echo 'id:' . $rs['id'] . '<br/>';
						echo 'NIM:' . $rs['nim'] . '<br/>';
						echo 'Nama:' . $rs['nama'] . '<br/>';
						echo 'Email:' . $rs['email'] . '<br/>';
						echo 'Username:' . $rs['users'] . '<br/>';
						echo 'Password:' . $rs['pasw'] . '<br/>';
						echo 'Kota Asal:' . $rs['kotaAs'] . '<br/>';

					?>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>

<html>
<head></head>

<body>



</body>
</html>