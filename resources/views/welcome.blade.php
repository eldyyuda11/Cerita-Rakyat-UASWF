@extends('layouts.master')

@section('content')
        <!-- Featured Bike Section-->
         <section class="container mt-5">
            <div class="text-center">
                <h2 class="fw-bold">Cerita Rakyat Terbaik</h2>
                <p class="fw-bold fs-6 dark-orange">Best Collection Stories</p>
            </div>
            <div class="row margin-y g-5">
                @foreach ($newA as $item)

                <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center">
                    <img style=" filter: grayscale(100%);" width="288" height="243" src="{{asset('storage/'. $item->image_path)}}"
                    alt="">
                </div>
                @endforeach

            </div>
            <hr>
        </section>
        <!-- Latest News Section -->
         <section class="container mt-5" id="news">
            <h2 class="fw-bold text-center" id="koleksi">Koleksi Cerita Rakyat</h2>
            <div class="row mt-3 g-5">
                @foreach ($artikel as $item)
                <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img class="m-4 justify-content-center" src="{{asset('storage/'. $item->image_path)}}" class="card-img-top" alt="..." width="100" height="50">
                        <div class="card-body m-0">
                            <h5 class="card-title fw-bold text-center">{{$item->judul}}</h5>
                            <p class="card-text">
                                {{ Str::limit($item->isi, 100) }}
                            </p>
                                <a href="{{Url('bacaartikel/'.$item->id_story)}}" class="btn btn-outline-warning">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            <hr>
        </section>

        <!-- Happy Clint Section -->


        <!-- Top-Seller -->
        <Section class="container mt-5">
            <h2 class="fw-bold text-center" id="author">Author <span class="dark-orange">Article</span></h2>
            <div class="row g-4 mt-4">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    @foreach ($penulis as $item)

                    <div class="card  h-80 border-0 shadow-lg">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align:center;">{{$item->name}}</h3>

                            <div class="card-text">
                                <p>{{ Str::limit($item->email, 100) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>
    </Section>


        <!-- FAQ Section -->

        <!-- Subscribe -->

@stop

