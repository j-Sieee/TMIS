<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
	<img src="{{asset('docs/assets/img/ietms2-150x150.png')}}" alt="CASURECO 1 Logo" class="brand-image elevation-3"
		style="opacity: .8">
	<span class="brand-text font-weight-light">IETMS</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
	<!-- Sidebar user panel (optional) -->
	<div class="user-panel mt-3 pb-3 mb-3 d-flex">
		<div class="image">
		<img src="http://172.16.0.26/casurecowan/user/{{session('authInfo')['employee_no']}}/avatar" class="img-circle elevation-2" alt="User Image">
		</div>
		<div class="info">
		<a href="#" class="d-block"><?php if(session()->has('userInfo')): echo session('userInfo')[0]->empname;  endif; ?></a>
		<span class="badge badge-success">{{session('userInfo')[0]->cfdesignat}}</span>
		<span class="badge badge-primary">{{session('userInfo')[0]->cfgroup2}}</span>
		</div>
	</div>

	<!-- Sidebar Menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		@if(session('userInfo')[0]->cfgroup2 == 'CORPLAN' || session('userInfo')[0]->cfcodeno == '100324')
			<li class="nav-item has-treeview {{Request::segment(1) == 'corplan' ? 'menu-open' : ''}}">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-tasks"></i>
					<p>
					Manage Request
					<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					@if(session('userInfo')[0]->cfdesignat == 'PROJECT PLANNING & INFO. SYSTEM SEC. HEAD')
					<li class="nav-item">
						<a href="{{route('corplanHead')}}" class="nav-link {{Request::segment(2) == 'head' ? 'active' : ''}}">
							<i class="fas fa-clipboard-check nav-icon"></i>
							<p>Accept Request</p>
						</a>
					</li>
					@endif
					@if(session('userInfo')[0]->cfdesignat == 'CORPLAN & ENERGY TRADING SUPERVISOR')
					<li class="nav-item">
						<a href="{{route('corplanSupervisor')}}" class="nav-link {{Request::segment(2) == 'supervisor' ? 'active' : ''}}">
							<i class="fas fa-clipboard-check nav-icon"></i>
							<p>Verify Request</p>
						</a>
					</li>
					@endif
					@if(session('userInfo')[0]->cfdesignat == 'CORPLAN MANAGER')
					<li class="nav-item">
					<a href="{{route('corplanManager')}}" class="nav-link {{Request::segment(2) == 'manager' ? 'active' : ''}}">
						<i class="fas fa-clipboard-check nav-icon"></i>
						<p>Approve Request</p>
					</a>
					</li>
					@endif
					@if(in_array(session('userInfo')[0]->cfdesignat, array('PROJECT PLANNING & INFO. SYSTEM SEC. HEAD', 'UTILITY MARKET ANALYST', 'PROGRAMMER', 'NETWORK AND COMPUTER SPECIALIST')) || session('userInfo')[0]->cfcodeno == '100324')
					<li class="nav-item">
					<a href="{{route('corplanStaff')}}" class="nav-link {{Request::segment(2) == 'staff' ? 'active' : ''}}">
						<i class="fas fa-check-square nav-icon"></i>
						<p>Attend Request</p>
					</a>
					</li>
					@endif
				</ul>
			</li>
		@endif
		@if(session('userInfo')[0]->cfgroup2 == 'CORPLAN' || session('userInfo')[0]->cfcodeno == '100324')
			<li class="nav-item has-treeview {{Request::segment(1) == 'report' ? 'menu-open' : ''}}">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-file-alt"></i>
					<p>
					Report
					<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="{{route('requestForm')}}" class="nav-link {{Request::segment(2) == 'requestForm' ? 'active' : ''}}">
							<i class="fas fa-file-pdf nav-icon"></i>
							<p>Request Form</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{route('serviceRequest')}}" class="nav-link {{Request::segment(2) == 'serviceRequest' ? 'active' : ''}}">
							<i class="fas fa-file-pdf nav-icon"></i>
							<p>Service Request</p>
						</a>
					</li>
				</ul>
			</li>
		@endif
			<li class="nav-item {{Request::segment(1) == 'employee' ? 'menu-open' : ''}}">
				<a href="{{route('employee')}}" class="nav-link">
				<i class="nav-icon fas fa-file-signature"></i>
				<p>
					New Request
					<!--span class="right badge badge-danger">New</span-->
				</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{asset('IETMS_manual.pdf')}}" target="_blank" class="nav-link">
				<i class="nav-icon fas fa-file-pdf"></i>
				<p>
					Manual
					<!--span class="right badge badge-danger">New</span-->
				</p>
				</a>
			</li>
		</ul>
	</nav>
	<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>