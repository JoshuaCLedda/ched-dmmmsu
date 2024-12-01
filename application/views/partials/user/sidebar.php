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
          <a class="sidebar-link" href="<?= base_url('user/dashboard'); ?>" aria-expanded="false">
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
          <a class="sidebar-link" href="<?= base_url('user/researches'); ?>" aria-expanded="false">
            <span>
              <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">Researches </span>
          </a>
        </li>


        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url('user/publications'); ?>" aria-expanded="false">
            <span>
              <i class="ti ti-folder"></i>
            </span>
            <span class="hide-menu">Publications</span>
          </a>
        </li>



        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Others</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url('user/refferences'); ?>" aria-expanded="false">
            <span>
              <i class="ti ti-user"></i>
            </span>
            <span class="hide-menu">Refferences</span>
          </a>
        </li>




        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">User Settings</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url('user/profile'); ?>" aria-expanded="false">
            <span>
              <i class="ti ti-user"></i>
            </span>
            <span class="hide-menu">Profile</span>
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