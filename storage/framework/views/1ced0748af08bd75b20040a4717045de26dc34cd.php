<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Sửa menu</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Sửa menu</li>
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
				<form action="<?php echo e(route('menu.edit', ['id' => $model->id])); ?>" method="post" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="card-body">
						<div class="form-group">
							<label>Tên danh mục</label>
							<input type="text" class="form-control" value="<?php echo e(old('name', $model->name)); ?>" name="name" placeholder="Nhập tên menu..">
							<?php if($errors->first('name')): ?>
							<span class="text-danger"><?php echo e($errors->first('name')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Đường dẫn</label>
							<input type="text" class="form-control" value="<?php echo e(old('path', $model->path)); ?>" name="path" placeholder="Nhập đường dẫn..">
							<?php if($errors->first('path')): ?>
							<span class="text-danger"><?php echo e($errors->first('path')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Vị trí</label>
							<input type="text" class="form-control" value="<?php echo e(old('order', $model->order)); ?>" name="order" placeholder="Nhập vị trí..">
							<?php if($errors->first('order')): ?>
							<span class="text-danger"><?php echo e($errors->first('order')); ?></span>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\fpoly\ĐỒ ÁN TỐT NGHIỆP\adminlte\resources\views/menu/edit-menu.blade.php ENDPATH**/ ?>