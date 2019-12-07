<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Thêm bài viết</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Sửa bài viết</li>
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
				<form action="<?php echo e(route('post.edit', ['id' => $model->id])); ?>" method="post" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<div class="card-body">
						<div class="form-group">
							<label>Tiêu đề</label>
							<input type="text" class="form-control" value="<?php echo e(old('title', $model->title)); ?>" name="title" placeholder="Nhập tiêu đề..">
							<?php if($errors->first('title')): ?>
							<span class="text-danger"><?php echo e($errors->first('title')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label> Ảnh </label><br>
							<img src="<?php echo e($model->image); ?>" style="width: 150px; margin-bottom: 10px;" alt="">
							<input type="file" name="image" value="<?php echo e(old('image', $model->image)); ?>" class="form-control">
							<?php if($errors->first('image')): ?>
							<span class="text-danger"><?php echo e($errors->first('image')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Miêu tả</label>
							<textarea class="form-control" name="description" value="<?php echo e(old('description', $model->description)); ?>" rows="3" placeholder="Nhập giới thiệu.."><?php echo old('description', $model->description); ?></textarea>
							<?php if($errors->first('description')): ?>
							<span class="text-danger"><?php echo e($errors->first('description')); ?></span>
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
						<div class="form-group">
							<label>Ngày đăng</label>
							<input type="date" name="publish_date" class="form-control" value="<?php echo e(old('publish_date', $model->publish_date)); ?>">
							<small>
								Thời gian hiện tại: <?php echo e(Carbon\Carbon::now('Asia/Ho_Chi_Minh')->format('h:i:s A, d-m-Y')); ?>

							</small><br>
							<?php if($errors->first('publish_date')): ?>
							<span class="text-danger"><?php echo e($errors->first('publish_date')); ?></span>
							<?php endif; ?>
						</div>
						<div class="form-group">
							<label>Tác giả</label>
							<select class="custom-select" name="author" value="<?php echo e(old('author')); ?>">
								<option value="Thế Kỷ">Thế Kỷ</option>
								<option value="Quốc Bảo">Quốc Bảo</option>
							</select>
						</div>
						<div class="form-group">
							<label> Danh mục </label>
							<select name="cate_id" class="form-control">
								<?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($ca->id); ?>"
									<?php if($ca->id == $model->cate_id): ?>
									selected
									<?php endif; ?>
									><?php echo e($ca->name); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"
									<?php if($model->status): ?>
									checked 
									<?php endif; ?>	
									name="status" value="1">
								</label>
								<label class="form-check-label" for="exampleCheck1">Xuất bản</label>
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<button type="submit" class="btn btn-primary">Đăng bài viết</button>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adminlte\resources\views/post/edit-post.blade.php ENDPATH**/ ?>