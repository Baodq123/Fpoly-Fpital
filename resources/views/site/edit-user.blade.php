@extends('layouts.user-info')
@section('container')
<div class="container-fluid">
		<div class="row" style="background: #1c4b6b;">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<i style="color: #fff; font-size: 13px;" class="fas fa-phone-square-alt"></i><span
							style="font-family: utm avo; font-size: 13px; color: #fff"> 0966.976.160</span>
						<i style="margin-left: 20px; font-size: 13px; color: #fff" class="fas fa-envelope"></i><span
							style="font-family: utm avo; font-size: 13px; color: #fff"> fpital@gmail.com</span>
					</div>
					<div class="col-md-6" style="text-align:right;">
						<!-- Basic dropdown -->
						<div class="dropdownn" style="font-family: utm avo; font-size: 13px;">
                                <button class="dropbtnn" >Xin chào, {{Auth::user()->name}}</button>
                                <div class="dropdown-contentt">
                                    <a href="/tai-khoan">Tài khoản</a>
                                    <a href="">Tìm kiếm hồ sơ</a>
                                    <a href="change_password.html">Đổi mật khẩu</a>
                                    <a href="list-history.html">Lịch sử khám</a>
                                </div>
						</div>
						<!-- Basic dropdown -->

						<a href="/dang-xuat"><i style="margin-left: 20px; font-size: 13px; color: #fff"></i><span
								style="font-family: utm avo; font-size: 13px; color: #fff"> Đăng xuất</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row first-header text-center margin-auto" style="margin-left: 350px;">
			<div class="col-md-6 xs-12">
				<a href="index.html"><img src="images/fpital-logo.png" alt="" width="200px;"></a>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<hr>
	</div>
	<!--  -->
	<!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.html">Denta<span>Care</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
				<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
				<li class="nav-item"><a href="doctors.html" class="nav-link">Doctors</a></li>
				<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
				<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
				<li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></li>
			</ul>
		</div>
	</div>
</nav> -->



	<div class="container">
			<div class="row">
				<div class="col-md-3"><img src="{{$user->image}}" alt="..." class="img-thumbnail"></div>
				<div class="col-md-9" style="height: 400px;">
						<div class="form-group row">
								<label for="staticEmail" class="col-sm-6 col-form-label" style="font-weight:bold;">THÔNG TIN TÀI KHOẢN</label>
		
							</div>
							<form action="/chinh-sua-tai-khoan" method="POST">
								@csrf
								<div class="form-group row">
									<label for="staticEmail" class="col-sm-2 col-form-label">Họ tên</label>
									<div class="col-sm-10">
										<input type="text"
											style="border: 1px solid #cccccc;border-radius: 2px 2px;background: #eeeeee;color: #555555;"
											 class="form-control-plaintext" id="staticEmail" value=" {{old('name', $user->name)}}">
									</div>
								</div>
								<div class="form-group row">
									<label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
									<div class="col-sm-10">
										<input type="text"
											style="border: 1px solid #cccccc;border-radius: 2px 2px;background: #eeeeee;color: #555555;"
											 class="form-control-plaintext" id="staticEmail" value=" {{old('email', $user->email)}}">
									</div>
								</div>
								<div class="form-group row">
									<label for="staticEmail" class="col-sm-2 col-form-label">Số điện thoại</label>
									<div class="col-sm-10">
										<input type="text"
											style="border: 1px solid #cccccc;border-radius: 2px 2px;background: #eeeeee;color: #555555;"
											 class="form-control-plaintext" id="staticEmail" value=" {{old('phone', $user->phone)}}">
									</div>
								</div>
								<div class="form-group row">
									<button type="submit" class="form-control btn btn-primary">Lưu</button>
								</div>
								{{-- <div class="form-group row">
									<label for="staticEmail" class="col-sm-2 col-form-label">Địa chỉ</label>
									<div class="col-sm-10">
										<input type="text"
											style="border: 1px solid #cccccc;border-radius: 2px 2px;background: #eeeeee;color: #555555;"
											readonly class="form-control-plaintext" id="staticEmail" value=" {{$user->address}}">
									</div>
								</div> --}}
							</form>
				</div>
			</div>
	
	</div>



	<!-- <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row d-flex align-items-center">
