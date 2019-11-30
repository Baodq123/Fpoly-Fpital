@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Sửa thông tin bác sĩ</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Sửa bác sĩ</li>
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
        <form action="{{route('doctor.edit', ['id' => $model->id])}}" enctype="multipart/form-data" novalidate>
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Tên bác sĩ</label>
              <input type="text" class="form-control" value="{{old('name', $model->name)}}" name="name" placeholder="Nhập tên bác sĩ..">
              @if($errors->first('name'))
              <span class="text-danger">{{$errors->first('name')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label> Ảnh đại diện </label><br>
              <img src="{{$model->image}}" style="width: 150px; margin-bottom: 10px;" alt="">
              <input type="file" name="image" value="{{old('image', $model->image)}}" class="form-control">
              @if($errors->first('image'))
              <span class="text-danger">{{$errors->first('image')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" value="{{old('email', $model->email)}}" name="email" placeholder="Nhập email bác sĩ..">
              @if($errors->first('email'))
              <span class="text-danger">{{$errors->first('email')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>SĐT</label>
              <input type="number" class="form-control" value="{{old('phone', $model->phone)}}" name="phone" placeholder="Nhập số điện thoại bác sĩ..">
              @if($errors->first('phone'))
              <span class="text-danger">{{$errors->first('phone')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Chuyên khoa</label>
              <input type="text" class="form-control" value="{{old('major', $model->major)}}" name="major" placeholder="Nhập chuyên khoa bác sĩ..">
              @if($errors->first('major'))
              <span class="text-danger">{{$errors->first('major')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Thông tin chi tiết</label>
              <textarea class="textarea" name="info" placeholder="Nhập thông tin chi tiết.."
              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! old('info', $model->info)!!}</textarea>
              @if($errors->first('info'))
              <span class="text-danger">{{$errors->first('info')}}</span>
              @endif
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Sửa</button>
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