<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Registrasi Admin | Menu</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/starter-template/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
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

<body>
    
	<center>
		<div class="col-md-5" style="padding:20px;margin-left:20px" >
			<form method="POST" action="/menu/{{$menu->id}}" enctype="multipart/form-data">
			@method('put')
			@csrf
			<br>
			<br>
			<div class="form-group">
				<label class="btn-file">
					<img id='preview' src="{{asset('Image_Menu/'.$menu->gambar)}}" alt="Foto Menu" style="width:120px;height:120px;"/>
									
				</label>
			</div>
			<br>
			<br>
			<div class="form-group">
				<label>Nama Menu</label>
				<input type="text" class="form-control" name="nama" value="{{$menu->nama}}">
			</div>
			<br>
			<br>
			<div class="form-group">
				<label>Deskripsi</label>
				<textarea class="form-control" name="deskripsi" rows="3">{{$menu->deskripsi}}</textarea>
			</div>
			<br>
			<br>
			<div class="form-group">
				<label>Harga(Rp)</label>
				<input type="text" class="form-control" name="harga" value="{{$menu->harga}}">
			</div>
			<br>
			<br>
				<br>
				<button class="btn btn-success btn-lg" style="margin-top:20px" >Update Menu</button>
			
			</form>
			<br>
			<a href="{{URL::to('/showMenu')}}" class="btn btn-danger btn-lg" style="color:white;text-decoration: none">Batal</a></button>
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

