@extends('layouts.master')

@section('content')
	<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head align-items-center d-flex mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Pasien</h2>
						<p class="mb-0">Hospital Admin Dashboard Template</p>
					</div>
					<div>
						<a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+Pasien Baru</a>
						<a href="index.html" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Tgl</a>
					</div>
				</div>
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Tambah Pasien</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Nama Pasien</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Pasien ID</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Penyakit</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Tanggal Check In</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">Tambah</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive card-table">
							<table id="example5" class="display dataTablesCard white-border table-responsive-xl">
								<thead>
									<tr>
										<th>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="checkAll" required="">
												<label class="custom-control-label" for="checkAll"></label>
											</div>
										</th>
										<th>Pasien ID</th>
										<th>Tgl Check In</th>
										<th>Nama Pasien</th>
										<th>Dokter Ditugaskan</th>
										<th>Penayakit</th>
										<th>Status</th>
										<th>No Ruangan</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
												<label class="custom-control-label" for="customCheckBox2"></label>
											</div>
										</td>
										<td>#P-00014</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>Cive Slauw</td>
										<td>Dr. Samantha</td>
										<td>Kantung Mata</td>
										<td>
											<span class="badge badge-outline-primary">
												<i class="fa fa-circle text-primary mr-1"></i>
												Pasien Baru
											</span>
										</td>
										<td>AB-004</td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Terima Pasien</a>
													<a class="dropdown-item" href="#">Tolak Order</a>
													<a class="dropdown-item" href="{{ route('patientdetail') }}">Detail Pasien</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
												<label class="custom-control-label" for="customCheckBox3"></label>
											</div>
										</td>
										<td>#P-00015</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>Bella Simatupang</td>
										<td>Dr. Olivia Jean</td>
										<td>Facial Face</td>
										<td>
											<span class="badge badge-info light">
												<i class="fa fa-circle text-info mr-1"></i>
												Sembuh
											</span>
										</td>
										<td>AB-005</td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Terima Pasien</a>
													<a class="dropdown-item" href="#">Tolak Order</a>
													<a class="dropdown-item" href="{{ route('patientdetail') }}">Detail Pasien</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
												<label class="custom-control-label" for="customCheckBox4"></label>
											</div>
										</td>
										<td>#P-00018</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>Enjeline Sari</td>
										<td>Dr. Gustauv Loi</td>
										<td>Sakit Mata</td>
										<td>
											<span class="badge badge-info light">
												<i class="fa fa-circle text-info mr-1"></i>
												Sembuh
											</span>
										</td>
										<td>AB-008</td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Terima Pasien</a>
													<a class="dropdown-item" href="#">Tolak Order</a>
													<a class="dropdown-item" href="{{ route('patientdetail') }}">Detail Pasien</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox5" required="">
												<label class="custom-control-label" for="customCheckBox5"></label>
											</div>
										</td>
										<td>#P-00017</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>David Bekam</td>
										<td>Dr. Kevin Zidan</td>
										<td>Jerawat</td>
										<td>
											<span class="badge badge-warning light">
												<i class="fa fa-circle text-warning mr-1"></i>
												Proses
											</span>
										</td>
										<td>AB-007</td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Terima Pasien</a>
													<a class="dropdown-item" href="#">Tolak Order</a>
													<a class="dropdown-item" href="{{ route('patientdetail') }}">Detail Pasien</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox6" required="">
												<label class="custom-control-label" for="customCheckBox6"></label>
											</div>
										</td>
										<td>#P-00012</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>Alexia Kev</td>
										<td>Dr. Samantha</td>
										<td>Allergi</td>
										<td>
											<span class="badge badge-warning light">
												<i class="fa fa-circle text-warning mr-1"></i>
												In Treatment
											</span>
										</td>
										<td>AB-002</td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
                                                <div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Terima Pasien</a>
													<a class="dropdown-item" href="#">Tolak Order</a>
													<a class="dropdown-item" href="{{ route('patientdetail') }}">Detail Pasien</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox7" required="">
												<label class="custom-control-label" for="customCheckBox7"></label>
											</div>
										</td>
										<td>#P-00016</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>Brian Lucky</td>
										<td>Not Assigned Yet</td>
										<td>Cold Face</td>
										<td>
											<span class="badge badge-outline-primary">
												<i class="fa fa-circle text-primary mr-1"></i>
												Pasien Baru
											</span>
										</td>
										<td>AB-005</td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Terima Pasien</a>
													<a class="dropdown-item" href="#">Tolak Order</a>
													<a class="dropdown-item" href="{{ route('patientdetail') }}">Detail Pasien</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox8" required="">
												<label class="custom-control-label" for="customCheckBox8"></label>
											</div>
										</td>
										<td>#P-00019</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>Eddy Cusuma</td>
										<td>Dr. Samantha</td>
										<td>Dental Care</td>
										<td>
											<span class="badge badge-warning light">
												<i class="fa fa-circle text-warning mr-1"></i>
												Proses
											</span>
										</td>
										<td>AB-005</td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Terima Pasien</a>
													<a class="dropdown-item" href="#">Tolak Order</a>
													<a class="dropdown-item" href="{{ route('patientdetail') }}">Detail Pasien</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox9" required="">
												<label class="custom-control-label" for="customCheckBox9"></label>
											</div>
										</td>
										<td>#P-000110</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>Frank Azire</td>
										<td>Dr. David Lee</td>
										<td>Asthma Face</td>
										<td>
											<span class="badge badge-outline-primary">
												<i class="fa fa-circle text-primary mr-1"></i>
												Pasien Baru
											</span>
										</td>
										<td>AB-005</td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Terima Pasien</a>
													<a class="dropdown-item" href="#">Tolak Order</a>
													<a class="dropdown-item" href="{{ route('patientdetail') }}">Detail Pasien</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox321" required="">
												<label class="custom-control-label" for="customCheckBox321"></label>
											</div>
										</td>
										<td>#P-00013</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>Andrew Stevano</td>
										<td>Dr. Marcus Jr</td>
										<td>Dental Care</td>
										<td>
											<span class="badge badge-warning light">
												<i class="fa fa-circle text-warning mr-1"></i>
												Proses
											</span>
										</td>
										<td>AB-005</td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Terima Pasien</a>
													<a class="dropdown-item" href="#">Tolak Order</a>
													<a class="dropdown-item" href="{{ route('patientdetail') }}">Detail Pasien</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox32" required="">
												<label class="custom-control-label" for="customCheckBox32"></label>
											</div>
										</td>
										<td>#P-00013</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>Andrew Stevano</td>
										<td>Dr. Marcus Jr</td>
										<td>Dental Care</td>
										<td>
											<span class="badge badge-warning light">
												<i class="fa fa-circle text-warning mr-1"></i>
												Prosses
											</span>
										</td>
										<td>AB-005</td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Terima Pasien</a>
													<a class="dropdown-item" href="#">Tolak Order</a>
													<a class="dropdown-item" href="{{ route('patientdetail') }}">Detail Pasien</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheckBox31" required="">
												<label class="custom-control-label" for="customCheckBox31"></label>
											</div>
										</td>
										<td>#P-00013</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>Andrew Stevano</td>
										<td>Dr. Marcus Jr</td>
										<td>Face Care</td>
										<td>
											<span class="badge badge-warning light">
												<i class="fa fa-circle text-warning mr-1"></i>
												In Treatment
											</span>
										</td>
										<td>AB-005</td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">Terima Pasien</a>
													<a class="dropdown-item" href="#">Tolak Order</a>
													<a class="dropdown-item" href="{{ route('patientdetail') }}">Detail Pasien</a>
												</div>
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
        <!--**********************************
            Content body end
        ***********************************-->

@endsection

@push('scripts')
    <!-- Datatable -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script>
		(function($) {
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,
				lengthChange:false

			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();

			});
		})(jQuery);
	</script>

    <!-- Dashboard 1 -->
	<script src="{{ asset('js/dashboard/doctor-details.js') }}"></script>
	<script>
		$(function () {
			$('#datetimepicker1').datetimepicker({
				inline: true,
			});
		});
	</script>
@endpush
