<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('klinik/head') ?>

<body id="mimin" class="dashboard">
    <?php $this->load->view('klinik/navbar')?>

      <div class="container-fluid mimin-wrapper">

          <?php $this->load->view('klinik/left')?>

          <?php $this->load->view('klinik/content')?>



          <?php $this->load->view('klinik/right')?>

      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <?php $this->load->view('klinik/menu_mobile')?>
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->
<?php $this->load->view('klinik/script')?>
</body>
</html>
