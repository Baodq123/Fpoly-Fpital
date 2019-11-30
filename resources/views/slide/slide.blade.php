@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Danh sách slide</h1>
      </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-2">
        <a href="{{route('slide.add')}}"><input type="submit" class="form-control btn btn-primary" value="Thêm slide"></a>
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
                    <th>Slide</th>
                    <th>Vị trí</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($dsSlide as $item)
                  <tr>
                    <th>{{$item->id}}</th>
                    <td>
                      <img src="{{$item->image}}" width="100">
                    </td>
                    <td>{{$item->order}}</td>
                    <td><a href="{{route('slide.edit', ['id' => $item->id])}}"><i style="color: #000" class="fas fa-edit"></i></a></td>
                    <td><a href="{{route('slide.remove', 
                      ['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa slide số {{$item->id}}?')"><i style="color: #000" class="fas fa-trash"></i></a></td>
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