@extends('layouts.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm bác sĩ</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm bác sĩ</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<div class="card card-primary">
<!--               <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('doctor.add')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên bác sĩ</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Nhập tên bác sĩ..">
                    @if($errors->first('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Ảnh đại diện</label>
                    <input type="file" name="image" class="form-control" value="" placeholder="">
                    @if($errors->first('image'))
                    <span class="text-danger">{{$errors->first('image')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Nhập email..">
                    @if($errors->first('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>SĐT</label>
                    <input type="number" class="form-control" name="phone" value="{{old('phone')}}" placeholder="Nhập số điện thoại..">
                    @if($errors->first('phone'))
                    <span class="text-danger">{{$errors->first('phone')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Chuyên khoa</label>
                    <input type="text" class="form-control" name="major" value="{{old('major')}}" placeholder="Nhập chuyên khoa..">
                    @if($errors->first('major'))
                    <span class="text-danger">{{$errors->first('major')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Thông tin chi tiết</label>
                    <textarea class="textarea" name="info" placeholder="Nhập thông tin chi tiết.."
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('info'),('')}}</textarea>
                    @if($errors->first('info'))
                    <span class="text-danger">{{$errors->first('info')}}</span>
                    @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Đăng</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            @endsection