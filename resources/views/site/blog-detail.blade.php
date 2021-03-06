@extends('layouts.blog-detail')
@section('container')
     
<div class="container-fluid">
		<div class="row" style="background: #1c4b6b;">
			<div class="container">
                <div class="row">
				<div class="col-md-6">
					<i style="color: #fff; font-size: 13px;" class="fas fa-phone-square-alt"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> 0966.976.160</span>
					<i style="margin-left: 20px; font-size: 13px; color: #fff" class="fas fa-envelope"></i><span style="font-family: utm avo; font-size: 13px; color: #fff"> fpital@gmail.com</span>
                </div>
                <div class="col-md-6" style="text-align:right">
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
				<a href="/"><img src="Fpital/images/fpital-logo.png" alt="" width="200px;"></a>
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

	<section class="home-slider owl-carousel">
		<div class="slider-item bread-item" style="background-image: url('Fpital/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container" data-scrollax-parent="true">
				<div class="row slider-text align-items-end">
					<div class="col-md-7 col-sm-12 ftco-animate mb-5">
						<p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Chi tiết bài viết</span></p>
						<h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Chi tiết bài viết</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ftco-animate">
                <h2 class="mb-3 font-weight-bold">{{$detail->title}}</h2>
                <p class="font-weight-bold">{{$detail->description}}</p>
					<p>
						<img src="Fpital/images/image_4.jpg" alt="" class="img-fluid">
                    </p>
				<p>{{$detail->content}}</p>
				<form action="/bao-loi-bai-viet-{{$detail->id}}" method="POST">
					@csrf
					<input type="hidden" name="post_id" value="{{$detail->id}}">
					<input type="hidden" name="author" value="{{$detail->author}}">
					<input type="hidden" name="cate_id" value="{{$detail->cate_id}}">
					<input type="hidden" name="publish_date" value="{{$detail->publish_date}}">
					<div class="tag-widget post-tag-container mb-5 mt-5">
						<div class="tagcloud" style="margin-top: -30px;">
							<button type="submit"> Báo lỗi bài viết</button>
						</div>
					</div>
				</form>
					<div class="pt-5 mt-5">
						<h3 class="mb-5" style="margin-top: -70px;">
						<?php 
							$countcomment = DB::table('comments')->count();
							echo $countcomment;	
						?>
						Bình luận
						</h3>
						<ul class="comment-list">
                            @foreach ($comment as $cm)  
							<li class="comment">
								<div class="vcard bio">
								<img src="{{$cm->user->image}}" alt="Image placeholder">
								</div>
								<div class="comment-body">
                                <h3>{{$cm->user->name}}</h3>
								<div class="meta">{{$cm->created_at}}</div>
                                    <p>{{$cm->message}}</p>
									<p><a href="#" class="reply">Reply</a></p>
								</div>
                            </li>
							@endforeach	
						</ul>
						<div class="row mt-5">
								<div class="col">
									<div class="block-27">
										<ul>
											{{$comment->links()}}
										</ul>
									</div>
								</div>
							</div>
                        @if (Auth::check())
						<div class="comment-form-wrap">
							<h3>Bình luận</h3>
                            <form action="comment-{{$detail->id}}" method="post" role="form">
                                @csrf
								<div class="form-group">
									<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Nhập nội dung bình luận.."></textarea>
								</div>
								<input type="number" name="status" value="0" hidden>
								<div class="form-group">
									<input type="submit" value="Bình luận" class="btn btn-primary button-call py-3 px-5">
								</div>
							</form>
                        </div>
                        @else
                        @endif
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
<div class="sidebar-box ftco-animate">
	<div class="categories">
		<h3>Danh mục</h3>
		@foreach ($cate3 as $c)
		<li><a href="#">{{$c->name }}
		<span>
				<?php 
				$countcomment = DB::table('posts')->count();
				echo $countcomment;	
			?>
		</span></a></li>
		@endforeach
	</div>
</div>

<div class="sidebar-box ftco-animate" style="margin-top: -50px;">
	<h3>Bài viết được quan tâm</h3>
	@foreach ($post as $p)
	<div class="block-21 mb-4 d-flex">
		<a class="blog-img mr-4" style="background-image: url(Fpital/images/image_1.jpg);"></a>
		<div class="text">
			<h5 class="heading"><a href="/detail-{{$p->id}}">{{$p->title}}</a></h5>
<!-- <div class="meta">
<div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
<div><a href="#"><span class="icon-person"></span> Admin</a></div>
<div><a href="#"><span class="icon-chat"></span> 19</a></div>
</div> -->
</div>
</div>
@endforeach
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
<footer class="ftco-footer ftco-bg-dark" style="margin-top: -50px;">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-4">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2"><img src="Fpital/images/fpital-logo-white.png" alt="" width="200px;"></h2>
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