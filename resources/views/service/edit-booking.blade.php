@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Sửa đặt lịch khám</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
					<li class="breadcrumb-item active">Sửa đặt lịch khám</li>
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
				<form action="{{route('booking.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label>Họ và tên</label>
							<input type="text" class="form-control" value="{{old('name', $model->name)}}" name="name" placeholder="Nhập tiêu đề..">
							@if($errors->first('name'))
							<span class="text-danger">{{$errors->first('name')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" value="{{old('email', $model->email)}}" name="email" placeholder="Nhập email..">
							@if($errors->first('email'))
							<span class="text-danger">{{$errors->first('email')}}</span>
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
							<input type="date" name="publish_date" class="form-control" value="{{old('publish_date', $model->publish_date)}}">
							<small>
								Thời gian hiện tại: {{Carbon\Carbon::now('Asia/Ho_Chi_Minh')->format('h:i:s A, d-m-Y')}}
							</small><br>
							@if($errors->first('publish_date'))
							<span class="text-danger">{{$errors->first('publish_date')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Dịch vụ khám</label>
							<input type="text" class="form-control" value="{{old('service', $model->service)}}" name="service" placeholder="Nhập tên dịch vụ..">
							@if($errors->first('service'))
							<span class="text-danger">{{$errors->first('service')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Bác sĩ khám</label>
							<input type="text" class="form-control" value="{{old('doctor', $model->doctor)}}" name="doctor" placeholder="Nhập tên bác sĩ..">
							@if($errors->first('doctor'))
							<span class="text-danger">{{$errors->first('doctor')}}</span>
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