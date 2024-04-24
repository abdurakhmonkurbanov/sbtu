<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Login</title>
	<!--favicon-->
	<link rel="icon" href="/assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="/assets/css/pace.min.css" rel="stylesheet" />
	<script src="/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="/assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="/assets/css/app.css" />
</head>

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">

							<div class="col-lg-6">
                                @if(Session::has('xato'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">{{Session::get('xato')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="/assets/images/logo-icon.png" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Hush kelibsiz <br>
                                        Adabiyotlar monitoringi tizimiga</h3>
									</div>
                                    <form action="{{route('login')}}" method="post">
                                        @csrf
									<div class="login-separater text-center"> <span>Avtorizatsiya</span>
										<hr/>
									</div>
									<div class="form-group mt-4">
										<label>Login</label>
										<input type="text" name="login" class="form-control" placeholder="Login"  value="{{old('login')}}"/>
                                        <span class="text-danger">@error('login') {{'Loginda xato!!!'}} @enderror</span>
									</div>
									<div class="form-group">
										<label>Parol</label>
										<input type="password" name="password" class="form-control" placeholder="Parolni kiriting" />
									</div>
                                    <span class="text-danger">@error('password') {{'Parolda xato!!!'}} @enderror</span>
									<!-- <div class="form-row">
										<div class="form-group col">
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
												<label class="custom-control-label" for="customSwitch1">Remember Me</label>
											</div>
										</div>
										<div class="form-group col text-right"> <a href="authentication-forgot-password.html"><i class='bx bxs-key mr-2'></i>Forget Password?</a>
										</div>
									</div>-->
									<div class="mt-3 text-center">
                                        <button type="submit" class="btn btn-outline-primary m-1 px-5"><i class="bx bx-user mr-1"></i>Kirish</button>
                                    </div>
                                </form>
									<hr>
									<div class="text-center">
										<p class="mb-0">Sizda login yo'qmi? <a href="{{route('regform')}}">Registratsiya</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="/assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
    @include('components.js')
</body>

</html>
