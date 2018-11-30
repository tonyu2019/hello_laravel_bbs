<!doctype html>
<html lang="zh-cn">

<head>
    <title>:: Mplify :: Table Basic</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="ThemeMakker, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/font-awesome.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('static/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/color_skins.css')}}">
</head>
<body class="theme-blue">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('/static/images/thumbnail.png')}}" width="48" height="48" alt="Mplify"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay" style="display: none;"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-brand">
                <a href="index.html">
                    <img src="{{asset('/static/images/logo-icon.svg')}}" alt="Mplify Logo" class="img-responsive logo">
                    <span class="name">LOGO</span>
                </a>
            </div>

            <div class="navbar-right">
                <ul class="list-unstyled clearfix mb-0">
                    <li>
                        <div class="navbar-btn btn-toggle-show">
                            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                        </div>
                        <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <form id="navbar-search" class="navbar-form search-form">
                            <input value="" class="form-control" placeholder="Search here..." type="text">
                            <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                        </form>
                    </li>
                    <li>
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="javascript:void(0);" class="mega_menu icon-menu" title="Mega Menu">Mega</a>
                                </li>
                                <li>
                                    <a href="http://www.17sucai.com/" class="create_new icon-menu" title="Create New">Create New</a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <i class="icon-bell"></i>
                                        <span class="notification-dot"></span>
                                    </a>
                                    <ul class="dropdown-menu animated bounceIn notifications">
                                        <li class="header"><strong>You have 4 new Notifications</strong></li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-warning"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                        <span class="timestamp">10:00 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-like text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                        <span class="timestamp">11:30 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-pie-chart text-info"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                        <span class="timestamp">04:00 PM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Error on website analytics configurations</p>
                                                        <span class="timestamp">Yesterday</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-flag"></i><span class="notification-dot"></span></a>
                                    <ul class="dropdown-menu animated bounceIn task">
                                        <li class="header"><strong>Project</strong></li>
                                        <li class="body">
                                            <ul class="menu tasks list-unstyled">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <span class="text-muted">Clockwork Orange <span class="float-right">29%</span></span>
                                                        <div class="progress">
                                                            <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <span class="text-muted">Blazing Saddles <span class="float-right">78%</span></span>
                                                        <div class="progress">
                                                            <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <span class="text-muted">Project Archimedes <span class="float-right">45%</span></span>
                                                        <div class="progress">
                                                            <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <span class="text-muted">Eisenhower X <span class="float-right">68%</span></span>
                                                        <div class="progress">
                                                            <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <span class="text-muted">Oreo Admin Templates <span class="float-right">21%</span></span>
                                                        <div class="progress">
                                                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100" style="width: 21%;"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="footer"><a href="javascript:void(0);">View All</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <img class="rounded-circle" src="{{asset('/static/images/user-small.png')}}" width="30" alt="">
                                    </a>
                                    <div class="dropdown-menu animated flipInY user-profile">
                                        <div class="d-flex p-3 align-items-center">
                                            <div class="drop-left m-r-10">
                                                <img src="{{asset('/assets/images/user-small.png')}}" class="rounded" width="50" alt="">
                                            </div>
                                            <div class="drop-right">
                                                <h4>Samuel Morriss</h4>
                                                <p class="user-name">samuelmorris@info.com</p>
                                            </div>
                                        </div>
                                        <div class="m-t-10 p-3 drop-list">
                                            <ul class="list-unstyled">
                                                <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                                                <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                                                <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                                                <li class="divider"></li>
                                                <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="leftsidebar" class="sidebar">
        <div class="sidebar-scroll">
            <nav id="leftsidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="heading">Main</li>
                    <li><a href="index.html"><i class="icon-home"></i><span>Dashboard</span></a></li>
                    <li class="heading">App</li>
                    <li><a href="app-inbox.html"><i class="icon-envelope"></i><span>Inbox</span></a></li>
                    <li><a href="app-chat.html"><i class="icon-bubbles"></i><span>Chat</span></a></li>
                    <li><a href="app-calendar.html"><i class="icon-calendar"></i><span>Calendar</span></a></li>
                    <li><a href="app-taskboard.html"><i class="icon-notebook"></i><span>Taskboard</span></a></li>
                    <li class="heading">UI Elements</li>
                    <li class="middle">
                        <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>Component</span></a>
                        <ul>
                            <li><a href="ui-card.html">Card Layout</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-tabs.html">Tabs</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                            <li><a href="ui-icons.html">Icons</a></li>
                            <li><a href="ui-notifications.html">Notifications</a></li>
                            <li><a href="ui-colors.html">Colors</a></li>
                            <li><a href="ui-dialogs.html">Dialogs</a></li>
                            <li><a href="ui-list-group.html">List Group</a></li>
                            <li><a href="ui-media-object.html">Media Object</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-nestable.html">Nestable</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-range-sliders.html">Range Sliders</a></li>
                            <li><a href="ui-treeview.html">Treeview</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#forms" class="has-arrow"><i class="icon-pencil"></i><span>Forms</span></a>
                        <ul>
                            <li><a href="forms-validation.html">Form Validation</a></li>
                            <li><a href="forms-advanced.html">Advanced Elements</a></li>
                            <li><a href="forms-basic.html">Basic Elements</a></li>
                            <li><a href="forms-wizard.html">Form Wizard</a></li>
                            <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
                            <li><a href="forms-cropping.html">Image Cropping</a></li>
                            <li><a href="forms-summernote.html">Summernote</a></li>
                            <li><a href="forms-editors.html">CKEditor</a></li>
                            <li><a href="forms-markdown.html">Markdown</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#Tables" class="has-arrow"><i class="icon-tag"></i><span>Tables</span></a>
                        <ul>
                            <li class="active"><a href="table-basic.html">Tables Example</a></li>
                            <li><a href="table-normal.html">Normal Tables</a></li>
                            <li><a href="table-jquery-datatable.html">Jquery Datatables</a></li>
                            <li><a href="table-editable.html">Editable Tables</a></li>
                            <li><a href="table-color.html">Tables Color</a></li>
                            <li><a href="table-filter.html">Table Filter</a></li>
                            <li><a href="table-dragger.html">Table dragger</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#charts" class="has-arrow"><i class="icon-bar-chart"></i><span>Charts</span></a>
                        <ul>
                            <li><a href="chart-morris.html">Morris</a> </li>
                            <li><a href="chart-flot.html">Flot</a> </li>
                            <li><a href="chart-chartjs.html">ChartJS</a> </li>
                            <li><a href="chart-jquery-knob.html">Jquery Knob</a> </li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                            <li><a href="chart-c3.html">C3 Charts</a></li>
                            <li><a href="chart-gauges.html">Gauges</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Widgets" class="has-arrow"><i class="icon-puzzle"></i><span>Widgets</span></a>
                        <ul>
                            <li><a href="widgets-statistics.html">Statistics</a></li>
                            <li><a href="widgets-data.html">Data</a></li>
                            <li><a href="widgets-chart.html">Chart</a></li>
                            <li><a href="widgets-weather.html">Weather</a></li>
                            <li><a href="widgets-social.html">Social</a></li>
                            <li><a href="widgets-blog.html">Blog</a></li>
                            <li><a href="widgets-ecommerce.html">eCommerce</a></li>
                        </ul>
                    </li>
                    <li class="heading">User</li>
                    <li>
                        <a href="#FileManager" class="has-arrow"><i class="icon-folder"></i><span>File Manager</span></a>
                        <ul>
                            <li><a href="file-dashboard.html">Dashboard</a></li>
                            <li><a href="file-documents.html">Documents</a></li>
                            <li><a href="file-media.html">Media</a></li>
                            <li><a href="file-images.html">Images</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#Blog" class="has-arrow"><i class="icon-globe"></i><span>Blog</span></a>
                        <ul>
                            <li><a href="blog-dashboard.html">Dashboard</a></li>
                            <li><a href="blog-post.html">New Post</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-details.html">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li class="heading">Extra</li>
                    <li class="top">
                        <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                        <ul>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-lockscreen.html">Lockscreen</a></li>
                            <li><a href="page-forgot-password.html">Forgot Password</a></li>
                            <li><a href="page-404.html">Page 404</a></li>
                            <li><a href="page-403.html">Page 403</a></li>
                            <li><a href="page-500.html">Page 500</a></li>
                            <li><a href="page-503.html">Page 503</a></li>
                        </ul>
                    </li>
                    <li class="top">
                        <a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>Pages</span></a>
                        <ul>
                            <li><a href="page-blank.html">Blank Page</a></li>
                            <li><a href="app-contact.html">Contact list</a></li>
                            <li><a href="app-contact-grid.html">Contact Card</a></li>
                            <li><a href="page-profile.html">Profile</a></li>
                            <li><a href="page-gallery.html">Image Gallery</a></li>
                            <li><a href="page-gallery2.html">Image Gallery</a></li>
                            <li><a href="page-timeline.html">Timeline</a></li>
                            <li><a href="page-timeline-h.html">Horizontal Timeline</a></li>
                            <li><a href="page-pricing.html">Pricing</a></li>
                            <li><a href="page-invoices.html">Invoices</a></li>
                            <li><a href="page-search-results.html">Search Results</a></li>
                            <li><a href="page-helper-class.html">Helper Classes</a></li>
                            <li><a href="page-teams-board.html">Teams Board</a></li>
                            <li><a href="page-projects-list.html">Projects List</a></li>
                            <li><a href="page-maintenance.html">Maintenance</a></li>
                            <li><a href="page-testimonials.html">Testimonials</a></li>
                            <li><a href="page-faq.html">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="top">
                        <a href="#Maps" class="has-arrow"><i class="icon-map"></i> <span>Maps</span></a>
                        <ul>
                            <li><a href="map-google.html">Google Map</a></li>
                            <li><a href="map-yandex.html">Yandex Map</a></li>
                            <li><a href="map-jvectormap.html">jVector Map</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>




    <div id="main-content">
        @section('body')
            @show
    </div>

</div>

<!-- Javascript -->
<script src="{{asset('static/js/libscripts.bundle.js')}}"></script>
<script src="{{asset('static/js/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('static/js/mainscripts.bundle.js')}}"></script>
<script src="{{asset('static/js/morrisscripts.bundle.js')}}"></script>

</body>
</html>
