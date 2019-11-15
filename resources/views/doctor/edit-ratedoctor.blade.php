@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Kiểm duyệt đánh giá bác sĩ</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Đánh giá bác sĩ</li>
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
        <form action="{{route('ratedoctor.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label>Tên người đánh giá</label>
              <input type="text" class="form-control" value="{{old('name', $model->name)}}" name="name" readonly="">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" value="{{old('email', $model->email)}}" name="email" readonly="">
            </div>
            <div class="form-group">
              <label>Tên bác sĩ</label>
              <input type="text" class="form-control" value="{{old('doctor', $model->doctor)}}" name="doctor" readonly="">
            </div>
            <div class="form-group">
              <label>Chuyên khoa</label>
              <input type="text" class="form-control" value="{{old('major', $model->major)}}" name="major" placeholder="Nhập chuyên khoa bác sĩ.." readonly="">
            </div>
            <div class="form-group">
              <label>Đánh giá</label>
              <input type="text" class="form-control" value="{{old('rate', $model->rate)}}" name="rate" readonly="">
            </div>
            <div class="form-group">
              <label>Nội dung</label>
              <textarea class="textarea" readonly name="content" 
              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! old('content', $model->content)!!}</textarea>
            </div>
            <div class="form-group">
              <label>Kiểm duyệt</label>
              <select class="custom-select" name="status" value="{{old('status')}}">
                <option value="0">Ẩn</option>
                <option value="1">Hiện</option>
              </select>
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