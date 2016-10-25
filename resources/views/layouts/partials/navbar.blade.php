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
	      <a class="navbar-brand" href="#"><img style="max-height:100px; margin-top: -40px;"
             src="/img/projecthublogo.png"></a>
	    </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Posts<span class="sr-only">(current)</span></a></li>
	        <li><a href="{{ action('UsersController@index') }}">Users</a></li>
	        <li><a href="#"> Profile</a></li>
	      </ul>
	      <form class="navbar-form navbar-right">
	        <div class="form-group">
	          <input type="text" class="form-control" name="search" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Login/Register</a></li>
	        <li class="dropdown">
	           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">POSTS by Skills<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Back-End</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Front-End</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Full-Stack</a></li>
	            
	           
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>