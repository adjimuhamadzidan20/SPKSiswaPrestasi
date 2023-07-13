<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-1">
  <h1 class="h3 text-gray-800">Hasil Perhitungan</h1>
</div>

<!-- popup status -->
<?php  
  if (isset($_SESSION['pesan']) && isset($_SESSION['status'])) :
?>
  <div class="alert alert-<?= $_SESSION['status']; ?> rounded-0" role="alert" id="notif">
    <?= $_SESSION['pesan']; ?>
  </div>
<?php  
  unset($_SESSION['pesan']);
  unset($_SESSION['status']);
  endif;
?>

<nav aria-label="...">
  <ul class="pagination pagination-md flex-wrap flex-md-nowrap">
    <li class="page-item w-100" aria-current="page">
      <a class="page-link rounded-0 text-gray-800" href="index.php?page=hasil_perhitungan&hasil=normalisasi">Hasil Normalisasi</a>
    </li>
    <li class="page-item w-100">
    	<a class="page-link rounded-0 text-gray-800" href="index.php?page=hasil_perhitungan&hasil=preferensi">Hasil Preferensi</a>
    </li>
    <li class="page-item w-100">
    	<a class="page-link rounded-0 text-gray-800" href="index.php?page=hasil_perhitungan&hasil=perankingan">Perankingan</a>
    </li>
  </ul>
</nav>

<!-- DataTales Example -->
<div class="card mb-4 rounded-0">
	<?php require 'config/control_hasil.php'; ?>
</div>

<div class="d-flex justify-content-start">
	<button type="button" class="btn btn-success btn-square rounded-0" data-toggle="modal" data-target="#reset">
  	<i class="fas fa-undo fa-sm"></i> Reset Hasil
	</button> 	
</div>

<!--Modal reset hasil-->
<div class="modal fade" id="reset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-0 border-0">
        <div class="modal-body">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="fas fa-times fa-xs"></i></span>
           </button>
            <p class="modal-title text-left" id="exampleModalLabel">Reset hasil perhitungan? Semua hasil perhitungan akan dibersihkan</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary rounded-0" type="button" data-dismiss="modal"><i class="fas fa-chevron-left fa-sm"></i> Kembali</button>
            <a class="btn btn-success rounded-0" href="pages/hasil_perhitungan/proses_reset_perhitungan.php"><i class="fas fa-undo fa-sm"></i> Reset</a>
        </div>
    </div>
  </div>
</div>