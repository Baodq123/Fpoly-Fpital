<?php $__env->startSection('content'); ?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm dịch vụ</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm dịch vụ</li>
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
              <form role="form" action="<?php echo e(route('service.add')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên dịch vụ</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Nhập tên dịch vụ..">
                    <?php if($errors->first('name')): ?>
                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label>Ảnh minh họa</label>
                    <input type="file" name="image" class="form-control" value="" placeholder="">
                    <?php if($errors->first('image')): ?>
                    <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label>Giá</label>
                    <input type="text" class="form-control" name="price" value="<?php echo e(old('price')); ?>" placeholder="Nhập giá dịch vụ..">
                    <?php if($errors->first('price')): ?>
                    <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="textarea" name="content" placeholder="Nhập nội dung dịch vụ.."
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e(old('content'),('')); ?></textarea>
                    <?php if($errors->first('content')): ?>
                    <span class="text-danger"><?php echo e($errors->first('content')); ?></span>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\fpoly\ĐỒ ÁN TỐT NGHIỆP\adminlte\resources\views/service/add-service.blade.php ENDPATH**/ ?>