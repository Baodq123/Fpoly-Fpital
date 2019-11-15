@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Cấu hình website</h1>
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
                    <th>Logo</th>
                    <th>Logo chân trang</th>
                    <th>Email</th>
                    <th>Hotline</th>
                    <th>Địa chỉ</th>
                    <th>Link bản đồ</th>
                    <th>Sửa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dsSetting as $item)
                  <tr>
                    <td>
                      <img src="{{$item->logo}}" width="100">
                    </td>
                    <td>
                      <img src="{{$item->logo_footer}}" width="100">
                    </td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->hotline}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->maps}}</td>
                   <td><a href="{{route('setting.edit', ['id' => $item->id])}}"><i style="color: #000" class="fas fa-edit"></i></a></td>
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