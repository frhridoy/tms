{{-- <div class="popular-pack no-bgpack container-fluid">
    <div class="container">
        <div class="session-title">
            <h2>Our Packages</h2>
            <p>"We always strive to provide the best packages, allowing you to explore the beauty of nature at an affordable price."</p>
        </div>
        <div class="row pack-row">
          @foreach ($packages as $package )
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="pack-col">
                <img src="{{ url('/uploads//' . $package->image) }}" alt="" >
                <div class="revire row no-margin">
                    <ul class="rat">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>

                    <span class="pric">
                        {{$package->price}}.00 BDT
                    </span>
                </div>
                <div class="detail row no-margin">
                    <h4>{{$package->name}}</h4>
                    <p> Duration: {{$package->duration}} Days</p>
                    <div class="text-center" >
                        <button class="btn btn-outline-success mt-2 "><a href="{{route('singlepackage.view',$package->id)}}">View The Package</a></button>
                    </div>


                </div>
                <div class="options row no-margin">
                    <ul>
                        <li><i class="fas fa-car"></i></li>
                        <li><i class="fab fa-fly"></i></li>
                        <li><i class="fas fa-cocktail"></i></li>
                        <li><i class="fas fa-umbrella-beach"></i></li>
                        <li><i class="far fa-bell"></i></li>

                    </ul>
                </div>
            </div>
        </div>
          @endforeach



        </div>
    </div>
</div> --}}

@extends('frontend.master')
@section('content')
<div class="popular-pack no-bgpack container-fluid">
    <div class="container">
        <div class="session-title">
            <h2>Our Packages</h2>
            <p>"We always strive to provide the best packages, allowing you to explore the beauty of nature at an affordable price."</p>
        </div>
        <div class="row pack-row">
          @foreach ($packages as $package )
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="pack-col">
                <img src="{{ url('/uploads//' . $package->image) }}" alt="" >
                <div class="revire row no-margin">
                    <ul class="rat">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>

                    <span class="pric">
                        {{$package->price}}.00 BDT
                    </span>
                </div>
                <div class="detail row no-margin">
                    <h4>{{$package->name}}</h4>
                    <p> Duration: {{$package->duration}} Days</p>
                    <div class="text-center" >
                        <button class="btn btn-outline-success mt-2 "><a href="{{route('singlepackage.view',$package->id)}}">View The Package</a></button>
                    </div>


                </div>
                <div class="options row no-margin">
                    <ul>
                        <li><i class="fas fa-car"></i></li>
                        <li><i class="fab fa-fly"></i></li>
                        <li><i class="fas fa-cocktail"></i></li>
                        <li><i class="fas fa-umbrella-beach"></i></li>
                        <li><i class="far fa-bell"></i></li>

                    </ul>
                </div>
            </div>
        </div>
          @endforeach



        </div>
    </div>
</div>
@endsection
