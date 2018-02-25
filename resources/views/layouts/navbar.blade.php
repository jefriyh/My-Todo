<div class="navbar-fixed">
	<nav class="blue darken-3" role="navigation" >
		<div class="nav-wrapper container">
			<a id="logo-container" href="/" class="brand-logo">MyTodo</a>

			<ul class="right hide-on-med-and-down">
				@if(Auth::guest())
					<li><a href="{{url('login')}}">Login</a></li>
					<li><a href="{{url('register')}}">Register</a></li>
				@else
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="{{url('logout')}}">Log Out</a></li>
				@endif
			</ul>

			<a href="#" data-activates="nav-mobile" class="button-collapse">
				<i class="material-icons">menu</i>
			</a>

		</div>
	</nav>

</div>


<ul id="nav-mobile" class="side-nav">
		@if(Auth::guest())
					<li><a href="{{url('login')}}">Login</a></li>
					<li><a href="{{url('register')}}">Register</a></li>
				@else
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="{{url('logout')}}">Log Out</a></li>
				@endif	
</ul>

