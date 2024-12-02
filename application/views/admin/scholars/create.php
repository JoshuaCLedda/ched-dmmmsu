<div id="main">
    <div class="main-container">
        <div class="d-flex justify-content-end my-2">
            <a href="<?= base_url('research') ?>" class="btn btn-success">Back</a>
        </div>

        <!-- Php Alert -->
        <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
        <?php endif; ?>

        <div class="card">
            <h3 class="card-title mx-4 mt-4">
                Create Scholar
            </h3>

            <div class="card-body">
                <form action="<?= base_url('research/submit') ?>" method="post" enctype="multipart/form-data">
                    <div class="row g-3">
                        <!-- Data for the meantime -->
                        <div class="col-md-6">
            <label class="form-label">Student Status</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="new" id="applicationNew">
                <label class="form-check-label" for="applicationNew">New Application</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="renewal" id="applicationRenewal">
                <label class="form-check-label" for="applicationRenewal">Renewal</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="additional" id="applicationAdditional">
                <label class="form-check-label" for="applicationAdditional">Additional Position</label>
            </div>
        </div>


        <!-- Remove for the meatime / Will follow the layout for the meantime -->
        <div class="col-md-6">
    <label class="form-label">Job Type</label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="full_time" id="jobTypeFullTime">
        <label class="form-check-label" for="jobTypeFullTime">Full-Time</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="part_time" id="jobTypePartTime">
        <label class="form-check-label" for="jobTypePartTime">Part-Time</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="contract" id="jobTypeContract">
        <label class="form-check-label" for="jobTypeContract">Contract</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="internship" id="jobTypeInternship">
        <label class="form-check-label" for="jobTypeInternship">Internship</label>
    </div>
</div>



        <div class="col-md-4">
            <label class="form-label">First Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="first_name">
        </div>

        <div class="col-md-4">
            <label class="form-label">Middle Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="middle_name">
        </div>

        <div class="col-md-4">
            <label class="form-label">Last Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="last_name">
        </div>

        <hr>

        <!-- Other line here -->
        <div class="col-md-4">
            <label class="form-label">Extension Name</label>
            <input type="text" class="form-control" name="ext_name">
        </div>


        <div class="col-md-4">
            <label class="form-label">Date of Application</label>
            <input type="date" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Name of Organization</label>
            <input type="text" class="form-control">
        </div>

        <div class="col-md-4">
            <label class="form-label">Phone Number</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Email Address<span class="text-danger">*</span></label>
            <input type="email" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Resume Upload</label>
            <input type="file" class="form-control">
        </div>

        <hr>

        <h6 class="font-weight-bold">Personal Information</h6>
        <div class="col-md-4">
            <label class="form-label">First Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Middle Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Last Name<span class="text-danger">*</span></label>
            <input type="text" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Address<span class="text-danger">*</span></label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">City<span class="text-danger">*</span></label>
            <input type="text" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label class="form-label">Province<span class="text-danger">*</span></label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Postal Code</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Telephone Number</label>
            <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Emergency Contact Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Emergency Contact Number</label>
            <input type="text" class="form-control">
        </div>

        <hr>

        <h6 class="font-weight-bold">Work Experience</h6>
        <div class="col-md-12">
            <label class="form-label">Previous Employment</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>

        <div class="col-md-12">
            <label class="form-label">Skills</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>


                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>


    </div>



    <script>
        $(document).ready(function() {
            $("#other_information").select2();
            $("#preferred_date").datepicker({
                dateFormat: "yy-mm-dd",
                minDate: 0,
            });

        });
    </script>