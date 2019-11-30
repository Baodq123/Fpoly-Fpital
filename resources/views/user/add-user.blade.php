@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm tài khoản</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Thêm tài khoản</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-i  nfo">
        <form action="{{route('user.add')}}" method="post" enctype="multipart/form-data" novalidate>
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Họ và tên</label>
              <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Nhập họ và tên..">
              @if($errors->first('name'))
              <span class="text-danger">{{$errors->first('name')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder="Nhập email..">
              @if($errors->first('email'))
              <span class="text-danger">{{$errors->first('email')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Mật khẩu</label>
              <input type="password" class="form-control" value="{{old('password')}}" name="password" placeholder="Nhập mật khẩu..">
              @if($errors->first('password'))
              <span class="text-danger">{{$errors->first('password')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Ảnh đại diện</label>
              <input type="file" name="image" class="form-control" value="" placeholder="">
              @if($errors->first('image'))
              <span class="text-danger">{{$errors->first('image')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>SĐT</label>
              <input type="number" class="form-control" value="{{old('phone')}}" name="phone" placeholder="Nhập số điện thoại..">
              @if($errors->first('phone'))
              <span class="text-danger">{{$errors->first('phone')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Phân quyền</label>
              <select class="custom-select" name="role_id" value="{{old('role_id')}}">
                <option value="0">Thành viên</option>
                <option value="1">CTV</option>
                <option value="2">Admin</option>
              </select>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Đăng</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
<!-- /.content -->
<script src="AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
@endsection