
<?php


include 'header.php';

?>


<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <style>
            .dash-title {
                font-size: 20px;
                font-weight: 900;
                color: black;
                text-transform: uppercase;
            }

            .dash-counts {
                font-weight: 900;
                color: black;
                text-transform: uppercase;
                font-size: small;
            }
            .card-two,.bg-four {
                border:none;
                border-radius:20px;
                background: rgb(245,79,116);
    background: radial-gradient(circle, rgba(245,79,116,0.38139005602240894) 0%, rgba(155,199,252,0.6558998599439776) 100%);
            }
            .page-wrapper{
                background: darkorchid;
            }           
            .menu-title-two, .sidebar-menu-two li a ,.text-muted {
                color: black !important;
            }
        </style>

        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card card-two">
                    <div class="card-body bg-four">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-1 bg-one">
                                <i class="fas fa-hospital"></i>

                            </span>
                            <div class="dash-count">
                                <div class="dash-title">1,642</div>
                                <div class="dash-counts">
                                    <p>Today OPD</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-5" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <span class="text-danger me-1">
                                <i class="fas fa-dollar-sign fa-arrow-down me-1"></i>

                                1.15%
                            </span>
                            since last week
                        </p>
                    </div>
                </div>
            </div>
           
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card card-two">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-2 bg-two">
                                <i class="fas fa-dollar-sign"></i>
                            </span>
                            <div class="dash-count">
                                <div class="dash-title">3,642</div>
                                <div class="dash-counts">
                                    <p>Today OPD Pay</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-6" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <span class="text-success me-1">
                                <i class="fas fa-arrow-up me-1"></i>
                                2.37%
                            </span>
                            since last week
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card card-two">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-4 bg-three">
                                <i class="far fa-file"></i>
                            </span>
                            <div class="dash-count">
                                <div class="dash-title">29</div>
                                <div class="dash-counts">
                                    <p>Today Appoint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-three" role="progressbar" style="width: 45%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <span class="text-danger me-1">
                                <i class="fas fa-arrow-down me-1"></i>
                                8.68%
                            </span>
                            since last week
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card card-two">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-3 bg-four">
                                <i class="fas fa-users"></i>

                            </span>
                            <div class="dash-count">
                                <div class="dash-title">1</div>
                                <div class="dash-counts">
                                    <p>Doctors</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-4" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <span class="text-success me-1">
                                <i class="fas fa-arrow-up me-1"></i>
                                3.77%
                            </span>
                            since last week
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card card-two">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-2 bg-one">
                                <i class="fas  fa-users"></i>

                            </span>
                            <div class="dash-count">
                                <div class="dash-title">3,642</div>
                                <div class="dash-counts">
                                    <p>Today Patients</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-one" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <span class="text-success me-1">
                                <i class="fas fa-arrow-up me-1"></i>
                                2.37%
                            </span>
                            since last week
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card card-two">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-4 bg-two">
                                <i class="fas fa-file-alt"></i>
                            </span>

                            <div class="dash-count">
                                <div class="dash-title">29</div>
                                <div class="dash-counts">
                                    <p>New Appoint.</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-two" role="progressbar" style="width: 45%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <span class="text-danger me-1">
                                <i class="fas fa-arrow-down me-1"></i>
                                8.68%
                            </span>
                            since last week
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card card-two">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-3 bg-three">
                                <i class="fas fa-users"></i>

                            </span>
                            <div class="dash-count">
                                <div class="dash-title">1</div>
                                <div class="dash-counts">
                                    <p>Total Patients</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-7" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <span class="text-success me-1">
                                <i class="fas fa-arrow-up me-1"></i>
                                3.77%
                            </span>
                            since last week
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- /Page Wrapper -->



<?php


include 'footer.php';

?>


