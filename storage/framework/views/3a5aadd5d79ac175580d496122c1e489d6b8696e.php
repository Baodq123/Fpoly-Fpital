<?php $__env->startSection('content'); ?>
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
                  <?php $__currentLoopData = $dsSetting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <img src="<?php echo e($item->logo); ?>" width="100">
                    </td>
                    <td>
                      <img src="<?php echo e($item->logo_footer); ?>" width="100">
                    </td>
                    <td><?php echo e($item->email); ?></td>
                    <td><?php echo e($item->hotline); ?></td>
                    <td><?php echo e($item->address); ?></td>
                    <td><?php echo e($item->maps); ?></td>
                   <td><a href="<?php echo e(route('setting.edit', ['id' => $item->id])); ?>"><i style="color: #000" class="fas fa-edit"></i></a></td>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\fpoly\ĐỒ ÁN TỐT NGHIỆP\adminlte\resources\views/setting/setting.blade.php ENDPATH**/ ?>