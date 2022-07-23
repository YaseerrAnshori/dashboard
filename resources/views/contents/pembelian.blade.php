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
						<h2 class="text-black font-w600">Pembelian</h2>
						<p class="mb-0">Hospital Admin Dashboard Template</p>
					</div>
					{{-- <div>
						<a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+Pasien Baru</a>
						<a href="index.html" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Tgl</a>
					</div> --}}
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
                    <div class="col-lg-12 fs-15 text-center">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Antrian Pembayaran Terbaru</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-hover">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th ><strong>ID BARANG</strong></th>
                                                <th><strong>NAMA</strong></th>
                                                <th><strong>PRODUCT</strong></th>
                                                <th><strong>TGL</strong></th>
                                                <th><strong>JUMLAH BARANG</strong></th>
                                                <th><strong>ALAMAT</strong></th>
                                                <th><strong>METODDE PEMBAYARAN</strong></th>
                                                <th><strong>STATUS PEMBAYARAN</strong></th>
                                                <th><strong>HARGA BARANG</strong></th>
                                                <th><strong>ACTION</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-11">
                                            <tr>
                                                <td><strong>#P-0405689</strong></td>
                                                <td>Mr. Bobby</td>
                                                <td>FACIAL WASH</td>
                                                <td>01 August 2020</td>
                                                <td>2 pcs</td>
                                                <td>Yogyakarta,Sleman</td>
                                                <td>Via Dana</td>
                                                <td><span class="badge light badge-success">Successful</span></td>
                                                <td>Rp.21.56</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Chat Pembeli</a>
                                                            <a class="dropdown-item" href="#">Ubah Status</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#P-0405688</strong></td>
                                                <td>Mr. Cuput</td>
                                                <td>Facial Mask</td>
                                                <td>01 August 2020</td>
                                                <td>2 pcs</td>
                                                <td>Yogyakarta,Sleman</td>
                                                <td>Via Dana</td>
                                                <td><span class="badge light badge-success">Successful</span></td>
                                                <td>Rp.21.56</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Chat Pembeli</a>
                                                            <a class="dropdown-item" href="#">Ubah Status</a>
                                                            <a class="dropdown-item" href="{{ route('tagihan') }}">Tagihan</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>#P-0405688</strong></td>
                                                <td>Mr. Cuput</td>
                                                <td>Facial Mask</td>
                                                <td>01 August 2020</td>
                                                <td>2 pcs</td>
                                                <td>Yogyakarta,Sleman</td>
                                                <td>Via Dana</td>
                                                <td><span class="badge light badge-danger">Pending</span></td>
                                                <td>Rp.21.56</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Chat Pembeli</a>
                                                            <a class="dropdown-item" href="#">Ubah Status</a>
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

    @endpush
@endsection
