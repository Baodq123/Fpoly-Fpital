@extends('layouts.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm lịch khám</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm lịch khám</li>
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
                    <label>Số điện thoại</label>
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
                    <label for="">Dịch vụ</label>
                    <select name="service_id" class="form-control" value="{{old('service_id')}}">
                      @foreach($services as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Bác sĩ</label>
                    <select name="doctor_id" class="form-control" value="{{old('doctor_id')}}">
                      @foreach($doctors as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Ghi chú</label>
                    <textarea id="textarea" class="ckeditor" name="note" placeholder="Nhập nội dung bài viết.."
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('note'),('')}}</textarea>
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