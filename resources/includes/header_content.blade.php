<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>
	
	<!-- Right navbar links -->
	<?php if(session()->has('userInfo')):?>
	<ul class="navbar-nav ml-auto">
		<a class="dropdown-item btn btn-default" href="{{route('logout')}}">Signout</a>
	</ul>
	<?php endif;?>
</nav>
<!-- /.navbar -->