@extends('layouts.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm dịch vụ</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm dịch vụ</li>
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
              <form role="form" action="{{route('service.add')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên dịch vụ</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Nhập tên dịch vụ..">
                    @if($errors->first('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Ảnh minh họa</label>
                    <input type="file" name="image" class="form-control" value="" placeholder="">
                    @if($errors->first('image'))
                    <span class="text-danger">{{$errors->first('image')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="price" value="{{old('price')}}" placeholder="Nhập giá dịch vụ..">
                    @if($errors->first('price'))
                    <span class="text-danger">{{$errors->first('price')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="textarea" name="content" placeholder="Nhập nội dung dịch vụ.."
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('content'),('')}}</textarea>
                    @if($errors->first('content'))
                    <span class="text-danger">{{$errors->first('content')}}</span>
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