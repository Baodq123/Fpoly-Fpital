@extends('layouts.main')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm trang</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm trang</li>
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
              <form role="form" action="{{route('page.add')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên trang</label>
                    <input type="text" class="form-control" name="name" value="{{old('page')}}" placeholder="Nhập tên trang..">
                    @if($errors->first('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Đường dẫn</label>
                    <input type="text" class="form-control" name="slug" value="{{old('slug')}}" placeholder="Nhập đường dẫn..">
                    @if($errors->first('slug'))
                    <span class="text-danger">{{$errors->first('slug')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="textarea" name="content" placeholder="Nhập nội dung bài viết.."
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{old('content'),('')}}</textarea>
                    @if($errors->first('content'))
                    <span class="text-danger">{{$errors->first('content')}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Ngày tạo</label>
                    <input type="date" class="form-control" name="date" value="{{old('date')}}" placeholder="Nhập ngày tạo..">
                    <small>
                      Thời gian hiện tại: {{Carbon\Carbon::now('Asia/Ho_Chi_Minh')->format('h:i:s A, d-m-Y')}}
                    </small><br>
                    @if($errors->first('date'))
                    <span class="text-danger">{{$errors->first('date')}}</span>
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