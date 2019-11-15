  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trang chủ</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="AdminLTE/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="AdminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="AdminLTE/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="AdminLTE/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- SEARCH FORM -->

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if(Auth::check())
              <img style="width: 30px; height: 30px; border-radius: 50px;" src="{{Auth::user()->image}}" class="user-image" alt="">
              <span class="hidden-xs">{{Auth::user()->name}}</span>
              @endif
            </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item dropdown-footer">Thông tin cá nhân</a>
            <a href="{{route('logout')}}" class="dropdown-item dropdown-footer">Đăng xuất</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="AdminLTE/dist/img/fpital-logo-white.png"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light"> Fpital Hospital</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
             @if(Auth::check())
            <img style="width: 30px; height: 30px; border-radius: 50px;" src="{{Auth::user()->image}}" class="user-image" alt="">
            @endif
          </div>
          <div class="info">
             @if(Auth::check())
              <span style="color: white;" class="d-block">{{Auth::user()->name}}</span>
              @endif
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Bài viết
                <i class="fas fa-angle-left right"></i>
                <!--                 <span class="badge badge-info right">4</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('post')}}" class="nav-link">
                  <p>Tất cả bài viết</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('post.add')}}" class="nav-link">
                  <p>Thêm bài viết</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('errorpost')}}" class="nav-link">
                  <p>Báo lỗi bài viết</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category')}}" class="nav-link">
                  <p>Danh mục</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Bác sỹ
                <i class="fas fa-angle-left right"></i>
                <!--                 <span class="badge badge-info right">3</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('doctor')}}" class="nav-link">
                  <p>Danh sách bác sỹ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('doctor.add')}}" class="nav-link">
                  <p>Thêm bác sỹ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('ratedoctor')}}" class="nav-link">
                  <p>Đánh giá bác sỹ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-circle"></i>
              <p>
                Dịch vụ
                <i class="fas fa-angle-left right"></i>
                <!--                 <span class="badge badge-info right">4</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('service')}}" class="nav-link">
                  <p>Tất cả dịch vụ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('service.add')}}" class="nav-link">
                  <p>Thêm dịch vụ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('rateservice')}}" class="nav-link">
                  <p>Đánh giá dịch vụ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('booking')}}" class="nav-link">
                  <p>Đặt lịch khám</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Hồ sơ
                <i class="fas fa-angle-left right"></i>
                <!--                 <span class="badge badge-info right">4</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('file')}}" class="nav-link">
                  <p>Hồ sơ bệnh nhân</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('file.add')}}" class="nav-link">
                  <p>Thêm hồ sơ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('menu')}}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Menu
                <!--                 <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('page')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Trang
                <!--                 <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('comment')}}" class="nav-link">
              <i class="nav-icon fas fa-comment"></i>
              <p>
                Bình luận
                <!--                 <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('contact')}}" class="nav-link">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                Liên hệ
                <!--                 <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('slide')}}" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Slide
                <!--                 <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('account')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Tài khoản
                <!--                 <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('setting')}}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Cấu hình
                <!--                 <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><h5>Trang chủ</h5>
              </ol>
            </div>
            <div class="col-sm-6">
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-header -->

      

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="nav-icon fas fa-copy"></i></span>

                <div class="info-box-content">
                  <a href="{{route('post')}}"><span class="info-box-text">Tổng số bài viết</span></a>
                  <span class="info-box-number">
                    <?php 
                    $countpost = DB::table('posts')->count();
                    echo $countpost;
                    ?>
                    bài viết
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file"></i></span>

                <div class="info-box-content">
                  <a href="{{route('file')}}"><span class="info-box-text">Tổng số hồ sơ</span></a>
                  <span class="info-box-number">
                    <?php 
                    $countfile = DB::table('files')->count();
                    echo $countfile;
                    ?>
                    hồ sơ
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                  <a href="{{route('comment')}}"><span class="info-box-text">Tổng số bình luận</span></a>
                  <span class="info-box-number">
                    <?php 
                    $countcmt = DB::table('comments')->count();
                    echo $countcmt;
                    ?>
                    bình luận
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <a href="{{route('contact')}}"><span class="info-box-text">Tổng số liên hệ</span></a>
                  <span class="info-box-number">
                    <?php 
                    $countcontact = DB::table('contacts')->count();
                    echo $countcontact;
                    ?>
                    liên hệ
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
<!--             <?php 
            $one_week_ago = Carbon\Carbon::now()->subDays(6)->format('Y-m-d');
            $countpost1 = DB::table('posts')->where('publish_date', '>=', $one_week_ago)->count();
            echo $countpost1;
            ?>
            bài viết -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="AdminLTE/http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="AdminLTE/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="AdminLTE/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="AdminLTE/plugins/moment/moment.min.js"></script>
  <script src="AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="AdminLTE/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="AdminLTE/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="AdminLTE/dist/js/demo.js"></script>
</body>
</html>
