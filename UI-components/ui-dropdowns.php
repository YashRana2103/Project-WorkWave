<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Dropdowns | WorkWave - Admin & Dashboard Template</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Dropdowns</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                                    <li class="breadcrumb-item active">Dropdowns</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Single button dropdowns</h4>
                                <p class="card-title-desc">Any single <code
                                        class="highlighter-rouge">.btn</code> can be turned into a dropdown
                                    toggle with some markup changes. Here’s how you can put them to work
                                    with either <code class="highlighter-rouge">&lt;button&gt;</code>
                                    elements:
                                </p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown button <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-6">
                                        <div class="dropdown mt-4 mt-sm-0">
                                            <a href="#" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown link <i class="mdi mdi-chevron-down"></i>
                                            </a>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Variant</h4>
                                <p class="card-title-desc">The best part is you can do this with any button variant, too:</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="d-flex gap-2 flex-wrap">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Success <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Info <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Warning <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Danger <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dropdown Menu Item Color</h4>
                                <p class="card-title-desc">Example of dropdown menu item color</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        
                                        <div class="">
                                            <h5 class="font-size-13 mb-3">Dropdown Menu Success link example</h5>
                                            <div class="clearfix">
                                                <div class="dropdown-menu d-inline-block position-relative dropdownmenu-success" style="z-index: 1;">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item active" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                        <div class="mt-lg-0 mt-3">
                                            <h5 class="font-size-13 mb-0">Dropdown Menu link Color example</h5>
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="mt-3">
                                                            <p class="font-size-13 mb-2">Dropdown menu Primary link</p>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                                                <div class="dropdown-menu dropdownmenu-primary">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div><!-- /btn-group -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="mt-3">
                                                            <p class="font-size-13 mb-2">Dropdown menu Secondary link</p>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                                                <div class="dropdown-menu dropdownmenu-secondary">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div><!-- /btn-group -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="mt-3">
                                                            <p class="font-size-13 mb-2">Dropdown menu Success link</p>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Success <i class="mdi mdi-chevron-down"></i></button>
                                                                <div class="dropdown-menu dropdownmenu-success">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div><!-- /btn-group -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="mt-3">
                                                            <p class="font-size-13 mb-2">Dropdown menu Warning link</p>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Warning <i class="mdi mdi-chevron-down"></i></button>
                                                                <div class="dropdown-menu dropdownmenu-warning">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div><!-- /btn-group -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="mt-3">
                                                            <p class="font-size-13 mb-2">Dropdown menu Info link</p>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Info <i class="mdi mdi-chevron-down"></i></button>
                                                                <div class="dropdown-menu dropdownmenu-info">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div><!-- /btn-group -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-6">
                                                        <div class="mt-3">
                                                            <p class="font-size-13 mb-2">Dropdown menu Danger link</p>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Danger <i class="mdi mdi-chevron-down"></i></button>
                                                                <div class="dropdown-menu dropdownmenu-danger">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div><!-- /btn-group -->
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Split Button Dropdowns</h4>
                                <p class="card-title-desc">The best part is you can do this with any button variant, too:</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="d-flex gap-2 flex-wrap">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sizing</h4>
                                <p class="card-title-desc">Button dropdowns work with buttons of
                                    all sizes, including default and split dropdown buttons.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <!-- Large button groups (default and split) -->
                                <div class="btn-group me-1 mt-2">
                                    <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Large button <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group me-1 mt-2">
                                    <button class="btn btn-secondary btn-lg" type="button">
                                        Large button
                                    </button>
                                    <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <!-- Small button groups (default and split) -->
                                <div class="btn-group me-1 mt-2">
                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Small button <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group me-1 mt-2">
                                    <button class="btn btn-secondary btn-sm" type="button">
                                        Small button
                                    </button>
                                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dark Dropdowns</h4>
                                <p class="card-title-desc">Option into darker dropdowns to match a dark navbar or custom style by adding <code>.dropdown-menu-dark</code> onto an existing <code>.dropdown-menu</code>. No changes are required to the dropdown items.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown button <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Menu Content</h4>
                                <p class="card-title-desc">Example of dropdown menu Headers, Text, Forms content</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="d-flex flex-wrap gap-2">
                                    <!-- Header -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Header <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <div class="dropdown-header noti-title">
                                                <h5 class="font-size-13 text-muted text-truncate mn-0">Welcome Jessie!</h5>
                                            </div>
                                            <!-- item-->
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                
                                    <!-- Text -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Text <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-md p-3">
                                            <p>
                                                Some example text that's free-flowing within the dropdown menu.
                                            </p>
                                            <p class="mb-0">
                                                And this is more example text.
                                            </p>
                                        </div>
                                    </div>
                                
                                    <!-- Forms -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Forms <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-md p-4">
                                            <form>
                                                <div class="mb-2">
                                                    <label class="form-label" for="exampleDropdownFormEmail">Email address</label>
                                                    <input type="email" class="form-control" id="exampleDropdownFormEmail"
                                                        placeholder="email@example.com">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label" for="exampleDropdownFormPassword">Password</label>
                                                    <input type="password" class="form-control" id="exampleDropdownFormPassword" placeholder="Password">
                                                </div>
                                                <div class="mb-2">
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="rememberdropdownCheck">
                                                        <label class="form-check-label" for="rememberdropdownCheck">Remember me</label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                </div>
                
                <div class="row">        
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Menu Alignment</h4>
                                <p class="card-title-desc">Add <code class="highlighter-rouge">.dropdown-menu-end</code>
                                    to a <code class="highlighter-rouge">.dropdown-menu</code> to right
                                    align the dropdown menu.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="d-flex flex-wrap gap-3">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Right-aligned menu example  <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><button class="dropdown-item" type="button">Action</button></li>
                                            <li><button class="dropdown-item" type="button">Another action</button></li>
                                            <li><button class="dropdown-item" type="button">Something else here</button></li>
                                        </ul>
                                    </div>
                                
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            data-bs-display="static" aria-expanded="false">
                                            Left-aligned but right aligned when large screen <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-lg-end">
                                            <li><button class="dropdown-item" type="button">Action</button></li>
                                            <li><button class="dropdown-item" type="button">Another action</button></li>
                                            <li><button class="dropdown-item" type="button">Something else here</button></li>
                                        </ul>
                                    </div>
                                
                                
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                            data-bs-display="static" aria-expanded="false">
                                            Right-aligned but left aligned when large screen <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                            <li><button class="dropdown-item" type="button">Action</button></li>
                                            <li><button class="dropdown-item" type="button">Another action</button></li>
                                            <li><button class="dropdown-item" type="button">Something else here</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Auto Close Behavior</h4>
                                <p class="card-title-desc">Trigger dropdown menus at the down of the elements by adding <code>.dropdown</code> to the parent element.
                                </p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="d-flex gap-2 flex-wrap">
                                    <div class="btn-group">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                            Default dropdown <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="btn-group">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuClickableOutside"
                                            data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                                            Clickable outside <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="btn-group">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuClickableInside"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            Clickable inside <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="btn-group">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuClickable" data-bs-toggle="dropdown"
                                            data-bs-auto-close="false" aria-expanded="false">
                                            Manual close <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickable">
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dropup Variation</h4>
                                <p class="card-title-desc">Trigger dropdown menus above elements
                                    by adding <code class="highlighter-rouge">.dropup</code> to the parent
                                    element.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="d-flex gap-2 flex-wrap">
                                    <!-- Default dropup button -->
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Dropup <i class="mdi mdi-chevron-up"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>

                                    <!-- Split dropup button --> 
                                    <div class="btn-group dropup">
                                        <button type="button" class="btn btn-info">
                                            Split dropup
                                        </button>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-chevron-up"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dropstart Variation</h4>
                                <p class="card-title-desc">Trigger dropdown menus at the right of the elements by adding <code>.dropstart</code> to the parent element.
                                </p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="d-flex gap-2 flex-wrap">
                                    <!-- Default dropright button -->
                                    <div class="btn-group dropstart">
                                        <button type="button" class="btn btn-info waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-chevron-left"></i> Dropstart
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>

                                    <!-- Split dropright button -->
                                    <div class="btn-group">
                                        <div class="btn-group dropstart">
                                            <button type="button" class="btn btn-info waves-effect waves-light dropdown-toggle-split dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-chevron-left"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-info waves-effect waves-light">
                                            Split dropstart
                                        </button>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
                
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dropend Variation</h4>
                                <p class="card-title-desc">Trigger dropdown menus at the right of the elements by adding <code>.dropend</code> to the parent element.
                                </p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="d-flex gap-2 flex-wrap">
                                    <!-- Default dropright button -->
                                    <div class="btn-group dropend">
                                        <button type="button" class="btn btn-info waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropend <i class="mdi mdi-chevron-right"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>

                                    <!-- Split dropright button -->
                                    <div class="btn-group dropend">
                                        <button type="button" class="btn btn-info waves-effect waves-light">
                                            Split dropend
                                        </button>
                                        <button type="button" class="btn btn-info waves-effect waves-light dropdown-toggle-split dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div><!-- end button-group -->
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->                           
                </div> <!-- end row -->
                
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>

<script src="assets/js/app.js"></script>

</body>

</html>