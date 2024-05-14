<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/admin.css')}}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{('icon/favicon-32x32.png')}}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{('icon/favicon-32x32.png')}}">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixTV – Movies & TV Shows, Online cinema HTML Template</title>
</head>
<body>
	<!-- sign in -->
	<div class="sign section--bg" data-bg="img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form action="{{route('register')}}"  class="sign__form" method="POST">
                            @csrf
							<a href="index.html" class="sign__logo">
								<img src="{{asset('img/logo.svg')}}" alt="">
							</a>
                            {{-- @error('name')
                                @er
                            @enderror --}}



                            <div class="sign__group">
                                <a href="#">A new email verification link has been emailed to you!</a>
                            </div>
                            @error('password_confirmation')
                                <p style="color: rgb(255, 136, 136); font-size: 12px;">{{$message}}</p>
                            @enderror

							<button class="sign__btn" type="submit">Need to verify</button>

							</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end sign in -->

	<!-- JS -->
	<script src="{{('js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{('js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{('js/smooth-scrollbar.js')}}"></script>
	<script src="{{('js/select2.min.js')}}"></script>
	<script src="{{('js/admin.js')}}"></script>
</body>
</html>
