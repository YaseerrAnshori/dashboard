@extends('layouts.master')

@section('content')
     <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Tagihan</h4>
					{{-- <ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
					</ol> --}}
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header"> Tagihan
								<strong>01/01/01/2018</strong>
								<span class="float-right">
									<strong>Status:</strong> Pending
								</span>
							</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6 mb-4">
                                        <h6>Dari:</h6>
                                        <div> <strong>Anshori Poland</strong> </div>
                                        <div>Yogjakarta 8</div>
                                        <div>71-101 Wedomaratni, Kaliurang</div>
                                        <div>Email: Sirr@webz.com.pl</div>
                                        <div>Phone: +48 444 666 3333</div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 mb-4">
                                        <h6>Ke:</h6>
                                        <div> <strong>Bob Mart</strong> </div>
                                        <div>Attn: Daniel Marek</div>
                                        <div>43-190 Mikolow, Poland</div>
                                        <div>Email: marek@daniel.com</div>
                                        <div>Phone: +48 123 456 789</div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                        <div class="row align-items-center">
											<div class="col-sm-9">
												<div class="brand-logo mb-3">
													<img class="logo-abbr" src="images/logo.png" alt="">
													<img class="logo-compact" src="images/logo-text.png" alt="">
												</div>
                                                <span>Silakan kirim jumlah yang tepat:: <strong class="d-block">Rp.15.50000 </strong>
                                                    <strong>1DonateWffyhwAjskoEwXt83pHZxhLTr8H</strong></span><br>
                                                <small class="text-muted">Nilai tukar saat ini $10 = Rp.5.9000</small>
                                            </div>
                                            <div class="col-sm-3 mt-3"> <img src="images/qr.png" class="img-fluid width110"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Item/Sevice</th>
                                                <th>Description</th>
                                                <th class="right">Satuan</th>
                                                <th class="center">Qty</th>
                                                <th class="right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="center">1</td>
                                                <td class="left strong">Salep</td>
                                                <td class="left">Dioleskan</td>
                                                <td class="right">Rp.1.000</td>
                                                <td class="center">1</td>
                                                <td class="right">Rp.999,00</td>
                                            </tr>
                                            <tr>
                                                <td class="center">2</td>
                                                <td class="left">Layanan Pijit</td>
                                                <td class="left">Pijit Muka</td>
                                                <td class="right">-</td>
                                                <td class="center">20</td>
                                                <td class="right">Rp.3.000,00</td>
                                            </tr>
                                            {{-- <tr>
                                                <td class="center">3</td>
                                                <td class="left">Hosting</td>
                                                <td class="left">1 year subcription</td>
                                                <td class="right">$499,00</td>
                                                <td class="center">1</td>
                                                <td class="right">$499,00</td>
                                            </tr> --}}
                                            <tr>
                                                <td class="center">4</td>
                                                <td class="left">Facial Care</td>
                                                <td class="left">1 Jam Di Oles Masker</td>
                                                <td class="right">-</td>
                                                <td class="center">1</td>
                                                <td class="right">Rp.3.999,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5"> </div>
                                    <div class="col-lg-4 col-sm-5 ml-auto">
                                        <table class="table table-clear">
                                            <tbody>
                                                <tr>
                                                    <td class="left"><strong>Subtotal</strong></td>
                                                    <td class="right">Rp.8.497,00</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Discount (20%)</strong></td>
                                                    <td class="right">Rp.1,699,40</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>PPN (10%)</strong></td>
                                                    <td class="right">Rp.679,76</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Total</strong></td>
                                                    <td class="right"><strong>Rp.7.477,36</strong><br>
                                                        <strong>Rp.20.009922 </strong></td>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
