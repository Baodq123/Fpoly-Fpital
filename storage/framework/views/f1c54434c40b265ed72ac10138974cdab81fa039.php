<?php $__env->startSection('container'); ?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Lấy lại mật khẩu
					</span>
				</div>
            
            <form action="<?php echo e(route('lay-lai-mat-khau')); ?>" method="post" class="login100-form validate-form">
                <?php echo csrf_field(); ?>
                <?php if(session('error')): ?>
                    <div>
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                <?php if(session('success')): ?>
                    <div>
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
                
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Gửi
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php echo $__env->make('layouts.script-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.forgot-password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\test\resources\views/site/forgot-password.blade.php ENDPATH**/ ?>