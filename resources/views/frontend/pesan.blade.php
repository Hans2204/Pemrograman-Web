@extends('layouts.frontend')

@section('content')
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">PEMESANAN FILM</h1>
      </div>
    </div>
  </header>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 m-auto">
          <div class="contact-form">
            <form action="/pinjam" method="post">
              @csrf
              <div class="row">
                <div class="col-lg-6 col-md-6 mb-2">
                  <div class="name-input form-group">
                    Nama Pemesan :
                    <input
                    name="nama"
                      type="text"
                      class="form-control"
                      placeholder="Isikan nama lengkap"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-2">
                  <div class="email-input form-group">
                    Email :
                    <input
                    name="email"
                      type="email"
                      class="form-control"
                      placeholder="Isikan alamat email"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 mb-2">
                  <div class="name-input form-group">
                    Nomer Hp :
                    <input
                    name="nomer_hp"
                      type="text"
                      class="form-control"
                      placeholder="Isikan nomer hp"
                    />
                  </div>
                </div>
              
              
                <div class="col-lg-6 col-md-6 mb-2">
                  <div class="name-input form-group">
                    Durasi Sewa (minimal 1 hari):
                    <input
                    name="durasi_sewa"
                      type="text"
                      class="form-control"
                      placeholder="Isikan durasi sewa yang diinginkan"
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-6 mb-2">
                  <div class="subject-input form-group">
                    Nama Film yang dipesan :
                    <input
                    name="nama_dvd"
                      type="text"
                      class="form-control"
                      placeholder="Masukkan Judul Film Yang Akan Disewa"
                      
                      
                    />
                  </div>
                </div>
              </div>
              <div class="input-submit form-group">
                <button
                  type="submit"
                  style="height: 50px; width: 400px; margin: 0 auto"
                  class="d-block btn btn-primary"
                >
                  Kirim Pesanan
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection