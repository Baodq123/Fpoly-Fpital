@extends('layouts.index-main')
@section('container2')
<div class="container">
    <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center ftco-animate">
            <h2 class="mb-2" class="font-weight-bold" style="font-family: UTM Avo; font-weight: bold; margin-top: -70px; color: #4e4e4e">ĐỘI NGŨ BÁC SĨ</h2>
            <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p> -->
        </div>
    </div>
    <div class="row" style="margin-top: -80px;">
        @foreach ($dsDoctor1 as $bs)   
        <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
                <div class="info text-center">
                <h3><a href="teacher-single.html">{{$bs->name}}</a></h3>
                <span class="position">{{$bs->major}}</span>
                    <div class="text">
                    <p>{{$bs->info}}</p>
</div>
</div>
</div>
</div>
@endforeach
</div>
<div class="row justify-content-center margin-auto">
<div class="col-md-12 ftco-animate more-doctor">
<a href="#"><button class="form-control"><p>Xem thêm bác sĩ</p></button></a>
</div>
</div>
</div>
@endsection