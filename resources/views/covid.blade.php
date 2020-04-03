<!DOCTYPE html>
<html lang="en">

<head>

<link href="https://kawalcorona.com/data/css/newstyle.css" >
<script src="htpps://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Monitoring Covid-19 </title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('sb/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{asset('sb/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('sb/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<?php  

  $dpositif= file_get_contents("https://api.kawalcorona.com/positif");
  $positif= json_decode($dpositif, TRUE);

  $dsembuh= file_get_contents("https://api.kawalcorona.com/sembuh");
  $sembuh= json_decode($dsembuh, TRUE);

  $dmeninggal= file_get_contents("https://api.kawalcorona.com/meninggal");
  $meninggal= json_decode($dmeninggal, TRUE);

  $dataid= file_get_contents("https://api.kawalcorona.com/indonesia");
  $id= json_decode($dataid, TRUE);

  $dprovinsi= file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
  $provinsi= json_decode($dprovinsi, TRUE);

  $datadunia=  file_get_contents("https://api.kawalcorona.com/");
  $dunia= json_decode($datadunia, TRUE);

?>

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">MONITORING COVID-19</a>

  <!--   <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
 -->
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
       <!--  <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div> -->
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        </a>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        </a>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="/login">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">


    <div id="content-wrapper">


      <div class="container-fluid">


<div class="container">

<div class="row mt-4">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Positif</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $positif['value'] }} Orang </div>
                    </div>
                    <div class="col-auto">
                      <img src="https://kawalcorona.com/uploads/sad-u6e.png" width="50" height="50" alt="Positif">
                    </div>
                  </div>
                </div>
              </div>
            </div>

  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sembuh</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sembuh['value'] }} Orang </div>
                    </div>
                    <div class="col-auto">
                      <img src="https://kawalcorona.com/uploads/happy-ipM.png" width="50" height="50" alt="Positif">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Meninggal</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $meninggal['value'] }} Orang</div>
                    </div>
                    <div class="col-auto">
                      <img src="https://kawalcorona.com/uploads/emoji-LWx.png" width="50" height="50" alt="Positif">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">INDONESIA</div>
                      <p> {{ $id[0]['positif'] }} Positif, {{$id[0]['sembuh'] }} Sembuh, {{ $id[0]['meninggal'] }} Meninggal </p>
                    </div>
                    <div class="col-auto">
                      <img src="https://kawalcorona.com/uploads/indonesia-PZq.png" width="50" height="50" alt="Positif">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>   

<!-- Tabel -->
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DATA KASUS COVID-19 DI BERBAGAI PROVINSI DI INDONESIA</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 15px;">No</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 246px;">Provinsi</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Positif</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 100px;">Sembuh</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 100px;"> Meninggal </th></tr>
                  </thead>
                  <tbody>


                    @php
                      $no = 1
                    @endphp

                    <?php
                        for ($i= 0; $i <=23; $i++){

                        ?>

                  <tr role="row" class="odd">
                      <td class="sorting_1"> {{ $no++ }} </td>
                      <td> {{ $provinsi[$i]['attributes']['Provinsi'] }} </td>
                      <td> {{$provinsi[$i]['attributes']['Kasus_Posi']  }} </td>
                      <td> {{$provinsi[$i]['attributes']['Kasus_Semb']  }} </td>
                      <td> {{$provinsi[$i]['attributes']['Kasus_Meni']  }}</td>
                    </tr>
                     <?php 
                      } 
                    ?>


                  </tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
            </div>
          </div>







</div>

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Safitri | 2020</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('sb/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('sb/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('sb/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('sb/js/sb-admin.min.js')}}"></script>

</body>

</html>
