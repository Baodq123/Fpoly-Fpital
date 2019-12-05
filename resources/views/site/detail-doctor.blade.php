@extends('layouts.detail-doctor')
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
                <div class="col-md-3">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url({{$doctor1->image}});"></div>
    
                    </div>
    
                </div>
                <div class="col-md-9">
                    <form>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">{{$doctor1->name}}</h4>
                            <p>Quá trình công tác
    
                                – 1982: Chủ nhiệm khoa Bệnh viện 7 Quân khu 3<br>
                                – 1986 – 1994: Giám đốc Trung tâm Huyết học – truyền máu khu vực đồng bằng Bắc Bộ<br>
                                – 1999 – 2012: Chủ nhiệm khoa và phụ trách trung tâm tế bào gốc Bệnh viện TW Quân đội
                                108<br>
                                – 2013 – 2016: Cố vấn cao cấp bệnh viện ung bướu Nghệ An và phụ trách Trung tâm ghép tế bào
                                gốc<br>
                                – 2016 – 2018: Có vấn cao cấp bệnh viện đại học y khoa Vinh – phụ trách Đơn vị tế bào gốc và
                                chuyên gia cao cấp Trường đại học Y khoa Vinh<br></p>
                        
                            <h6 class="alert-heading" >CÁC VỊ TRÍ ĐƯỢC ĐẢM NHẬN TẠI CÁC HIỆP HỘI</h6>
                            <p>Quá trình công tác
    
                                – 1982: Chủ nhiệm khoa Bệnh viện 7 Quân khu 3<br>
                                – 1986 – 1994: Giám đốc Trung tâm Huyết học – truyền máu khu vực đồng bằng Bắc Bộ<br>
                                – 1999 – 2012: Chủ nhiệm khoa và phụ trách trung tâm tế bào gốc Bệnh viện TW Quân đội
                                108<br>
                                – 2013 – 2016: Cố vấn cao cấp bệnh viện ung bướu Nghệ An và phụ trách Trung tâm ghép tế bào
                                gốc<br>
                                – 2016 – 2018: Có vấn cao cấp bệnh viện đại học y khoa Vinh – phụ trách Đơn vị tế bào gốc và
                                chuyên gia cao cấp Trường đại học Y khoa Vinh<br></p>
                                <h6 class="alert-heading" >CÁC VỊ TRÍ ĐƯỢC ĐẢM NHẬN TẠI CÁC HIỆP HỘI</h6>
                            <p>Quá trình công tác
    
                                – 1982: Chủ nhiệm khoa Bệnh viện 7 Quân khu 3<br>
                                – 1986 – 1994: Giám đốc Trung tâm Huyết học – truyền máu khu vực đồng bằng Bắc Bộ<br>
                                – 1999 – 2012: Chủ nhiệm khoa và phụ trách trung tâm tế bào gốc Bệnh viện TW Quân đội
                                108<br>
                                – 2013 – 2016: Cố vấn cao cấp bệnh viện ung bướu Nghệ An và phụ trách Trung tâm ghép tế bào
                                gốc<br>
                                – 2016 – 2018: Có vấn cao cấp bệnh viện đại học y khoa Vinh – phụ trách Đơn vị tế bào gốc và
                                chuyên gia cao cấp Trường đại học Y khoa Vinh<br></p>
                                <h6 class="alert-heading" >CÁC VỊ TRÍ ĐƯỢC ĐẢM NHẬN TẠI CÁC HIỆP HỘI</h6>
                            <p>Quá trình công tác
    
                                – 1982: Chủ nhiệm khoa Bệnh viện 7 Quân khu 3<br>
                                – 1986 – 1994: Giám đốc Trung tâm Huyết học – truyền máu khu vực đồng bằng Bắc Bộ<br>
                                – 1999 – 2012: Chủ nhiệm khoa và phụ trách trung tâm tế bào gốc Bệnh viện TW Quân đội
                                108<br>
                                – 2013 – 2016: Cố vấn cao cấp bệnh viện ung bướu Nghệ An và phụ trách Trung tâm ghép tế bào
                                gốc<br>
                                – 2016 – 2018: Có vấn cao cấp bệnh viện đại học y khoa Vinh – phụ trách Đơn vị tế bào gốc và
                                chuyên gia cao cấp Trường đại học Y khoa Vinh<br></p>
                        </div>
                        <!-- Basic dropdown -->
    
                        <!-- Basic dropdown -->
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