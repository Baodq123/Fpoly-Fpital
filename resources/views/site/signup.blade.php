@extends('layouts.login-index')
@section('container')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						ĐĂNG KÝ THÀNH VIÊN FPITAL
					</span>
				</div>

            <form action="{{route('dang-ky')}}" method="post" class="login100-form validate-form">
                @csrf
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Tên</span>
                    <input class="input100" type="text" name="name" placeholder="">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Số điện thoại</span>
                    <input class="input100" type="text" name="phone" placeholder="">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Ảnh</span>
                    <input class="input100" type="file" name="image" placeholder="">
                    <span class="focus-input100"></span>
                </div>
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
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Nhập lại mật khẩu</span>
						<input class="input100" type="password" name="passwordAgain" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
					
						<div>
							<a href="/dang-nhap" class="txt1">
								Bạn đã có tài khoản ?
							</a>
						</div>			
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							ĐĂNG KÝ
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
@include('layouts.script-login')
@endsection