<template>
    <Head title="Welcome" />
        <header class="navbar navbar-expand-md navbar-light d-print-none sticky-top">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <Link :href="route('root')">
                        <jet-application-mark width="36" />
                    </Link>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                        </svg>
                    </a>
                    <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="12" cy="12" r="4" />
                            <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                        </svg>
                    </a>
                    <div class="nav-item dropdown d-none d-md-flex me-3">
                        <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                            <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            </svg>
                            <span class="badge bg-red"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                            <div class="card">
                                <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.</div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                            <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>Paweł Kuna</div>
                                <div class="mt-1 small text-muted">UI Designer</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="#" class="dropdown-item">Set status</a>
                            <a href="#" class="dropdown-item">Profile & account</a>
                            <a href="#" class="dropdown-item">Feedback</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <Link class="nav-link" :href="route('dashboard')">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title"> Home </span>
                                </Link>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"
                                        ><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                                            <line x1="12" y1="12" x2="20" y2="7.5" />
                                            <line x1="12" y1="12" x2="12" y2="21" />
                                            <line x1="12" y1="12" x2="4" y2="7.5" />
                                            <line x1="16" y1="5.25" x2="8" y2="9.75" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title"> Interface </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./empty.html"> Empty page </a>
                                            <a class="dropdown-item" href="./accordion.html"> Accordion </a>
                                            <a class="dropdown-item" href="./blank.html"> Blank page </a>
                                            <a class="dropdown-item" href="./buttons.html"> Buttons </a>
                                            <a class="dropdown-item" href="./cards.html"> Cards </a>
                                            <a class="dropdown-item" href="./cards-masonry.html"> Cards Masonry </a>
                                            <a class="dropdown-item" href="./colors.html"> Colors </a>
                                            <a class="dropdown-item" href="./dropdowns.html"> Dropdowns </a>
                                            <a class="dropdown-item" href="./icons.html"> Icons </a>
                                            <a class="dropdown-item" href="./modals.html"> Modals </a>
                                            <a class="dropdown-item" href="./maps.html"> Maps </a>
                                            <a class="dropdown-item" href="./map-fullsize.html"> Map fullsize </a>
                                            <a class="dropdown-item" href="./maps-vector.html"> Vector maps </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./navigation.html"> Navigation </a>
                                            <a class="dropdown-item" href="./charts.html"> Charts </a>
                                            <a class="dropdown-item" href="./pagination.html"> Pagination </a>
                                            <a class="dropdown-item" href="./skeleton.html"> Skeleton </a>
                                            <a class="dropdown-item" href="./tabs.html"> Tabs </a>
                                            <a class="dropdown-item" href="./tables.html"> Tables </a>
                                            <a class="dropdown-item" href="./carousel.html"> Carousel </a>
                                            <a class="dropdown-item" href="./lists.html"> Lists </a>
                                            <a class="dropdown-item" href="./typography.html"> Typography </a>
                                            <a class="dropdown-item" href="./offcanvas.html"> Offcanvas </a>
                                            <a class="dropdown-item" href="./markdown.html"> Markdown </a>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false"> Authentication </a>
                                                <div class="dropdown-menu">
                                                    <a href="./sign-in.html" class="dropdown-item">Sign in</a>
                                                    <a href="./sign-up.html" class="dropdown-item">Sign up</a>
                                                    <a href="./forgot-password.html" class="dropdown-item">Forgot password</a>
                                                    <a href="./terms-of-service.html" class="dropdown-item">Terms of service</a>
                                                    <a href="./auth-lock.html" class="dropdown-item">Lock screen</a>
                                                </div>
                                            </div>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false"> Error pages </a>
                                                <div class="dropdown-menu">
                                                    <a href="./error-404.html" class="dropdown-item">404 page</a>
                                                    <a href="./error-500.html" class="dropdown-item">500 page</a>
                                                    <a href="./error-maintenance.html" class="dropdown-item">Maintenance page</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./form-elements.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"
                                        ><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="9 11 12 14 20 6" />
                                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title"> Forms </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"
                                        ><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title"> Extra </span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="./activity.html"> Activity </a>
                                    <a class="dropdown-item" href="./gallery.html"> Gallery </a>
                                    <a class="dropdown-item" href="./invoice.html"> Invoice </a>
                                    <a class="dropdown-item" href="./search-results.html"> Search results </a>
                                    <a class="dropdown-item" href="./pricing.html"> Pricing cards </a>
                                    <a class="dropdown-item" href="./users.html"> Users </a>
                                    <a class="dropdown-item" href="./license.html"> License </a>
                                    <a class="dropdown-item" href="./music.html"> Music </a>
                                    <a class="dropdown-item" href="./widgets.html"> Widgets </a>
                                    <a class="dropdown-item" href="./wizard.html"> Wizard </a>
                                </div>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"
                                        ><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <rect x="4" y="4" width="6" height="5" rx="2" />
                                            <rect x="4" y="13" width="6" height="7" rx="2" />
                                            <rect x="14" y="4" width="6" height="7" rx="2" />
                                            <rect x="14" y="15" width="6" height="5" rx="2" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title"> Layout </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./layout-horizontal.html"> Horizontal </a>
                                            <a class="dropdown-item" href="./layout-vertical.html"> Vertical </a>
                                            <a class="dropdown-item" href="./layout-vertical-transparent.html"> Vertical transparent </a>
                                            <a class="dropdown-item" href="./layout-vertical-right.html"> Right vertical </a>
                                            <a class="dropdown-item active" href="./layout-condensed.html"> Condensed </a>
                                            <a class="dropdown-item" href="./layout-combo.html"> Combined </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./layout-navbar-dark.html"> Navbar dark </a>
                                            <a class="dropdown-item" href="./layout-navbar-sticky.html"> Navbar sticky </a>
                                            <a class="dropdown-item" href="./layout-navbar-overlap.html"> Navbar overlap </a>
                                            <a class="dropdown-item" href="./layout-rtl.html"> RTL mode </a>
                                            <a class="dropdown-item" href="./layout-fluid.html"> Fluid </a>
                                            <a class="dropdown-item" href="./layout-fluid-vertical.html"> Fluid vertical </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./docs/index.html">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"
                                        ><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                            <line x1="9" y1="9" x2="10" y2="9" />
                                            <line x1="9" y1="13" x2="15" y2="13" />
                                            <line x1="9" y1="17" x2="15" y2="17" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title"> Documentation </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">Overview</div>
                            <h2 class="page-title">Condensed layout</h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                                <span class="d-none d-sm-inline">
                                    <a href="#" class="btn btn-white"> New view </a>
                                </span>
                                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="12" y1="5" x2="12" y2="19" />
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                    </svg>
                                    Create new report
                                </a>
                                <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="12" y1="5" x2="12" y2="19" />
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="subheader">Sales</div>
                                        <div class="ms-auto lh-1">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h1 mb-3">75%</div>
                                    <div class="d-flex mb-2">
                                        <div>Conversion rate</div>
                                        <div class="ms-auto">
                                            <span class="text-green d-inline-flex align-items-center lh-1">
                                                7%
                                                <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="3 17 9 11 13 15 21 7" />
                                                    <polyline points="14 7 21 7 21 14" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <span class="visually-hidden">75% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="subheader">Revenue</div>
                                        <div class="ms-auto lh-1">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-baseline">
                                        <div class="h1 mb-0 me-2">$4,300</div>
                                        <div class="me-auto">
                                            <span class="text-green d-inline-flex align-items-center lh-1">
                                                8%
                                                <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="3 17 9 11 13 15 21 7" />
                                                    <polyline points="14 7 21 7 21 14" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div id="chart-revenue-bg" class="chart-sm"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="subheader">New clients</div>
                                        <div class="ms-auto lh-1">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-baseline">
                                        <div class="h1 mb-3 me-2">6,782</div>
                                        <div class="me-auto">
                                            <span class="text-yellow d-inline-flex align-items-center lh-1">
                                                0%
                                                <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <line x1="5" y1="12" x2="19" y2="12" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="chart-new-clients" class="chart-sm"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="subheader">Active users</div>
                                        <div class="ms-auto lh-1">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item active" href="#">Last 7 days</a>
                                                    <a class="dropdown-item" href="#">Last 30 days</a>
                                                    <a class="dropdown-item" href="#">Last 3 months</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-baseline">
                                        <div class="h1 mb-3 me-2">2,986</div>
                                        <div class="me-auto">
                                            <span class="text-green d-inline-flex align-items-center lh-1">
                                                4%
                                                <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <polyline points="3 17 9 11 13 15 21 7" />
                                                    <polyline points="14 7 21 7 21 14" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="chart-active-users" class="chart-sm"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row row-cards">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title">Traffic summary</h3>
                                            <ChartMentions />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="mb-3">Using Storage <strong>6854.45 MB </strong>of 8 GB</p>
                                            <div class="progress progress-separated mb-3">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 44%"></div>
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 19%"></div>
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 9%"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto d-flex align-items-center pe-2">
                                                    <span class="legend me-2 bg-primary"></span>
                                                    <span>Regular</span>
                                                    <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">915MB</span>
                                                </div>
                                                <div class="col-auto d-flex align-items-center px-2">
                                                    <span class="legend me-2 bg-info"></span>
                                                    <span>System</span>
                                                    <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">415MB</span>
                                                </div>
                                                <div class="col-auto d-flex align-items-center px-2">
                                                    <span class="legend me-2 bg-success"></span>
                                                    <span>Shared</span>
                                                    <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">201MB</span>
                                                </div>
                                                <div class="col-auto d-flex align-items-center ps-2">
                                                    <span class="legend me-2"></span>
                                                    <span>Free</span>
                                                    <span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">612MB</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body p-2 text-center">
                                            <div class="text-end text-green">
                                                <span class="text-green d-inline-flex align-items-center lh-1">
                                                    6%
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <polyline points="3 17 9 11 13 15 21 7" />
                                                        <polyline points="14 7 21 7 21 14" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="h1 m-0">43</div>
                                            <div class="text-muted mb-3">New Tickets</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body p-2 text-center">
                                            <div class="text-end text-red">
                                                <span class="text-red d-inline-flex align-items-center lh-1">
                                                    -2%
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/trending-down -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <polyline points="3 7 9 13 13 9 21 17" />
                                                        <polyline points="21 10 21 17 14 17" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="h1 m-0">95</div>
                                            <div class="text-muted mb-3">Daily Earnings</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body p-2 text-center">
                                            <div class="text-end text-green">
                                                <span class="text-green d-inline-flex align-items-center lh-1">
                                                    9%
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <polyline points="3 17 9 11 13 15 21 7" />
                                                        <polyline points="14 7 21 7 21 14" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="h1 m-0">7</div>
                                            <div class="text-muted mb-3">New Replies</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <div class="card-title">Development activity</div>
                                </div>
                                <div class="position-relative">
                                    <div class="position-absolute top-0 left-0 px-3 mt-1 w-75">
                                        <div class="row g-2">
                                            <div class="col-auto">
                                                <ChartActivity height="150px"/>
                                            </div>
                                            <div class="col">
                                                <div>Today's Earning: $4,262.40</div>
                                                <div class="text-muted">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                                    <TrendingUpIcon class="icon icon-inline text-green" />
                                                    +5% more than yesterday
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ChartDevelopmentActivity />
                                </div>
                                <div class="card-table table-responsive">
                                    <table class="table table-vcenter">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Commit</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="w-1">
                                                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                                                </td>
                                                <td class="td-truncate">
                                                    <div class="text-truncate">Fix dart Sass compatibility (#29755)</div>
                                                </td>
                                                <td class="text-nowrap text-muted">28 Nov 2019</td>
                                            </tr>
                                            <tr>
                                                <td class="w-1">
                                                    <span class="avatar avatar-sm">JL</span>
                                                </td>
                                                <td class="td-truncate">
                                                    <div class="text-truncate">Change deprecated html tags to text decoration classes (#29604)</div>
                                                </td>
                                                <td class="text-nowrap text-muted">27 Nov 2019</td>
                                            </tr>
                                            <tr>
                                                <td class="w-1">
                                                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
                                                </td>
                                                <td class="td-truncate">
                                                    <div class="text-truncate">justify-content:between ⇒ justify-content:space-between (#29734)</div>
                                                </td>
                                                <td class="text-nowrap text-muted">26 Nov 2019</td>
                                            </tr>
                                            <tr>
                                                <td class="w-1">
                                                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
                                                </td>
                                                <td class="td-truncate">
                                                    <div class="text-truncate">Update change-version.js (#29736)</div>
                                                </td>
                                                <td class="text-nowrap text-muted">26 Nov 2019</td>
                                            </tr>
                                            <tr>
                                                <td class="w-1">
                                                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                                                </td>
                                                <td class="td-truncate">
                                                    <div class="text-truncate">Regenerate package-lock.json (#29730)</div>
                                                </td>
                                                <td class="text-nowrap text-muted">25 Nov 2019</td>
                                            </tr>
                                            <tr>
                                                <td class="w-1">
                                                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/001f.jpg)"></span>
                                                </td>
                                                <td class="td-truncate">
                                                    <div class="text-truncate">Some minor text tweaks</div>
                                                </td>
                                                <td class="text-nowrap text-muted">24 Nov 2019</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <a href="https://github.com/sponsors/codecalm" class="card card-sponsor" target="_blank" rel="noopener" style="background-image: url(./static/sponsor-banner-homepage.svg)" aria-label="Sponsor Tabler!">
                                <div class="card-body"></div>
                            </a>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Most Visited Pages</h3>
                                </div>
                                <div class="card-table table-responsive">
                                    <table class="table table-vcenter">
                                        <thead>
                                            <tr>
                                                <th>Page name</th>
                                                <th>Visitors</th>
                                                <th>Unique</th>
                                                <th colspan="2">Bounce rate</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td>
                                                /about.html
                                                <a href="#" class="ms-1" aria-label="Open website"
                                                    ><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                                    </svg>
                                                </a>
                                            </td>
                                            <td class="text-muted">4,896</td>
                                            <td class="text-muted">3,654</td>
                                            <td class="text-muted">82.54%</td>
                                            <td class="text-end w-1">
                                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-1"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                /special-promo.html
                                                <a href="#" class="ms-1" aria-label="Open website"
                                                    ><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                                    </svg>
                                                </a>
                                            </td>
                                            <td class="text-muted">3,652</td>
                                            <td class="text-muted">3,215</td>
                                            <td class="text-muted">76.29%</td>
                                            <td class="text-end w-1">
                                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-2"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                /news/1,new-ui-kit.html
                                                <a href="#" class="ms-1" aria-label="Open website"
                                                    ><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                                    </svg>
                                                </a>
                                            </td>
                                            <td class="text-muted">3,256</td>
                                            <td class="text-muted">2,865</td>
                                            <td class="text-muted">72.65%</td>
                                            <td class="text-end w-1">
                                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-3"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                /lorem-ipsum-dolor-sit-amet-very-long-url.html
                                                <a href="#" class="ms-1" aria-label="Open website"
                                                    ><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                                    </svg>
                                                </a>
                                            </td>
                                            <td class="text-muted">986</td>
                                            <td class="text-muted">865</td>
                                            <td class="text-muted">44.89%</td>
                                            <td class="text-end w-1">
                                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-4"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                /colors.html
                                                <a href="#" class="ms-1" aria-label="Open website"
                                                    ><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                                    </svg>
                                                </a>
                                            </td>
                                            <td class="text-muted">912</td>
                                            <td class="text-muted">822</td>
                                            <td class="text-muted">41.12%</td>
                                            <td class="text-end w-1">
                                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-5"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                /docs/index.html
                                                <a href="#" class="ms-1" aria-label="Open website"
                                                    ><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                                                        <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                                                    </svg>
                                                </a>
                                            </td>
                                            <td class="text-muted">855</td>
                                            <td class="text-muted">798</td>
                                            <td class="text-muted">32.65%</td>
                                            <td class="text-end w-1">
                                                <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-6"></div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <Footer />
        </div>
</template>

<style scoped></style>

<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3'
import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue'
import JetBanner from '@/Jetstream/Banner.vue'
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
import JetDropdown from '@/Jetstream/Dropdown.vue'
import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
import JetNavLink from '@/Jetstream/NavLink.vue'
import Footer from '@/Shared/Footer.vue'
import { TrendingUpIcon } from 'vue-tabler-icons'
import ChartMentions from '@/Components/BarMentions.vue'
import ChartActivity from '@/Components/SparklineActivity.vue'
import ChartDevelopmentActivity from '@/Components/AreaDevelopmentActivity.vue'



export default defineComponent({
    components: {
        Head,
        Link,
        JetApplicationLogo,
        JetBanner,
        JetApplicationMark,
        JetDropdown,
        JetDropdownLink,
        JetNavLink,
        Footer,
        TrendingUpIcon,
        ChartMentions,
        ChartActivity,
        ChartDevelopmentActivity,
    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
})
</script>
