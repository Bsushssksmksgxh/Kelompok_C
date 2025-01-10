@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="content-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In earum quae eligendi magnam quia et ipsa labore natus saepe, animi unde sunt soluta qui laboriosam distinctio perferendis praesentium maxime illo!
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/images/Kedai_kopi.jpg')}}" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5">+ 100 Pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-home fa-2x"></i>
            <p class="m-0 fs-5">+ 200 seller</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-coffee fa-2x"></i>
            <p class="m-0 fs-5">+ 300 product</p>
        </div>
    </div>
<h4 class="text-center">Contact Us</h4>
<div class="row">
    <div class="col md-5">
        <div class="w-100 h-25"></div>
    </div>
</div>

@endsection
