@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Sửa slide</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Sửa slide</li>
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
				<form action="{{route('slide.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label> Ảnh </label><br>
							<img src="{{$model->image}}" style="width: 150px; margin-bottom: 10px;" alt="">
							<input type="file" name="image" value="{{old('image', $model->image)}}" class="form-control">
							@if($errors->first('image'))
							<span class="text-danger">{{$errors->first('image')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Đường dẫn</label>
							<input type="text" class="form-control" value="{{old('path', $model->path)}}" name="path" placeholder="Nhập đường dẫn..">
							@if($errors->first('path'))
							<span class="text-danger">{{$errors->first('path')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Thứ tự</label>
							<input type="text" class="form-control" value="{{old('order', $model->order)}}" name="order" placeholder="Nhập thứ tự..">
							@if($errors->first('Thứ tự'))
							<span class="text-danger">{{$errors->first('Thứ tự')}}</span>
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