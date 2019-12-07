<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Sửa cấu hình website</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Sửa cấu hình</li>
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
				<form action="<?php echo e(route('setting.edit', ['id' => $model->id])); ?>" method="post" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="card-body">
						<div class="form-group">
							<label> Logo </label><br>
							<img src="<?php echo e($model->logo); ?>" style="width: 150px; margin-bottom: 10px;" alt="">
							<input type="file" name="logo" value="<?php echo e(old('logo', $model->logo)); ?>" class="form-control">
							<?php if($errors->first('logo')): ?>
							<span class="text-danger"><?php echo e($errors->first('logo')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label> Logo chân trang </label><br>
							<img src="<?php echo e($model->logo_footer); ?>" style="width: 150px; margin-bottom: 10px;" alt="">
							<input type="file" name="logo_footer" value="<?php echo e(old('logo_footer', $model->logo_footer)); ?>" class="form-control">
							<?php if($errors->first('logo_footer')): ?>
							<span class="text-danger"><?php echo e($errors->first('logo_footer')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control" value="<?php echo e(old('email', $model->email)); ?>" name="email" placeholder="Nhập email..">
							<?php if($errors->first('email')): ?>
							<span class="text-danger"><?php echo e($errors->first('email')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Hotline</label>
							<input type="number" class="form-control" value="<?php echo e(old('hotline', $model->hotline)); ?>" name="hotline" placeholder="Nhập hotline..">
							<?php if($errors->first('email')): ?>
							<span class="text-danger"><?php echo e($errors->first('email')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Địa chi</label>
							<input type="text" class="form-control" value="<?php echo e(old('address', $model->address)); ?>" name="address" placeholder="Nhập địa chỉ..">
							<?php if($errors->first('address')): ?>
							<span class="text-danger"><?php echo e($errors->first('address')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Link bản đồ</label>
							<input type="text" class="form-control" value="<?php echo e(old('maps', $model->maps)); ?>" name="maps" placeholder="Nhập link bản đồ..">
							<?php if($errors->first('maps')): ?>
							<span class="text-danger"><?php echo e($errors->first('maps')); ?></span>
							<?php endif; ?>
						</div>
						
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Sửa</button>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\test\resources\views/setting/edit-setting.blade.php ENDPATH**/ ?>