<!DOCTYPE html>
<html lang="en">
<head>
	<?php  $this->load->view("admin/_partials/head.php")?>
</head>
<body>

<!-- Sidebar dan Navbar -->
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
                <div class="imgBox">
                    <img src="<?php echo base_url();?>assets/ridho.jpg" alt="hehehe">
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

        <div class="kol3">
            <div class="kartu">
                <input type="checkbox">
                <div class="imgBox">
                    <img src="<?php echo base_url();?>assets/ridho.jpg" alt="hehehe">
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