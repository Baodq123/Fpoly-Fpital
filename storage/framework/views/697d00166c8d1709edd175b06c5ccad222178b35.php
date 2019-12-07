<?php $__env->startSection('content'); ?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thêm trang</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Thêm trang</li>
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
              <form role="form" action="<?php echo e(route('page.add')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Tên trang</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e(old('page')); ?>" placeholder="Nhập tên trang..">
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
                  <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="textarea" name="content" placeholder="Nhập nội dung bài viết.."
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e(old('content'),('')); ?></textarea>
                    <?php if($errors->first('content')): ?>
                    <span class="text-danger"><?php echo e($errors->first('content')); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="form-group">
                    <label>Ngày tạo</label>
                    <input type="date" class="form-control" name="date" value="<?php echo e(old('date')); ?>" placeholder="Nhập ngày tạo..">
                    <small>
                      Thời gian hiện tại: <?php echo e(Carbon\Carbon::now('Asia/Ho_Chi_Minh')->format('h:i:s A, d-m-Y')); ?>

                    </small><br>
                    <?php if($errors->first('date')): ?>
                    <span class="text-danger"><?php echo e($errors->first('date')); ?></span>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adminlte\resources\views/page/add-page.blade.php ENDPATH**/ ?>