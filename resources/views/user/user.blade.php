@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Danh sách tài khoản</h1>
      </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-2">
        <a href="{{route('user.add')}}"><input type="submit" class="form-control btn btn-primary" value="Thêm tài khoản"></a>
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
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Ảnh đại diện</th>
                    <th>SĐT</th>
                    <th>Phân quyền</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dsUser as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                      <img src="{{$item->image}}" width="50px">
                    </td>
                    <td>{{$item->phone}}</td>
                    <td>
                      <?php if ($item->role_id == 0): ?>
                        Thành viên 
                      <?php endif ?>
                      <?php if ($item->role_id == 1): ?>
                       CTV
                     <?php endif ?>
                     <?php if ($item->role_id == 2): ?>
                       Admin
                     <?php endif ?>
                   </td>
                   <td><a href="{{route('user.edit', ['id' => $item->id])}}"><i style="color: #000" class="fas fa-edit"></i></a></td>
                   <td><a href="{{route('user.remove', 
                    ['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản {{$item->email}}?')"><i style="color: #000" class="fas fa-trash"></i></a></td>
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