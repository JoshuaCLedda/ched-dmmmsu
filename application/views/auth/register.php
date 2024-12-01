<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
  <div
    class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
          <div class="card mb-0">
            <div class="card-body">
              <a href="./index.html" class="text-nowrap logo-img text-center d-block py-1 w-100">
                <img src="<?= base_url('assets/images/logo.png'); ?>" width="70" alt="">

              </a>
              <p class="text-center">CHED-DMMMSU</p>
              <?php if ($this->session->flashdata('success')): ?>
                <div id="success-alert" class="alert alert-success" role="alert">
                  <?= $this->session->flashdata('success') ?>
                </div>
              <?php endif; ?>

              <?php if ($this->session->flashdata('error')): ?>
                <div id="error-alert" class="alert alert-danger" role="alert">
                  <?= $this->session->flashdata('error') ?>
                </div>
              <?php endif; ?>
              <form id="signup-form" method="post" action="<?= base_url('register/register_user') ?>">
                <div class="mb-3">
                  <label for="exampleInputtext1" class="form-label">First Name</label>
                  <input name="first_name" type="text" class="form-control" id="exampleInputtext1"
                    value="<?= set_value('first_name') ?>">
                  <?= form_error('first_name', '<div class="error text-danger">', '</div>') ?>
                </div>

                <div class="mb-3">
                  <label for="exampleInputtext1" class="form-label">Last Name</label>
                  <input name="last_name" type="text" class="form-control" id="exampleInputtext1"
                    value="<?= set_value('last_name') ?>">
                  <?= form_error('last_name', '<div class="error text-danger">', '</div>') ?>
                </div>

                <div class="mb-3">
                  <label for="exampleInputtext1" class="form-label">Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputtext1"
                    value="<?= set_value('last_name') ?>">
                  <?= form_error('email', '<div class="error text-danger">', '</div>') ?>
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Employee No.</label>
                  <input name="employee_no" type="number" class="form-control" id="exampleInputEmail1"
                    value="<?= set_value('employee_no') ?>">
                  <?= form_error('employee_no', '<div class="error text-danger">', '</div>') ?>
                </div>

                <div class="mb-4">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                  <?= form_error('password', '<div class="error text-danger">', '</div>') ?>
                </div>
                
                <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                <div class="d-flex align-items-center justify-content-center">
                  <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                  <a class="text-primary fw-bold ms-2" href="<?= base_url('login') ?>">Sign In</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
