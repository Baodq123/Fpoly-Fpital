@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Danh sách dịch vụ</h1>
      </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-2">
        <a href="{{route('service.add')}}"><input type="submit" class="form-control btn btn-primary" value="Thêm dịch vụ"></a>
      </div>
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
                    <th>Tên dịch vụ</th>
                    <th>Ảnh minh họa</th>
                    <th>Giá</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dsDichVu as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                      <img src="{{$item->image}}" alt="" width="100px;">
                    </td>
                    <td>{{$item->price}}</td>
                    <td><a href="{{route('service.edit', ['id' => $item->id])}}"><i style="color: #000" class="fas fa-edit"></i></a></td>
                    <td><a href="{{route('service.remove', 
                      ['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa dịch vụ {{$item->name}}?')"><i style="color: #000" class="fas fa-trash"></i></a></td>
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