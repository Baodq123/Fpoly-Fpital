<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Danh sách báo lỗi bài viết</h1>
      </div>
      <div class="col-sm-4"></div>
<!--       <div class="col-sm-2">
        <a href="<?php echo e(route('post.add')); ?>"><input type="submit" class="form-control btn btn-primary" value="Thêm bài viết"></a>
      </div> -->
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
                    <th>Danh mục</th>
                    <th>Tác giả</th>
                    <th>Thời gian báo lỗi</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $dsBaoLoi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><a href="#"><?php echo e($item->title); ?></a></td>
                    <td><?php echo e($item->category['name']); ?></td>
                    <td><?php echo e($item->author); ?></td>
                    <td><?php echo e($item->publish_date); ?></td>
                   <td><a href="<?php echo e(route('errorpost.remove', 
                    ['id' => $item->id])); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa báo lỗi số <?php echo e($item->id); ?>?')"><i style="color: #000" class="fas fa-trash"></i></a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\fpoly\ĐỒ ÁN TỐT NGHIỆP\adminlte\resources\views/post/errorpost.blade.php ENDPATH**/ ?>