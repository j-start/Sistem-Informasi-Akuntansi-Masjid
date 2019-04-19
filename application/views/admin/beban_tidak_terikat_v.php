<!DOCTYPE html>
<html>
<head>
	<?php  $this->load->view("admin/_partials/head.php")?>
</head>
<body>

<div>
    <?php  $this->load->view("admin/_partials/navbar.php") ?>
    <div class="wrapper">
        <?php $this->load->view("admin/_partials/sidebar.php")  ?>
            
        <!-- 
            karena ini halaman overview (home), kita matikan partial breadcrumb.
            Jika anda ingin mengampilkan breadcrumb di halaman overview,
            silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
        <?php //$this->load->view("admin/_partials/breadcrumb.php") ?>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>
    </div>
</div>

<section class="container-fluid">
	<div class="row d-flex justify-content-around">
		<div class="kol3">
			<div class="kartu">
				<input type="checkbox">
				<div class="togle"><span>+</span></div>
				<div class="imgBox">
					<img src="<?php echo base_url();?>assets/ridho.jpg" alt="hehehe">
				</div>
				<div class="kartu-submenu">
					<div class="list-group">
						<a href="#"><button type="button" class="list-group-item list-group-item-action">Beban Telepon, Air, & Listrik<button></a>
						<a href="#"><button type="button" class="list-group-item list-group-item-action">Beban Pemeliharaan</button></a>
						<a href="#"><button type="button" class="list-group-item list-group-item-action">Beban Administrasi</button></a>
						<a href="#"><button type="button" class="list-group-item list-group-item-action">Beban Pemeliharaan</button></a>
						<a href="#"><button type="button" class="list-group-item list-group-item-action">Beban Kerusakan dan Kehilangan Aset</button></a>
						<a href="#"><button type="button" class="list-group-item list-group-item-action">Beban Beban Transportasi</button></a>
						<a href="#"><button type="button" class="list-group-item list-group-item-action">Beban Insentif Pengurus Masjid</button></a>
					</div>
				</div>
			</div>
		</div>

		<div class="kol3">
			<div class="kartu">
				<input type="checkbox">
				<div class="imgBox">
					<img src="<?php echo base_url();?>assets/ridho.jpg" alt="hehehe">
				</div>
			</div>
		</div>
	</div>
</section>



</body>
</html>