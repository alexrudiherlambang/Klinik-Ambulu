                 <!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="PandawaDev">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>K-PAN</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

<!-- start: Content -->
  <div id="content">
      <div class="panel box-shadow-none content-header">
        <div class="panel-body">
          <div class="col-md-12">
              <h3 class="animated fadeInLeft">Pendaftaran Pasien Baru</h3>
              <p class="animated fadeInDown">
                Form <span class="fa-angle-right fa"></span> Pendaftaran Pasien Baru
              </p>
          </div>
        </div>
      </div>
   

    <body id="mimin" class="dashboard form-signin-wrapper">

    

        <form class="form-signin">
          <div class="panel periodic-login">
              <span class="atomic-number"></span>
              <div class="panel-body text-center">
               
                  <p class="atomic-mass">Tambah Data Pasien Baru</p>
                  <p class="element-name">Klinik-Ambulu</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" required>
                    <span class="bar"></span>
                    <label>Kode Pasien</label>
                  </div>
				  
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" required>
                    <span class="bar"></span>
                    <label>Nama Pasien</label>
                  </div>
				  
                   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" required>
                    <span class="bar"></span>
                    <label>Alamat Pasien</label>
                  </div>
				  
				   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="Text" class="form-text" required>
                    <span class="bar"></span>
                    <label>Umur Pasien</label>
                  </div>
				  
				   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="datetime" class="form-text" required>
                    <span class="bar"></span>
                    <label>Tanggal Pendaftaran</label>
                  </div>
				  
				   <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" required>
                    <span class="bar"></span>
                    <label>Nama Penyakit</label>
                  </div>
				  
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> &nbsp Yakin semua data yang diinputkan benar
                  </label>
                  <input type="submit" class="btn col-md-12" value="Tambah"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="login.html"></a>
                </div>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>
      </div>
  </div>
<!-- end: content -->
