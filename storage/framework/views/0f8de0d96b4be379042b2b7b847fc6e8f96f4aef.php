<?php $__env->startSection('content'); ?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm hồ sơ bệnh nhân</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm hồ sơ bệnh nhân</li>
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
              <form role="form" action="<?php echo e(route('file.add')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên bệnh nhân</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Nhập tên bệnh nhân..">
                    <?php if($errors->first('name')): ?>
                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label>Ảnh</label>
                    <input type="file" name="image" class="form-control" value="" placeholder="">
                    <?php if($errors->first('image')): ?>
                    <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>" placeholder="Nhập địa chỉ..">
                    <?php if($errors->first('address')): ?>
                    <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
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
                    <label>Ngày khám</label>
                    <input type="date" class="form-control" name="date" value="<?php echo e(old('date')); ?>" placeholder="Nhập ngày khám..">
                    <?php if($errors->first('date')): ?>
                    <span class="text-danger"><?php echo e($errors->first('date')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label>Ghi chú</label>
                    <input type="text" class="form-control" name="note" value="<?php echo e(old('note')); ?>" placeholder="Nhập ghi chú..">
                    <?php if($errors->first('note')): ?>
                    <span class="text-danger"><?php echo e($errors->first('note')); ?></span>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\fpoly\ĐỒ ÁN TỐT NGHIỆP\adminlte\resources\views/file/add-file.blade.php ENDPATH**/ ?>