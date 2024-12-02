<!-- Ui for the meantime -->
<div id="main">
    <div class="main-container">

        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="rounded-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Scholars</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="d-flex justify-content-end my-2">
            <a href="<?= base_url('research/create') ?>" class="btn btn-success">Add Scholars</a>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">



                        <div class="card-body">
                            <h5 class="card-title">Scholars</h5>


                            <div class="d-flex align-items-center justify-content-end">
                                <label for="filter" class="mb-0 me-2">Filter</label>
                                <div class="mb-2">
                                    <select id="filter" class="custom-select" style="width: 150px;" aria-label="Default select example">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="table-responsive">

                                <table class="table datatable table-striped" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Scholar</th>
                                            <th>School</th> <!--or deparmnet-->
                                            <th>Status</th>  <!--student status-->
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                            <tr>
                                            
                                            </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


        </section>


    </div>
</div>
</div>