@extends('layouts.contact')
@section('container')
<div class="container-fluid">
		<div class="row" style="background: #1c4b6b;">
                <div class="container">
                    <div class="row">
                    <div class="col-md-6">
                        <i style="color: #fff; font-size: 13px;" class="fas fa-phone-square-alt"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> 0966.976.160</span>
                        <i style="margin-left: 20px; font-size: 13px; color: #fff" class="fas fa-envelope"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> fpital@gmail.com</span>
                    </div>
                    <div class="col-md-6" style="text-align:right;">
                        @if (Auth::check())
                <div class="dropdownn" style="font-family: utm avo; font-size: 13px;">
                        <button class="dropbtnn" >Xin chào, {{Auth::user()->name}}</button>
                        <div class="dropdown-contentt">
                            <a href="/tai-khoan">Tài khoản</a>
                            <a href="/doi-mat-khau-{{Auth::user()->id}}">Đổi mật khẩu</a>
                            @if(Auth::check())
                            <a href="/lich-su-kham-{{Auth::user()->id}}">Lịch sử khám</a>
                        </div>
                        @endif
                    </div>
                <a href="/dang-xuat"><i style="margin-left: 20px; font-size: 13px; color: #fff"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> Đăng xuất</span></a>
                @else
                <a href="/dang-nhap"><i style="color: #fff; font-size: 13px;"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> Đăng nhập</span></a>
                <a href="/dang-ky"><i style="margin-left: 20px; font-size: 13px; color: #fff"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> Đăng ký</span></a>
                @endif
                    </div>
                </div>
                </div>
            </div>
    </div>
    <div class="container">
            <div class="row first-header text-center margin-auto" style="margin-left: 350px;">
                <div class="col-md-6 xs-12">
                    <a href="/"><img src="images/fpital-logo.png" alt="" width="200px;"></a>
                </div>
            </div>
        </div>
	<div class="container-fluid">
		<hr>
	</div>
	<div class="container second-header col-md-12 col-xs-12 ">
		<nav class="animenu text-center" role="navigation" aria-label="Menu">
				<button class="animenu__btn">
				  <span class="animenu__btn__bar"></span>
				  <span class="animenu__btn__bar"></span>
				  <span class="animenu__btn__bar"></span>
				</button>

				<ul class="animenu__nav">
				  <li><a href="/">Trang chủ</a></li>
				  <li>
					<a href="about.html" class="animenu__nav__hasDropdown" >Chúng tôi</a>
					
				  </li>
				  <li>
					<a href="/dich-vu" class="animenu__nav__hasDropdown" >Dịch vụ</a>
					
				  </li>
				  <li>
					<a href="/bac-si" class="animenu__nav__hasDropdown" >Bác sĩ</a>
					
				  </li>
				  <li>
					<a href="/tin-tuc" class="animenu__nav__hasDropdown" >Tin tức</a>
					
				  </li>
				  <li>
					<a href="/lien-he" class="animenu__nav__hasDropdown" aria-haspopup="true">Liên hệ</a>
					<ul class="animenu__nav__dropdown" aria-label="submenu" role="menu">
					  <li><a href="/tim-kiem-ho-so" role="menuitem">Tra cứu hồ sơ</a></li>
					</ul>
				  </li>
				 
				<li></li>
				</ul>
			  </nav>
			  <script src="js/animenu.js"></script>
</div>
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
<!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<a class="navbar-brand" href="index.html">Denta<span>Care</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
<span class="oi oi-menu"></span> Menu
</button>
<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
<li class="nav-item active"><a href="about.html" class="nav-link">About</a></li>
<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
<li class="nav-item"><a href="doctors.html" class="nav-link">Doctors</a></li>
<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
<li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></li>
</ul>
</div>
</div>
</nav> -->

<section class="home-slider owl-carousel">
<div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container" data-scrollax-parent="true">
<div class="row slider-text align-items-end">
<div class="col-md-7 col-sm-12 ftco-animate mb-5">
<p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Liên hệ</span></p>
<h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Liên hệ</h1>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section contact-section ftco-degree-bg" style="margin-top: -60px;">
<div class="container">
<div class="row d-flex mb-5 contact-info">
<div class="col-md-12 mb-4">
<h2 class="h4">Thông tin liên hệ</h2>
</div>
<div class="w-100"></div>
@foreach ($contact as $c)
<div class="col-md-3">
<p><span>Địa chỉ:</span> <a href="tel://1234567920"> {{$c->address}}</a></p>
</div>
@endforeach
@foreach ($contact as $c)
<div class="col-md-3">
<p><span>Hotline:</span> <a href="tel://1234567920"> {{$c->hotline}}</a></p>
</div>
@endforeach
@foreach ($contact as $c)
<div class="col-md-3">
<p><span>Email:</span> <a href="tel://1234567920"> {{$c->email}}</a></p>
</div>
@endforeach
<div class="col-md-3">
<p><span>Website:</span> <a href="#"> www.benhvienfpital.vn</a></p>
</div>
</div>
<div class="row block-9">
<div class="col-md-6 pr-md-5">
<form action="#">
<div class="form-group">
<input type="text" class="form-control" placeholder="Tên của bạn">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Email">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Số điện thọai">
</div>
<div class="form-group">
<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Nội dung"></textarea>
</div>
<div class="form-group">
<button class="btn btn-primary button-call">Gửi đi</button>
</div>
</form>
</div>
<div class="col-md-6">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.030727461333!2d105.77199571493269!3d21.03145648599697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b13068cf67%3A0x96325033cc39995e!2zQuG7h25oIHZp4buHbiDEkGEga2hvYSBDaOG7ryBUaOG6rXAgWGFuaA!5e0!3m2!1svi!2s!4v1572877360917!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
</div>
</div>
</section>
<footer class="ftco-footer ftco-bg-dark">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-4">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2"><img src="images/fpital-logo-white.png" alt="" width="200px;"></h2>
				</div>
				<div class="block-23 mb-3">
					<ul>
						<li><span class="icon icon-map-marker"></span><span class="text">Số 33 Nguyễn Hoàng, P. Mỹ Đình 2, Q. Nam Từ Liêm, Hà Nội</span></li>
						<li><a href="#"><span class="icon icon-phone"></span><span class="text">0966.976.160</span></a></li>
						<li><a href="#"><span class="icon icon-envelope"></span><span class="text">fpital@gmail.com</span></a></li>
					</ul>
				</div>
				<ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
					<li class="ftco-animate"><a href="https://www.facebook.com/benhvienChuThapXanh"><span class="icon-facebook"></span></a></li>
					<li class="ftco-animate"><a href="#"><span class="icon-youtube"></span></a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="ftco-footer-widget mb-4 ml-md-5">
					<h2 class="ftco-heading-2">Menu</h2>
					<ul class="list-unstyled">
                            <li><a href="/" class="py-2 d-block">Trang chủ</a></li>
                            <li><a href="#" class="py-2 d-block">Chúng tôi</a></li>
                            <li><a href="/tin-tuc" class="py-2 d-block">Tin tức</a></li>
                            <li><a href="/bac-si" class="py-2 d-block">Bác sĩ</a></li>
                            <li><a href="/lien-he" class="py-2 d-block">Liên hệ</a></li>
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
					Copyright &copy;<script type="text/javascript" src="https://doc-04-1s-docs.googleusercontent.com/injected/se.js"></script><script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="632f676fa30f8f20eb978667-text/javascript">document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="https://colorlib.com/" target="_blank">Fpital</a>
				</p>
			</div>
		</div>
	</div>
</footer>


<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
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

<textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
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