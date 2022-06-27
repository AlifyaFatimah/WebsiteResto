<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Registrasi Admin | Menu</title>

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
.right{
    margin:20px;
    float: right;
    display: block;
}
.menu{
    margin:5px;	
}
.hapusMenu{
	float:left;
	
}
body label{
	font-weight: bold;
}
.form-control{
	border-radius:1px;
}

    </style>

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
</head>

<body>
    
	<div style='border:2px' class="col-lg-8 mx-auto p-3 py-md-5">
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
						<div class="c01254">
							<label class="c01184">
								<p class="c01123 c01119" >Lengkapi Profil</p>
							</label>
								<span class="c01231 c01182" ></span>
						</div>
							<p class="c01123 c0195"></p>
					</div>
				</section>
				<section class="c01248">
					<div class="c01247">
						<div class="c01183 c01180 ">
							<p class="c01123 c01119">2</p>
						</div>
					</div>
					<div class="c01185 c01228 c01225">
						<div class="c01254">
							<label class="c01184">
								<p class="c01123 c01119">Menu Restoran</p>
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
  <div>
      <div>
        
      </div>
  </div>
				</div>

		<!---Isi Registrasi 2--->
		<div class="container mb-5">
			<div class="row">
				<div class="col-6 col-md-2"></div>
				<div class="col-6 col-md-4" style="padding:20px">
					<form method="POST" action="/simpanMenu" enctype="multipart/form-data">
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
						<div class="form-group">
							<label>Deskripsi</label>
								<textarea class="form-control" name="deskripsi" rows="3"></textarea>
						</div>
						<div class="form-group">
							<label>Harga(Rp)</label>
							<input type="text" class="form-control" name="harga">
						</div>
						@if ($errors->any())
							<div class="text text-danger">
								Data tidak boleh kosong
							</div>
						@endif
						<center>
							<br>
							<button class="btn btn-success" style="margin-top:20px">Tambah Menu</button>
						</center>
					</form>
				</div>
				<div class="col-6 col-md-4" style='margin-left:100px'>
					<label>Daftar Menu Restoran</label>
					<p>pilih untuk edit menu</p>
					
				</div>
				<div class="col-6 col-md-2"></div>
				
				<center style="margin:50px">
					<button class="btn btn-success btn-md"><a href="{{URL::to('/regis3')}}" style="color:white;text-decoration: none">  Lanjut  </a></button>
				</center>
			</div>
		</div>
	</div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
	
  </body>
  
<script>
	var loadFile = function(event){
		var output=document.getElementById('preview');
		output.src=URL.createObjectURL(event.target.files[0]);
	};
</script>

<!---<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
	$(document).ready(function(){
		
		fetchMenu();
		function fetchMenu(){
			$.ajax({
				type:"GET",
				url: "/fetch-Menu",
				dataType:"json",
				success: function(response){
					$('.daftar menu').html("");
					$.each(response.menu, function(key, item){
						$('.daftar menu').append('<div class="menu-group">\
							<img src="Image/'+item.gambar+'" alt="Foto Menu" style="float:left;width:86px;height:86px;" >\
							<label>'+item.nama+'</label>\
							<p>'+item.deskripsi+'</p>\
							<p>Rp '+item.harga+'</p>\
						</div>');
					});
				}
			});
		}
	});
</script>--->

</html>
