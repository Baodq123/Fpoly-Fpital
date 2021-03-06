@extends('layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tất cả bài viết</h1>
      </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-2">
        <a href="{{route('post.add')}}"><input type="submit" class="form-control btn btn-primary" value="Thêm bài viết"></a>
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
                    <th>Tiêu đề</th>
                    <th>Ảnh</th>
                    <th>Danh mục</th>
                    <th>Ngày đăng</th>
                    <th>Tác giả</th>
                    <th>Lượt xem</th>
                    <th>Trạng thái</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dsBaiViet as $item)
                  <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>
                      <img src="{{$item->image}}" width="100">
                    </td>
                    <td>{{$item->category->name}}</td>
                    <td>{{$item->publish_date}}</td>
                    <td>{{$item->author}}</td>
                    <td>{{$item->views}}</td>
                    <td>
                      <?php if ($item->status == 0): ?>
                        Ẩn 
                      <?php endif ?>
                      <?php if ($item->status == 1): ?>
                       Hiển thị
                     <?php endif ?>
                   </td>
                   <td><a href="{{route('post.edit', ['id' => $item->id])}}"><i style="color: #000" class="fas fa-edit"></i></a></td>
                   <td><a href="{{route('post.remove', 
                    ['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết số {{$item->id}}?')"><i style="color: #000" class="fas fa-trash"></i></a></td>
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