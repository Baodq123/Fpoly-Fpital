@extends('layouts.forgot-password')
@section('container')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Lấy lại mật khẩu
					</span>
				</div>
            
            <form action="{{route('lay-lai-mat-khau')}}" method="post" class="login100-form validate-form">
                @csrf
                @if (session('error'))
                    <div>
                        {{session('error')}}
                    </div>
                @endif
                @if (session('success'))
                    <div>
                        {{session('success')}}
                    </div>
                @endif
                
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
	
@include('layouts.script-login')
@endsection