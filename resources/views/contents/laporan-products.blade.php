@extends('layouts.master')

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Bootstrap</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Laporan</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Laporan Product</a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="row">
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto my-1">
                                            <label class="mr-sm-2">Bulan</label>
                                            <select class="mr-sm-2 default-select" id="inlineFormCustomSelect">
                                                <option selected>Maret</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto my-1">
                                            <label class="mr-sm-2">Tahun</label>
                                            <select class="mr-sm-2 default-select" id="inlineFormCustomSelect">
                                                <option selected>Maret</option>
                                                <option value="1">Juni</option>
                                                <option value="2">Juli</option>
                                                <option value="3">Agustus</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Laporan Products</h4>

                            </div>
                            <div class="card-body">
                                <div class="table table-responsive table-bordered table-hover ">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr class="bg-primary text-white">
                                                <th>Tgl</th>
                                                <th>No Transaksi</th>
                                                <th>Nama Barang</th>
                                                <th>Qty</th>
                                                <th>Harga Jual</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>11 maret 2032</td>
                                                <td>P-3493902</td>
                                                <td>Samun Muka</td>
                                                <td >10</td>
                                                <td >Rp.50.000</td>
                                                <td >Rp.1.000.0000</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>

                                                <td>11 maret 2032</td>
                                                <td>P-3493902</td>
                                                <td>Samun Muka</td>
                                                <td >10</td>
                                                <td >Rp.50.000</td>
                                                <td >Rp.1.000.0000</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>

                                                <td>11 maret 2032</td>
                                                <td>P-3493902</td>
                                                <td>Samun Muka</td>
                                                <td >10</td>
                                                <td >Rp.50.000</td>
                                                <td >Rp.1.000.0000</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>

                                                <td>11 maret 2032</td>
                                                <td>P-3493902</td>
                                                <td>Samun Muka</td>
                                                <td >10</td>
                                                <td >Rp.50.000</td>
                                                <td >Rp.1.000.0000</td>
                                            </tr>
                                        </tbody>
                                        <tr class="fs-16">
                                            <th>Total Penjualan Bulan Maret</th>
                                            <th>-</th>
                                            <th>-</th>
                                            <th>-</th>
                                            <th>-</th>
                                            <th>Rp.20.000.000</th>

                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



            </div>
        </div>

@endsection
