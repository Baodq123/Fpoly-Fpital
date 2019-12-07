<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách bình luận</h1>
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
                  <th>Tên người bình luận</th>
                  <th>Email</th>
                  <th>Nội dung bình luận</th>
                  <th>Bài viết</th>
                  <th>Kiểm duyệt</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $dsComment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($item->id); ?></td>
                  <td><?php echo e($item->name); ?></td>
                  <td><?php echo e($item->email); ?></td>
                  <td><?php echo e($item->content); ?></td>
                  <td><a href="#"><?php echo e($item->title); ?></a></td>
                  <td>
                      <?php if ($item->status == 0): ?>
                        <input type="checkbox">
                      <?php endif ?>
                      <?php if ($item->status == 1): ?>
                        <input type="checkbox" checked>
                      <?php endif ?>
                    </td>
                  <td><a href="<?php echo e(route('comment.edit', ['id' => $item->id])); ?>"><i style="color: #000" class="fas fa-edit"></i></a></td>
                   <td><a href="<?php echo e(route('comment.remove', 
                    ['id' => $item->id])); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận số <?php echo e($item->id); ?>?')"><i style="color: #000" class="fas fa-trash"></i></a></td>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\fpoly\ĐỒ ÁN TỐT NGHIỆP\adminlte\resources\views/comment/comment.blade.php ENDPATH**/ ?>