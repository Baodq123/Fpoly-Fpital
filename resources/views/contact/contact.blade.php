@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách liên hệ</h1>
          </div>
          <div class="col-sm-4"></div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
<!--             <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ và tên</th>
                  <th>Email</th>
                  <th>SĐT</th>
                  <th>Nội dung liên hệ</th>
                  <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dsContact as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->phone}}</td>
                  <td>{{$item->content}}</td>
                   <td><a href="{{route('contact.remove', 
                    ['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa liên hệ số {{$item->id}}?')"><i style="color: #000" class="fas fa-trash"></i></a></td>
                </tr>
                @endforeach
                </tbody>
<!--                 <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  @endsection