@extends('layouts.backend')
@section('content')
<!-- Page-Title -->
 <x-backend.page-title >
    <li class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></li>
 </x-backend.page-title>
 <!-- Page-Title -->
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body dash-info-carousel mb-0">
                <span class="text-success mb-2 d-block">Today Available</span>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 align-self-center">
                                    <div class="text-center">
                                        <h4 class="mt-0 header-title text-left">From : Apollo Hospital</h4>
                                        <div class="my-3"><img src="{{ asset('contents/backend') }}/assets/images/users/user-1.jpg" alt="" height="120" class="rounded-circle" /></div>
                                        <h2 class="dr-title mb-1">Dr.Helen White</h2>
                                        <p class="text-muted font-14 mb-0"><span class="mr-2 text-secondary">MS Cardiology</span> 11:00am to 03:00pm</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end carousel-item-->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 align-self-center">
                                    <div class="text-center">
                                        <h4 class="mt-0 header-title text-left">Kaiser Foundation Hospital</h4>
                                        <div class="my-3"><img src="{{ asset('contents/backend') }}/assets/images/users/user-2.jpg" alt="" height="120" class="rounded-circle" /></div>
                                        <h2 class="dr-title mb-1">Dr.Wendy Keen</h2>
                                        <p class="text-muted font-14 mb-0"><span class="mr-2 text-secondary">MD Neurology</span> 01:00pm to 04:00pm</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end carousel-item-->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 align-self-center">
                                    <div class="text-center">
                                        <h4 class="mt-0 header-title text-left">Florida Hospital</h4>
                                        <div class="my-3"><img src="{{ asset('contents/backend') }}/assets/images/users/user-3.jpg" alt="" height="120" class="rounded-circle" /></div>
                                        <h2 class="dr-title mb-1">Dr.Thomas Fant</h2>
                                        <p class="text-muted font-14 mb-0"><span class="mr-2 text-secondary">MD Orthopedic</span> 09:00am to 11:30am</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end carousel-item-->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12 align-self-center">
                                    <div class="text-center">
                                        <h4 class="mt-0 header-title text-left">Shesmedi Hospital</h4>
                                        <div class="my-3"><img src="{{ asset('contents/backend') }}/assets/images/users/user-4.jpg" alt="" height="120" class="rounded-circle" /></div>
                                        <h2 class="dr-title mb-1">Dr.Lisa King</h2>
                                        <p class="text-muted font-14 mb-0"><span class="mr-2 text-secondary">MS Psychology</span> 05:00pm to 08:00pm</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end carousel-item-->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!-- end col-->
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-4">
                <div class="card hospital-info">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">Appointments</h4>
                        <div class="media">
                            <div class="data-icon align-self-center"><i class="fas fa-wheelchair rounded-circle text-danger"></i></div>
                            <div class="media-body ml-3 align-self-center text-right">
                                <h3 class="mt-0">40</h3>
                                <p class="text-muted mb-0 text-nowrap">Yesterday 32 App.</p>
                            </div>
                            <!--end media body-->
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!-- end col-->
            <div class="col-lg-4">
                <div class="card hospital-info">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">New Admit</h4>
                        <div class="media">
                            <div class="data-icon align-self-center"><i class="fas fa-bed rounded-circle text-warning"></i></div>
                            <div class="media-body ml-3 align-self-center text-right">
                                <h3 class="mt-0">21</h3>
                                <p class="text-muted mb-0 text-nowrap">Yesterday 22 Add.</p>
                            </div>
                            <!--end media body-->
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!-- end col-->
            <div class="col-lg-4">
                <div class="card hospital-info">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">Operations</h4>
                        <div class="media">
                            <div class="data-icon align-self-center"><i class="fas fa-cut rounded-circle text-success"></i></div>
                            <div class="media-body ml-3 align-self-center text-right">
                                <h3 class="mt-0">10</h3>
                                <p class="text-muted mb-0 text-nowrap">Yesterday 12 Ope.</p>
                            </div>
                            <!--end media body-->
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!-- end col-->
            <div class="col-lg-4">
                <div class="card hospital-info">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">Doctors</h4>
                        <div class="media">
                            <div class="data-icon align-self-center"><i class="fas fa-user-md rounded-circle text-info"></i></div>
                            <div class="media-body ml-3 align-self-center text-right">
                                <h3 class="mt-0">15</h3>
                                <p class="text-muted mb-0 text-nowrap">Today Available</p>
                            </div>
                            <!--end media body-->
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!-- end col-->
            <div class="col-lg-4">
                <div class="card hospital-info">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">Nurses</h4>
                        <div class="media">
                            <div class="data-icon align-self-center"><i class="fas fa-user-nurse rounded-circle text-blue"></i></div>
                            <div class="media-body ml-3 align-self-center text-right">
                                <h3 class="mt-0">40</h3>
                                <p class="text-muted mb-0 text-nowrap">Today Available</p>
                            </div>
                            <!--end media body-->
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!-- end col-->
            <div class="col-lg-4">
                <div class="card hospital-info">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">Earnings</h4>
                        <div class="media">
                            <div class="data-icon align-self-center"><i class="fas fa-hand-holding-usd rounded-circle text-pink"></i></div>
                            <div class="media-body ml-3 align-self-center text-right">
                                <h3 class="mt-0">$41,520</h3>
                                <p class="text-muted mb-0 text-nowrap">Yesterday's $38,990</p>
                            </div>
                            <!--end media body-->
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!-- end col-->
        </div>
        <!--end row-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Hospital Survey</h4>
                <div class="apexchart-wrapper"><div id="hospital_survey" class="chart-gutters"></div></div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <x-backend.widgets.calendar />
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Total Patients</h4>
                <div class="row">
                    <div class="col-md-4 align-self-center">
                        <div class="text-center">
                            <div class="icon-info mb-3"><i class="fas fa-procedures bg-soft-info"></i></div>
                            <h2 class="mt-0 font-weight-bold">1200</h2>
                            <p class="mb-0 text-muted">
                                <span class="text-success"><i class="mdi mdi-arrow-up"></i>14.5%</span> Up From Last Week
                            </p>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-md-8 align-self-center">
                        <div class="apexchart-wrapper"><div id="patient_dash_report" class="chart-gutters"></div></div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <h4 class="header-title mt-0 mb-3">Pharmacy Stocks</h4>
                        <div class="apexchart-wrapper"><div id="dash_medicine" class="apex-charts"></div></div>
                    </div>
                    <!--end col-->
                    <div class="col-md-7 align-self-center">
                        <div class="text-center">
                            <img src="{{ asset('contents/backend') }}/assets/images/widgets/weather.png" alt="" height="70" />
                            <h2>32??</h2>
                            <h4 class="title-text">San Francisco, California</h4>
                            <p class="text-muted">SUNDAY 25<sup>th</sup> Aug 2019</p>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-round weather-btn-icon">View Details <i class="mdi mdi-arrow-right"></i></button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-4">Activity</h4>
                <div class="slimscroll hospital-dash-activity">
                    <div class="activity">
                        <i class="mdi mdi-checkbox-marked-circle-outline icon-success"></i>
                        <div class="time-item">
                            <div class="item-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">Task finished</h6>
                                    <span class="text-muted">5 minutes ago</span>
                                </div>
                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. <a href="#" class="text-info">[more info]</a></p>
                                <div><span class="badge badge-soft-secondary">Design</span> <span class="badge badge-soft-secondary">HTML</span> <span class="badge badge-soft-secondary">Css</span></div>
                            </div>
                        </div>
                        <i class="mdi mdi-timer-off icon-pink"></i>
                        <div class="time-item">
                            <div class="item-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">Task Overdue</h6>
                                    <span class="text-muted">30 minutes ago</span>
                                </div>
                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. <a href="#" class="text-info">[more info]</a></p>
                                <div><span class="badge badge-soft-secondary">Python</span> <span class="badge badge-soft-secondary">Django</span></div>
                            </div>
                        </div>
                        <i class="mdi mdi-alert-decagram icon-purple"></i>
                        <div class="time-item">
                            <div class="item-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">New Task</h6>
                                    <span class="text-muted">50 minutes ago</span>
                                </div>
                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. <a href="#" class="text-info">[more info]</a></p>
                            </div>
                        </div>
                        <i class="mdi mdi-clipboard-alert icon-warning"></i>
                        <div class="time-item">
                            <div class="item-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">New Comment</h6>
                                    <span class="text-muted">1 Day ago</span>
                                </div>
                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. <a href="#" class="text-info">[more info]</a></p>
                            </div>
                        </div>
                        <i class="mdi mdi-thumb-up icon-info"></i>
                        <div class="time-item">
                            <div class="item-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="m-0">Project Done</h6>
                                    <span class="text-muted">2 Day ago</span>
                                </div>
                                <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. <a href="#" class="text-info">[more info]</a></p>
                            </div>
                        </div>
                    </div>
                    <!--end activity-->
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">New Patients</h4>
                <div class="table-responsive">
                    <table id="datatable" class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Patient Name</th>
                                <th>Age</th>
                                <th>ID</th>
                                <th>Address</th>
                                <th>Mobile No</th>
                                <th>Last Visit</th>
                                <th>Diseases</th>
                                <th class="text-right">Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="patient-profile.html"><img src="{{ asset('contents/backend') }}/assets/images/users/user-10.jpg" alt="" class="thumb-sm rounded-circle mr-2" />Donald Gardner</a>
                                </td>
                                <td>36</td>
                                <td>#1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2019</td>
                                <td><span class="badge badge-soft-danger">Cancer</span></td>
                                <td class="text-right">
                                    <a href="patient-edit.html" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a> <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <a href="patient-profile.html"><img src="{{ asset('contents/backend') }}/assets/images/users/user-9.jpg" alt="" class="thumb-sm rounded-circle mr-2" />Keith Jacobson</a>
                                </td>
                                <td>48</td>
                                <td>#1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2019</td>
                                <td><span class="badge badge-soft-success">Ulcers</span></td>
                                <td class="text-right">
                                    <a href="patient-edit.html" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a> <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <a href="patient-profile.html"><img src="{{ asset('contents/backend') }}/assets/images/users/user-9.jpg" alt="" class="thumb-sm rounded-circle mr-2" />Greg Crosby</a>
                                </td>
                                <td>27</td>
                                <td>#1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2019</td>
                                <td><span class="badge badge-soft-danger">HIV</span></td>
                                <td class="text-right">
                                    <a href="patient-edit.html" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a> <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <a href="patient-profile.html"><img src="{{ asset('contents/backend') }}/assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle mr-2" />Fred Godina</a>
                                </td>
                                <td>22</td>
                                <td>#1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2019</td>
                                <td><span class="badge badge-soft-success">Virus Fever</span></td>
                                <td class="text-right">
                                    <a href="patient-edit.html" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a> <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <a href="patient-profile.html"><img src="{{ asset('contents/backend') }}/assets/images/users/user-7.jpg" alt="" class="thumb-sm rounded-circle mr-2" />Peggy Doe</a>
                                </td>
                                <td>51</td>
                                <td>#7851</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>20/07/2019</td>
                                <td><span class="badge badge-soft-success">heart attack</span></td>
                                <td class="text-right">
                                    <a href="patient-edit.html" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a> <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <a href="patient-profile.html"><img src="{{ asset('contents/backend') }}/assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle mr-2" />Jennifer Doss</a>
                                </td>
                                <td>18</td>
                                <td>#3654</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>19/07/2019</td>
                                <td><span class="badge badge-soft-danger">Ebola</span></td>
                                <td class="text-right">
                                    <a href="patient-edit.html" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a> <a href="#"><i class="fas fa-trash-alt text-danger font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
@endsection
