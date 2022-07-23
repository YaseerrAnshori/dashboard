@extends('layouts.master')

@section('content')
     <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Customers</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Customers</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-striped table-responsive-lg">
                                        <thead>
                                            <tr>
                                                <th class="">
													<div class="custom-control custom-checkbox mx-2">
														<input type="checkbox" class="custom-control-input" id="checkAll">
														<label class="custom-control-label" for="checkAll"></label>
													</div>
                                                </th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Barang</th>
                                                <th>Phone</th>
                                                <th class="pl-5 width200">Alamat
                                                </th>
                                                <th>Gabung</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="customers">
                                            <tr class="btn-reveal-trigger fs-14">
                                                <td>
                                                    <div class="custom-control custom-checkbox mx-2">
														<input type="checkbox" class="custom-control-input" id="checkbox1">
														<label class="custom-control-label" for="checkbox1"></label>
													</div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="#">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <div class=""><img class="rounded-circle img-fluid"
                                                                        src="images/avatar/5.png" width="30" alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Ricky Antony</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:ricky@example.com">info@example.com</a></td>
                                                <td class="py-2">Sabun Muka</td>
                                                <td class="py-2"> <a href="tel:2012001851">(201) 200-1851</a></td>
                                                <td class="py-2 pl-5 wspace-no">2392 Main Avenue, Penasauka</td>
                                                <td class="py-2">30/03/2018</td>
                                                <td class="py-2 text-right">
                                                    <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                                            <div class="py-2"><a class="dropdown-item"  href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger fs-14">
                                                <td>
                                                    <div class="custom-control custom-checkbox mx-2">
														<input type="checkbox" class="custom-control-input" id="checkbox1">
														<label class="custom-control-label" for="checkbox1"></label>
													</div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="#">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <div class=""><img class="rounded-circle img-fluid"
                                                                        src="images/avatar/5.png" width="30" alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Ricky Antony</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:ricky@example.com">info@example.com</a></td>
                                                <td class="py-2">Sabun Muka</td>
                                                <td class="py-2"> <a href="tel:2012001851">(201) 200-1851</a></td>
                                                <td class="py-2 pl-5 wspace-no">2392 Main Avenue, Penasauka</td>
                                                <td class="py-2">30/03/2018</td>
                                                <td class="py-2 text-right">
                                                    <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                                            <div class="py-2"><a class="dropdown-item"  href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger fs-14">
                                                <td>
                                                    <div class="custom-control custom-checkbox mx-2">
														<input type="checkbox" class="custom-control-input" id="checkbox1">
														<label class="custom-control-label" for="checkbox1"></label>
													</div>
                                                </td>
                                                <td class="py-3">
                                                    <a href="#">
                                                        <div class="media d-flex align-items-center">
                                                            <div class="avatar avatar-xl mr-2">
                                                                <div class=""><img class="rounded-circle img-fluid"
                                                                        src="images/avatar/5.png" width="30" alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="mb-0 fs--1">Ricky Antony</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="py-2"><a
                                                        href="mailto:ricky@example.com">info@example.com</a></td>
                                                <td class="py-2">Sabun Muka</td>
                                                <td class="py-2"> <a href="tel:2012001851">(201) 200-1851</a></td>
                                                <td class="py-2 pl-5 wspace-no">2392 Main Avenue, Penasauka</td>
                                                <td class="py-2">30/03/2018</td>
                                                <td class="py-2 text-right">
                                                    <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-right border py-0">
                                                            <div class="py-2"><a class="dropdown-item"  href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
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
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        @push('scripts')

        <!--**********************************
            Scripts
        ***********************************-->
        <!-- Required vendors -->
        {{-- <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script> --}}
        <script src="js/custom.min.js"></script>
        <script src="js/deznav-init.js"></script>


        <script src="vendor/highlightjs/highlight.pack.min.js"></script>
        <!-- Circle progress -->

        @endpush
@endsection
