@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Sửa dịch vụ</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
					<li class="breadcrumb-item active">Sửa dịch vụ</li>
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
				<form action="{{route('service.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label>Tên dịch vụ</label>
							<input type="text" class="form-control" value="{{old('name', $model->name)}}" name="name" placeholder="Nhập tên dịch vụ..">
							@if($errors->first('name'))
							<span class="text-danger">{{$errors->first('name')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label> Ảnh minh họa </label><br>
							<img src="{{$model->image}}" style="width: 150px; margin-bottom: 10px;" alt="">
							<input type="file" name="image" value="{{old('image', $model->image)}}" class="form-control">
							@if($errors->first('image'))
							<span class="text-danger">{{$errors->first('image')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Giá</label>
							<input type="number" class="form-control" value="{{old('price', $model->price)}}" name="price" placeholder="Nhập tiêu đề.."> @if($errors->first('price'))
							<span class="text-danger">{{$errors->first('price')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Nội dung</label>
							<textarea class="textarea" name="content" placeholder="Nhập nội dung bài viết.."
							style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! old('content', $model->content)!!}</textarea>
							@if($errors->first('content'))
							<span class="text-danger">{{$errors->first('content')}}</span>
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