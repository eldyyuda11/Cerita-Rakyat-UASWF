@extends('layouts.masterpenulis')
  <!-- vertical navbar end -->
@section('content')
  <!-- content -->
  <div class="content ">
    <main class="bg-white" style="width:100%; height:100%;">
      <div class="container-fluid" style="width:1150px; height:560px">
        <div class="row my-3 shadow-sm">
          <p><strong>Dashboard</strong> | Penulis</p>
        </div>
        <div class="row">
          <div class="col-md-4 my-3">
            <div class="shadow-lg p-3 mb-5 bg-white rounded px-3 py-3">
              <h4 class="mb-2">Jumlah Seluruh Artikel yang ada pada website</h4>
              <div class="progress" style="height: 16px;">
                <div
                  class="progress-bar bg-warning"
                  role="progressbar"
                  style="width: 25%;"
                  aria-valuenow="{{$jumlah/100}}"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  {{$jumlah}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="shadow-lg p-3 mb-5 bg-white rounded px-3 py-3">
              <h4 class="mb-2">Artikel</h4>
              <div class="progress" style="height: 16px;">
                <div
                  class="progress-bar bg-info"
                  role="progressbar"
                  style="width: 50%;"
                  aria-valuenow="{{$artikelme/100}}"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  {{$artikelme}}
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="col-md-4 my-3">
            <div class="shadow-lg p-3 mb-5 bg-white rounded p-3">
              <h4 class="mb-2">Completed</h4>
              <div class="progress" style="height: 16px;">
                <div
                  class="progress-bar bg-success"
                  role="progressbar"
                  style="width: 80%;"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  80
                </div>
              </div>
            </div>
          </div> --}}
        </div>

        <div class="row">
          {{-- <div class="col-md-6">
            <div class=" my-2 p-3 shadow-lg p-3 mb-5 bg-white rounded px-3 py-3 text-white block" style="color: white">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Ratione libero totam rerum eos nam ab perspiciatis voluptatum
              in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
              sunt earum tempora veniam.
            </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col my-2 mr-2 p-3 shadow-lg p-3 mb-1 bg-white rounded px-3 py-3 text-white">Column</div>
                <div class="col my-2 mr-2 p-3 shadow-lg p-3 mb-1 bg-white rounded px-3 py-3 text-white">Column</div>
                <div class="w-100"></div>
                <div class="col my-2 mr-2 p-3 shadow-lg p-3 mb-5 bg-white rounded px-3 py-3 text-white">Column</div>
                <div class="col my-2 mr-2 p-3 shadow-lg p-3 mb-5 bg-white rounded px-3 py-3 text-white">Column</div>
              </div>
            </div> --}}
        </div>

        <div class="row my-2 mr-2 p-3 ml-1 shadow-lg p-3 mb-1 bg-white rounded px-3 py-3 text-white">
          {{-- Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Ratione libero totam rerum eos nam ab perspiciatis voluptatum
          in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
          sunt earum tempora veniam.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod reiciendis veritatis iusto quasi exercitationem consectetur incidunt soluta, vitae illo optio deserunt officiis placeat odit odio sed quos quas! Consectetur, veritatis.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, et doloribus modi suscipit ex ad cumque voluptatibus minima iste, totam molestiae. Totam dolorem libero possimus mollitia illo eum nostrum quidem!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quam quibusdam ducimus corrupti reiciendis officiis earum nostrum deleniti, pariatur ipsum id veritatis unde sunt modi minus accusantium, fuga dignissimos praesentium!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic error sequi accusantium repellendus ullam et soluta libero in fugit debitis ab, eveniet non, quisquam dolor nobis culpa, cumque vero deserunt. --}}
        </div>

      </div>
    </main>
  </div>
  @stop
