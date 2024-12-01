<div id="main">
  <div class="main-container">
    <!--  Row 1 -->
    <div class="row">


      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-3 col-md-6">
            <div class="card info-card sales-card">



              <div class="card-body">
                <h5 class="card-title">Proposal <span>| Month</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class='bx bxs-file-doc display-6'></i> <!-- display-1 for large size -->
                  </div>

                  <div class="ps-3">                      
                   <h6><?= $proposal['totalProposal'] ?? 0 ?> Proposals</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->
          <div class="col-xxl-3 col-md-6">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Evaluation <span>| Month</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class='bx bx-file-find display-6'></i>
                  </div>
                  <div class="ps-3">
                  <h6><?= $evaluation['totalEvaluation'] ?? 0 ?> Evaluations</h6>


                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-3 col-md-6">
            <div class="card info-card revenue-card">



              <div class="card-body">
                <h5 class="card-title">Ongoing <span>| This Month</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class='bx bx-file display-6'></i>
                  </div>
                  <div class="ps-3">
                  <h6><?= $ongoing['totalOngoing'] ?? 0 ?> Ongoing</h6>


                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-3 col-xl-12">

            <div class="card info-card customers-card">



              <div class="card-body">
                <h5 class="card-title">Completed <span>| This Year</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class='bx bxs-check-circle display-6'></i>
                  </div>
                  <div class="ps-3">
                  <h6><?= $ongoing['totalCompleted'] ?? 0 ?> Completed</h6>


                    <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->



          <!-- Recent Sales -->


        </div>
      </div><!-- End Left side columns -->




      <!-- For future purposes -->
      <!-- <div class="col-lg-6 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">NARTDI Research And Extension</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="1">March 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">May 2023</option>
                  <option value="4">June 2023</option>
                </select>
              </div>
            </div>
            <div id="chart"></div>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-lg-6">
        <div class="card w-100">
          <div class="card-body">



            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">NARTDI Research And Extension</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="1">March 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">May 2023</option>
                  <option value="4">June 2023</option>
                </select>
              </div>
            </div>

     
            <canvas id="pieChart" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#pieChart'), {
                  type: 'pie',
                  data: {
                    labels: [
                      'Red',
                      'Blue',
                      'Yellow'
                    ],
                    datasets: [{
                      label: 'My First Dataset',
                      data: [300, 50, 100],
                      backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                      ],
                      hoverOffset: 4
                    }]
                  }
                });
              });
            </script>
      

          </div>
        </div>
      </div> -->






















    </div>


    <div class="row">
      <div class="col-lg-6 d-flex align-items-stretch ">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Recent Research</h5>
            <div class="table ">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Research Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Status</h6>
                    </th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">1</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Sunil Joshi</h6>

                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Lorem, ipsum.</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Active</span>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">2</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Andrew McDownland</h6>

                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Lorem, ipsum dolor.</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-danger rounded-3 fw-semibold">Inactive</span>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">3</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Christopher Jamil</h6>

                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Lorem, ipsum.</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-danger rounded-3 fw-semibold">Inactive</span>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">4</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Nirav Joshi</h6>

                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Lorem, ipsum.</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Active</span>
                      </div>
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Recent Publications</h5>
            <div class="table">
              <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Researcher Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Publication</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">Status</h6>
                    </th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">1</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                      <span class="fw-normal">Lorem, ipsum.</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Lorem, ipsum dolor.</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-primary rounded-3 fw-semibold">Pending</span>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">2</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                      <span class="fw-normal">Lorem, ipsum.</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Permit Application</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-secondary rounded-3 fw-semibold">Onhold</span>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">3</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                      <span class="fw-normal">Lorem, ipsum.</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Lorem.</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-danger rounded-3 fw-semibold">Cancelled</span>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0">4</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                      <span class="fw-normal">Lorem, ipsum dolor.</span>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Lorem, ipsum.</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-success rounded-3 fw-semibold">Completed</span>
                      </div>
                    </td>

                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
