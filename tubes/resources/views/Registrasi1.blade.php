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
    <link href="css/sidebars.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </symbol>
    </svg>
<div class="col-lg-8 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center " >
     <div>
      <span class="fs-4" style="font-weight: bold;">Mulai buka restoranmu</span>
    </a>
    <br>
    </div>
  </header>
  <nav class="pb-1 mb-1 border-bottom" >
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
          <span class="c01231 c01182" style="background-color : #E5E5E5"></span>
        </div>
        <p class="c01123 c0195"></p>
      </div>
    </section>
    <section class="c01248"><div class="c01247">
      <div class="c01183 c01180 " style="background-color: #E5E5E5; border: 3px solid #E5E5E5">
        <p class="c01123 c01119">2</p>
      </div>
    </div>
    <div class="c01185 c01228 c01225">
      <div class="c01254">
        <label class="c01184">
          <p class="c01123 c01119" style="color: #E5E5E5;">Menu Restoran</p>
        </label><span class="c01231 c01182" style="background-color : #E5E5E5"></span>
      </div>
      <p class="c01123 c0195"></p>
    </div>
    </section>
    <section class="c01248">
        <div class="c01247" >
          <div class="c01183 c01180 " style="background-color: #E5E5E5; border: 3px solid #E5E5E5" >
            <p class="c01123 c01119" >3</p>
          </div>
        </div>
        <div class="c01185 c01228 c01225">
          <div class="c01254">
            <label class="c01184">
              <p class="c01123 c01119" style="color: #E5E5E5;">Informasi Meja</p>
            </label>
          </div>
          <p class="c01123 c0195"></p>
        </div>
      </section>
    </main>
  </nav>
<div class="container mb-5">
    
    <form class="needs-validation" novalidate method="POST" action="/regis" enctype="multipart/form-data">
      @csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Profil</label>
              <br>
              <img class="bi me-2" width="100" height="90" id= 'preview'></img>
              <input type="file" class="form-control" id="picture" name="picture" placeholder="" required onchange="loadFile(event)">
              <div class="invalid-feedback">
                Valid Picture is required.
              </div>
            </div>
    
            <div class="col-sm-12">
              <label for="firstName" class="form-label">Nama Restoran</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder=""  required>
              <div class="invalid-feedback">
                Valid Resto name is required.
              </div>
            </div>


            <div class="col-12">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Kota</label>
              <select class="form-select" id="country" name="country" required>
                <option value="">Choose...</option>
                <option value="Bandung">Bandung</option>
                <option value="Jogja">Jogja</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Kecamatan</label>
              <select class="form-select" id="state" name="state" required>
                <option value="">Choose...</option>
                <option value="Arcamanik">Arcamanik</option>
                <option value="Batununngal">Batununngal</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Kode Pos</label>
              <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
      
            <div class="col-md-12">
              <label for="state" class="form-label">Kategori</label>
              <select class="form-select" id="kategori" name="kategori" required>
                <option value="">Choose...</option>
                <option value="Makanan Tradisional">Makanan Tradisional</option>
                <option value="Makanan Penutup">Makanan Penutup</option>
                <option value="Makanan Barat">Makanan Barat</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
      
          </div>
        
          
          <hr class="my-4">
            <center>
          <button class="btn btn-primary float-right ml-2 mb-5">Simpan</button>
           </center>

    </form>
    
  </div>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
  <script>
    var loadFile = function(event){
      var output=document.getElementById('preview');
      output.src=URL.createObjectURL(event.target.files[0]);
    };
    </script>
</html>
