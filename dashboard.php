<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <meta name="description" content="" />
    <meta
      name="keywords"
      content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive"
    />

    <meta name="robots" content="noindex, nofollow" />
    <title>Dashboard</title>

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.jpg"
    />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/css/animate.css" />

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css" />

    <link
      rel="stylesheet"
      href="assets/plugins/fontawesome/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div class="main-wrapper">
      <div class="header">
        <div class="header-left active">
          <a href="index.html" class="logo">
            <img src="assets/img/logo.png" alt="" />
          </a>
          <a href="index.html" class="logo-small">
            <img src="assets/img/logo-small.png" alt="" />
          </a>
          <a id="toggle_btn" href="javascript:void(0);"> </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
          <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </a>

        <ul class="nav user-menu">
          <li class="nav-item">
            <div class="top-nav-search">
              <a href="javascript:void(0);" class="responsive-search">
                <i class="fa fa-search"></i>
              </a>
              <form action="#">
                <div class="searchinputs">
                  <input type="text" placeholder="Search Here ..." />
                  <div class="search-addon">
                    <span
                      ><img src="assets/img/icons/closes.svg" alt="img"
                    /></span>
                  </div>
                </div>
                <a class="btn" id="searchdiv"
                  ><img src="assets/img/icons/search.svg" alt="img"
                /></a>
              </form>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle nav-link"
              data-bs-toggle="dropdown"
            >
              <img src="assets/img/icons/notification-bing.svg" alt="img" />
              <span class="badge rounded-pill">4</span>
            </a>
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
              </div>
              <div class="noti-content">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media d-flex">
                        <span class="avatar flex-shrink-0">
                          <img alt="" src="assets/img/profiles/avatar-02.jpg" />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Mangila</span> Review

                            <span class="noti-title">Nice guys</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">4 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media d-flex">
                        <span class="avatar flex-shrink-0">
                          <img alt="" src="assets/img/profiles/avatar-03.jpg" />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Rodulfo</span>
                            Added Review
                            <span class="noti-title">Cook me</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">6 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media d-flex">
                        <span class="avatar flex-shrink-0">
                          <img alt="" src="assets/img/profiles/avatar-06.jpg" />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Michael Jordan</span>Added
                            Review
                            <span class="noti-title">Vincent Oros</span> and
                            <span class="noti-title">James Sis..</span> to the
                            <span class="noti-title">Lechon Palabok</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">8 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media d-flex">
                        <span class="avatar flex-shrink-0">
                          <img alt="" src="assets/img/profiles/avatar-17.jpg" />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Rolland Webber</span>
                            completed task
                            <span class="noti-title"
                              >Patient and Doctor video conferencing</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">12 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media d-flex">
                        <span class="avatar flex-shrink-0">
                          <img alt="" src="assets/img/profiles/avatar-13.jpg" />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Bernardo Galaviz</span>
                            added new task
                            <span class="noti-title">Private chat module</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">2 days ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="activities.html">View all Notifications</a>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown has-arrow main-drop">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle nav-link userset"
              data-bs-toggle="dropdown"
            >
              <span class="user-img"
                ><img src="assets/img/profiles/avator1.jpg" alt="" />
                <span class="status online"></span
              ></span>
            </a>
            <div class="dropdown-menu menu-drop-user">
              <div class="profilename">
                <div class="profileset">
                  <span class="user-img"
                    ><img src="assets/img/profiles/avator1.jpg" alt="" />
                    <span class="status online"></span
                  ></span>
                  <div class="profilesets">
                    <h6>Mangila Rodulfo</h6>
                    <h5>Admin</h5>
                  </div>
                </div>
                <hr class="m-0" />
                <a class="dropdown-item" href="profile.html">
                  <i class="me-2" data-feather="user"></i> My Profile</a
                >
                <a class="dropdown-item" href="generalsettings.html"
                  ><i class="me-2" data-feather="settings"></i>Settings</a
                >
                <hr class="m-0" />
                <a class="dropdown-item logout pb-0" href="signin.html"
                  ><img
                    src="assets/img/icons/log-out.svg"
                    class="me-2"
                    alt="img"
                  />Logout</a
                >
              </div>
            </div>
          </li>
        </ul>

        <div class="dropdown mobile-user-menu">
          <a
            href="javascript:void(0);"
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fa fa-ellipsis-v"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="generalsettings.html">Settings</a>
            <a class="dropdown-item" href="signin.html">Logout</a>
          </div>
        </div>
      </div>

      <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
              <li class="active">
                <a href="index.html"
                  ><img src="assets/img/icons/dashboard.svg" alt="img" /><span>
                    Dashboard</span
                  >
                </a>
              </li>
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/product.svg" alt="img" /><span>
                    Menu</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="productlist.php">Menu List</a></li>
                  <li><a href="addproduct.php">Add Menu</a></li>
                  <li><a href="categorylist.php">Category List</a></li>
                  <li><a href="addcategory.php">Add Category</a></li>

                  <!-- <li><a href="brandlist.html">Brand List</a></li>
