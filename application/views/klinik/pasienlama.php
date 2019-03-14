<head>
 <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->
</head>
  <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>

<!-- start: Content -->
<div id="content">
   <div class="panel box-shadow-none content-header">
      <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">Data Pasien Lama</h3>
            <p class="animated fadeInDown">
              Table <span class="fa-angle-right fa"></span> Data Pasien Lama
            </p>
        </div>
      </div>
  </div>
  
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Kode Pasien</th>
                          <th>Nama Pasien</th>
                          <th>Alamat Pasien</th>
                          <th>Umur Pasien</th>
                          <th>Tanggal Masuk</th>
                          <th>Nama Penyakit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>p01</td>
                          <td>Sumanto</td>
                          <td>Bondowoso</td>
                          <td>35 tahun</td>
                          <td>2011/04/25</td>
                          <td>Stroke</td>
                        </tr>
                        <tr>
                          <td>p02</td>
                          <td>Sumina</td>
                          <td>Jember</td>
                          <td>63 tahun</td>
                          <td>2011/07/25</td>
                          <td>Kencing Manis</td>
                        </tr>
                        <tr>
                          <td>p03</td>
                          <td>Adit</td>
                          <td>Jember</td>
                          <td>18 tahun</td>
                          <td>2009/01/12</td>
                          <td>Tipus</td>
                        </tr>
                        <tr>
                          <td>p04</td>
                          <td>Bunga</td>
                          <td>Bondowoso</td>
                          <td>22 tahun</td>
                          <td>2012/03/29</td>
                          <td>Demam Berdarah</td>
                        </tr>
                        <tr>
                          <td>p05</td>
                          <td>Airin</td>
                          <td>Bondowoso</td>
                          <td>19 tahun</td>
                          <td>2008/11/28</td>
                          <td>Tipus</td>
                        </tr>
                        <tr>
                          <td>p06</td>
                          <td>Ilham</td>
                          <td>Jember</td>
                          <td>61 tahun</td>
                          <td>2012/12/02</td>
                          <td>Kanker</td>
                        </tr>
                        <tr>
                          <td>p07</td>
                          <td>Sales Tuki</td>
                          <td>Banyuwangi</td>
                          <td>59 tahun</td>
                          <td>2012/08/06</td>
                          <td>Kanker</td>
                        </tr>
                        <tr>
                          <td>p08</td>
                          <td>Inai</td>
                          <td>Jember</td>
                          <td>55 tahun</td>
                          <td>2010/10/14</td>
                          <td>Tipus</td>
                        </tr>
                        <tr>
                          <td>p09</td>
                          <td>Muimin</td>
                          <td>Jember</td>
                          <td>39 tahun</td>
                          <td>2009/09/15</td>
                          <td>Demam</td>
                        </tr>
                        <tr>
                          <td>P10</td>
                          <td>Sofian</td>
                          <td>Jember</td>
                          <td>23 tahun</td>
                          <td>2008/12/13</td>
                          <td>Tipus</td>
                        </tr>
                        <tr>
                          <td>p11</td>
                          <td>Ofichan</td>
                          <td>Situbondo</td>
                          <td>30 tahun</td>
                          <td>2008/12/19</td>
                          <td>Kanker</td>
                        </tr>
                        <tr>
                          <td>p12</td>
                          <td>Leli</td>
                          <td>Banyuwangi</td>
                          <td>5 tahun</td>
                          <td>2013/03/03</td>
                          <td>Demam</td>
                        </tr>
                        <tr>
                          <td>p13</td>
                          <td>Rahmati</td>
                          <td>Situbondo</td>
                          <td>36 tahun</td>
                          <td>2008/10/16</td>
                          <td>Kencing Manis</td>
                        </tr>
                        <tr>
                          <td>p14</td>
                          <td>Selamet</td>
                          <td>Jember</td>
                          <td>70 tahun</td>
                          <td>2012/12/18</td>
                          <td>Stroke</td>
                        </tr>
                        <tr>
                          <td>P15</td>
                          <td>Sumiati</td>
                          <td>Banyuwangi</td>
                          <td>19 tahun</td>
                          <td>2010/03/17</td>
                          <td>Tipus</td>
                        </tr>
                      
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
<!-- end: content -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>



<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
