@extends('layouts.main')
@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        @if(Auth::check())
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
              src="{{Auth::user()->image}}"
              alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
            <p class="text-muted text-center">
            </p>
            
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Thông tin cá nhân</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Email</strong>

            <p class="text-muted">
              {{Auth::user()->email}}
            </p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Số điện thoại</strong>

            <p class="text-muted">{{Auth::user()->phone}}</p>
            
            <hr>
            
            <strong><i class="far fa-file-alt mr-1"></i> Chức vụ</strong>

            <p class="text-muted">
              @if( Auth::user()->role_id == 2)
              {{ "Admin" }}
              @elseif( Auth::user()->role_id == 1)
              {{ "CTV" }}
              @elseif( Auth::user()->role_id == 0)
              {{ "Thành viên" }}
              @endif
            </p>
            <a href="{{route('user.edit', ['id' => Auth::user()->id])}}" class="btn btn-primary btn-block"><b>Thay đổi thông tin cá nhân</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        @endif
        <!-- /.card -->
      </div>
      <!-- /.col -->

      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection