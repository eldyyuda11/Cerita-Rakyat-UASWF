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


    <!-- Latest News Section -->
     {{-- <section class="container mt-5" id="news">
        <h2 class="fw-bold text-center" id="koleksi">Koleksi Cerita Rakyat</h2>
        <div class="row mt-3 g-5">
            <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img class="m-2" src="images/bike-1.png" class="card-img-top" alt="...">
                    <div class="card-body m-0">
                        <h5 class="card-title fw-bold">Ducati XDIAVEL S-73</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="#" class="btn btn-outline-warning">Read More</a>
                    </div>
                </div>
            </div>

        </div>
        <hr>
    </section> --}}

    <!-- Happy Clint Section -->


    <!-- Top-Seller -->
    {{-- <Section class="container mt-5">
        <h2 class="fw-bold text-center" id="author">Author <span class="dark-orange">Article</span></h2>
        <div class="row g-4 mt-4">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card  h-80 border-0 shadow-lg">
                    <div class="card-body">
                        <h3  class="card-title">IMRAN
                        </h3>
                        <div class="card-text">
                            <p>I am so happy to get the opportunity to sell in this platform
                            </p>
                            <p>Click the button bellow to see my products</p>
                        </div>
                        <div>
                            <button class="btn btn-warning">Product List</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card  h-80 border-0 shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title">ARAFAT
                        </h3>
                        <div class="card-text">
                            <p>I am so happy to get the opportunity to sell in this platform
                            </p>
                            <p>Click the button bellow to see my products</p>
                        </div>
                        <div>
                            <button class="btn btn-warning">Product List</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card  h-80 border-0 shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title">RANIKA
                        </h3>
                        <div class="card-text">
                            <p>I am so happy to get the opportunity to sell in this platform
                            </p>
                            <p>Click the button bellow to see my products</p>
                        </div>
                        <div>
                            <button class="btn btn-warning">Product List</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card  h-80 border-0 shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title">NAZMUL
                        </h3>
                        <div class="card-text">
                            <p>I am so happy to get the opportunity to sell in this platform
                            </p>
                            <p>Click the button bellow to see my products</p>
                        </div>
                        <div>
                            <button class="btn btn-warning">Product List</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</Section> --}}






@stop
