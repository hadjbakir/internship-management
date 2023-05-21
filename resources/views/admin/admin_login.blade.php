{{-- <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Day 001 Login Form</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="{{ asset ('template/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="login-wrap">

	<div class="login-html">
        @if (Session::has('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session::get('error')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>



  @endif
<form action="{{route('admin.login')}}" method="POST">
    @csrf
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" href><label for="tab-2" class="tab">Sign Up</label>

        <div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">email</label>
					<input name="email" id="email"  type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="password" name="password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
                    <a href="{{route('admin.register')}}">register</a>
				</div>
			</div>
        </form>

		</div>
	</div>
</div>
<!-- partial -->

</body>
</html>
 --}}
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Pages / Login - NiceAdmin Bootstrap Template</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="{{asset('template/assets/img/favicon.png') }}" rel="icon">
   <link href="{{asset('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

   <!-- Google Fonts -->
   <link href="https://fonts.gstatic.com" rel="preconnect">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="{{asset('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}""
   <link href="{{asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}"
   <link href="{{asset('template/assets/vendor/boxicons/css/boxicons.min.css')}}"
   <link href="{{asset('template/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
   <link href="{{asset('template/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
   <link href="{{asset('template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
   <link href="{{asset('template/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="{{asset('template/assets/css/style.css') }}" rel="stylesheet">

   <!-- =======================================================
   * Template Name: NiceAdmin
   * Updated: Mar 09 2023 with Bootstrap v5.2.3
   * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
   * Author: BootstrapMade.com
   * License: https://bootstrapmade.com/license/
   ======================================================== -->
 </head>

 <body>

   <main>
     <div class="container">

       <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
         <div class="container">
           <div class="row justify-content-center">
             <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

               <div class="d-flex justify-content-center py-4">
                 <a href="index.html" class="logo d-flex align-items-center w-auto">
                   <img src="assets/img/logo.png" alt="">
                   <span class="d-none d-lg-block">NiceAdmin</span>
                 </a>
               </div><!-- End Logo -->

               <div class="card mb-3">
                @if (Session::has('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session::get('error')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>



  @endif

                 <div class="card-body">
                    <form action="{{route('admin.login')}}" method="POST">
                        @csrf
                   <div class="pt-4 pb-2">
                     <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                     <p class="text-center small">Enter your username & password to login</p>
                   </div>

                   <form class="row g-3 needs-validation" novalidate>

                     <div class="col-12">
                       <label for="yourUsername" class="form-label">Email</label>
                       <div class="input-group has-validation">
                         <span class="input-group-text" id="inputGroupPrepend">@</span>
                         <input type="text" name="email" class="form-control" id="yourUsername" required>
                         <div class="invalid-feedback">Please enter your Email.</div>
                       </div>
                     </div>

                     <div class="col-12">
                       <label for="yourPassword" class="form-label">Password</label>
                       <input type="password" name="password" class="form-control" id="yourPassword" required>
                       <div class="invalid-feedback">Please enter your password!</div>
                     </div>

                     <div class="col-12">
                       <div class="form-check">
                         <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                         <label class="form-check-label" for="rememberMe">Remember me</label>
                       </div>
                     </div>
                     <div class="col-12">
                       <button class="btn btn-primary w-100" type="submit">Login</button>
                     </div>
                     <div class="col-12">
                       <p class="small mb-0">Don't have account? <a href="{{route('admin.register')}}" >Create an account</a></p>
                     </div>
                   </form>

                 </div>
               </div>

               <div class="credits">
                 <!-- All the links in the footer should remain intact. -->
                 <!-- You can delete the links only if you purchased the pro version. -->
                 <!-- Licensing information: https://bootstrapmade.com/license/ -->
                 <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                 Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
               </div>

             </div>
           </div>
         </div>

       </section>

     </div>
   </main><!-- End #main -->

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="{{asset('template/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/chart.js/chart.umd.js')}}"></script>
   <script src="{{asset('template/assets/vendor/echarts/echarts.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/quill/quill.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
   <script src="{{asset('template/assets/vendor/tinymce/tinymce.min.js')}}"></script>
   <script src="{{asset('template/assets/vendor/php-email-form/validate.js')}}"></script>

   <!-- Template Main JS File -->
   <script src="{{asset('template/assets/js/main.js')}}"></script>

 </body>

 </html>