<div class="col-md-3 aside-stretch py-5">
<div class=" heading-section heading-section-white ftco-animate pr-md-4">
<h2 class="mb-3">Achievements</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
<div class="col-md-9 py-5 pl-md-5">
<div class="row">
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18">
<div class="text">
<strong class="number" data-number="14">0</strong>
<span>Years of Experience</span>
</div>
</div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18">
<div class="text">
<strong class="number" data-number="4500">0</strong>
<span>Qualified Dentist</span>
</div>
</div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18">
<div class="text">
<strong class="number" data-number="4200">0</strong>
<span>Happy Smiling Customer</span>
</div>
</div>
</div>
<div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18">
<div class="text">
<strong class="number" data-number="320">0</strong>
<span>Patients Per Year</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section> -->
	<!-- <section class="ftco-section price-service">
<div class="container">
	<div class="row justify-content-center mb-5 pb-5">
		<div class="col-md-7 text-center ftco-animate">
			<h2 class="mb-2" class="font-weight-bold" style="font-family: UTM Avo; font-weight: bold; margin-top: -70px; color: #4e4e4e">BẢNG GIÁ DỊCH VỤ</h2>
		</div>
	</div>
	<div class="row" style="margin-top: -90px; margin-bottom: -60px;">
		<div class="col-md-3 ftco-animate" style="margin-bottom: 40px;">
			<div class="pricing-entry pb-5 text-center" style="border: 1px solid #288ebf; border-radius: 10px;">
				<div>
					<img src="images/bg_2.jpg" alt="" class="img-fluid">
					<p style="margin-top: 10px;"><span class="price" style="color: #d3601a">950.000 VND</span> <span class="per">/ người</span></p>
				</div>
				<ul style="margin-top: -10px;">
					<li style="color: #fff; background: #2ea4dc">Khám tổng quát</li>
				</ul>
				<p class="button text-center"><a href="#" class="btn btn-primary button-call px-4 py-3">Đăng ký khám</a></p>
			</div>
		</div>
		<div class="col-md-3 ftco-animate" style="margin-bottom: 40px;">
			<div class="pricing-entry pb-5 text-center" style="border: 1px solid #288ebf; border-radius: 10px;">
				<div>
					<img src="images/bg_2.jpg" alt="" class="img-fluid">
					<p style="margin-top: 10px;"><span class="price" style="color: #d3601a">950.000 VND</span> <span class="per">/ người</span></p>
				</div>
				<ul style="margin-top: -10px;">
					<li style="color: #fff; background: #2ea4dc">Khám tổng quát</li>
				</ul>
				<p class="button text-center"><a href="#" class="btn btn-primary button-call px-4 py-3">Đăng ký khám</a></p>
			</div>
		</div>
		<div class="col-md-3 ftco-animate" style="margin-bottom: 40px;">
			<div class="pricing-entry pb-5 text-center" style="border: 1px solid #288ebf; border-radius: 10px;">
				<div>
					<img src="images/bg_2.jpg" alt="" class="img-fluid">
					<p style="margin-top: 10px; d3601a"><span class="price" style="color: #d3601a">950.000 VND</span> <span class="per">/ người</span></p>
				</div>
				<ul style="margin-top: -10px;">
					<li style="color: #fff; background: #2ea4dc">Khám tổng quát</li>
				</ul>
				<p class="button text-center"><a href="#" class="btn btn-primary button-call px-4 py-3">Đăng ký khám</a></p>
			</div>
		</div>
		<div class="col-md-3 ftco-animate" style="margin-bottom: 40px;">
			<div class="pricing-entry pb-5 text-center" style="border: 1px solid #288ebf; border-radius: 10px;">
				<div>
					<img src="images/bg_2.jpg" alt="" class="img-fluid">
					<p style="margin-top: 10px; d3601a"><span class="price" style="color: #d3601a">950.000 VND</span> <span class="per">/ người</span></p>
				</div>
				<ul style="margin-top: -10px;">
					<li style="color: #fff; background: #2ea4dc">Khám tổng quát</li>
				</ul>
				<p class="button text-center"><a href="#" class="btn btn-primary button-call px-4 py-3">Đăng ký khám</a></p>
			</div>
		</div>
		<div class="col-md-3 ftco-animate">
			<div class="pricing-entry pb-5 text-center" style="border: 1px solid #288ebf; border-radius: 10px;">
				<div>
					<img src="images/bg_2.jpg" alt="" class="img-fluid">
					<p style="margin-top: 10px; d3601a"><span class="price" style="color: #d3601a">950.000 VND</span> <span class="per">/ người</span></p>
				</div>
				<ul style="margin-top: -10px;">
					<li style="color: #fff; background: #2ea4dc">Khám tổng quát</li>
				</ul>
				<p class="button text-center"><a href="#" class="btn btn-primary button-call px-4 py-3">Đăng ký khám</a></p>
			</div>
		</div>
		<div class="col-md-3 ftco-animate">
			<div class="pricing-entry pb-5 text-center" style="border: 1px solid #288ebf; border-radius: 10px;">
				<div>
					<img src="images/bg_2.jpg" alt="" class="img-fluid">
					<p style="margin-top: 10px; d3601a"><span class="price" style="color: #d3601a">950.000 VND</span> <span class="per">/ người</span></p>
				</div>
				<ul style="margin-top: -10px;">
					<li style="color: #fff; background: #2ea4dc">Khám tổng quát</li>
				</ul>
				<p class="button text-center"><a href="#" class="btn btn-primary button-call px-4 py-3">Đăng ký khám</a></p>
			</div>
		</div>
		<div class="col-md-3 ftco-animate">
			<div class="pricing-entry pb-5 text-center" style="border: 1px solid #288ebf; border-radius: 10px;">
				<div>
					<img src="images/bg_2.jpg" alt="" class="img-fluid">
					<p style="margin-top: 10px; d3601a"><span class="price" style="color: #d3601a">950.000 VND</span> <span class="per">/ người</span></p>
				</div>
				<ul style="margin-top: -10px;">
					<li style="color: #fff; background: #2ea4dc">Khám tổng quát</li>
				</ul>
				<p class="button text-center"><a href="#" class="btn btn-primary button-call px-4 py-3">Đăng ký khám</a></p>
			</div>
		</div>
		<div class="col-md-3 ftco-animate">
			<div class="pricing-entry pb-5 text-center" style="border: 1px solid #288ebf; border-radius: 10px;">
				<div>
					<img src="images/bg_2.jpg" alt="" class="img-fluid">
					<p style="margin-top: 10px;"><span class="price" style="color: #d3601a">950.000 VND</span> <span class="per">/ người</span></p>
				</div>
				<ul style="margin-top: -10px;">
					<li style="color: #fff; background: #2ea4dc">Khám tổng quát</li>
				</ul>
				<p class="button text-center"><a href="#" class="btn btn-primary button-call px-4 py-3">Đăng ký khám</a></p>
			</div>
		</div>
	</div>
