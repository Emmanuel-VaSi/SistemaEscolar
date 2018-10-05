<!DOCTYPE html>
<?php
require_once('API/ADMI/Tabla.php');
?>
<html lang="en">
<!-- Mirrored from www.urbanui.com/flare/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 16:01:38 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo(\SIST\SystemConstants::$SYSTEM_NAME); ?></title>
  <?php
       $Tabla = new ADMI\Tabla();
       $Tabla = $Tabla->GetNuevo();
       $Tabla->Campo01 = "Texto 01";
       $Tabla->Campo02 = "Texto 02";
       $Tabla->Campo03 = "Texto 03";
       if($Tabla->InsertRegistro($Tabla)) echo("INSERT correcto");
       else echo("error en INSERT");
  ?>
  <!-- plugins:css -->
  <!-- LOS  ../ SON PORQUE METIMOS LAS PÁGINAS EN SUBCARPETAS-->
  <link rel="stylesheet" href="../../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100">
          <div class="text-center navbar-brand-wrapper d-flex align-items-top">
            <a class="navbar-brand brand-logo" href="index-2.html"><img src="images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <form class="search-field" action="#">
              <div class="form-group mb-0">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="search">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav navbar-nav-right mr-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="icon-bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <a class="dropdown-item py-3">
                    <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                    </p>
                    <span class="badge badge-pill badge-inverse-info float-right">View all</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-inverse-success">
                        <i class="icon-exclamation mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                      <p class="font-weight-light small-text mb-0">
                        Just now
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-inverse-warning">
                        <i class="icon-bubble mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                      <p class="font-weight-light small-text mb-0">
                        Private message
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-inverse-info">
                        <i class="icon-user-following mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                      <p class="font-weight-light small-text mb-0">
                        2 days ago
                      </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="icon-equalizer"></i>
                </a>
              </li>
              <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-calculator"></i><span class="menu-title">Apps</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/apps/email.html">Email</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html">Calendar</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html">Todo List</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Gallery</a></li>
                </ul>
              </div>
            </li>
                
                
                
                
                
                
                
            </ul>
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu text-white"></span>
            </button>
          </div>
        </div>
      </div>
      <div class="nav-bottom">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a href="index-2.html" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link"><i class="link-icon icon-disc"></i><span class="menu-title">Widgets</span></a>
            </li>
            <li class="nav-item mega-menu">
              <a href="#" class="nav-link"><i class="link-icon icon-film"></i><span class="menu-title">UI Elements</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-4">
                    <div class="row">
                      <div class="col-12">
                        <p class="category-heading">Basic Elements</p>
                        <div class="submenu-item">
                          <div class="row">
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/accordions.html">Accordion</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdown</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/tooltips.html">Tooltip</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-4">
                    <div class="row">
                      <div class="col-12">
                        <p class="category-heading">Advanced Elements</p>
                        <div class="submenu-item">
                          <div class="row">
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/context-menu.html">Context Menu</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/loaders.html">Loader</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/slider.html">Slider</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/popups.html">Popup</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/notifications.html">Notification</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-4">
                    <p class="category-heading">Icons</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">Flag Icons</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/icons/simple-line-icon.html">Simple Line Icons</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">Themify Icons</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Forms</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code Editor</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item mega-menu">
              <a href="#" class="nav-link"><i class="link-icon icon-pie-chart"></i><span class="menu-title">Data</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-6">
                    <p class="category-heading">Charts</p>
                    <div class="submenu-item">
                      <div class="row">
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Chart Js</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/google-charts.html">Google Chart</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/sparkline.html">Sparkline</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/c3.html">C3 Chart</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/chartist.html">Chartist</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Table</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Basic Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/tables/data-table.html">Data Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/tables/sortable-table.html">Sortable Table</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Maps</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/maps/mapeal.html">Mapeal</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item mega-menu">
              <a href="#" class="nav-link"><i class="link-icon icon-wallet"></i><span class="menu-title">Pages</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-3">
                    <p class="category-heading">User Pages</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Error Pages</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/samples/error-400.html">400</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html">404</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html">500</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/error-505.html">505</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">E-commerce</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html">Invoice</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/pricing-table.html">Pricing Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html">Orders</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">General</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/samples/search-results.html">Search Results</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/profile.html">Profile</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/timeline.html">Timeline</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/news-grid.html">News grid</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/portfolio.html">Portfolio</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/faq.html">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon icon-calculator"></i><span class="menu-title">Apps</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/apps/email.html">Email</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html">Calendar</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/apps/todo.html">Todo List</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Gallery</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="pages/documentation/documentation.html" class="nav-link"><i class="link-icon icon-docs"></i><span class="menu-title">Documentation</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-dark text-white border-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <i class="icon-handbag icon-lg"></i>
                    <div class="ml-4">
                      <h4 class="font-weight-light">Total invoices</h4>
                      <h3 class="font-weight-light mb-3">75, 650</h3>
                      <p class="mb-0 font-weight-light">39% more growth </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-primary text-white border-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <i class="icon-user icon-lg"></i>
                    <div class="ml-4">
                      <h4 class="font-weight-light">New users</h4>
                      <h3 class="font-weight-light mb-3">37, 650</h3>
                      <p class="mb-0 font-weight-light">43% more this year </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-danger text-white border-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <i class="icon-screen-desktop icon-lg"></i>
                    <div class="ml-4">
                      <h4 class="font-weight-light">Unique visits</h4>
                      <h3 class="font-weight-light mb-3">1349</h3>
                      <p class="mb-0 font-weight-light">69% increase</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card bg-success text-white border-0">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <i class="icon-support icon-lg"></i>
                    <div class="ml-4">
                      <h4 class="font-weight-light">Bounce rate</h4>
                      <h3 class="font-weight-light mb-3">37, 580</h3>
                      <p class="mb-0 font-weight-light">65% higher rate </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card text-white border-0">
                <img class="card-img h-100 rounded-0" src="images/dashboard/cover.png" alt="Card image">
                <div class="card-img-overlay d-flex flex-column justify-content-between">
                  <h4 class="font-weight-light">
                      10 Oct 2018
                  </h4>
                  <div>
                    <h4 class="font-weight-light">
                        Check our unlimited elements
                    </h4>
                    <h3 class="font-weight-light mb-0">
                        Welcome to Flare Admin dashboard
                    </h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <div>
                        <p class="mb-1"><span class="h4 mb-0 mr-2">Google</span>Google Inc.</p>
                        <p class="mb-0 text-muted font-weight-light">The search engine giant</p>                        
                      </div>
                      <div>
                        <h6 class="font-weight-normal">Czech Republic</h6>
                        <span class="badge badge-primary">+3.53%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <div>
                        <p class="mb-1"><span class="h4 mb-0 mr-2">Tesla</span>Tesla, Inc.</p>                        
                        <p class="mb-0 text-muted font-weight-light">Master of innovations</p>
                      </div>
                      <div>
                        <h6 class="font-weight-normal">South Africa</h6>
                        <span class="badge badge-primary">+1.26%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Performance</h4>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      Data
                      <span class="ml-auto font-weight-bold">70%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      Email
                      <span class="ml-auto font-weight-bold">15%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      Website
                      <span class="ml-auto font-weight-bold">35%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      Mobile App
                      <span class="ml-auto font-weight-bold">30%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <p class="d-flex mb-2">
                      Branding
                      <span class="ml-auto font-weight-bold">50%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div>
                    <p class="d-flex mb-2">
                      UI Kits
                      <span class="ml-auto font-weight-bold">90%</span>
                    </p>
                    <div class="progress progress-xs">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="icon-in-bg bg-success text-white rounded-circle">
                          <i class="icon-tag font-weight-bold"></i>
                        </div>
                        <div class="ml-4">
                          <h4>Total income</h4>
                          <h3 class="mb-0 font-weight-medium">$8900</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="icon-in-bg bg-primary text-white rounded-circle">
                          <i class="icon-basket font-weight-bold"></i>
                        </div>
                        <div class="ml-4">
                          <h4>New expense</h4>
                          <h3 class="mb-0 font-weight-medium">$6340</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Earning report</h4>
                      <p class="text-muted font-weight-light">Past 30 Days — Last Updated Oct 14, 2017</p>
                      <canvas id="earning-report-chart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Projects of the month</h4>
                  <p class="text-muted font-weight-light">We have 12 new projects from USA this month in Web Applications</p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="pt-1 pl-0">
                            Assigned
                          </th>
                          <th class="pt-1">
                            Product
                          </th>
                          <th class="pt-1">
                            Priority
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1 pl-0">
                            <div class="d-flex align-items-center">
                              <img src="images/faces/face1.jpg" alt="profile"/>
                              <div class="ml-3">
                                <p class="mb-2">Sophia Brown</p>
                                <p class="mb-0 text-muted text-small">Product Designer</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            Web App
                          </td>
                          <td>
                            <label class="badge badge-success">Low</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 pl-0">
                            <div class="d-flex align-items-center">
                              <img src="images/faces/face6.jpg" alt="profile"/>
                              <div class="ml-3">
                                <p class="mb-2">Rachel Newton</p>
                                <p class="mb-0 text-muted text-small">Mobile Developer</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            Mobile App
                          </td>
                          <td>
                            <label class="badge badge-warning">Medium</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 pl-0">
                            <div class="d-flex align-items-center">
                              <img src="images/faces/face15.jpg" alt="profile"/>
                              <div class="ml-3">
                                <p class="mb-2">Marcus Stevens</p>
                                <p class="mb-0 text-muted text-small">Core Developer</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            Plugin
                          </td>
                          <td>
                            <label class="badge badge-danger">High</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 pl-0">
                            <div class="d-flex align-items-center">
                              <img src="images/faces/face2.jpg" alt="profile"/>
                              <div class="ml-3">
                                <p class="mb-2">Theresa Becker</p>
                                <p class="mb-0 text-muted text-small">Product Designer</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            Web App
                          </td>
                          <td>
                            <label class="badge badge-success">Low</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 pl-0">
                            <div class="d-flex align-items-center">
                              <img src="images/faces/face3.jpg" alt="profile"/>
                              <div class="ml-3">
                                <p class="mb-2">Jessie Ortiz</p>
                                <p class="mb-0 text-muted text-small">Web Developer</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            SAAS App
                          </td>
                          <td>
                            <label class="badge badge-danger">High</label>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Todo list</h4>
                  <div class="add-items d-flex">
                    <input type="text" class="form-control todo-list-input"  placeholder="What do you need to do today?">
                    <button class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                  </div>
                  <div class="list-wrapper">
                    <ul class="d-flex flex-column-reverse todo-list">
                      <li class="completed">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked>
                            Call John
                          </label>
                        </div>
                        <i class="remove icon-close"></i>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            Create invoice
                          </label>
                        </div>
                        <i class="remove icon-close"></i>
                      </li>
                      <li>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            Print Statements
                          </label>
                        </div>
                        <i class="remove icon-close"></i>
                      </li>
                      <li class="completed">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox" checked>
                            Prepare for presentation
                          </label>
                        </div>
                        <i class="remove icon-close"></i>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Issue rate</h4>
                  <div class="row">
                    <div class="col-md-5 d-flex align-items-center pr-4">
                      <canvas id="issues-chart" width="100" height="100"></canvas>
                    </div>
                    <div class="col-md-7">
                      <div class="border-bottom pb-4 mt-2 mt-md-0">
                        <h1 class="text-center text-md-left">12,456</h1>
                        <p class="text-center text-md-left mb-0">Issues this Month</p>
                      </div>
                      <div class="pt-4">
                        <div id="issues-chart-legend" class="issues-chart-legend"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="w-100 clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/flare/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Aug 2018 16:02:08 GMT -->
</html>
