@extends('admin.admin_master')
@section('admin')

<div class="page-container">

    <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">
        <div class="col">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <div>
                        <h4 class="header-title">Total Sales</h4>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill fs-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <a href="javascript:void(0);" class="dropdown-item">Revenue Analysis</a>
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                </div>
    
                <div class="card-body pt-0">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <span class="badge bg-primary rounded-pill fs-13">45% <i class="ti ti-trending-up"></i> </span>
                        <div class="text-end">
                            <h3 class="fw-semibold">$7.8M</h3>
                            <p class="text-muted mb-0">Since last month</p>
                        </div>
                    </div>
    
                    <div class="progress progress-soft progress-sm mt-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    
        <div class="col">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <div>
                        <h4 class="header-title">Total Revenue</h4>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill fs-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <a href="javascript:void(0);" class="dropdown-item">Revenue Analysis</a>
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                </div>
    
                <div class="card-body pt-0">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <span class="badge bg-success rounded-pill fs-13">28% <i class="ti ti-trending-up"></i> </span>
                        <div class="text-end">
                            <h3 class="fw-semibold">$12.4M</h3>
                            <p class="text-muted mb-0">Since last month</p>
                        </div>
                    </div>
    
                    <div class="progress progress-soft progress-sm mt-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    
        <div class="col">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <div>
                        <h4 class="header-title">New Customers</h4>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill fs-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">Customer Insights</a>
                            <a href="javascript:void(0);" class="dropdown-item">Export Data</a>
                            <a href="javascript:void(0);" class="dropdown-item">Retention Rate</a>
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                </div>
    
                <div class="card-body pt-0">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <span class="badge bg-warning rounded-pill fs-13">18% <i class="ti ti-trending-up"></i> </span>
                        <div class="text-end">
                            <h3 class="fw-semibold">1.2K</h3>
                            <p class="text-muted mb-0">Since last month</p>
                        </div>
                    </div>
    
                    <div class="progress progress-soft progress-sm mt-3">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    
        <div class="col">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center">
                    <div>
                        <h4 class="header-title">Conversion Rate</h4>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill fs-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="javascript:void(0);" class="dropdown-item">Performance Report</a>
                            <a href="javascript:void(0);" class="dropdown-item">Export Data</a>
                            <a href="javascript:void(0);" class="dropdown-item">Improve Rate</a>
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                </div>
    
                <div class="card-body pt-0">
                    <div class="d-flex align-items-center gap-2 justify-content-between">
                        <span class="badge bg-info rounded-pill fs-13">3.2% <i class="ti ti-trending-down"></i> </span>
                        <div class="text-end">
                            <h3 class="fw-semibold">7.5%</h3>
                            <p class="text-muted mb-0">Since last month</p>
                        </div>
                    </div>
    
                    <div class="progress progress-soft progress-sm mt-3">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 7.5%" aria-valuenow="7.5" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div><!-- end row -->

    <div class="row">
        <div class="col-xxl-8 col-xl-12">
            <div class="card">
                <div class="d-flex card-header justify-content-between align-items-center border-bottom border-dashed">
                    <h4 class="header-title">Total Revenue</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill fs-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0 pt-1">
                    <div dir="ltr" class="px-2">
                        <div id="revenue-chart" class="apex-charts" data-colors="#1478f0,#f83f32,#30cf46"></div>
                    </div>

                    <div class="border-top border-dashed mt-2">
                        <div class="row text-center align-items-center g-0">
                            <div class="col-md-4 col-12">
                                <p class="text-muted mb-0">Payments</p>
                                <img src="{{ asset('backend/assets/images/cards/american-express.svg') }}" alt="user-card" height="36" />
                                <img src="{{ asset('backend/assets/images/cards/discover-card.svg') }}" alt="user-card" height="36" />
                                <img src="{{ asset('backend/assets/images/cards/mastercard.svg') }}" alt="user-card" height="36" />
                            </div>
                            <div class="col-md-4 col-6 border-start border-end border-dashed">
                                <p class="text-muted mt-3 mb-1">Expenses</p>
                                <h4 class="mb-3">
                                    <span class="ri-arrow-left-up-box-line text-danger me-1"></span>
                                    <span>$15.07k</span>
                                </h4>
                            </div>
                            <div class="col-md-4 col">
                                <p class="text-muted mt-3 mb-1">Revenue</p>
                                <h4 class="mb-3">
                                    <span class="ri-arrow-left-down-box-line text-success me-1"></span>
                                    <span>$45.5k</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-xxl-4 col-xl-6">
            <div class="card">
                <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-2 border-bottom border-dashed">
                    <h4 class="header-title">Orders Statistics</h4>

                    <div class="d-flex gap-2 justify-content-end text-end">
                        <a href="javascript:void(0);" class="btn btn-sm btn-light">Refresh <i class="ri-refresh-line ms-1"></i></a>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div dir="ltr">
                        <div id="data-visits-chart" class="apex-charts" data-colors="#1478f0,#faae37,#30cf46,#4bbee1"></div>

                        <div class="row mt-3">
                            <div class="col">
                                <div class="d-flex justify-content-between align-items-center p-1">
                                    <div>
                                        <i class="ri-circle-fill fs-12 align-middle me-1 text-primary"></i>
                                        <span class="align-middle fw-semibold">Direct</span>
                                    </div>
                                    <span class="fw-semibold text-muted float-end"><i class="ri-arrow-down-s-fill text-danger"></i> 965</span>
                                </div>

                                <div class="d-flex justify-content-between align-items-center p-1">
                                    <div>
                                        <i class="ri-circle-fill fs-12 text-secondary align-middle me-1"></i>
                                        <span class="align-middle fw-semibold">Social</span>
                                    </div>
                                    <span class="fw-semibold text-muted float-end"><i class="ri-arrow-up-s-fill text-success"></i> 75</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex justify-content-between align-items-center p-1">
                                    <div>
                                        <i class="ri-circle-fill fs-12 text-success align-middle me-1"></i>
                                        <span class="align-middle fw-semibold"> Marketing</span>
                                    </div>
                                    <span class="fw-semibold text-muted float-end"><i class="ri-arrow-up-s-fill text-success"></i> 102</span>
                                </div>

                                <div class="d-flex justify-content-between align-items-center p-1">
                                    <div>
                                        <i class="ri-circle-fill fs-12 text-info align-middle me-1"></i>
                                        <span class="align-middle fw-semibold">Affiliates</span>
                                    </div>
                                    <span class="fw-semibold text-muted float-end"><i class="ri-arrow-down-s-fill text-danger"></i> 96</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        
    </div> <!-- end row-->

</div> <!-- container -->

@endsection