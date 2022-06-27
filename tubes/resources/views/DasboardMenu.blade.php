<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard | Daftar Menu</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">

    

    <!-- Bootstrap core CSS -->
<link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
	  body label{
		font-weight: bold;
	  }
	  .btn-file {
		position: relative;
		overflow: hidden;
		border:2px dashed;
		border-radius:5px;
	  }
	  .btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		cursor: inherit;
		display: block;
	  }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/sidebars.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
  </head>
  <body>
     <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="home" viewBox="0 0 16 16">
      <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
      <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
    </symbol>
    <symbol id="daftar" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
    </symbol>
    <symbol id="Dompet" viewBox="0 0 16 16">
      <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
    </symbol>
  </svg> 

  <main>
    <div class="b-example-divider"></div>
    <div class="d-flex flex-column flex-shrink-0 p-3 side-bar" style="width: 280px;" >
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#people-circle"/></svg>
        <span class="text-base text-semi">Restoran</span>
      </a>
      <hr>
      <ul class="nav flex-column mb-auto">
        <li class="sidebar-item">
          <a href="/dasboar1" class="nav-link link-dark p-3 oside">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>  Dashboard
          </a>
        </li>
        <li class="sidebar-item">
          <a href="/d" class="nav-link link-dark p-3 side">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#daftar"/></svg>
            Daftar Menu
          </a>
        </li>
        <li class="sidebar-item">
          <a href="/dasboar3" class="nav-link link-dark p-3 oside">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#daftar"/></svg>
            Daftar Meja
          </a>
        </li>
        <li class="sidebar-item">
          <a href="/Transaksi-masuk" class="nav-link link-dark p-3 oside">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#Dompet"/></svg>
            Transaksi
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>User</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="/profilbaru">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="/out">Sign out</a></li>
        </ul>
      </div>
    </div>

		<div class="col-md-5" style="padding:20px;margin-left:20px; "  style="overflow: auto;">
			<form method="POST" action="/addMenu" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label class="btn-file">
					<img id='preview' src="Image/Upload_field.png" alt="Foto Menu" style="width:120px;height:120px;"/><input type="file" name="gambar" class="btn-file" onchange="loadFile(event)" />
									
					</label>
			</div>
			
			<div class="form-group">
				<label>Nama Menu</label>
				<input type="text" class="form-control" name="nama">
			</div>
			<br>
			<br>
			<div class="form-group">
				<label>Deskripsi</label>
				<textarea class="form-control" name="deskripsi" rows="3"></textarea>
			</div>
			
			<div class="form-group">
				<label>Harga(Rp)</label>
				<input type="text" class="form-control" name="harga">
			</div>
			
			@if ($errors->any())
				<div class="alert alert-danger">
					Data tidak boleh kosong
				</div>
			@endif
			<center>
				<br>
				<button class="btn btn-success btn-md" style="margin-top:20px" >Tambah Menu</button>
			</center>
			</form>
		</div>
		<div class="col-md-4" style='margin-left:50px;padding:20px;'>
			<br>
			<br>
			<div class="d-flex justify-content-between align-items-center mb-3">
				<p><label class="fs-4">Daftar Menu Restoran</label><br>pilih untuk edit menu</p>
				<form action="/halamanDel">
					<button class="btn btn-danger" style="float:right;">Hapus</button>
				</form>
			</div>
				<div style="max-height:450px;overflow:auto;">
					@foreach($menus as $menu)
					<div class="card border-light">
						<div>
							<br>
							<img src="{{asset('Image_Menu/'.$menu->gambar)}}" alt="Foto Menu" style="float:left;width:100px;height:100px;margin-right:5px;" >
							<a style="text-decoration:none;color:black;" href="/menu/{{$menu->id}}/update">{{$menu->nama}}</a>
							<p>{{$menu->deskripsi}}</p>
							Rp {{$menu->harga}}
						</div>
					</div>
				@endforeach
				</div>
		</div>
 
			
  </main>  
  
  <script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="/js/sidebars.js"></script>
  
  </body>
  <script>
	var loadFile = function(event){
		var output=document.getElementById('preview');
		output.src=URL.createObjectURL(event.target.files[0]);
	};
  </script>
</html>