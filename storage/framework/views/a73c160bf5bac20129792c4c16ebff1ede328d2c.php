<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm slide</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Thêm slide</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-i  nfo">
        <form action="<?php echo e(route('slide.add')); ?>" method="post" enctype="multipart/form-data" novalidate>
          <?php echo csrf_field(); ?>
          <div class="card-body">
            <div class="form-group">
              <label>Slide</label>
              <input type="file" name="image" class="form-control" value="" placeholder="">
              <?php if($errors->first('image')): ?>
              <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label>Đường dẫn</label>
              <input type="text" class="form-control" name="path" value="<?php echo e(old('path')); ?>" placeholder="Nhập đường dẫn..">
              <?php if($errors->first('path')): ?>
              <span class="text-danger"><?php echo e($errors->first('path')); ?></span>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label>Thứ tự</label>
              <input type="text" class="form-control" name="order" value="<?php echo e(old('order')); ?>" placeholder="Nhập thứ tự..">
              <?php if($errors->first('order')): ?>
              <span class="text-danger"><?php echo e($errors->first('order')); ?></span>
              <?php endif; ?>
            </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Đăng</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
<!-- /.content -->
<script src="AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adminlte\resources\views/slide/add-slide.blade.php ENDPATH**/ ?>