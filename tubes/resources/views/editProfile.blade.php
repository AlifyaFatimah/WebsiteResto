<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title> Profile</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/starter-template/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/starter-template/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/Regis.css">
    <link href="css/index.css" rel="stylesheet">
    
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
</head>

<body >
    
	<div class="container my-4 ">
		<form class="needs-validation" novalidate method="POST" action="/updateprofil" enctype="multipart/form-data">
      @method('put')
      @csrf
          <div class="row g-3 ">
            <div class="col-sm-6">
              <label for="firstName" class="form-label"><b>Profil</b></label>
              <br>
              <img class="bi me-2" width="100" height="90" id= 'preview' src="{{asset('Image/'.$profil->image)}}"></img>
            </div>
    
            <div class="col-sm-12">
              <label for="firstName" class="form-label">Nama Restoran</label>
              <input type="text" class="form-control" id="firstName" name="firstName" value="{{$profil ->nama}}" required>
              <div class="invalid-feedback">
                Valid Resto name is required.
              </div>
            </div>


            <div class="col-12">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" name="address" value="{{$profil -> alamat}}" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Kota</label>
              <select class="form-select" id="country" name="country" required>
                <option value="">Choose...</option>
                <option value="Bandung" @if($profil -> kota == "Bandung") selected @endif >Bandung</option>
                <option value="Jogja" @if($profil -> kota == "Jogja") selected @endif>Jogja</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Kecamatan</label>
              <select class="form-select" id="state" name="state" required>
                <option value="">Choose...</option>
                <option value="Arcamanik" @if($profil -> kecamatan == "Arcamanik") selected @endif>Arcamanik</option>
                <option value="Batununngal" @if($profil -> kecamatan == "Batununngal") selected @endif> Batununngal</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Kode Pos</label>
              <input type="text" class="form-control" id="zip" name="zip" placeholder="" value="{{$profil -> kodepos}}" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
      
            <div class="col-md-12">
              <label for="state" class="form-label">Kategori</label>
              <select class="form-select" id="kategori" name="kategori" required>
                <option value="">Choose...</option>
                <option value="Makanan Tradisional" @if($profil -> kategori == "Makanan Tradisional") selected @endif >Makanan Tradisional</option>
                <option value="Makanan Penutup" @if($profil -> kategori == "Makanan Penutup") selected @endif >Makanan Penutup</option>
                <option value="Makanan Barat"@if($profil -> kategori == "Makanan Barat") selected @endif >Makanan Barat</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>
      
          </div>
        
          
          <hr class="my-4">
         <center>
          <!--<button class="btn btn-primary float-right ml-2 mb-5"><a href="" style="color:white;text-decoration: none">Update </a></button>
           </center> -->

		</form>
        <center>
			<button class="btn btn-secondary float-right ml-2 mb-5"><a href="/dasboar1" style="color:white;text-decoration: none">Kembali </a></button>
			<button class="btn btn-success float-right ml-2 mb-5">Simpan </button>
		</center>
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
