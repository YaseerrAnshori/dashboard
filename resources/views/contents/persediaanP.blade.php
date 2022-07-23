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
						<h2 class="text-black font-w600">Product</h2>
						<p class="mb-0">Hospital Admin Dashboard </p>
					</div>
					<div>
						<a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+ Barang</a>
						<a href="index.html" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Tgl</a>
					</div>
				</div>
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Tambah Barang</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Nama Barang</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Barang ID</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Jumlah</label>
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
										<th>Barang ID</th>
										<th>Tgl Masuk Barang</th>
										<th>Nama Barang</th>
										<th>Jumlah Stock</th>

										<th>Status</th>
										<th>Harga</th>
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
										<td>#P-0405689</td>
										<td>26/02/2020, 12:42 AM</td>
										<td>Facial Wash</td>
										<td>2.3449</td>

										<td>
											<span class="badge badge-outline-primary">
												<i class="fa fa-circle text-primary mr-1"></i>
												In stock
											</span>
										</td>
										<td>Rp.300.00</td>
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
													<a class="dropdown-item" href="#">Terima Barang</a>
													<a class="dropdown-item" href="#">Tolak Barang</a>
													<a class="dropdown-item" href="{{ route('ecom-product-list') }}">Detail List</a>
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











@endsection
