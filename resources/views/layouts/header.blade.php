<section class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				Laravel
			</div>
			<div class="col-md-7">
				@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            	@endif
			</div>
		</div>
	</div>
</section>