<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Ro'yxatga olish</title>
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

<body class="bg-register">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-register d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="/assets/images/logo-icon.png" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Yangi foydalanuvchi</h3>
									</div>
                                    <form action="{{route('reg')}}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Ism</label>
                                                <input type="text" name="ism" class="form-control" placeholder="Ism" value="{{old('ism')}}" />
                                                <span class="text-danger">@error('ism') {{'Ismingizni kiriting'}} @enderror</span>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Familiya</label>
                                                <input type="text" name="familiya" class="form-control" placeholder="Familiya"  value="{{old('familiya')}}"/>
                                                <span class="text-danger">@error('ism') {{'Familiyangizni kiriting'}} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Login</label>
                                            <input type="text" name="login" class="form-control" placeholder="login"  value="{{old('login')}}"/>
                                            <span class="text-danger">@error('login') {{'Loginda xato!!!'}} @enderror</span>
                                        </div>

                                            <div class="form-group">
                                                <label>Parol</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input class="form-control border-right-0" type="password" name="password">
                                                    <div class="input-group-append">	<a href="javascript:;" class="input-group-text bg-transparent border-left-0"><i class='bx bx-hide'></i></a>
                                                    </div>

                                                </div><span class="text-danger">@error('password') {{'Parol kiriting'}} @enderror</span>
                                            </div>

                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Manzilingiz" name="adress" cols="30" rows="10"></textarea><span class="text-danger">@error('adress') {{'Manzil kiriting'}} @enderror</span>
                                        </div>

                                        <div class="mt-3 text-center">
                                            <button type="submit" class="btn btn-outline-primary m-1 px-5"><i class="bx bx-user mr-1"></i>Ro'yxatga olish</button>
                                        </div>
                                        <hr/>
                                        <div class="text-center mt-4">
                                            <p class="mb-0">Oldin ro'yxatdan o'tgan bo'lsangiz <a href="{{route('loginform')}}">Login</a>
                                            </p>
                                        </div>
                                    </form>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="/assets/images/login-images/register-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/assets/js/jquery.min.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
</body>

</html>
