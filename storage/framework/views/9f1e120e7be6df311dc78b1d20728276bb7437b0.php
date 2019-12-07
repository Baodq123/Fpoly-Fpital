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
            <a href="/"><img src="Fpital/images/fpital-logo.png" alt="" width="200px;"></a>
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
                                <a class="nav-link" href="about.html">Chúng tôi</a>
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


<!-- END nav -->

<section class="home-slider owl-carousel">
<div class="slider-item" style="background-image: url('Fpital/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Đái tháo đường có nguy hiểm không?</h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3 button-call">Đọc tiếp..</a></p>
            </div>
        </div>
    </div>
</div>
<div class="slider-item" style="background-image: url('Fpital/images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Chương trình tư vấn sức khỏe miễn phí</h1>
                <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#" class="btn btn-primary px-4 py-3 button-call">Đăng ký khám</a></p>
            </div>
        </div>
    </div>
</div>
</section>

<section class="ftco-intro">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4 color-2 p-4">
                <h3 class="mb-4">Thời gian làm việc</h3>
                <p class="openinghours d-flex">
                    <span>Thứ 2 - thứ 6</span>
                    <span>8:00 - 19:00</span>
                </p>
                <p class="openinghours d-flex">
                    <span>Thứ 7</span>
                    <span>10:00 - 17:00</span>
                </p>
                <p class="openinghours d-flex">
                    <span>Chủ nhật</span>
                    <span>10:00 - 16:00</span>
                </p>
            </div>
            <div class="col-md-8 color-3 p-4">
                <h3 class="mb-2">Đặt lịch khám</h3>
                <form action="/" method="POST" class="appointment-form">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="service_id" id="" class="form-control">
                                        <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                            
                                            <option value="<?php echo e($s->id); ?>" class="text-dark"><?php echo e($s->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="icon-user"></span></div>
                                <input type="text" name="name" class="form-control" id="appointment_name" placeholder="Tên">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="icon-paper-plane"></span></div>
                                <input type="text" name="email" class="form-control" id="appointment_email" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="ion-ios-calendar"></span></div>
                                <input type="date" name="date" class="form-control" placeholder="Ngày khám">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <input type="time" name="time" class="form-control" placeholder="Thời gian">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="icon-phone2"></span></div>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Số điện thoại">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="icon"><span class="icon-user"></span></div>
                                <select name="doctor_id" id="" class="form-control">
                                        <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                            
                                            <option value="<?php echo e($d->id); ?>" class="text-dark"><?php echo e($d->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button style="color: white" class="btn btn-outline-primary my-2 my-sm-0" type="submit"><a style="color: white;" href="/send-mail">Đặt lịch khám</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="container" style="margin-bottom: -40px;">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center ftco-animate">
                <h2 class="mb-2" class="font-weight-bold" style="font-family: UTM Avo; font-weight: bold; margin-top: -70px; color: #4e4e4e!important">DỊCH VỤ NỔI BẬT</h2>
                <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
            </div>
        </div>
        <div class="row" style="margin-top: -70px;">
            <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <img src="images/noibat_4.jpg" width="220px;" alt="">
                    </div>
                    <div class="media-body p-2 mt-3">
                    <h3 class="heading" style="color: #1568ae"><?php echo e($sv->name); ?></h3>
                    <p><?php echo e($sv->content); ?></p>
                        <button class="btn btn-primary button-call">Xem thêm..</button>
                    </div>
                </div>
            </div>             
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="container-wrap mt-5">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 img" style="background-image: url(images/noibat_1.jpg);">
            </div>
            <div class="col-md-6 d-flex">
                <div class="about-wrap">
                    <div class="heading-section heading-section-white mb-5 ftco-animate">
                        <h2 class="mb-2" class="font-weight-bold" style="font-family: UTM Avo; font-weight: bold; color: #4e4e4e!important">CHÚNG TÔI CÓ SỰ KHÁC BIỆT</h2>
                        <!-- 							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                    </div>
                    <div class="list-services d-flex ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-check2"></span>
                        </div>
                        <div class="text">
                            <h3>ĐỘI NGŨ BÁC SĨ HÀNG ĐẦU</h3>
                            <p>Hệ thống phòng khám quốc tế Fpital là nơi tinh hoa y học châu Âu hội tụ cùng sự ân cần, nồng hậu của người châu Á</p>
                        </div>
                    </div>
                    <div class="list-services d-flex ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-check2"></span>
                        </div>
                        <div class="text">
                            <h3>TRANG THIẾT BỊ TIÊN TIẾN</h3>
                            <p>Hệ thống phòng khám quốc tế Fpital là nơi tinh hoa y học châu Âu hội tụ cùng sự ân cần, nồng hậu của người châu Á</p>
                        </div>
                    </div>
                    <div class="list-services d-flex ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-check2"></span>
                        </div>
                        <div class="text">
                            <h3>GIÁ TỐT NHẤT</h3>
                            <p>Hệ thống phòng khám quốc tế Fpital là nơi tinh hoa y học châu Âu hội tụ cùng sự ân cần, nồng hậu của người châu Á</p>
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
            <div class="col-md-7 text-center ftco-animate">
                <h2 class="mb-2" class="font-weight-bold" style="font-family: UTM Avo; font-weight: bold; margin-top: -70px; color: #4e4e4e">ĐỘI NGŨ BÁC SĨ</h2>
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
</div>
<div class="row justify-content-center margin-auto">
<div class="col-md-12 ftco-animate more-doctor">
    <a href="#"><button class="form-control"><p>Xem thêm bác sĩ</p></button></a>
</div>
</div>
</div>
</section>





<section class="ftco-section-parallax" style="margin-top: -60px;">
<div class="parallax-img d-flex align-items-center">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 text-center ftco-animate">
                <h2 style="font-family: UTM avo; font-size: 25px; margin-top: -10px; color: white!important">Đăng ký nhận thông tin từ Fpital</h2>
                <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-8">
                        <form action="#" class="subscribe-form" style="margin-top: -30px;">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Email của bạn..">
                                <input type="submit" value="Đăng ký" class="submit px-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center ftco-animate">
                <h2 style="font-family: UTM avo; font-size: 25px; color: white!important">Tổng đài tư vấn miễn phí</h2>
                <p style="font-size: 30px; font-weight: bold; margin-bottom: -10px; color: white!important"><i class="fas fa-phone-square-alt"></i> 0966 976 160</p>
            </div>
        </div>
    </div>
</div>
</section>
<section class="ftco-section">
<div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center ftco-animate">
            <h2 class="mb-2" class="font-weight-bold" style="font-family: UTM Avo; font-weight: bold; margin-top: -70px; color: #4e4e4e">TIN TỨC - SỰ KIỆN</h2>
            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
        </div>
    </div>
    <div class="row" style="margin-top: -50px;">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
            <div class="card">
                <img src="images/image_4.jpg" class="card-img-top" alt="..." class="img-fluid">
                <div class="card-body">
                <a href=""><h6 class="card-title text-dark font-weight-bold" style="color: #1568ae!important"><?php echo e($p->title); ?></h6></a>
                <p class="card-text text-dark"><?php echo e($p->decscription); ?></p>
                    <a href="#" class="btn btn-primary button-call">Đọc tiếp..</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
            <ul class="list-group list-news">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item" style="border: none;"><i style="margin-right: 8px; color: #d3601a; font-size: 10px;" class="fas fa-circle"></i><a href="#" class="text-dark"><?php echo e($p->title); ?></a></li>                 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
</section>
<section style="margin-top: -50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 margin-auto text-center" style="height: 515px; padding-top: 100px; background-image: url(Fpital/images/noibat_5.jpg);">
                    <h2 class="mb-2" class="font-weight-bold" style="font-family: UTM Avo; font-weight: bold; margin-top: -50px; color: #fff">VIDEO GIỚI THIỆU BỆNH VIỆN</h2>
                    <iframe style="margin-top: 20px;" width="560" height="315" src="https://www.youtube.com/embed/QIvIN8M91x4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 text-center ftco-animate">
                        <h2 class="mb-2" class="font-weight-bold" style="font-family: UTM Avo; font-weight: bold; margin-top: -70px; color: #4e4e4e">LỜI CẢM ƠN TỪ BỆNH NHÂN</h2>
                        <!-- <span class="subheading">Our Happy Customer Says</span> -->
                    </div>
                </div>
                <div class="row justify-content-center ftco-animate" style="margin-top: -75px;">
                    <div class="col-md-8">
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="user-img mb-5" style="background-image: url(Fpital/images/person_1.jpg)">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                    <p style="margin-top: -10px;" class="mb-5"><?php echo e($cm->message); ?></p>
                                    <p style="margin-top: -35px;" class="name"><?php echo e($cm->user->name); ?></p>
                                    <span class="position"><?php echo e($cm->user->email); ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<!-- Modal -->
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
  <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
  <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
</div>
<div class="form-group">
  <!-- <label for="appointment_email" class="text-black">Email</label> -->
  <input type="text" class="form-control" id="appointment_email" placeholder="Email">
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <!-- <label for="appointment_date" class="text-black">Date</label> -->
      <input type="text" class="form-control appointment_date" placeholder="Date">
    </div>    
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <!-- <label for="appointment_time" class="text-black">Time</label> -->
      <input type="text" class="form-control appointment_time" placeholder="Time">
    </div>
  </div>
</div>


<div class="form-group">
  <!-- <label for="appointment_message" class="text-black">Message</label> -->
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
<?php echo $__env->make('layouts.index-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\test\resources\views/site/index.blade.php ENDPATH**/ ?>