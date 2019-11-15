@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Sửa cấu hình website</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Sửa cấu hình</li>
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
				<form action="{{route('setting.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label> Logo </label><br>
							<img src="{{$model->logo}}" style="width: 150px; margin-bottom: 10px;" alt="">
							<input type="file" name="logo" value="{{old('logo', $model->logo)}}" class="form-control">
							@if($errors->first('logo'))
							<span class="text-danger">{{$errors->first('logo')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label> Logo chân trang </label><br>
							<img src="{{$model->logo_footer}}" style="width: 150px; margin-bottom: 10px;" alt="">
							<input type="file" name="logo_footer" value="{{old('logo_footer', $model->logo_footer)}}" class="form-control">
							@if($errors->first('logo_footer'))
							<span class="text-danger">{{$errors->first('logo_footer')}}</span>
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
							<label>Hotline</label>
							<input type="number" class="form-control" value="{{old('hotline', $model->hotline)}}" name="hotline" placeholder="Nhập hotline..">
							@if($errors->first('email'))
							<span class="text-danger">{{$errors->first('email')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Địa chi</label>
							<input type="text" class="form-control" value="{{old('address', $model->address)}}" name="address" placeholder="Nhập địa chỉ..">
							@if($errors->first('address'))
							<span class="text-danger">{{$errors->first('address')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Link bản đồ</label>
							<input type="text" class="form-control" value="{{old('maps', $model->maps)}}" name="maps" placeholder="Nhập link bản đồ..">
							@if($errors->first('maps'))
							<span class="text-danger">{{$errors->first('maps')}}</span>
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