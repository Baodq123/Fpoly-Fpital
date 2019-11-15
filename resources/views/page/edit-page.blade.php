@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Sửa trang</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Sửa trang</li>
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
				<form action="{{route('page.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label>Tên trang</label>
							<input type="text" class="form-control" value="{{old('name', $model->name)}}" name="name" placeholder="Nhập tên trang..">
							@if($errors->first('name'))
							<span class="text-danger">{{$errors->first('name')}}</span>
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
							<label>Ngày tạo</label>
							<input type="text" class="form-control" value="{{old('date', $model->date)}}" name="date" placeholder="Nhập đường dẫn..">
							<small>
								Thời gian hiện tại: {{Carbon\Carbon::now('Asia/Ho_Chi_Minh')->format('h:i:s A, d-m-Y')}}
							</small><br>
							@if($errors->first('date'))
							<span class="text-danger">{{$errors->first('date')}}</span>
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
						<button type="submit" class="btn btn-primary">Sửa trang</button>
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