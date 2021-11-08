<?php
include("koneksi.php");
$query = mysqli_query($conn, "select * from node_ipal_4 order by id desc limit 1");
$latest = mysqli_fetch_array($query);
$querytab = mysqli_query($conn, "select * from node_ipal_4 order by id desc limit 10");
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="10">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IPAL IoT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">IPAL IoT</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
        <div class="row">
          <!-- field 1 -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $latest['pH'];?></h3>
                <p>Sensor pH</p>
              </div>
            </div>
          </div>
          <!-- field 2 -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo $latest['suhu'];?></h3>
                <p>Sensor Suhu</p>
              </div>
            </div>
          </div>
          <!-- field 3 -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $latest['TSS'];?></h3>
                <p>Sensor TSS</p>
              </div>
            </div>
          </div>
          <!-- field 4 -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $latest['DO'];?></h3>
                <p>Sensor DO</p>
              </div>
            </div>
          </div>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Update data terakhir <?php echo $latest['datetime']; ?></h3>
                </div>
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-responsive table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>pH</th>
                        <th>Suhu</th>
                        <th>TSS</th>
                        <th>DO</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $No = 0;
                        while($d = mysqli_fetch_assoc($querytab)){ ?>
                        <tr>
                          <td><?php echo ++$No; ?></td>
                          <td><?php echo $d["datetime"]; ?></td>
                          <td><?php echo $d["pH"]; ?></td>
                          <td><?php echo $d["suhu"]; ?></td>
                          <td><?php echo $d["TSS"]; ?> </td>
                          <td><?php echo $d["DO"]; ?> </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </section>
  </div>
  <footer class="main-footer">
    <strong>IPAL Internet of Things.</strong>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
</body>
</html>
