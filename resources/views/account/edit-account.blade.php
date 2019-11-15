@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Sửa tài khoản</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Sửa tài khoản</li>
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
				<form action="{{route('account.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
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
							<input type="text" class="form-control" value="{{old('email', $model->email)}}" name="email" placeholder="Nhập tiêu đề..">
							@if($errors->first('email'))
							<span class="text-danger">{{$errors->first('email')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Mật khẩu</label>
							<input type="password" class="form-control" value="{{old('password', $model->password)}}" name="password" placeholder="Nhập mật khẩu..">
							@if($errors->first('password'))
							<span class="text-danger">{{$errors->first('password')}}</span>
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
							<label>SĐT</label>
							<input type="text" class="form-control" value="{{old('phone', $model->phone)}}" name="phone" placeholder="Nhập số điện thoại..">
							@if($errors->first('phone'))
							<span class="text-danger">{{$errors->first('email')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Phân quyền</label>
							<select class="custom-select" name="rule" value="{{old('rule', $model->rule)}}">
								<option value="0">Thành viên</option>
								<option value="1">CTV</option>
								<option value="2">Admin</option>
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