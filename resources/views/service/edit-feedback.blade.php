@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Kiểm duyệt đánh giá dịch vụ</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Đánh giá dịch vụ</li>
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
        <form action="{{route('feedback.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label> Người đánh giá </label>
              <input type="text" class="form-control" value="{{old('user_id', $model->user->id)}}" name="user_id" readonly="" hidden="">
              <input type="text" class="form-control" value="{{old('user_id', $model->user->name)}}" readonly="">
            </div>
            <div class="form-group">
              <label> Dịch vụ </label>
              <input type="text" class="form-control" value="{{old('service_id', $model->service->id)}}" name="service_id" readonly="" hidden="">
              <input type="text" class="form-control" value="{{old('service_id', $model->service->name)}}" readonly="">
            </div>
            <div class="form-group">
              <label> Bác sĩ </label>
              <input type="text" class="form-control" value="{{old('doctor_id', $model->doctor->id)}}" name="doctor_id" readonly="" hidden="">
              <input type="text" class="form-control" value="{{old('doctor_id', $model->doctor->name)}}" readonly="">
            </div>
            <div class="form-group">
              <label>Đánh giá</label>
              <input type="text" class="form-control" value="{{old('rate', $model->rate)}}" name="rate" readonly="">
            </div>
            <div class="form-group">
              <label>Nội dung đánh giá</label>
              <textarea class="textarea" readonly name="message" 
              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! old('message', $model->message)!!}</textarea>
            </div>
            <div class="form-group">
              <label>Kiểm duyệt</label><br>
              <?php if ($model->status == '0'): ?>
                  <input type="radio" name="status" value="1"> Hiện
                  <input style="margin-left: 20px;" type="radio" name="status" value="0" checked> Ẩn
                <?php endif ?>
                <?php if ($model->status == '1'): ?>
                  <input type="radio" name="status" value="1" checked> Hiện
                  <input style="margin-left: 20px;" type="radio" name="status" value="0"> Ẩn
                <?php endif ?>
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