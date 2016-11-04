	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img style="max-height:100px; margin-top: -40px;"
					src="/img/phWhiteLogo.png"></a>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if (Auth::check() == false)
					<li><a href="{{ action('PostsController@index') }}">Posts</a></li>
					<li><a href="{{ action('UsersController@index') }}">Users</a></li>
					@endif
					@if (Auth::check())
                    <li><a href="{{ action('UsersController@show', Auth::id()) }}"><i class="fa fa-user" aria-hidden="true"></i> Welcome, {{ Auth::user()->first_name }}!</a></li>
                    @endif
          			@if (Auth::check() == true && Auth::user()->employer == 0)
					<li><a href="{{ action('PostsController@index') }}">Job Postings</a></li>
					@endif
					@if (Auth::check() == true && Auth::user()->employer == 1)
					<li><a href="{{ action('PostsController@index') }}">Project Posts</a></li>
					@endif
					@if (Auth::check() == true && Auth::user()->employer == 0)
					<li><a href="{{ action('UsersController@index') }}">Employers</a></li>
					@endif
					@if (Auth::check() == true && Auth::user()->employer == 1)
					<li><a href="{{ action('UsersController@index') }}">Developers</a></li>
					@endif
					@if (Auth::check())
					<li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
					@endif
				@if (Auth::check() == false)

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login/Register <span class="caret"></span></a>

						<ul class="dropdown-menu logindrop">
							
								<li>
									
											<h5>Login</h5>
											<div>
											<form class="form" role="form" method="POST" action="{{ action('Auth\AuthController@postLogin')}}" accept-charset="UTF-8" id="login-nav">
											{{ csrf_field() }}
												@if($errors->has('email'))
                									<div class="alert alert-danger">
                    									{{ $errors->first('email') }}
                									</div>
       	 										@endif
												<div class="form-group">
													<label class="sr-only" name="email">Email </label>
													<input type="email" class="form-control" name="email" placeholder="Email Address" required>
												</div>
												@if($errors->has('password'))
                									<div class="alert alert-danger">
                    									{{ $errors->first('password') }}
                									</div>
       	 										@endif
												<div class="form-group">
													<label class="sr-only" name="password">Password</label>
													<input type="password" class="form-control" name="password" placeholder="Password" required>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-block dropBtn">Login</button>
												</div>
												<hr class="dropHr">
												<div class="form-group">
												<a href="{{ ('/auth/linkedin') }}" class="btn btn-block dropBtn">Login With Linkedin <i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
												</div>
												<div class="form-group">
												<a href="{{ ('/auth/github') }}" class="btn btn-primary btn-block dropBtn">Login With GitHub <i class="fa fa-github" aria-hidden="true"></i></a>
												</div>	
											</form>
										</div>
											<hr class="dropHr">
											<div class="bottom">
												<h5>New user?</h5>
												<a href="{{ action('Auth\AuthController@getRegister') }}"><button type="submit" class="btn dropBtn btn-block">Register</button></a>
											</div>
									
								</li>
					
						</ul>
						@endif
					</li>
				</ul>
				</ul>
				<form class="navbar-form navbar-right" method="GET" action="{{ action('UsersController@index')}}">
					<div class="form-group">
						<input type="text" class="form-control" name="search" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default dropBtn">Submit</button>
				</form>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>