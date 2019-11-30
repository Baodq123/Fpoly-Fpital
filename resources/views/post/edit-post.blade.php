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
							<img src="{{$model->feature_images}}" style="width: 150px; margin-bottom: 10px;" alt="">
							<input type="file" name="feature_images" value="{{old('feature_images', $model->feature_images)}}" class="form-control">
							@if($errors->first('feature_images'))
							<span class="text-danger">{{$errors->first('feature_images')}}</span>
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
							<label>Đường dẫn</label>
							<input type="text" class="form-control" value="{{old('slug', $model->slug)}}" name="slug" placeholder="Nhập đường dẫn..">
							@if($errors->first('slug'))
							<span class="text-danger">{{$errors->first('slug')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Nội dung</label>
							<textarea id="textarea" class="ckeditor" name="content" placeholder="Nhập nội dung bài viết.."
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
							<span class="text-danger">{{$errors->first('publish_date')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label> Tác giả </label>
							<select name="author" class="form-control">
								@foreach ($users as $us)
								<option value="{{$us->name}}"
									@if($us->name == $model->author)
									selected
									@endif
									>{{$us->name}}</option>
									@endforeach
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
								<?php if ($model->status == '0'): ?>
									<input type="radio" name="status" value="1"> Hiện
									<input style="margin-left: 20px;" type="radio" name="status" value="0" checked> Ẩn
								<?php endif ?>
								<?php if ($model->status == '1'): ?>
									<input type="radio" name="status" value="1" checked> Hiện
									<input style="margin-left: 20px;" type="radio" name="status" value="0"> Ẩn
								<?php endif ?>
						
<!-- 
									<div class="icheck-primary d-inline" style="margin-left: 20px;">
										<input type="checkbox" id="checkboxPrimary2"
										@if($model->status)
										checked 
										@endif	
										name="status" value="0">
										<label for="checkboxPrimary1">
										</label>
									</div>
									<label for="checkboxPrimary3">
										Ẩn
									</label> -->
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
		<script type="text/javascript">  
			CKEDITOR.replace( '#textarea' );  
		</script> 
		<script src="/ckeditor/ckeditor.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		@endsection