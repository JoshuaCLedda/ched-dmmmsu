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
          <a class="sidebar-link" href="<?= base_url('research'); ?>" aria-expanded="false">
            <span>
              <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">Research </span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url('extension'); ?>" aria-expanded="false">
            <span>
              <i class="ti ti-alert-circle"></i>
            </span>
            <span class="hide-menu">Extension</span>
          </a>
        </li>

        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Other Components</span>
        </li>


      <!-- Authors -->
        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url('authors'); ?>" aria-expanded="false">
            <span>
              <i class="ti ti-printer"></i>
            </span>
            <span class="hide-menu">Authors</span>
          </a>
        </li>




        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url('admin/audit/index.php'); ?>" aria-expanded="false">
            <span>
              <i class="ti ti-folder"></i>
            </span>
            <span class="hide-menu">Publications</span>
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
              <a href="settings-foodmenu.php">
                <i class="bi bi-circle"></i><span class="hide-menu">List All</span>
              </a>
            </li>
            <li class="sidebar-item py-2 px-5">
              <a href="settings-foodmenu-AV.php" class="active">
                <i class="bi bi-circle-fill"></i><span>Available</span>
              </a>
            </li>
            <li class="sidebar-item py-2 px-5">
              <a href="settings-foodmenu-UN.php">
                <i class="bi bi-circle"></i><span>Unavailable</span>
              </a>
            </li>
          </ul>
        </li>





        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">System Settings</span>
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




        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">User Settings</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url('profile'); ?>" aria-expanded="false">
            <span>
              <i class="ti ti-user"></i>
            </span>
            <span class="hide-menu">Profile</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url('users'); ?>" aria-expanded="false">
            <span>
              <i class="ti ti-user-plus"></i>
            </span>
            <span class="hide-menu">Manage Users</span>
          </a>
        </li>

        <li class="sidebar-item">
    <a class="sidebar-link" href="<?= base_url('login/logout'); ?>" aria-expanded="false">
        <span>
            <i class="ti ti-login"></i>
        </span>
        <span class="hide-menu">Log Out</span>
    </a>
</li>

      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
</body>