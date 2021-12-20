@extends('layouts.master')

@section('content')
     <!-- Featured Bike Section-->
     <section class="container mt-5">

        <div class="text-center mt-2 mb-2">
            <h2 class="fw-bold">{{$artikel->judul}} </h2>
            <p class="fw-bold fs-6 dark-orange">Story</p>
        </div>
        <div class="row margin-y g-5 text-center justify-content-center">
            <div class="col-lg-5 col-md-4 col-sm-12 d-flex justify-content-center">
                <img style=" filter: grayscale(100%);" width="500cm" height="250cm" src="{{asset('storage/'.$artikel->image_path)}}" alt="">
            </div>
            <hr>
            <div class="col">
                <div class="card border-0 shadow-lg">
                    <div class="card-body" >
                        <h3 class="card-title text-right justify-content-right" style="text-align:right;font-size:12pt">
                            {{$artikel->tanggal_publish}}
                        </h3>
                        <div class="card-text">
                            <p>{{$artikel->isi}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>







@stop
