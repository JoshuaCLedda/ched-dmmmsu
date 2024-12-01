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
								<h5 class="card-title">Total Students</h5>

								<div class="d-flex align-items-center">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
										<i class='bx bxs-file-doc display-6'></i> <!-- display-1 for large size -->
									</div>

									<div class="ps-3">
										<h6>1 Proposals</h6>
										<span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

									</div>
								</div>
							</div>

						</div>
					</div><!-- End Sales Card -->
					<div class="col-xxl-3 col-md-6">
						<div class="card info-card sales-card">

							<div class="card-body">
								<h5 class="card-title">Total Scholarship</h5>

								<div class="d-flex align-items-center">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
										<i class='bx bx-file-find display-6'></i>
									</div>
									<div class="ps-3">
										<h6>2 Evaluations</h6>


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
								<h5 class="card-title">Total Programs</span></h5>

								<div class="d-flex align-items-center">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
										<i class='bx bx-file display-6'></i>
									</div>
									<div class="ps-3">
										<h6>3 Ongoing</h6>


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
								<h5 class="card-title">Courses</h5>

								<div class="d-flex align-items-center">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
										<i class='bx bxs-check-circle display-6'></i>
									</div>
									<div class="ps-3">
										<h6>4 Completed</h6>


										<span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

									</div>
								</div>

							</div>
						</div>

					</div><!-- End Customers Card -->



					<!-- Recent Sales -->


				</div>
			</div><!-- End Left side columns -->




			<div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bar CHart</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                      datasets: [{
                        label: 'Bar Chart',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>


		<div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Line Chart</h5>

              <!-- Line Chart -->
              <canvas id="lineChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#lineChart'), {
                    type: 'line',
                    data: {
                      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                      datasets: [{
                        label: 'Line Chart',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Line CHart -->

            </div>
          </div>
        </div>


		</div>


		<div class="row">
			<div class="col-lg-6 d-flex align-items-stretch ">
				<div class="card w-100">
					<div class="card-body p-4">
						<h5 class="card-title fw-semibold mb-4">Recent Scholarship Application </h5>
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
											<h6 class="fw-semibold mb-0">Courses</h6>
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
												<span class="badge bg-danger rounded-3 fw-semibold">Pending</span>
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
												<span class="badge bg-danger rounded-3 fw-semibold">Pending</span>
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
												<span class="badge bg-danger rounded-3 fw-semibold">Pending</span>
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
						<h5 class="card-title fw-semibold mb-4">Recent Student Registration</h5>
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
											<div class="d-flex align-items-center gap-2">
												<span class="badge bg-danger rounded-3 fw-semibold">Cancelled</span>
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
