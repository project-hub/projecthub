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
					src="/img/projecthublogo.png"></a>
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
                    <li><a href="{{ action('UsersController@show', Auth::id()) }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Welcome, {{ Auth::user()->first_name }}!</a></li>
					<li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
                    @endif
          			@if (Auth::check() == true && Auth::user()->employer == 0)
					<li><a href="{{ action('PostsController@index') }}">Job Postings</a></li>
					@endif
					@if (Auth::check() == true && Auth::user()->employer == 1)
					<li><a href="{{ action('PostsController@index') }}">Employer Posts</a></li>
					@endif
					@if (Auth::check() == true && Auth::user()->employer == 0)
					<li><a href="{{ action('UsersController@index') }}">Employers</a></li>
					@endif
					@if (Auth::check() == true && Auth::user()->employer == 1)
					<li><a href="{{ action('UsersController@index') }}">Developers</a></li>
					@endif
				</ul>
				<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" class="form-control" name="search" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					{{-- <li><a href="#">Login/Register</a></li> --}}
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Posts by Skills<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Back-End</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Front-End</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Full-Stack</a></li> 
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login/Register <span class="caret"></span></a>
						<ul class="dropdown-menu logindrop">
							<div class="container">
								<li>
									<div class="row">
										<div class="col-md-2">
											<h5>Login</h5>
											<form class="form" role="form" method="POST" action="{{ action('Auth\AuthController@postLogin')}}" accept-charset="UTF-8" id="login-nav">
											{{ csrf_field() }}
												@if($errors->has('email'))
                									<div class="alert alert-danger">
                    									{{ $errors->first('email') }}
                									</div>
       	 										@endif
												<div class="form-group">
													<label class="sr-only" name="email">Email address</label>
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
													<button type="submit" class="btn btn-primary btn-block">Sign in</button>
												</div>										
											</form>
											<div class="bottom">
												<h5>New user?</h5>
												<a href="{{ action('Auth\AuthController@getRegister') }}"><button type="submit" class="btn btn-primary btn-block">Register</button></a>
											</div>
										</div>
									</div>
								</li>
							</div>

						</ul>
					</li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>