<li><a href="addbrand.html">Add Brand</a></li> -->
                  <!-- <li><a href="importproduct.html">Import Products</a></li> -->
                  <!-- <li><a href="barcode.html">Print Barcode</a></li> -->
                </ul>
              </li>
              <!-- <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/sales1.svg" alt="img" /><span>
                    Sales</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="saleslist.html">Sales List</a></li>
                  <li><a href="pos.php">POS</a></li>
                  <li><a href="pos.html">New Sales</a></li> -->
              <!-- <li><a href="salesreturnlists.html">Sales Return List</a></li>
                  <li>
                    <a href="createsalesreturns.html">New Sales Return</a>
                  </li> -->
              <!-- </ul>
              </li> -->
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/purchase1.svg" alt="img" /><span>
                    Review</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="reviewlist.html">Review List</a></li>
                  <!-- <li><a href="importpurchase.html">Import Purchase</a></li> -->
                </ul>
              </li>

              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/quotation1.svg" alt="img" /><span>
                    Discount</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="discountlist.html">Discount List</a></li>
                  <li><a href="discount.html">Add Discount</a></li>
                  <!-- <li><a href="addquotation.html">Add Quotation</a></li> -->
                </ul>
              </li>
              <!-- <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/transfer1.svg" alt="img" /><span>
                    Transfer</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="transferlist.html">Transfer List</a></li>
                  <li><a href="addtransfer.html">Add Transfer </a></li>
                  <li><a href="importtransfer.html">Import Transfer </a></li>
                </ul>
              </li> -->
              <!-- <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/return1.svg" alt="img" /><span>
                    Return</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="salesreturnlist.html">Sales Return List</a></li>
                  <li>
                    <a href="createsalesreturn.html">Add Sales Return </a>
                  </li>
                  <li>
                    <a href="purchasereturnlist.html">Purchase Return List</a>
                  </li>
                  <li>
                    <a href="createpurchasereturn.html">Add Purchase Return </a>
                  </li>
                </ul>
              </li> -->
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/users1.svg" alt="img" /><span>
                    People</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="customerlist.html">Customer List</a></li>
                  <li><a href="addcustomer.html">Add Customer </a></li>
                  <!-- <li><a href="supplierlist.html">Supplier List</a></li> -->
                  <!-- <li><a href="addsupplier.html">Add Supplier </a></li> -->
                  <li><a href="userlist.html">User List</a></li>
                  <li><a href="adduser.html">Add User</a></li>
                  <!-- <li><a href="storelist.html">Store List</a></li>
                  <li><a href="addstore.html">Add Store</a></li> -->
                </ul>
              </li>
              <!-- <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/places.svg" alt="img" /><span>
                    Places</span
                  >
                  <span class="menu-arrow"></span
                ></a> -->
              <!-- <ul>
                  <li><a href="newcountry.html">New Country</a></li>
                  <li><a href="countrieslist.html">Countries list</a></li>
                  <li><a href="newstate.html">New State </a></li>
                  <li><a href="statelist.html">State list</a></li>
                </ul>
              </li>
              <li>
                <a href="components.html"
                  ><i data-feather="layers"></i><span> Components</span>
                </a>
              </li>
              <li>
                <a href="blankpage.html"
                  ><i data-feather="file"></i><span> Blank Page</span>
                </a>
              </li> -->
              <!-- <li class="submenu">
                <a href="javascript:void(0);"
                  ><i data-feather="alert-octagon"></i>
                  <span> Error Pages </span> <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="error-404.html">404 Error </a></li>
                  <li><a href="error-500.html">500 Error </a></li>
                </ul>
              </li> -->

              <!-- <li class="submenu">
                <a href="javascript:void(0);"
                  ><i data-feather="box"></i> <span>Elements </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                  <li><a href="tooltip.html">Tooltip</a></li>
                  <li><a href="popover.html">Popover</a></li>
                  <li><a href="ribbon.html">Ribbon</a></li>
                  <li><a href="clipboard.html">Clipboard</a></li>
                  <li><a href="drag-drop.html">Drag & Drop</a></li>
                  <li><a href="rangeslider.html">Range Slider</a></li>
                  <li><a href="rating.html">Rating</a></li>
                  <li><a href="toastr.html">Toastr</a></li>
                  <li><a href="text-editor.html">Text Editor</a></li>
                  <li><a href="counter.html">Counter</a></li>
                  <li><a href="scrollbar.html">Scrollbar</a></li>
                  <li><a href="spinner.html">Spinner</a></li>
                  <li><a href="notification.html">Notification</a></li>
                  <li><a href="lightbox.html">Lightbox</a></li>
                  <li><a href="stickynote.html">Sticky Note</a></li>
                  <li><a href="timeline.html">Timeline</a></li>
                  <li><a href="form-wizard.html">Form Wizard</a></li>
                </ul>
              </li> -->
              <!-- <li class="submenu">
                <a href="javascript:void(0);"
                  ><i data-feather="bar-chart-2"></i> <span> Charts </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="chart-apex.html">Apex Charts</a></li>
                  <li><a href="chart-js.html">Chart Js</a></li>
                  <li><a href="chart-morris.html">Morris Charts</a></li>
                  <li><a href="chart-flot.html">Flot Charts</a></li>
                  <li><a href="chart-peity.html">Peity Charts</a></li>
                </ul>
              </li> -->
              <!-- <li class="submenu">
                <a href="javascript:void(0);"
                  ><i data-feather="award"></i><span> Icons </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                  <li><a href="icon-feather.html">Feather Icons</a></li>
                  <li><a href="icon-ionic.html">Ionic Icons</a></li>
                  <li><a href="icon-material.html">Material Icons</a></li>
                  <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                  <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                  <li><a href="icon-themify.html">Themify Icons</a></li>
                  <li><a href="icon-weather.html">Weather Icons</a></li>
                  <li><a href="icon-typicon.html">Typicon Icons</a></li>
                  <li><a href="icon-flag.html">Flag Icons</a></li>
                </ul>
              </li> -->
              <!-- <li class="submenu">
                <a href="javascript:void(0);"
                  ><i data-feather="columns"></i> <span> Forms </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                  <li><a href="form-input-groups.html">Input Groups </a></li>
                  <li><a href="form-horizontal.html">Horizontal Form </a></li>
                  <li><a href="form-vertical.html"> Vertical Form </a></li>
                  <li><a href="form-mask.html">Form Mask </a></li>
                  <li><a href="form-validation.html">Form Validation </a></li>
                  <li><a href="form-select2.html">Form Select2 </a></li>
                  <li><a href="form-fileupload.html">File Upload </a></li>
                </ul>
              </li> -->
              <!-- <li class="submenu">
                <a href="javascript:void(0);"
                  ><i data-feather="layout"></i> <span> Table </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="tables-basic.html">Basic Tables </a></li>
                  <li><a href="data-tables.html">Data Table </a></li>
                </ul>
              </li> -->

              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/time.svg" alt="img" /><span>
                    Report</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li>
                    <a href="purchaseorderreport.html">Purchase order report</a>
                  </li>
                  <li><a href="inventoryreport.html">Inventory Report</a></li>
                  <li><a href="salesreport.html">Sales Report</a></li>
                  <li><a href="invoicereport.html">Invoice Report</a></li>
                  <li><a href="purchasereport.html">Purchase Report</a></li>
                  <li><a href="customerreport.html">Customer Report</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/users1.svg" alt="img" /><span>
                    Users</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="newuser.html">New User </a></li>
                  <li><a href="userlists.html">Users List</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><img src="assets/img/icons/settings.svg" alt="img" /><span>
                    Settings</span
                  >
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="generalsettings.html">General Settings</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="page-wrapper">
        <div class="content">
          <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="dash-widget">
                <div class="dash-widgetimg">
                  <span
                    ><img src="assets/img/icons/dash1.svg" alt="img"
                  /></span>
                </div>
                <div class="dash-widgetcontent">
                  <h5>
                    <span class="counters" data-count="3144.00">3144.00</span>
                  </h5>
                  <h6>Total Orders</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="dash-widget dash1">
                <div class="dash-widgetimg">
                  <span
                    ><img src="assets/img/icons/dash2.svg" alt="img"
                  /></span>
                </div>
                <div class="dash-widgetcontent">
                  <h5>
                    ₱<span class="counters" data-count="4385.00"
                      >₱4,385.00</span
                    >
                  </h5>
                  <h6>Total Sales</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="dash-widget dash2">
                <div class="dash-widgetimg">
                  <span
                    ><img src="assets/img/icons/dash3.svg" alt="img"
                  /></span>
                </div>
                <div class="dash-widgetcontent">
                  <h5>
                    <span class="counters" data-count="3856.50">350</span>
                  </h5>
                  <h6>Total Delivered</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="dash-widget dash3">
                <div class="dash-widgetimg">
                  <span
                    ><img src="assets/img/icons/dash4.svg" alt="img"
                  /></span>
                </div>
                <div class="dash-widgetcontent">
                  <h5>
                    <span class="counters" data-count="400.00">40</span>
                  </h5>
                  <h6>Total Pending Orders</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
              <div class="dash-count">
                <div class="dash-counts">
                  <h4>100</h4>
                  <h5>Customers</h5>
                </div>
                <div class="dash-imgs">
                  <i data-feather="user"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
              <div class="dash-count das1">
                <div class="dash-counts">
                  <h4>100</h4>
                  <h5>Suppliers</h5>
                </div>
                <div class="dash-imgs">
                  <i data-feather="user-check"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
              <div class="dash-count das2">
                <div class="dash-counts">
                  <h4>100</h4>
                  <h5>Purchase Invoice</h5>
                </div>
                <div class="dash-imgs">
                  <i data-feather="file-text"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
              <div class="dash-count das3">
                <div class="dash-counts">
                  <h4>105</h4>
                  <h5>Sales Invoice</h5>
                </div>
                <div class="dash-imgs">
                  <i data-feather="file"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-7 col-sm-12 col-12 d-flex">
              <div class="card flex-fill">
                <div
                  class="card-header pb-0 d-flex justify-content-between align-items-center"
                >
                  <h5 class="card-title mb-0">Purchase & Sales</h5>
                  <div class="graph-sets">
                    <ul>
                      <li>
                        <span>Sales</span>
                      </li>
                      <li>
                        <span>Purchase</span>
                      </li>
                    </ul>
                    <div class="dropdown">
                      <button
                        class="btn btn-white btn-sm dropdown-toggle"
                        type="button"
                        id="dropdownMenuButton"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        2022
                        <img
                          src="assets/img/icons/dropdown.svg"
                          alt="img"
                          class="ms-2"
                        />
                      </button>
                      <ul
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <li>
                          <a href="javascript:void(0);" class="dropdown-item"
                            >2022</a
                          >
                        </li>
                        <li>
                          <a href="javascript:void(0);" class="dropdown-item"
                            >2021</a
                          >
                        </li>
                        <li>
                          <a href="javascript:void(0);" class="dropdown-item"
                            >2020</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div id="sales_charts"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-12 d-flex">
              <div class="card flex-fill">
                <div
                  class="card-header pb-0 d-flex justify-content-between align-items-center"
                >
                  <h4 class="card-title mb-0">Recently Added Menu</h4>
                  <div class="dropdown">
                    <a
                      href="javascript:void(0);"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      class="dropset"
                    >
                      <i class="fa fa-ellipsis-v"></i>
                    </a>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <li>
                        <a href="dprouctlist.html" class="dropdown-item"
                          >Menu List</a
                        >
                      </li>
                      <li>
                        <a href="addproduct.html" class="dropdown-item"
                          >Menu Add</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive dataview">
                    <table class="table datatable">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Menu</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td class="productimgname">
                            <a href="productlist.html" class="product-img">
                              <img
                                src="assets/img/product/product22.jpg"
                                alt="product"
                              />
                            </a>
                            <a href="productlist.html">Adobo</a>
                          </td>
                          <td>₱391.2</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td class="productimgname">
                            <a href="productlist.html" class="product-img">
                              <img
                                src="assets/img/product/product23.jpg"
                                alt="product"
                              />
                            </a>
                            <a href="productlist.html">Sinigang</a>
                          </td>
                          <td>₱368.51</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td class="productimgname">
                            <a href="productlist.html" class="product-img">
                              <img
                                src="assets/img/product/product24.jpg"
                                alt="product"
                              />
                            </a>
                            <a href="productlist.html">Lechon</a>
                          </td>
                          <td>₱522.29</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td class="productimgname">
                            <a href="productlist.html" class="product-img">
                              <img
                                src="assets/img/product/product6.jpg"
                                alt="product"
                              />
                            </a>
                            <a href="productlist.html">Beef Pares</a>
                          </td>
                          <td>₱291</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-0">
            <div class="card-body">
              <h4 class="card-title">Expired Products</h4>
              <div class="table-responsive dataview">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Menu Code</th>
                      <th>Menu Name</th>
                      <th>Brand Name</th>
                      <th>Category Name</th>
                      <th>Expiry Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><a href="javascript:void(0);">IT0001</a></td>
                      <td class="productimgname">
                        <a class="product-img" href="productlist.html">
                          <img
                            src="assets/img/product/product2.jpg"
                            alt="product"
                          />
                        </a>
                        <a href="productlist.html">Orange</a>
                      </td>
                      <td>N/D</td>
                      <td>Fruits</td>
                      <td>12-12-2022</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><a href="javascript:void(0);">IT0002</a></td>
                      <td class="productimgname">
                        <a class="product-img" href="productlist.html">
                          <img
                            src="assets/img/product/product3.jpg"
                            alt="product"
                          />
                        </a>
                        <a href="productlist.html">Pineapple</a>
                      </td>
                      <td>N/D</td>
                      <td>Fruits</td>
                      <td>25-11-2022</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><a href="javascript:void(0);">IT0003</a></td>
                      <td class="productimgname">
                        <a class="product-img" href="productlist.html">
                          <img
                            src="assets/img/product/product4.jpg"
                            alt="product"
                          />
                        </a>
                        <a href="productlist.html">Stawberry</a>
                      </td>
                      <td>N/D</td>
                      <td>Fruits</td>
                      <td>19-11-2022</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><a href="javascript:void(0);">IT0004</a></td>
                      <td class="productimgname">
                        <a class="product-img" href="productlist.html">
                          <img
                            src="assets/img/product/product5.jpg"
                            alt="product"
                          />
                        </a>
                        <a href="productlist.html">Avocat</a>
                      </td>
                      <td>N/D</td>
                      <td>Fruits</td>
                      <td>20-11-2022</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/js/script.js"></script>
  </body>
</html>