<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm tài khoản</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Thêm tài khoản</li>
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
        <form action="<?php echo e(route('account.add')); ?>" method="post" enctype="multipart/form-data" novalidate>
          <?php echo csrf_field(); ?>
          <div class="card-body">
            <div class="form-group">
              <label>Họ và tên</label>
              <input type="text" class="form-control" value="<?php echo e(old('name')); ?>" name="name" placeholder="Nhập họ và tên..">
              <?php if($errors->first('name')): ?>
              <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" value="<?php echo e(old('email')); ?>" name="email" placeholder="Nhập email..">
              <?php if($errors->first('email')): ?>
              <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label>Mật khẩu</label>
              <input type="password" class="form-control" value="<?php echo e(old('password')); ?>" name="password" placeholder="Nhập mật khẩu..">
              <?php if($errors->first('password')): ?>
              <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label>Ảnh đại diện</label>
              <input type="file" name="image" class="form-control" value="" placeholder="">
              <?php if($errors->first('image')): ?>
              <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label>SĐT</label>
              <input type="number" class="form-control" value="<?php echo e(old('phone')); ?>" name="phone" placeholder="Nhập số điện thoại..">
              <?php if($errors->first('phone')): ?>
              <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label>Phân quyền</label>
              <select class="custom-select" name="rule" value="<?php echo e(old('rule')); ?>">
                <option value="0">Thành viên</option>
                <option value="1">CTV</option>
                <option value="2">Admin</option>
              </select>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\fpoly\ĐỒ ÁN TỐT NGHIỆP\adminlte\resources\views/account/add-account.blade.php ENDPATH**/ ?>