<?php include '../config/block_akses.php' ?>
<?php include '../config/uri.php' ?>
<?php include '../layout/header.php' ?>
<body class="bg-dark">
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
				<h4 class="text-center">Form Daftar</h4>
			</div>
			<div class="row justify-content-center align-items-center mt-5">
				<div class="col-md-6">
					<div class="col-md-12">
						<form class="form" action="proses/prosesdaftar.php" method="post">
							<h3 class="text-center text-light border border-light rounded-circle bg-dark">Buat Akun</h3>
							<hr>
							<div class="form-group">
								<label for="email" class="text-dark">Email :</label><br>
								<input type="text" name="email" id="email" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="password" class="text-dark">Password :</label><br>
								<input type="password" name="password" id="password" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="password" class="text-dark">Password Ulang :</label><br>
								<input type="password" name="password" id="password" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1" class="text-dark">Role :</label>
								<select class="form-control" name="role" id="role">
									<option value="Pembimbing">Pembimbing</option>
									<option value="Admin">Admin</option>
								</select>
							</div>
							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-dark">Daftar</button>
							</div>
							<div class="text-right">
								<a href="masuk.php" class="text-dark">Login Akun</a>
							</div>
						</form>
						<hr>
						<a href="../index.php"><button type="button" class="btn btn-dark btn-lg btn-block mb-5">Halaman Utama</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<?php include '../layout/footer.php' ?>

