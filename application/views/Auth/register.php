<?php $this->load->view('master/head');?>
<?php $this->load->view('master/alert');?>
<div class="row">
	<div class="col-6">
		<form method="POST" action="<?= base_url('/Auth/addusers') ?>">
			<div class="row">
				<div class="col-12">
					<h1 class="text-center">Register</h1>
				</div>				
				<div class="col-12">
					<div class="row">
						<div class="col-1">
							<i class="bi bi-person-circle" style="font-size: 35px;"></i>
						</div>
						<div class="col-11">

							<input required class="form-control" type="text" name="username" placeholder="Masukan Username">
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-1">
							<i class="bi bi-person-circle" style="font-size: 35px;"></i>
						</div>
						<div class="col-11">
							<input required class="form-control" type="text" name="Nama" placeholder="Masukan Nama Lengkap Anda">
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-1">
							<i class="bi bi-person-circle" style="font-size: 35px;"></i>
						</div>
						<div class="col-11">
								<select class="form-select" name="Jenis_Kelamin">
									<option>COWO</option>
									<option>CEWE</option>
								</select>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-1">
							<i class="bi bi-person-circle" style="font-size: 35px;"></i>
						</div>
						<div class="col-11">
							<input required class="form-control" type="date" name="tgllahir" placeholder="Masukan tgl Lahir">
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-1">
							<i class="bi bi-person-circle" style="font-size: 35px;"></i>
						</div>
						<div class="col-11">
							<input required class="form-control" type="text" name="nowa" placeholder="Masukan Kontak Whatapp">
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-1">
							<i class="bi bi-person-circle" style="font-size: 35px;"></i>
						</div>
						<div class="col-11">
							<input required class="form-control" type="password" name="password" placeholder="Masukan Kata Sandi">
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Daftar</button>
			</div>
		</form>
	</div>
	<div class="col-6">
		<div class="card mb-3">
		  <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fhotelvilnia.lt%2Faccommodation%2Fclassic-single-room%2F&psig=AOvVaw0RIlq6O8Akslg0kETRLz3L&ust=1652711285222000&source=images&cd=vfe&ved=2ahUKEwjRlOy52-H3AhXbXmwGHT1sA9MQjRx6BAgAEAs" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">cari Lalu Ubah sendiri</h5>
		    <p class="card-text">ini juga ya.</p>
		  </div>
		</div>
	</div>
</div>
