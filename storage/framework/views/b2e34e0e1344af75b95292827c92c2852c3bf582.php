<?php $__env->startSection('container'); ?>
<div class="container-fluid">
        <div class="row" style="background: #1c4b6b;">
			<div class="container">
                <div class="row">
				<div class="col-md-6">
					<i style="color: #fff; font-size: 13px;" class="fas fa-phone-square-alt"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> 0966.976.160</span>
					<i style="margin-left: 20px; font-size: 13px; color: #fff" class="fas fa-envelope"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> fpital@gmail.com</span>
                </div>
                <div class="col-md-6" style="text-align:right;">
                        <?php if(Auth::check()): ?>
                         <span style="font-family: utm avo; font-size: 13px; color: #fff">Xin chào, <?php echo e(Auth::user()->name); ?></span>
                        <a href="/dang-xuat"><i style="margin-left: 20px; font-size: 13px; color: #fff"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> Đăng xuất</span></a>
                        <?php else: ?>
                        <a href="/dang-nhap"><i style="color: #fff; font-size: 13px;"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> Đăng nhập</span></a>
                        <a href="/dang-ky"><i style="margin-left: 20px; font-size: 13px; color: #fff"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> Đăng ký</span></a>
                        <?php endif; ?>
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
	<div class="container second-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #fff!important; margin-left: -20px; margin-right: -20px;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto" style="font-family: utm avo;">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/chung-toi">Chúng tôi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dich-vu">Dịch vụ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bac-si">Bác sĩ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/tin-tuc">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/lien-he">Liên hệ</a>
                            </li>
                        </ul>
<!-- 				<form class="form-search">
					<input type="search" placeholder="Search" aria-label="Search">
					<a href="#"><i class="fas fa-search"></i></a>
				</form> -->
				<form class="form-inline form-search my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<!--    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
					<a href="#"><i class="fas fa-search"></i></a>
				</form>
			</div>
		</nav>
	</div>

	<section class="home-slider owl-carousel">
		<div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container" data-scrollax-parent="true">
				<div class="row slider-text align-items-end">
					<div class="col-md-7 col-sm-12 ftco-animate mb-5">
						<p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Bác sỹ</span></p>
						<h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Bác sỹ</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<h2 class="mb-2" class="font-weight-bold" style="font-family: UTM Avo; font-weight: bold; margin-top: -70px; color: black;">ĐỘI NGŨ BÁC SĨ</h2>
					<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p> -->
				</div>
			</div>
            <div class="row" style="margin-top: -80px;">
                <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
					<div class="staff">
						<div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
						<div class="info text-center">
							<h3><a href="teacher-single.html"><?php echo e($dt->name); ?></a></h3>
							<span class="position"><?php echo e($dt->major); ?></span>
							<div class="text">
								<p><?php echo e($dt->info); ?></p>
								<button class="btn-primary btn" style="border-radius: 5px!important">Đặt lịch khám với bác sĩ</button>
<!-- <ul class="ftco-social">
<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
</ul> -->
</div>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
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
</section>
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center mb-5 pb-5">
<div class="col-md-7 text-center heading-section ftco-animate">
<h2 class="mb-3">Our Best Pricing</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
</div>
</div>
<div class="row">
<div class="col-md-3 ftco-animate">
<div class="pricing-entry pb-5 text-center">
<div>
<h3 class="mb-4">Basic</h3>
<p><span class="price">$24.50</span> <span class="per">/ session</span></p>
</div>
<ul>
<li>Diagnostic Services</li>
<li>Professional Consultation</li>
<li>Tooth Implants</li>
<li>Surgical Extractions</li>
<li>Teeth Whitening</li>
</ul>
<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
</div>
</div>
<div class="col-md-3 ftco-animate">
<div class="pricing-entry pb-5 text-center">
<div>
<h3 class="mb-4">Standard</h3>
<p><span class="price">$34.50</span> <span class="per">/ session</span></p>
</div>
<ul>
<li>Diagnostic Services</li>
<li>Professional Consultation</li>
<li>Tooth Implants</li>
<li>Surgical Extractions</li>
<li>Teeth Whitening</li>
</ul>
<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
</div>
</div>
<div class="col-md-3 ftco-animate">
<div class="pricing-entry active pb-5 text-center">
<div>
<h3 class="mb-4">Premium</h3>
<p><span class="price">$54.50</span> <span class="per">/ session</span></p>
</div>
<ul>
<li>Diagnostic Services</li>
<li>Professional Consultation</li>
<li>Tooth Implants</li>
<li>Surgical Extractions</li>
<li>Teeth Whitening</li>
</ul>
<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
</div>
</div>
<div class="col-md-3 ftco-animate">
<div class="pricing-entry pb-5 text-center">
<div>
<h3 class="mb-4">Platinum</h3>
<p><span class="price">$89.50</span> <span class="per">/ session</span></p>
 </div>
<ul>
<li>Diagnostic Services</li>
<li>Professional Consultation</li>
<li>Tooth Implants</li>
<li>Surgical Extractions</li>
<li>Teeth Whitening</li>
</ul>
<p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
</div>
</div>
</div>
</div>
</section> -->
<footer class="ftco-footer ftco-bg-dark" style="margin-top: -60px;">
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
<?php echo $__env->make('layouts.script-index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\FPT POLY\Dự Án 2\test\resources\views/site/doctor.blade.php ENDPATH**/ ?>