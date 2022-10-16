<!DOCTYPE html>
<html lang="tr">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>Bibliotec </title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{ asset('assets/css/pages/login/login-2.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{ asset('assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="icon" type="image/png" href="{{ asset('1.png') }}" style="height:300px;width:450px"  />
	</head>
	<!--end::Head-->
    <style>
   .input{
     border-color: red;
        }
    </style>
	<!--begin::Body-->
	<body id="kt_body" class="container-fluid" style="background-color:#e78c8c">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root" style="
        margin-left:200px;
            margin-right:22px;
        background-color:#f0f1f2">
			<!--begin::Login-->
			<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid " style="

            background-color:#f0f1f2" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
					<!--begin: Aside Container-->
					<div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
						<!--begin::Logo-->

						<!--end::Logo-->
						<!--begin::Aside body-->
						<div class="d-flex flex-column-fluid flex-column flex-center">
							<!--begin::Signin-->
							<div class="login-form login-signin py-11" style="float:left">
								<!--begin::Form-->
								<!--begin::Title-->
								<div class="text-center pb-8" >
                                    <a href="#" class="">
                                        <img src="{{ asset('7.png') }}" class="images"   style="height:150px;width:300px" alt="" />
                                        {{-- <span class="">GoMyCodes</span> --}}
                                    </a>
										<h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">
                                            Veillez vous connectez </h2>
									</div>
									<!--end::Title-->
								<!-- Validation Errors -->
								@foreach($errors->all() as $error)
									<div class="alert alert-danger" role="alert">
										<div class="alert-text">{{$error}}</div>
									</div>
								@endforeach
								<!--begin::Form-->
								<form method="POST" action="{{ route('login') }}" class="form" novalidate="novalidate" id="kt_login_signin_form">
									@csrf
									<!--begin::Form group-->
									<div class="form-group">
										<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
										<input name="email" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg input"  style="border-color:red" type="email" autocomplete="off" />
									</div>
									<!--end::Form group-->
									<!--begin::Form group-->
									<div class="form-group">
										<div class="d-flex justify-content-between mt-n5">
											<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
										</div>
										<input name="password" class="form-control form-control-solid h-auto py-7 px-6 rounded-lg input"
                                        style="border-color:red" type="password" name="password" autocomplete="off" />
									</div>
									<!--end::Form group-->
									<!--begin::Action-->
									<div class="text-center pt-2">
										<button type="submit" id="kt_login_signin_submit" class="btn btn-danger font-weight-bolder font-size-h6 px-8 py-4 my-3">Se Connecter</button>
                                        <div>
                                            <input type="checkbox" name="" id="" style="color:red"> Se Souvennir de Moi | <span style="color:red">forget password ?</span>
                                        </div>
									</div>

									<!--end::Action-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Signin-->
						</div>
						<!--end::Aside body-->
					</div>
					<!--end: Aside Container-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="padding: 0px !important;">

					<!--begin::Image-->
					<div class="content-img" >
                    <img src="122.png" style="padding:40%;float:left;height:100%" alt="test"/>
                    </div>
					<!--end::Image-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>

		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
