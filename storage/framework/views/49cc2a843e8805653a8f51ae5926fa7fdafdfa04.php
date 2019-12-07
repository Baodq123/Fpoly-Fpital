<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Kiểm duyệt bình luận</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Kiểm duyệt bình luận</li>
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
        <form action="<?php echo e(route('comment.edit', ['id' => $model->id])); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="card-body">
            <div class="form-group">
              <label>Tên người bình luận</label>
              <input type="text" class="form-control" value="<?php echo e(old('name', $model->name)); ?>" name="name" readonly="">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" value="<?php echo e(old('email', $model->email)); ?>" name="email" readonly="">
            </div>
            <div class="form-group">
              <label>Nội dung bình luận</label>
              <textarea class="textarea" readonly name="content" 
              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo old('content', $model->content); ?></textarea>
            </div>
            <div class="form-group">
              <label>Bài viết</label>
              <input type="text" class="form-control" value="<?php echo e(old('title', $model->title)); ?>" name="title" readonly="">
            </div>
            <div class="form-group">
              <label>Kiểm duyệt</label>
              <select class="custom-select" name="status" value="<?php echo e(old('status')); ?>">
                <option value="0">Ẩn</option>
                <option value="1">Hiện</option>
              </select>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\adminlte\resources\views/comment/edit-comment.blade.php ENDPATH**/ ?>