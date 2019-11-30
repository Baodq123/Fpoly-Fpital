@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Sửa hồ sơ bệnh nhân</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Sửa hồ sơ bệnh nhân</li>
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
        <form action="{{route('file.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Tên bệnh nhân</label>
              <input type="text" class="form-control" value="{{old('name', $model->name)}}" name="name" placeholder="Nhập tên bác sĩ..">
              @if($errors->first('name'))
              <span class="text-danger">{{$errors->first('name')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label> Ảnh </label><br>
              <img src="{{$model->image}}" style="width: 150px; margin-bottom: 10px;" alt="">
              <input type="file" name="image" value="{{old('image', $model->image)}}" class="form-control">
              @if($errors->first('image'))
              <span class="text-danger">{{$errors->first('image')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Địa chỉ</label>
              <input type="text" class="form-control" value="{{old('address', $model->address)}}" name="address" placeholder="Nhập địa chỉ..">
              @if($errors->first('address'))
              <span class="text-danger">{{$errors->first('address')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>SĐT</label>
              <input type="number" class="form-control" value="{{old('phone', $model->phone)}}" name="phone" placeholder="Nhập số điện thoại..">
              @if($errors->first('phone'))
              <span class="text-danger">{{$errors->first('phone')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Ngày khám</label>
              <input type="date" class="form-control" value="{{old('date', $model->date)}}" name="date" placeholder="Nhập ngày khám..">
              @if($errors->first('date'))
              <span class="text-danger">{{$errors->first('date')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label>Ghi chú</label>
              <input type="text" class="form-control" value="{{old('note', $model->note)}}" name="note" placeholder="Nhập ghi chú..">
              @if($errors->first('note'))
              <span class="text-danger">{{$errors->first('note')}}</span>
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