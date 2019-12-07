<?php $__env->startSection('container'); ?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						ĐĂNG NHẬP THÀNH VIÊN FPITAL
					</span>
				</div>

            <form action="<?php echo e(route('dang-nhap')); ?>" method="post" class="login100-form validate-form">
                <?php echo csrf_field(); ?>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="password" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
					
						<div>
							<a href="/dang-ky" class="txt1">
								Đăng ký thành viên
							</a>
						</div>
						<div>
							<a href="Forgot Password.html" class="txt1">
								Quên mật khẩu
							</a>
						</div>
					
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							ĐĂNG NHẬP
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php echo $__env->make('layouts.script-login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.login-index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FPT POLY\Dự Án 2\test\resources\views/site/login.blade.php ENDPATH**/ ?>