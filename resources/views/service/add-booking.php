@extends('layouts.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm đặt lịch khám</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm đặt lịch khám</li>
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
              <form role="form" action="{{route('booking.add')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Họ và tên</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Nhập họ và tên..">
                    @if($errors->first('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
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
                    <label>Ngày khám</label>
                    <input type="date" class="form-control" name="publish_date" value="{{old('publish_date')}}" placeholder="Nhập ngày khám..">
                    @if($errors->first('publish_date'))
                    <span class="text-danger">{{$errors->first('publish_date')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Dịch vụ khám</label>
                    <input type="text" class="form-control" name="major" value="{{old('major')}}" placeholder="Nhập dịch vụ khám..">
                    @if($errors->first('major'))
                    <span class="text-danger">{{$errors->first('major')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Bác sĩ</label>
                    <input type="text" class="form-control" name="doctor" value="{{old('doctor')}}" placeholder="Nhập tên bác sĩ..">
                    @if($errors->first('doctor'))
                    <span class="text-danger">{{$errors->first('doctor')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Ghi chú</label>
                    <input type="note" class="form-control" name="note" value="{{old('note')}}" placeholder="Nhập ghi chú..">
                    @if($errors->first('note'))
                    <span class="text-danger">{{$errors->first('note')}}</span>
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