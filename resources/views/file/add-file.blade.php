@extends('layouts.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm hồ sơ bệnh nhân</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm hồ sơ bệnh nhân</li>
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
              <form role="form" action="{{route('file.add')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên bệnh nhân</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Nhập tên bệnh nhân..">
                    @if($errors->first('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Ảnh</label>
                    <input type="file" name="image" class="form-control" value="" placeholder="">
                    @if($errors->first('image'))
                    <span class="text-danger">{{$errors->first('image')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Nhập địa chỉ..">
                    @if($errors->first('address'))
                    <span class="text-danger">{{$errors->first('address')}}</span>
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
                    <input type="date" class="form-control" name="date" value="{{old('date')}}" placeholder="Nhập ngày khám..">
                    @if($errors->first('date'))
                    <span class="text-danger">{{$errors->first('date')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Ghi chú</label>
                    <input type="text" class="form-control" name="note" value="{{old('note')}}" placeholder="Nhập ghi chú..">
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