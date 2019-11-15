@extends('layouts.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm menu</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm menu</li>
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
              <form role="form" action="{{route('menu.add')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên menu</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Nhập tên menu..">
                    @if($errors->first('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Đường dẫn</label>
                    <input type="text" class="form-control" name="path" value="{{old('path')}}" placeholder="Nhập đường dẫn..">
                    @if($errors->first('path'))
                    <span class="text-danger">{{$errors->first('path')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Vị trí</label>
                    <input type="text" class="form-control" name="order" value="{{old('order')}}" placeholder="Nhập vị trí..">
                    @if($errors->first('order'))
                    <span class="text-danger">{{$errors->first('order')}}</span>
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