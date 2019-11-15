@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm slide</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Thêm slide</li>
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
        <form action="{{route('slide.add')}}" method="post" enctype="multipart/form-data" novalidate>
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Slide</label>
              <input type="file" name="image" class="form-control" value="" placeholder="">
              @if($errors->first('image'))
              <span class="text-danger">{{$errors->first('image')}}</span>
              @endif
            </div>

            <div class="form-group">
              <label>Đường dẫn</label>
              <input type="text" class="form-control" name="path" value="{{old('path')}}" placeholder="Nhập đường dẫn..">
              @if($errors->first('path'))
              <span class="text-danger">{{$errors->first('path')}}</span>
              @endif
            </div>

            <div class="form-group">
              <label>Thứ tự</label>
              <input type="text" class="form-control" name="order" value="{{old('order')}}" placeholder="Nhập thứ tự..">
              @if($errors->first('order'))
              <span class="text-danger">{{$errors->first('order')}}</span>
              @endif
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