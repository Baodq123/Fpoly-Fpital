<?php $__env->startSection('content'); ?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm danh mục</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm danh mục</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<div class="card card-primary">
<!--               <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo e(route('category.add')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên danh mục</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Nhập tên danh mục..">
                    <?php if($errors->first('name')): ?>
                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label>Đường dẫn</label>
                    <input type="text" class="form-control" name="path" value="<?php echo e(old('path')); ?>" placeholder="Nhập đường dẫn..">
                    <?php if($errors->first('path')): ?>
                    <span class="text-danger"><?php echo e($errors->first('path')); ?></span>
                    <?php endif; ?>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Đăng</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adminlte\resources\views/category/add-category.blade.php ENDPATH**/ ?>