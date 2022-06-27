<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Sign In - Resto</title>
    
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/SignIn.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/sidebars.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
</head>
<body style="font-style: 'Poppins';">
    <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                        	<img src="Image/Logo.png" style="width: 25%; height: 25%;">
                            <div class="text-base text-bold mb-4 mt-4">
                                Admin Resto
                            </div>
                            <form method="POST" action="/signup">
                                @csrf
                            	<div class="form-outline mb-4 text-xs text-semi">
	                                <label class="form-label" for="email" >Email</label>
	                                <input type="email" name="email" id="email" class="form-control form-control-lg text-xs" placeholder="Masukkan Email" />
	                            </div>
                                <div class="form-outline mb-4 text-xs text-semi">
                                    <label class="form-label" for="name" >Username</label>
                                    <input type="username" name="username" id="name" class="form-control form-control-lg text-xs" placeholder="Masukkan username" />
                                </div>

	                            <div class="form-outline mb-4 text-xs text-semi" id="form-label-overrides">
	                                <label class="form-label" for="password">password</label>
	                                <input type="password" name="password" id="password" class="form-control form-control-lg text-xs" placeholder="Masukkan password" />   
	                            </div>

	                            <div class="d-grid gap-2 col-6 mx-auto">
	                            	<button class="btn btn-primary btn-lg text-2xs text-semi mb-4">Daftar</button>
	                            </div>
                            </form>
                            
                            
                            <p class="text-2xs text-reg">Sudah Punya Akun?  <a href="/signin">Masuk disini</a></p>
                            <hr class="my-2">
                            <p class="text-2xs text-reg mb-4">Masuk dengan</p>

                            <div class="d-grid gap-2 col-8 mx-auto">
							  	<a class="btn btn-outline-primary btn-lg text-2xs text-semi p-2" href="{{ url('auth/google') }}" role="button"><i class="fa fa-google me-2"></i> Google</a>
							  	<a class="btn btn-outline-primary btn-lg text-2xs text-semi p-2" href="{{ url('auth/facebook') }}" role="button"><i class="fa fa-facebook me-2"></i> Facebook</a>
							</div>
                        </div>
                    </div>
              </div>
        </div>
      </div>
    </section>
    <script src="/js/sidebars.js"></script>
  <script src="/js/form-validation.js"></script>
</body>
</html>

