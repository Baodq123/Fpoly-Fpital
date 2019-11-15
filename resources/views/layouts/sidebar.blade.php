<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="AdminLTE/index.html" class="brand-link">
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
          <img src="AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="AdminLTE/#" class="d-block">Thế Kỷ</a>
        </div>
      </div>

            <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="AdminLTE/#" class="nav-link">
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
            <a href="AdminLTE/#" class="nav-link">
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
            <a href="AdminLTE/#" class="nav-link">
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