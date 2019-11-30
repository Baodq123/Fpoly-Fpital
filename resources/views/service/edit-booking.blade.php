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
							<input type="date" name="date" class="form-control" value="{{old('date', $model->date)}}">
							<small>
								Thời gian hiện tại: {{Carbon\Carbon::now('Asia/Ho_Chi_Minh')->format('h:i:s A, d-m-Y')}}
							</small><br>
							@if($errors->first('publish_date'))
							<span class="text-danger">{{$errors->first('publish_date')}}</span>
							@endif
						</div>
						<div class="form-group">
							<label>Dịch vụ khám</label>
							<select name="service_id" class="form-control">
								@foreach ($services as $ser)
								<option value="{{$ser->id}}"
									@if($ser->id == $model->service_id)
									selected
									@endif
									>{{$ser->name}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label>Bác sĩ</label>
								<select name="doctor_id" class="form-control">
									@foreach ($doctors as $doc)
									<option value="{{$doc->id}}"
										@if($doc->id == $model->doctor_id)
										selected
										@endif
										>{{$doc->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Ghi chú</label>
									<textarea id="note" class="ckeditor" name="note" placeholder="Nhập nội dung bài viết.."
									style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! old('note', $model->note)!!}</textarea>
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