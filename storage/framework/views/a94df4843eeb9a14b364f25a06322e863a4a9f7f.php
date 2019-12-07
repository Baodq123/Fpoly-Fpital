<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Sửa dịch vụ</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
					<li class="breadcrumb-item active">Sửa dịch vụ</li>
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
				<form action="<?php echo e(route('service.edit', ['id' => $model->id])); ?>" method="post" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="card-body">
						<div class="form-group">
							<label>Tên dịch vụ</label>
							<input type="text" class="form-control" value="<?php echo e(old('title', $model->title)); ?>" name="title" placeholder="Nhập tiêu đề..">
							<?php if($errors->first('title')): ?>
							<span class="text-danger"><?php echo e($errors->first('title')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label> Ảnh minh họa </label><br>
							<img src="<?php echo e($model->image); ?>" style="width: 150px; margin-bottom: 10px;" alt="">
							<input type="file" name="image" value="<?php echo e(old('image', $model->image)); ?>" class="form-control">
							<?php if($errors->first('image')): ?>
							<span class="text-danger"><?php echo e($errors->first('image')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Giá</label>
							<textarea class="form-control" name="price" value="<?php echo e(old('price', $model->price)); ?>" rows="3" placeholder="Nhập giá dịch vụ.."><?php echo old('price', $model->price); ?></textarea> <?php if($errors->first('price')): ?>
							<span class="text-danger"><?php echo e($errors->first('price')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Nội dung</label>
							<textarea class="textarea" name="content" placeholder="Nhập nội dung bài viết.."
							style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo old('content', $model->content); ?></textarea>
							<?php if($errors->first('content')): ?>
							<span class="text-danger"><?php echo e($errors->first('content')); ?></span>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\fpoly\ĐỒ ÁN TỐT NGHIỆP\adminlte\resources\views/service/edit-service.blade.php ENDPATH**/ ?>