@extends('layouts.blog-index')
@section('container')
<div class="container-fluid">
		<div class="row" style="background: #1c4b6b;">
			<div class="container">
				<div class="col-md-6">
					<i style="color: #fff; font-size: 13px;" class="fas fa-phone-square-alt"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> 0966.976.160</span>
					<i style="margin-left: 20px; font-size: 13px; color: #fff" class="fas fa-envelope"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> fpital@gmail.com</span>
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
	<div class="container second-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #fff!important; margin-left: -20px; margin-right: -20px;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto" style="font-family: utm avo;">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Trang chủ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">Chúng tôi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="services.html">Dịch vụ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="doctors.html">Bác sĩ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="blog.html">Tin tức</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Liên hệ</a>
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
						<p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Tin tức</span></p>
						<h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Tin tức</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12 ftco-animate">
							<div class="blog-entry">
								<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
								</a>
								<div class="text d-flex py-4">
									<h2 class="heading"><a href="#" class="font-weight-bold">Even the all-powerful Pointing has no control about the blind texts</a></h2>
								</div>
								<p style="margin-top: -30px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							</div>
						</div>
					</div>
					<div class="row">
                        @foreach ($posts as $p)
						<div class="col-md-12">
							<div class="col-md-4" style="float: left">
                            <img style="width: 200px; height: 150px;" src="{{$p->feature_images}}" alt="" class="img-fluid">
							</div>
							<div class="col-md-8" style="float: left; text-align: justify;">
                            <a href="/detail-{{$p->id}}"><h5>{{$p->title}}</h5></a>
                            <p>{{$p->description}}</p>
							</div>
                        </div>
                        @endforeach
					</div>
					<div class="row mt-5">
						<div class="col">
							<div class="block-27">
								<ul>
									<li><a href="#">&lt;</a></li>
									<li class="active"><span>1</span></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&gt;</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> 
				<div class="col-md-4 sidebar ftco-animate">
<!-- <div class="sidebar-box">
<form action="#" class="search-form">
<div class="form-group">
<span class="icon fa fa-search"></span>
<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
</div>
</form>
</div> -->
<div class="sidebar-box ftco-animate" style="margin-top: -50px;">
	<h3>Bài viết được quan tâm</h3>
	<div class="block-21 mb-4 d-flex">
		<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
		<div class="text">
			<h5 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h5>
<!-- <div class="meta">
<div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
<div><a href="#"><span class="icon-person"></span> Admin</a></div>
<div><a href="#"><span class="icon-chat"></span> 19</a></div>
</div> -->
</div>
</div>
<div class="block-21 mb-4 d-flex">
	<a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
	<div class="text">
		<h5 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h5>
<!-- <div class="meta">
<div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
<div><a href="#"><span class="icon-person"></span> Admin</a></div>
<div><a href="#"><span class="icon-chat"></span> 19</a></div>
</div> -->
</div>
</div>
<div class="block-21 mb-4 d-flex">
	<a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
	<div class="text">
		<h5 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h5>
<!-- <div class="meta">
<div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
<div><a href="#"><span class="icon-person"></span> Admin</a></div>
<div><a href="#"><span class="icon-chat"></span> 19</a></div>
</div> -->
</div>
</div>
<div class="block-21 mb-4 d-flex">
	<a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
	<div class="text">
		<h5 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h5>
<!-- <div class="meta">
<div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
<div><a href="#"><span class="icon-person"></span> Admin</a></div>
<div><a href="#"><span class="icon-chat"></span> 19</a></div>
</div> -->
</div>
</div>
<div class="block-21 mb-4 d-flex">
	<a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
	<div class="text">
		<h5 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h5>
	</div>
</div>
</div>

<div class="sidebar-box ftco-animate" style="margin-top: -70px;">
	<h3>Videos</h3>
	<iframe src="https://www.youtube.com/embed/QIvIN8M91x4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<div class="d-flex">
		<div class="text">
			<a href="#" class="text-dark">Giới thiệu bệnh viện đa khoa Fpital</a>
		</div>
	</div>
	<iframe style="margin-top: 20px;" src="https://www.youtube.com/embed/QIvIN8M91x4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<div class="d-flex">
		<div class="text">
			<a href="#" class="text-dark">Giới thiệu bệnh viện đa khoa Fpital</a>
		</div>
	</div>
	<iframe style="margin-top: 20px;" src="https://www.youtube.com/embed/QIvIN8M91x4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<div class="d-flex">
		<div class="text">
			<a href="#" class="text-dark">Giới thiệu bệnh viện đa khoa Fpital</a>
		</div>
	</div>
</div>
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