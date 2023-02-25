<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filedash - File Manager Dashboard</title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="../../assets/media/image/favicon.png"/> -->

    <!-- Main css -->
    <link rel="stylesheet" href="/assets/vendors/bundle.css" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&amp;display=swap" rel="stylesheet">


    <!-- App css -->
    <link rel="stylesheet" href="/assets/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<!-- <div class="preloader">
    <div class="preloader-icon"></div>
</div> -->
<!-- Preloader -->

<!-- Layout wrapper -->
<div class="layout-wrapper">
    <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-body">
                <div class="header-body-left">
                    <ul class="navbar-nav">
                        <li class="nav-item navigation-toggler">
                            <a href="#" class="nav-link">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="header-search-form">
                                <form>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn">
                                                <i class="ti-search"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search something...">
                                        <div class="input-group-append">
                                            <button class="btn header-search-close-btn">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="header-body-right">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link mobile-header-search-btn" title="Search">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="Dark">
                                <i class="fa fa-moon-o"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="bg-primary px-3 py-3">
                                    <h6 class="mb-0">Notifications</h6>
                                </div>
                                <div class="dropdown-scroll">
                                    <ul class="list-group list-group-flush">
                                        <li>
                                            <a href="#"
                                               class="list-group-item d-flex hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-3">
                                                        <span
                                                            class="avatar-title bg-secondary-bright text-secondary rounded-circle">
                                                            <i class="ti-server"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0">
                                                        Your storage space is running low!
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
                                                    </p>
                                                    <span class="text-muted small">4 sec ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="list-group-item d-flex hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-3">
                                                        <img src="../../assets/media/image/user/man_avatar4.jpg"
                                                             class="rounded-circle" alt="avatar">
                                                    </figure>
                                                </div>
                                                <div>
                                                    <p class="mb-0">
                                                        <span class="text-primary">Jonny Richie</span> uploaded new
                                                        files
                                                        <i title="Mark as read" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-circle-o font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
                                                    </p>
                                                    <span class="text-muted small">20 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-divider text-center small pb-2 px-3">
                                            <span>Old notifications</span>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="list-group-item d-flex hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-3">
                                                        <span
                                                            class="avatar-title bg-info-bright text-info rounded-circle">
                                                            <i class="fa fa-cloud-upload"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0">
                                                        Upgrade plan
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
                                                    </p>
                                                    <span class="text-muted small">45 sec ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="list-group-item d-flex hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-3">
                                                        <span
                                                            class="avatar-title bg-success-bright text-success rounded-circle">
                                                            <i class="ti-share"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0">
                                                        A file has been shared
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
                                                    </p>
                                                    <span class="text-muted small">58 sec ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="px-3 py-2 text-right border-top">
                                    <ul class="list-inline small">
                                        <li class="list-inline-item mb-0">
                                            <a href="#">Mark All Read</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                                <i class="ti-settings"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link profile-nav-link dropdown-toggle" title="User menu"
                               data-toggle="dropdown">
                                <span class="mr-2 d-sm-inline d-none">Bony Gidden</span>
                                <figure class="avatar avatar-sm">
                                    <img src="../../assets/media/image/user/man_avatar3.jpg"
                                         class="rounded-circle"
                                         alt="avatar">
                                </figure>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="text-center py-4"
                                     data-background-image="../../assets/media/image/image1.jpg">
                                    <figure class="avatar avatar-lg mb-3 border-0">
                                        <img src="../../assets/media/image/user/man_avatar3.jpg"
                                             class="rounded-circle" alt="image">
                                    </figure>
                                    <h5 class="mb-0">Bony Gidden</h5>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item" data-sidebar-target="#settings">Settings</a>
                                    <a href="http://bifor.laborasyon.com/login" class="list-group-item text-danger"
                                       data-sidebar-target="#settings">Sign Out!</a>
                                </div>
                                <div class="pb-0 p-4">
                                    <div class="mb-4">
                                        <h6 class="d-flex justify-content-between">
                                            Completed Tasks
                                            <span class="float-right">%68</span>
                                        </h6>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                 style="width: 68%;" aria-valuenow="68" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i class="ti-arrow-down"></i>
                    </a>
                </li>
                <li class="nav-item sidebar-toggler">
                    <a href="#" class="nav-link">
                        <i class="ti-cloud"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./ Header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- begin::navigation -->
        <div class="navigation">
            <div class="logo">
                <a href=index.html>
                    <img src="../../assets/media/image/logo.png" alt="logo">
                </a>
            </div>
            <ul>
                <li>
                    <a  href="dashboard.html">
                        <i class="nav-link-icon ti-pie-chart"></i>
                        <span class="nav-link-label">Dashboard</span>
                        <span class="badge badge-danger badge-small">2</span>
                    </a>
                </li>
                <li>
                    <a  href="files.html">
                        <i class="nav-link-icon ti-file"></i>
                        <span class="nav-link-label">Files</span>
                    </a>
                </li>
                <li>
                    <a  href="activities.html">
                        <i class="nav-link-icon ti-pulse"></i>
                        <span class="nav-link-label">Activities</span>
                        <span class="badge badge-warning">New</span>
                    </a>
                </li>
                <li>
                    <a  href="users.html">
                        <i class="nav-link-icon ti-user"></i>
                        <span class="nav-link-label">Users</span>
                    </a>
                </li>
                <li class="flex-grow-1">
                    <a href="alert.html">
                        <i class="nav-link-icon ti-layers"></i>
                        <span class="nav-link-label">Components</span>
                    </a>
                </li>
                <li>
                    <a  href="settings.html">
                        <i class="nav-link-icon ti-settings"></i>
                        <span class="nav-link-label">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- end::navigation -->

        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content">
                    <div class="card bg-primary-bright border-0">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-2 col-md-3">
                    <figure>
                        <img class="img-fluid" src="https://filedash.laborasyon.com/assets/media/svg/upgrade.svg" alt="upgrade">
                    </figure>
                </div>
                <div class="col-xl-10 col-md-9">
                    <div class="d-md-flex align-items-center justify-content-between text-center text-md-left p-4 p-md-0">
                        <div class="mr-3">
                            <h4 class="mb-3">Get an Upgrade</h4>
                            <p class="text-muted">Get additional 500 GB space for your documents and files. Expand
                                your storage and enjoy your business. Change plan for more space.</p>
                            <a href="#" class="small">Close</a>
                        </div>
                        <div class="flex-shrink-0 ml-3">
                            <button class="btn btn-outline-primary btn-lg2">Upgrade Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h4>Daily Usage</h4>
            <div id="daily-usage"></div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row mb-4">
                        <div class="col-md-8 offset-md-2">
                            <img src="https://filedash.laborasyon.com/assets/media/svg/report.svg" class="img-fluid" alt="report">
                        </div>
                    </div>
                    <h4 class="my-3">Create Report</h4>
                    <p class="text-muted">Create reports to grow their business and serve their customers better. Use this tool to generate reports.</p>
                    <button class="btn btn-outline-primary btn-lg2">Start Now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content-title d-flex justify-content-between">
        <h4>Favorite Folders</h4>
        <a href="files.html">View All</a>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <i class="font-size-22 ti-folder"></i>
                        </div>
                        <div>
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Baxie Roseblade">
                                    <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Mella Mixter">
                                    <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Jo Hugill">
                                    <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Cullie Philcott">
                                    <span class="avatar-title bg-primary rounded-circle">+ 5</span>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5>Facebook Videos</h5>
                        <div class="dropdown">
                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                <a href="#" class="dropdown-item">Share</a>
                                <a href="#" class="dropdown-item">Download</a>
                                <a href="#" class="dropdown-item">Copy to</a>
                                <a href="#" class="dropdown-item">Move to</a>
                                <a href="#" class="dropdown-item">Rename</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                    <p class="small text-muted mb-0">1.754 Files</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <i class="font-size-22 ti-folder"></i>
                        </div>
                        <div>
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Baxie Roseblade">
                                    <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Mella Mixter">
                                    <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Jo Hugill">
                                    <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Cullie Philcott">
                                    <span class="avatar-title bg-primary rounded-circle">+ 5</span>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5>YouTube Videos</h5>
                        <div class="dropdown">
                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                <a href="#" class="dropdown-item">Share</a>
                                <a href="#" class="dropdown-item">Download</a>
                                <a href="#" class="dropdown-item">Copy to</a>
                                <a href="#" class="dropdown-item">Move to</a>
                                <a href="#" class="dropdown-item">Rename</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                    <p class="small text-muted mb-0">3.512 Files</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <i class="font-size-22 ti-folder"></i>
                        </div>
                        <div>
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Baxie Roseblade">
                                    <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Mella Mixter">
                                    <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Jo Hugill">
                                    <img src="../../assets/media/image/user/man_avatar1.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Cullie Philcott">
                                    <span class="avatar-title bg-primary rounded-circle">+ 5</span>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5>Instagram Videos</h5>
                        <div class="dropdown">
                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                <a href="#" class="dropdown-item">Share</a>
                                <a href="#" class="dropdown-item">Download</a>
                                <a href="#" class="dropdown-item">Copy to</a>
                                <a href="#" class="dropdown-item">Move to</a>
                                <a href="#" class="dropdown-item">Rename</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                    <p class="small text-muted mb-0">1.908 Files</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <i class="font-size-22 ti-folder"></i>
                        </div>
                        <div>
                            <div class="avatar-group">
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Baxie Roseblade">
                                    <img src="../../assets/media/image/user/man_avatar5.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                                <figure class="avatar avatar-sm" data-toggle="tooltip" title="Mella Mixter">
                                    <img src="../../assets/media/image/user/women_avatar1.jpg" class="rounded-circle"
                                         alt="image">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5>My Downloads</h5>
                        <div class="dropdown">
                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                <a href="#" class="dropdown-item">Share</a>
                                <a href="#" class="dropdown-item">Download</a>
                                <a href="#" class="dropdown-item">Copy to</a>
                                <a href="#" class="dropdown-item">Move to</a>
                                <a href="#" class="dropdown-item">Rename</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </div>
                    <p class="small text-muted mb-0">218 Files</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-title d-flex justify-content-between">
        <h4>Quick Access</h4>
        <a href="#">View All</a>
    </div>

    <div class="row mb-4">
        <div class="col-md-2 text-center">
            <div class="card mb-3">
                <div class="card-body">
                    <a href="#" class="avatar avatar-lg">
                        <span class="avatar-title bg-primary rounded-pill">
                            <i class="ti-image"></i>
                        </span>
                    </a>
                </div>
            </div>
            <h6>Images</h6>
        </div>
        <div class="col-md-2 text-center">
            <div class="card mb-3">
                <div class="card-body">
                    <a href="#" class="avatar avatar-lg">
                        <span class="avatar-title bg-secondary rounded-pill">
                            <i class="ti-video-camera"></i>
                        </span>
                    </a>
                </div>
            </div>
            <h6>Videos</h6>
        </div>
        <div class="col-md-2 text-center">
            <div class="card mb-3">
                <div class="card-body">
                    <a href="#" class="avatar avatar-lg">
                        <span class="avatar-title bg-success rounded-pill">
                            <i class="ti-music"></i>
                        </span>
                    </a>
                </div>
            </div>
            <h6>Music</h6>
        </div>
        <div class="col-md-2 text-center">
            <div class="card mb-3">
                <div class="card-body">
                    <a href="#" class="avatar avatar-lg">
                        <span class="avatar-title bg-warning rounded-pill">
                            <i class="ti-files"></i>
                        </span>
                    </a>
                </div>
            </div>
            <h6>Documents</h6>
        </div>
        <div class="col-md-2 text-center">
            <div class="card mb-3">
                <div class="card-body">
                    <a href="#" class="avatar avatar-lg">
                        <span class="avatar-title bg-info rounded-pill">
                            <i class="ti-download"></i>
                        </span>
                    </a>
                </div>
            </div>
            <h6>Downloads</h6>
        </div>
        <div class="col-md-2 text-center">
            <div class="card mb-3">
                <div class="card-body">
                    <a href="#" class="avatar avatar-lg">
                        <span class="avatar-title rounded-pill">
                            <i class="ti-plus"></i>
                        </span>
                    </a>
                </div>
            </div>
            <h6>Add</h6>
        </div>
    </div>

    <div class="content-title d-flex justify-content-between">
        <h4>Recent Files</h4>
        <a href="#">View All</a>
    </div>

    <div class="mb-4">
        <div class="table-responsive">
            <table class="table table-borderless table-hover mb-0">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Modified</th>
                    <th>Label</th>
                    <th>Members</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <a href="#">
                            <figure class="avatar avatar-sm mr-2">
                                <span class="avatar-title bg-warning text-black-50 rounded-pill">
                                    <i class="ti-folder"></i>
                                </span>
                            </figure>
                            User Research
                        </a>
                    </td>
                    <td>2MB</td>
                    <td>3/9/19, 2:40PM</td>
                    <td>
                        <div class="badge bg-warning-bright text-warning">Project</div>
                    </td>
                    <td>
                        <div class="avatar-group">
                            <figure class="avatar avatar-sm" title="Lisle Essam"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/women_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/man_avatar5.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                <a href="#" class="dropdown-item">Share</a>
                                <a href="#" class="dropdown-item">Download</a>
                                <a href="#" class="dropdown-item">Copy to</a>
                                <a href="#" class="dropdown-item">Move to</a>
                                <a href="#" class="dropdown-item">Rename</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <figure class="avatar avatar-sm mr-2">
                                <span class="avatar-title bg-warning text-black-50 rounded-pill">
                                    <i class="ti-folder"></i>
                                </span>
                            </figure>
                            Design Thinking Project
                        </a>
                    </td>
                    <td>10MB</td>
                    <td>3/9/19, 2:40PM</td>
                    <td>
                        <div class="badge bg-secondary-bright text-secondary">Software</div>
                    </td>
                    <td>
                    </td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                <a href="#" class="dropdown-item">Share</a>
                                <a href="#" class="dropdown-item">Download</a>
                                <a href="#" class="dropdown-item">Copy to</a>
                                <a href="#" class="dropdown-item">Move to</a>
                                <a href="#" class="dropdown-item">Rename</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <figure class="avatar avatar-sm mr-2">
                                <span class="avatar-title rounded-pill">
                                    <i class="ti-file"></i>
                                </span>
                            </figure>
                            Meeting-notes.doc
                        </a>
                    </td>
                    <td>139KB</td>
                    <td>3/9/19, 2:40PM</td>
                    <td>
                        <div class="badge bg-primary-bright text-primary">Public</div>
                    </td>
                    <td>
                        <div class="avatar-group">
                            <figure class="avatar avatar-sm" title="Lisle Essam"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/women_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/man_avatar5.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Mella Mixter"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/women_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Jo Hugill"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Cullie Philcott"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/women_avatar5.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="" data-toggle="tooltip"
                                    data-original-title="Cullie Philcott">
                                <span class="avatar-title bg-primary rounded-circle">+ 5</span>
                            </figure>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                <a href="#" class="dropdown-item">Share</a>
                                <a href="#" class="dropdown-item">Download</a>
                                <a href="#" class="dropdown-item">Copy to</a>
                                <a href="#" class="dropdown-item">Move to</a>
                                <a href="#" class="dropdown-item">Rename</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <figure class="avatar avatar-sm mr-2">
                                <span class="avatar-title rounded-pill">
                                    <i class="ti-image"></i>
                                </span>
                            </figure>
                            Sitemap.png
                        </a>
                    </td>
                    <td>810KB</td>
                    <td>3/9/19, 2:40PM</td>
                    <td>
                        <div class="badge bg-success-bright text-success">Social Media</div>
                    </td>
                    <td>
                        <div class="avatar-group">
                            <figure class="avatar avatar-sm" title="Lisle Essam"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/women_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/man_avatar5.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Mella Mixter"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/women_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                <a href="#" class="dropdown-item">Share</a>
                                <a href="#" class="dropdown-item">Download</a>
                                <a href="#" class="dropdown-item">Copy to</a>
                                <a href="#" class="dropdown-item">Move to</a>
                                <a href="#" class="dropdown-item">Rename</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <figure class="avatar avatar-sm mr-2">
                                <span class="avatar-title rounded-pill">
                                    <i class="ti-file"></i>
                                </span>
                            </figure>
                            Analytics.pdf
                        </a>
                    </td>
                    <td>10KB</td>
                    <td>3/9/19, 2:40PM</td>
                    <td>
                        <div class="badge bg-info-bright text-info">Design</div>
                    </td>
                    <td>
                        <div class="avatar-group">
                            <figure class="avatar avatar-sm" title="Lisle Essam"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/women_avatar2.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/man_avatar5.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Mella Mixter"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/women_avatar1.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Mella Mixter"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/women_avatar4.jpg"
                                     class="rounded-circle"
                                     alt="image">
                            </figure>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View Details</a>
                                <a href="#" class="dropdown-item">Share</a>
                                <a href="#" class="dropdown-item">Download</a>
                                <a href="#" class="dropdown-item">Copy to</a>
                                <a href="#" class="dropdown-item">Move to</a>
                                <a href="#" class="dropdown-item">Rename</a>
                                <a href="#" class="dropdown-item">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="content-title d-flex justify-content-between">
        <h4>Last Activities</h4>
    </div>

    <div class="timeline">
        <div class="timeline-item">
            <div>
                <figure class="avatar mr-3">
                    <span class="avatar-title bg-success rounded-circle">j</span>
                </figure>
            </div>
            <div>
                <h6 class="d-md-flex justify-content-between mb-3">
                    <span class="d-block">
                        A file of <a href="#" class="link-1">Jonny Richie</a> has been shared.
                    </span>
                    <span class="text-muted font-weight-normal">4h</span>
                </h6>
                <div class="avatar-group">
                    <figure class="avatar" title="Lisle Essam"
                            data-toggle="tooltip">
                        <img src="../../assets/media/image/user/women_avatar2.jpg"
                             class="rounded-circle"
                             alt="image">
                    </figure>
                    <figure class="avatar" title="Baxie Roseblade"
                            data-toggle="tooltip">
                        <img src="../../assets/media/image/user/man_avatar5.jpg"
                             class="rounded-circle"
                             alt="image">
                    </figure>
                    <figure class="avatar" title="Baxie Roseblade"
                            data-toggle="tooltip">
                        <span class="avatar-title bg-secondary rounded-pill">A</span>
                    </figure>
                    <figure class="avatar" title="Jo Hugill"
                            data-toggle="tooltip">
                        <img src="../../assets/media/image/user/man_avatar1.jpg"
                             class="rounded-circle"
                             alt="image">
                    </figure>
                    <figure class="avatar" title="Cullie Philcott"
                            data-toggle="tooltip">
                        <img src="../../assets/media/image/user/women_avatar5.jpg"
                             class="rounded-circle"
                             alt="image">
                    </figure>
                    <figure class="avatar" title="Cullie Philcott"
                            data-toggle="tooltip">
                        <span class="avatar-title bg-warning rounded-pill">Z</span>
                    </figure>
                </div>
            </div>
        </div>
        <div class="timeline-item">
            <div>
                <figure class="avatar mr-3">
                    <span class="avatar-title bg-warning rounded-circle">M</span>
                </figure>
            </div>
            <div>
                <h6 class="d-md-flex justify-content-between mb-3">
                    <span class="d-block">
                        <a href="#" class="link-1">Marc Hugill</a> uploaded new files
                    </span>
                    <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                </h6>
                <div class="card card-body mb-3 d-flex justify-content-between flex-row">
                    <div>
                        <a href="#">
                            <i class="fa fa-file-pdf-o mr-2"></i> test-file-1.pdf
                        </a>
                        <span class="ml-3 small">70 KB</span>
                    </div>
                    <div>
                        <a href="#" title="View file">
                            <i class="ti-eye"></i>
                        </a>
                    </div>
                </div>
                <div class="card card-body mb-3 d-flex justify-content-between flex-row">
                    <div>
                        <a href="#">
                            <i class="fa fa-file-excel-o mr-2"></i> test-file-2.xlsx
                        </a>
                        <span class="ml-3 small">17 KB</span>
                    </div>
                    <div>
                        <a href="#" title="View file">
                            <i class="ti-eye"></i>
                        </a>
                    </div>
                </div>
                <div class="card card-body mb-3 d-flex justify-content-between flex-row">
                    <div>
                        <a href="#">
                            <i class="fa fa-file-text-o mr-2"></i> test-file-3.txt
                        </a>
                        <span class="ml-3 small">152 KB</span>
                    </div>
                    <div>
                        <a href="#" title="View file">
                            <i class="ti-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="timeline-item">
            <div>
                <figure class="avatar mr-3">
                    <img src="../../assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="avatar">
                </figure>
            </div>
            <div>
                <h6 class="d-md-flex justify-content-between mb-3">
                    <span class="d-block">
                        <a href="#" class="link-1">Cullie Philcott</a> uploaded a picture
                    </span>
                    <span class="text-muted font-weight-normal">Tue 8:17pm</span>
                </h6>
                <div class="row row-xs">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sx-6">
                        <figure>
                            <img src="../../assets/media/image/portfolio-five.jpg"
                                 class="w-100 border-radius-1" alt="image">
                        </figure>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sx-6">
                        <figure>
                            <img src="../../assets/media/image/portfolio-one.jpg"
                                 class="w-100 border-radius-1" alt="image">
                        </figure>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sx-6">
                        <figure>
                            <img src="../../assets/media/image/portfolio-three.jpg"
                                 class="w-100 border-radius-1" alt="image">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer d-print-none">
                <div>© 2020 Filedash - <a href="http://laborasyon.com/" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
                    </nav>
                </div>
            </footer>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->

        <!-- Sidebar group -->
        <div class="sidebar-group d-print-none">
            <!-- Sidebar - Storage -->
            <div class="sidebar primary-sidebar show" id="storage">
                <div class="sidebar-header">
                    <h4>Storage Overview</h4>
                </div>
                <div class="sidebar-content">
                    <div id="justgage_five" class="mb-3"></div>
                    <div>
                        <div class="list-group list-group-flush mb-3">
                            <a href="#" class="list-group-item px-0 d-flex align-items-center">
                                <div class="mr-3">
                                    <figure class="avatar">
                                        <span class="avatar-title bg-primary-bright text-primary rounded">
                                            <i class="ti-image"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">Images</p>
                                    <span class="small text-muted">259 Files</span>
                                </div>
                                <div>
                                    <h5 class="text-primary">15.7 GB</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item px-0 d-flex align-items-center">
                                <div class="mr-3">
                                    <figure class="avatar">
                                        <span class="avatar-title bg-primary-bright text-primary rounded">
                                            <i class="ti-control-play"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">Videos</p>
                                    <span class="small text-muted">8 Files</span>
                                </div>
                                <div>
                                    <h5 class="text-primary">20 GB</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item px-0 d-flex align-items-center">
                                <div class="mr-3">
                                    <figure class="avatar">
                                        <span class="avatar-title bg-primary-bright text-primary rounded">
                                            <i class="ti-files"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">Documents</p>
                                    <span class="small text-muted">46 Files</span>
                                </div>
                                <div>
                                    <h5 class="text-primary">10.5 GB</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item px-0 d-flex align-items-center">
                                <div class="mr-3">
                                    <figure class="avatar">
                                        <span class="avatar-title bg-primary-bright text-primary rounded">
                                            <i class="ti-file"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">Other Files</p>
                                    <span class="small text-muted">50 Files</span>
                                </div>
                                <div>
                                    <h5 class="text-primary">2.8 GB</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card border shadow-none">
                        <div class="card-body text-center">
                            <img class="img-fluid mb-3" src="https://filedash.laborasyon.com/assets/media/svg/upgrade.svg" alt="upgrade">
                            <h5>Get an Upgrade</h5>
                            <p class="text-muted">Get additional 500 GB space for your documents and files. Unlock now
                                for more space.</p>
                            <button class="btn btn-primary">Upgrade</button>
                        </div>
                    </div>
                </div>
                <div class="sidebar-footer">
                    <button class="btn btn-lg btn-block btn-outline-primary">
                        <i class="fa fa-cloud-upload mr-3"></i> Upload
                    </button>
                </div>
            </div>
            <!-- ./ Sidebar - Storage -->

            <!-- Sidebar - File info -->
            <div class="sidebar" id="view-detail">
                <div class="sidebar-header">
                    <h4>View Detail</h4>
                    <a href="#" class="btn btn-light btn-floating sidebar-close-btn">
                        <i class="ti-angle-right"></i>
                    </a>
                </div>
                <div class="sidebar-content">
                    <figure class="avatar mb-4">
                        <span class="avatar-title bg-info-bright text-info rounded-pill">
                            <i class="ti-file"></i>
                        </span>
                    </figure>
                    <div class="row mb-3">
                        <div class="col-md-5">File name:</div>
                        <div class="col-md-7"><a href="#" class="link-1">Meeting-notes.doc</a></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">File type:</div>
                        <div class="col-md-7">Word File</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">File size:</div>
                        <div class="col-md-7">22 KB</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">Created:</div>
                        <div class="col-md-7">Monday, July 02, 2020 9:34am</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">Modified:</div>
                        <div class="col-md-7 text-success">Monday, July 02, 2020 9:34am</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">Accessed:</div>
                        <div class="col-md-7">Monday, July 03, 2020 10:22am</div>
                    </div>
                </div>
                <div class="sidebar-footer">
                    <button class="btn btn-lg btn-block btn-primary">
                        <i class="ti-share mr-3"></i> Share
                    </button>
                </div>
            </div>
            <!-- ./ Sidebar - file info -->

            <!-- Sidebar - Settings -->
            <div class="sidebar" id="settings">
                <div class="sidebar-header">
                    <h4>Settings</h4>
                    <a href="#" class="btn btn-light btn-floating sidebar-close-btn">
                        <i class="ti-angle-right"></i>
                    </a>
                </div>
                <div class="sidebar-content">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                                <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                <label class="custom-control-label" for="customSwitch6">Enable report
                                    generation.</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ./ Sidebar - Settings -->
        </div>
        <!-- ./ Sidebar group -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="/assets/vendors/bundle.js"></script>
<script src="../../../cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js"></script>
<script src="../../../cdnjs.cloudflare.com/ajax/libs/justgage/1.2.9/justgage.min.js"></script>

<!-- Apex chart -->
<script src="../../../apexcharts.com/samples/assets/irregular-data-series.js"></script>
<script src="../../vendors/charts/apex/apexcharts.min.js"></script>

<!-- Dashboard scripts -->
<script src="../../assets/js/examples/pages/file-dashboard.js"></script>

<!-- App scripts -->
<script src="/assets/js/app.min.js"></script>
</body>
</html>
