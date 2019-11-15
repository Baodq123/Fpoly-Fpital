@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Sửa bài viết</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Sửa bài viết</li>
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
				<form action="{{route('post.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label>Tiêu đề</label>
							<input type="text" class="form-control" value="{{old('title', $model->title)}}" name="title" placeholder="Nhập tiêu đề..">
							@if($errors->first('title'))
							<span class="text-danger">{{$errors->first('title')}}</span>
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
							<label>Miêu tả</label>
							<textarea class="form-control" name="description" value="{{old('description', $model->description)}}" rows="3" placeholder="Nhập giới thiệu..">{!! old('description', $model->description)!!}</textarea>
							@if($errors->first('description'))
							<span class="text-danger">{{$errors->first('description')}}</span>
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
						<div class="form-group">
							<label>Ngày đăng</label>
							<input type="date" name="publish_date" class="form-control" value="{{old('publish_date', $model->publish_date)}}">
							<small>
								Thời gian hiện tại: {{Carbon\Carbon::now('Asia/Ho_Chi_Minh')->format('h:i:s A, d-m-Y')}}
							</small><br>
							@if($errors->first('publish_date'))
							<span class="text-danger">{{$errors->first('publish_date', $model->publish_date)}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Tác giả</label>
							<select class="custom-select" name="author" value="{{old('author')}}">
								<option value="Thế Kỷ">Thế Kỷ</option>
								<option value="Quốc Bảo">Quốc Bảo</option>
							</select>
						</div>
						<div class="form-group">
							<label> Danh mục </label>
							<select name="cate_id" class="form-control">
								@foreach ($cates as $ca)
								<option value="{{$ca->id}}"
									@if($ca->id == $model->cate_id)
									selected
									@endif
									>{{$ca->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"
									@if($model->status)
									checked 
									@endif	
									name="status" value="1">
								</label>
								<label class="form-check-label" for="exampleCheck1">Xuất bản</label>
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Đăng bài viết</button>
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