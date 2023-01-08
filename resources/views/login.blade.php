
<!DOCTYPE html>
<html lang="en">

<head>

	<title>KBS | Login</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />

	<!-- Favicon icon -->
	<link rel="icon" href="assets/img/kbs.png" type="image/x-icon">

	<!-- font css -->
	<link rel="stylesheet" href="assets-admin/fonts/font-awsome-pro/css/pro.min.css">
	<link rel="stylesheet" href="assets-admin/fonts/feather.css">
	<link rel="stylesheet" href="assets-admin/fonts/fontawesome.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets-admin/css/style.css">
	<link rel="stylesheet" href="assets-admin/css/customizer.css">


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
                        @if (Session::has('status'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form method="POST" action="">
                            @csrf
                            {{-- <img src="assets-admin/images/logo-dark.svg" alt="" class="img-fluid mb-4"> --}}
							<h4 class="mb-4"><strong>SISTIM INFORMASI KBS</strong></h4>
                            <h4 class="mb-3 f-w-400">Signin</h4>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i data-feather="mail"></i></span>
                                </div>
                                <input name="email" type="email" class="form-control" placeholder="Email address" required>
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i data-feather="lock"></i></span>
                                </div>
                                <input name="password" type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group text-left mt-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input input-primary" id="customCheckdefh2" checked="">
                                    <label class="custom-control-label" for="customCheckdefh2">Save credentials</label>
                                </div>
                            </div>
                            <button class="btn btn-block btn-primary mb-4">Signin</button>
                            {{-- <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> --}}
					    </form>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets-admin/js/vendor-all.min.js"></script>
<script src="assets-admin/js/plugins/bootstrap.min.js"></script>
<script src="assets-admin/js/plugins/feather.min.js"></script>
<script src="assets-admin/js/pcoded.min.js"></script>



</body>

</html>
