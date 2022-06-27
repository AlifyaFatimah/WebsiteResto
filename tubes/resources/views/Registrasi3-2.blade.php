<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Registrasi Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/starter-template/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/Regis.css">
    <link href="css/form-validation.css" rel="stylesheet">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
     <link href="css/index.css" rel="stylesheet">
  </head>
  <body>
    
<div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center " >
     <div>
      <span class="fs-4" style="font-weight: bold;">Mulai buka restoranmu</span>
    </a>
    <br>
    </div>
  </header>
  <nav class="pb-3 mb-5 border-bottom" >
     <main>
    <div class="c01179">
    <section class="c01188 ">
      <section class="c01248">
        <div class="c01247">
          <div class="c01183 c01180 ">
            <p class="c01123 c01119">1</p>
          </div>
        </div>
        <div class="c01185 c01228 c01225">
          <div class="c01254"><label class="c01184">
            <p class="c01123 c01119" >Lengkapi Profil</p>
          </label>
          <span class="c01231 c01182" ></span>
        </div>
        <p class="c01123 c0195"></p>
      </div>
    </section>
    <section class="c01248"><div class="c01247">
      <div class="c01183 c01180 ">
        <p class="c01123 c01119">2</p>
      </div>
    </div>
    <div class="c01185 c01228 c01225">
      <div class="c01254">
        <label class="c01184">
          <p class="c01123 c01119">Menu Restoran</p>
        </label><span class="c01231 c01182" ></span>
      </div>
      <p class="c01123 c0195"></p>
    </div>
    </section>
    <section class="c01248">
        <div class="c01247" >
          <div class="c01183 c01180 "  >
            <p class="c01123 c01119" >3</p>
          </div>
        </div>
        <div class="c01185 c01228 c01225">
          <div class="c01254">
            <label class="c01184">
              <p class="c01123 c01119" >Informasi Meja</p>
            </label>
          </div>
          <p class="c01123 c0195"></p>
        </div>
      </section>
    </section>
  </div>
    </main>
  </nav>
  <div class="container">
  <main>
    <div class="container">
    <main>
      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <label class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-success">Meja yang tersedia</span>
          </label>
          @foreach($simpan as $s)
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">{{$s->lokasi_meja}}</h6>
                <small class="text-muted">{{$s->jenis_meja}}</small>
              </div>
              <span class="text-muted">{{$s->jumlah_meja}}</span>
                
            </li>
            <a href="/hapus/{{$s->id}}" onclick="return confirm('Apakah anda ingin menghapus meja?');" class="btn btn-danger btn-md">hapus</a>  
          </ul>
          @endforeach
        </div>

        <div class="col-md-7 col-lg-8">

          <h1 class="mb-3"></h1>Tambahkan informasi meja restoranmu, agar pengunjung dapat memilih mejanya.
          <h4 class="mb-3">Pilih Meja</h4>

          <form method="POST" action="{{route('simpan')}}" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
              <div class="col-sm-3">
                <label for="lokasi_meja" class="form-label">Pilih Lokasi Meja
                <select class="form-select" name="lokasi_meja" required>Pilih
                  <option value="">pilih...</option>
                  <option>Indoor</option>
                  <option>Outdoor</option>
                </select>
                </label>
            </div>

            <div class="row g-3">
              <div class="col-sm-3">
                <label for="jenis_meja" class="'form-label">Jenis Meja
                <select class="form-select" name="jenis_meja" required>pilih
                  <option value="">pilih...</option>
                  <option>Meja duduk</option>
                  <option>Lesehan</option>
                </select>
                </label>
              </div>

              <div class="col-sm-3">
                <label for="jumlah_meja" class="form-label">Jumlah Kursi
                  <input type="text" class="form-control" name="jumlah_meja" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    wajib diisi
                  </div>
                </label>
              </div>

            <div class="col-md-30 text-center">
              <button class="w-25 btn btn-success btn-sm" type="submit">Simpan</button>
            </div>

            </form>
          </form>
            <hr class="my-8">

            <div class="col-lg-50 text-center">
            <button class="w-25 btn btn-success btn-sm" ><a href="{{URL::to('/dasboar1')}}" style="color:white;text-decoration: none">Simpan dan selesai</a></button>

        </div>
      </div>
  </main>

  
</div>



    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
