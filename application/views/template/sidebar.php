<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate">
			<i class="fas fa-list"></i>
		</div>
		<div class="sidebar-brand-text mx-3">To-Do-List App </div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">
	<div class="sidebar-heading">
		Main Menu
	</div>
	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('main'); ?>">
			<i class="fas fa-fw fa-check"></i>
			<span>Task</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Profile
	</div>

	<li class="nav-item">
		<a class="nav-link" href=" <?= base_url('main/profile'); ?>">
			<i class="fas fa-fw fa-user"></i>
			<span>My Profile</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('auth/logout'); ?>">
			<i class="fas fa-fw fa-sign-out-alt"></i>
			<span>Logout</span></a>
	</li>

	<!-- Divider -->

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->