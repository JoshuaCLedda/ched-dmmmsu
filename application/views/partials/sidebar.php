<aside class="left-sidebar">
	<!-- Sidebar scroll-->
	<div>
		<div class="brand-logo d-flex align-items-center justify-content-between">
			<!-- <a href="./index.html" class="text-nowrap logo-img">
          <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
        </a> -->
			<!-- <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div> -->
		</div>
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav scroll-sidebar" data-simplebar>
			<ul id="sidebarnav">
				<li class="nav-small-cap">
					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
					<span class="hide-menu">Home</span>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="<?= base_url('dashboard'); ?>" aria-expanded="false">
						<span>
							<i class="ti ti-layout-dashboard"></i>
						</span>
						<span class="hide-menu">Dashboard</span>
					</a>
				</li>

				<li class="nav-small-cap">
					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
					<span class="hide-menu">Main</span>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="<?= base_url('scholarship'); ?>" aria-expanded="false">
						<span>
							<i class="ti ti-files"></i>
						</span>
						<span class="hide-menu">Scholarships</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="<?= base_url('extension'); ?>" aria-expanded="false">
						<span>
							<i class="ti ti-user"></i>
						</span>
						<span class="hide-menu">Students</span>
					</a>
				</li>


				<li class="sidebar-item">
					<a class="sidebar-link" href="<?= base_url('research'); ?>" aria-expanded="false">
						<span>
							<i class="ti ti-files"></i>
						</span>
						<span class="hide-menu">Programs</span>
					</a>
				</li>





				<li class="nav-small-cap">
					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
					<span class="hide-menu">Settings</span>
				</li>


				<li class="sidebar-item" id="sidebarItem">
					<a class="sidebar-link sidebar-dropdown">
						<span>
							<i class="ti ti-arrow-down nav-small-cap-icon fs-4"></i>
						</span>
						<span class="hide-menu">System Settings</span>
					</a>
					<ul id="menu-nav" class="nav-content">
						<li class="sidebar-item py-2 px-5">
							<a class="text-black py-2" href="settings-foodmenu.php">
								<span class="hide-menu">Courses</span>
							</a>
						</li>
						<li class="sidebar-item py-2 px-5">
							<a class="text-black py-2" href="settings-foodmenu-AV.php" class="active">
								<span>Parents</span>
							</a>
						</li>
						<li class="sidebar-item py-2 px-5">
							<a class="text-black py-2" href="settings-foodmenu-UN.php">
								<span>(Will add more...)</span>
							</a>
						</li>
					</ul>
				</li>




				<li class="sidebar-item">
					<a class="sidebar-link" href="<?= base_url('backup'); ?>" aria-expanded="false">
						<span>
							<i class="bx bxs-file-export fs-6"></i>

						</span>
						<span class="hide-menu">Back Up</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="<?= base_url('admin/backup/index.php'); ?>" aria-expanded="false">
						<span>
							<i class="ti ti-id-badge"></i>
						</span>
						<span class="hide-menu">Activity Log</span>
					</a>
				</li>

				<li class="sidebar-item">
					<a class="sidebar-link" href="<?= base_url('admin/backup/index.php'); ?>" aria-expanded="false">
						<span>
							<i class="ti ti-id-badge"></i>
						</span>
						<span class="hide-menu">Report</span>
					</a>
				</li>





				<li class="nav-small-cap">
					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
					<span class="hide-menu">Settings</span>
				</li>


				<li class="sidebar-item" id="sidebarItem">
					<a class="sidebar-link sidebar-dropdown">
						<span>
							<i class="ti ti-user nav-small-cap-icon fs-4"></i>
						</span>
						<span class="hide-menu">User Settings</span>
					</a>
					<ul id="menu-nav" class="nav-content">
						<li class="sidebar-item py-2 px-5">
							<a class="text-black py-2" href="settings-foodmenu.php">
								<span class="hide-menu">Profile</span>
							</a>
						</li>
						<li class="sidebar-item py-2 px-5">
							<a class="text-black py-2" href="settings-foodmenu-AV.php" class="active">
								<span>Users</span>
							</a>
						</li>
					</ul>
				</li>


				<li class="sidebar-item">
					<a class="sidebar-link" href="<?= base_url('admin/backup/index.php'); ?>" aria-expanded="false">
						<span>
							<i class="ti ti-arrow-left"></i>
						</span>
						<span class="hide-menu">Sign Out</span>
					</a>
				</li>






			</ul>
		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
</aside>
</body>
