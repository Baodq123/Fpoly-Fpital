<?php $__env->startSection('content'); ?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm bác sĩ</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm bác sĩ</li>
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
              <form role="form" action="<?php echo e(route('doctor.add')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên bác sĩ</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Nhập tên bác sĩ..">
                    <?php if($errors->first('name')): ?>
                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
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
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Nhập email..">
                    <?php if($errors->first('email')): ?>
                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label>SĐT</label>
                    <input type="number" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="Nhập số điện thoại..">
                    <?php if($errors->first('phone')): ?>
                    <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label>Chuyên khoa</label>
                    <input type="text" class="form-control" name="major" value="<?php echo e(old('major')); ?>" placeholder="Nhập chuyên khoa..">
                    <?php if($errors->first('major')): ?>
                    <span class="text-danger"><?php echo e($errors->first('major')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label>Thông tin chi tiết</label>
                    <textarea class="textarea" name="info" placeholder="Nhập thông tin chi tiết.."
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e(old('info'),('')); ?></textarea>
                    <?php if($errors->first('info')): ?>
                    <span class="text-danger"><?php echo e($errors->first('info')); ?></span>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adminlte\resources\views/doctor/add-doctor.blade.php ENDPATH**/ ?>