</div>
</section> -->

	<footer class="ftco-footer ftco-bg-dark">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2"><img src="images/fpital-logo-white.png" alt="" width="200px;"></h2>
					</div>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon icon-map-marker"></span><span class="text">Số 33 Nguyễn Hoàng, P. Mỹ
									Đình 2, Q. Nam Từ Liêm, Hà Nội</span></li>
							<li><a href="#"><span class="icon icon-phone"></span><span
										class="text">0966.976.160</span></a></li>
							<li><a href="#"><span class="icon icon-envelope"></span><span
										class="text">fpital@gmail.com</span></a></li>
						</ul>
					</div>
					<ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
						<li class="ftco-animate"><a href="https://www.facebook.com/benhvienChuThapXanh"><span
									class="icon-facebook"></span></a></li>
						<li class="ftco-animate"><a href="#"><span class="icon-youtube"></span></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Menu</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Chúng tôi</a></li>
							<li><a href="#" class="py-2 d-block">Chuyên khoa</a></li>
							<li><a href="#" class="py-2 d-block">Bác sĩ</a></li>
							<li><a href="#" class="py-2 d-block">Tin tức</a></li>
							<li><a href="#" class="py-2 d-block">Liên hệ</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Đăng ký nhận tin tức</h2>
						<form action="#" class="subscribe-form">
							<div class="form-group d-flex">
								<input type="text" class="form-control" placeholder="Nhập email của bạn..">
								<input type="submit" value="Đăng ký" class="submit px-3">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: -30px;">
				<div class="col-md-12 text-center">
					<p>
						Copyright &copy;
						<script type="text/javascript"
							src="https://doc-04-1s-docs.googleusercontent.com/injected/se.js"></script>
						<script data-cfasync="false"
							src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
						<script
							type="632f676fa30f8f20eb978667-text/javascript">document.write(new Date().getFullYear());</script>
						All rights reserved | This template is made by <a href="https://colorlib.com/"
							target="_blank">Fpital</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg></div>

	<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="form-group">

							<input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
						</div>
						<div class="form-group">

							<input type="text" class="form-control" id="appointment_email" placeholder="Email">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">

									<input type="text" class="form-control appointment_date" placeholder="Date">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">

									<input type="text" class="form-control appointment_time" placeholder="Time">
								</div>
							</div>
						</div>
						<div class="form-group">

							<textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"
								placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Make an Appointment" class="btn btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	@include('layouts.script-index')
@endsection