@extends('auth.layouts.app')

@section('content')
	<!-- sign in -->
	<div class="sign section--bg" data-bg="img/bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="{{route('password.email')}}" class="sign__form" method="POST">
                            @csrf
							<a href="index.html" class="sign__logo">
								<img src="img/logo.svg" alt="">
							</a>
                            @if (session('status'))
                                <div style="color: #2f80ed" class="mb-4 font-medium text-sm text-red-600">
                                    {{ session('status') }}
                                </div>
                            @endif
							<div class="sign__group">
								<input type="text" class="sign__input" name="email" placeholder="Email" value="{{old('email')}}">
							</div>
                            @error('email')
                                <p style="color: rgb(255, 136, 136); font-size: 12px;">{{$message}}</p>
                            @enderror

                            <button class="sign__btn" type="submit">Find Email</button>

							{{-- <span class="sign__text">Don't have an account? <a href="{{route('register')}}">Sign up!</a></span> --}}
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>
    @endsection
	<!-- end sign in -->

