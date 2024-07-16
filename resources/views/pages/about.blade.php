@extends('layouts.main')
@section('content')
{{-- spacer --}}
<div class="spacer" style="height: 100px;"></div>

{{-- About Lipsing --}}
<div class="container">
    <div class="row">
        <div data-aos="fade-right" data-aos-delay="100" class="col-md-5 mt-4">
            <h1 style="color: #219C90; font-weight: 700; line-height: normal;">About LIPSING</h1>
            <h5 class="mt-5" style="color: rgba(0, 0, 0, 0.70); font-weight: 300; line-height: normal; text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h5>
       </div>
       <div class="col mx-auto"></div>
        <div data-aos="fade-left" data-aos-delay="300" class="col-md-6">
            <img src="image/ilustrasi-about.png" alt="ilustrasi about" width="100%">
        </div>
    </div>



    <div class="row">
        <div data-aos="fade-up" data-aos-delay="100" class="col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3949.883236851581!2d115.09166699999999!3d-8.11337!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMDYnNDguMSJTIDExNcKwMDUnMzAuMCJF!5e0!3m2!1sen!2sus!4v1699538142049!5m2!1sen!2sus" width="100%" height="450" style="border:0; border-radius: 5px; box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.25);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div data-aos="fade-up" data-aos-delay="300" class="col-md-4">
            <h1 style="color: #219C90; font-weight: 700; line-height: normal;">Contact</h1>
            <div class="row mt-5">
                <div class="col-md-1">
                    <img src="icon/map.png" alt="" width="30px">
                </div>
                <div class="col" style="color: rgba(0, 0, 0, 0.70);">
                    <p>Jl. Ngurah Rai No. 72 Singaraja</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-1">
                    <img src="icon/phone.png" alt="" width="30px">
                </div>
                <div class="col" style="color: rgba(0, 0, 0, 0.70);">
                    <p>(0362) 22063</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-1">
                    <img src="icon/email.png" alt="" width="30px">
                </div>
                <div class="col" style="color: rgba(0, 0, 0, 0.70);">
                    <p>dpmptsp@bulelengkab.go.id</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-1">
                    <img src="icon/fb.png" alt="" width="30px">
                </div>
                <div class="col" style="color: rgba(0, 0, 0, 0.70);">
                    <p>Facebook Dpmptsp</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-1">
                    <img src="icon/ig.png" alt="" width="30px">
                </div>
                <div class="col" style="color: rgba(0, 0, 0, 0.70);">
                    <p>Instagram Dpmptsp</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-1">
                    <img src="icon/yt.png" alt="" width="30px">
                </div>
                <div class="col" style="color: rgba(0, 0, 0, 0.70);">
                    <p>Youtube Dpmptsp</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="spacer" style="height: 100px;"></div>
@endsection