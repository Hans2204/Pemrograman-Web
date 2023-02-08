@extends('layouts.frontend')

@section('content')
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">Detail Film</h1>
      </div>
    </div>
  </header>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-8 mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <center><img
              class="card-img-top"
              src="{{Storage::url($rent->gambar)}}"
              alt="{{$rent->nama_dvd}}"
              style="width: 50%;"
            /></center>
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div>
                <!-- Product name-->
                <h3 class="fw-bolder text-primary">Deskripsi</h3>
                <p>
                  {{$rent->deskripsi}}
                </p>
                <div class="mobil-info-list border-top pt-4">
                  <ul class="list-unstyled">
                    <li>
                      @if($rent->SU)
                      <i class="ri-checkbox-circle-line"></i>
                      <span>SU</span>
                      @else
                      <i class="ri-close-circle-line text-secondary"></i>
                      <span>SU</span>
                      @endif
                    </li>
                    <li>
                      @if($rent->{'13+'})
                      <i class="ri-checkbox-circle-line"></i>
                      <span>13+</span>
                      @else
                      <i class="ri-close-circle-line text-secondary"></i>
                      <span>13+</span>
                      @endif
                    </li>
                    <li>
                      @if($rent->{'17+'})
                      <i class="ri-checkbox-circle-line"></i>
                      <span>17+</span>
                      @else
                      <i class="ri-close-circle-line text-secondary"></i>
                      <span>17+</span>
                      @endif
                    </li>
                    <li>
                      @if($rent->{'21+'})
                      <i class="ri-checkbox-circle-line"></i>
                      <span>21+</span>
                      @else
                      <i class="ri-close-circle-line text-secondary"></i>
                      <span>21+</span>
                      @endif
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card">
            <!-- Product details-->
            <div class="card-body card-body-custom pt-4">
              <div class="text-center">
                <!-- Product name-->
                <div
                  class="d-flex justify-content-between align-items-center flex-wrap"
                >
                  <h5 class="fw-bolder">{{$rent->nama_dvd}}</h5>
                  
                  <div class="rent-price mb-3">
                    <span style="font-size: 1rem" class="text-primary"
                      >Rp.{{number_format($rent->harga_sewa)}}/</span
                    >day
                  </div>
                </div>
                <ul class="list-unstyled list-style-group">
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Tahun</span>
                    <span style="font-weight: 600">{{$rent->tahun}}</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Genre</span>
                    <span style="font-weight: 600">{{$rent->genre}}</span>
                  </li>
                  <li
                    class="border-bottom p-2 d-flex justify-content-between"
                  >
                    <span>Durasi</span>
                    <span style="font-weight: 600">{{$rent->durasi}}</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer border-top-0 bg-transparent">
              <div class="text-center">
                <a
                  class="btn d-flex align-items-center justify-content-center btn-primary mt-auto"
                  href="{{route('pesan', $rent->slug)}}"
                  style="column-gap: 0.4rem"
                  >Sewa Film <i class="ri-whatsapp-line"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection