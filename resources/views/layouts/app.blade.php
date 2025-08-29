<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>AR - System Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Admin & Dashboards Template" name="description" />
    <meta content="Pixeleyez" name="author" />

    <!-- layout setup -->
    <script type="module" src="{{ asset('urbix/js/layout-setup.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('urbix/libs/leaflet/leaflet.css') }}">

    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('urbix/flaticon/uranus.png') }}">
    <!-- plugin css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('urbix/libs/jsvectormap/jsvectormap.min.css') }}">

    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{ asset('urbix/libs/simplebar/simplebar.min.css') }}">
    <!-- Swiper Css -->
    <link href="{{ asset('urbix/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Nouislider Css -->
    <link href="{{ asset('urbix/libs/nouislider/nouislider.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('urbix/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!--icons css-->
    <link href="{{ asset('urbix/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('urbix/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

    {{-- Table Icons --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/css/tabler.min.css" /> --}}

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- Begin Header -->
        <header class="app-header" id="appHeader">
            <div class="container-fluid w-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-inline-flex align-items-center gap-2">
                        <a href="index.html" class="align-items-end logo-main d-none me-5">
                            <img height="35" width="34" class="logo-dark" alt="Dark Logo"
                                src="{{ asset('urbix/flaticon/planet.png') }}">
                            <h3 class="text-body-emphasis fw-bolder mb-0 ms-1">AR-SYSTEM</h3>
                        </a>
                        <button type="button" class="vertical-toggle btn header-btn" id="toggleSidebar"
                            aria-label="Toggle Sidebar">
                            <i class="bi bi-arrow-bar-left header-icon"></i>
                        </button>
                        <button type="button" class="horizontal-toggle btn header-btn d-none" id="toggleHorizontal"
                            aria-label="Toggle Menu">
                            <i class="ri-menu-2-line header-icon"></i>
                        </button>
                        <!-- Search Bar -->
                        <div class="form-icon right d-none d-md-block" data-bs-toggle="modal"
                            data-bs-target="#searchModal">
                            <input type="text"
                                class="form-control form-control-icon bg-transparent rounded-pill min-w-300px"
                                id="Search" placeholder="Search" required>
                            <div class="search-btn">
                                <div><i class="ri-search-line text-muted fs-16"></i></div>
                                <div><span class="badge bg-light-subtle text-muted">CTRL D</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 d-flex align-items-center gap-4">
                        <div class="d-flex gap-2 align-items-center">
                            <div class="dropdown pe-dropdown-mega d-none d-md-block">
                                <button class="btn header-btn" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" aria-label="Notifications">
                                    <i class="bi bi-bell"></i>
                                    <div class="icon-dot"></div>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-mega-md header-dropdown-menu pe-noti-dropdown-menu p-0">
                                    <div class="p-3 border-bottom">
                                        <h6 class="d-flex align-items-center mb-0">Notification <span
                                                class="badge bg-success-subtle text-success ms-auto">4 Unread</span>
                                        </h6>
                                    </div>
                                    <div>
                                        <div class="noti-item">
                                            <div
                                                class="avatar-md d-flex align-items-center justify-content-center bg-success-subtle text-success fs-16">
                                                <i class="bi bi-bag-check-fill"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!" class="text-decoration-none stretched-link">
                                                    <h6 class="mb-1 fw-semibold">Item Back in Stock</h6>
                                                </a>
                                                <p class="text-muted mb-2 fs-12 mb-2">Today, 02:45 PM</p>
                                                <div class="p-2 bg-body-tertiary bg-opacity-50 rounded">
                                                    <p class="mb-0 lh-base fs-13">Good news! The item you wanted is
                                                        back in stock. Grab it before it’s gone again!</p>
                                                </div>
                                            </div>
                                            <a href="#!"
                                                class="position-absolute top-0 end-0 mt-2 me-3 fs-18 link link-danger z-1">
                                                <i class="bi bi-x"></i>
                                            </a>
                                        </div>
                                        <div class="noti-item">
                                            <img src="assets/images/avatar/avatar-8.jpg" alt="Avatar Iamge"
                                                class="avatar-md">
                                            <div>
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mb-1 text-muted"><strong
                                                            class="fw-semibold text-body">Donald</strong><i
                                                            class="ri-heart-3-fill text-danger ms-1"></i></h6>
                                                </a>
                                                <p class="text-muted mb-0 fs-12 mb-2">Friday, 11:29 PM</p>
                                            </div>
                                            <a href="#!"
                                                class="position-absolute top-10 end-0 fs-18 z-1 link link-danger me-3"><i
                                                    class="bi bi-x"></i></a>
                                        </div>
                                        <div class="noti-item">
                                            <div
                                                class="avatar-md d-flex align-items-center justify-content-center bg-danger-subtle text-danger fs-16">
                                                <i class="bi bi-fire"></i>
                                            </div>
                                            <div>
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mb-2">Birthday Reminder</h6>
                                                </a>
                                                <p class="text-muted mb-2 fs-12 mb-2">Tuesday, 02:45 PM</p>
                                                <div class="p-2 bg-body-tertiary bg-opacity-50 rounded">
                                                    <p class="mb-0 lh-base fs-13">Don’t forget! It’s Emily birthday
                                                        tomorrow. Send them a message!</p>
                                                </div>
                                            </div>
                                            <a href="#!"
                                                class="position-absolute top-10 end-0 fs-18 z-1 link link-danger me-3"><i
                                                    class="bi bi-x"></i></a>
                                        </div>
                                        <div class="noti-item">
                                            <img src="assets/images/avatar/avatar-5.jpg" alt="Avatar Image"
                                                class="avatar-md">
                                            <div>
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mb-1 text-muted"><strong
                                                            class="fw-semibold text-body">Richard</strong><i
                                                            class="bi bi-person-plus-fill text-primary fs-16 ms-1"></i>
                                                    </h6>
                                                </a>
                                                <p class="text-muted mb-0 fs-12">Monday, 07:14 AM</p>
                                            </div>
                                            <a href="#!"
                                                class="position-absolute top-10 end-0 fs-18 z-1 link link-danger me-3"><i
                                                    class="bi bi-x"></i></a>
                                        </div>
                                        <div class="noti-item">
                                            <img src="assets/images/avatar/avatar-4.jpg" alt="Avatar Image"
                                                class="avatar-md">
                                            <div>
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mb-2">Olivia <strong
                                                            class="fw-normal text-muted fs-13">liked your recent
                                                            post</strong></h6>
                                                </a>
                                                <p class="text-muted mb-0 fs-12">Thursday 3:20 PM</p>
                                            </div>
                                            <a href="#!"
                                                class="position-absolute top-10 end-0 fs-18 z-1 link link-danger me-3"><i
                                                    class="bi bi-x"></i></a>
                                        </div>
                                        <div class="noti-item">
                                            <img src="assets/images/avatar/avatar-1.jpg" alt="Avatar Image"
                                                class="avatar-md">
                                            <div>
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mb-2 text-body">Mia <strong
                                                            class="fw-normal text-muted fs-13">shared a file in
                                                            Marketing Campaign</strong></h6>
                                                </a>
                                                <p class="text-muted mb-3 fs-12">Thursday 3:20 PM</p>
                                                <div
                                                    class="d-flex align-items-center gap-2 p-2 position-relative z-1 border rounded">
                                                    <div
                                                        class="avatar-md d-flex align-items-center rounded justify-content-center flex-shrink-0 bg-danger-subtle text-danger">
                                                        <i class="bi bi-file-pdf"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!">
                                                            <h6 class="mb-2">Campaign_Strategy.mp4</h6>
                                                        </a>
                                                        <p class="mb-0 text-muted fs-12">MP4 | 14 MB</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#!"
                                                class="position-absolute top-10 end-0 fs-18 z-1 link link-danger me-3"><i
                                                    class="bi bi-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown pe-dropdown-mega d-none d-md-block">
                                <button class="btn btn-icon header-btn" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" aria-label="Messages">
                                    <i class="bi bi-cart position-relative"></i>
                                    <div class="icon-dot"></div>
                                </button>
                                <ul class="dropdown-menu dropdown-mega-md header-dropdown-menu p-0">
                                    <div class="card mb-0">
                                        <div
                                            class="p-5 border-bottom d-flex justify-content-between align-items-center">
                                            <h5 class="card-title">Cart Items</h5>
                                            <span class="badge text-primary bg-primary-subtle">3</span>
                                        </div>
                                        <ul class="list-unstyled list-none mb-0 p-4" id="header-cart-items-scroll">
                                            <li class="cart-item">
                                                <div class="d-flex items-start cart-dropdown-item">
                                                    <img src="assets/images/product/img-02.png"
                                                        class="avatar-lg me-4 p-1 rounded border" alt="img">
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <h6><a href="apps-ecommerce-products-details.html"
                                                                    class="text-reset">Stop Watch</a></h6>
                                                            <p class="mb-0 fs-12 text-muted">Quantity: <span>2 x
                                                                    $159</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center px-2">
                                                        <h6 class="m-0 fw-normal">$<span
                                                                class="cart-item-price">318</span></h6>
                                                    </div>
                                                    <div class="ps-2 d-flex">
                                                        <button type="button" class="btn btn-sm"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-item">
                                                <div class="d-flex items-start cart-dropdown-item">
                                                    <img src="assets/images/product/img-03.png"
                                                        class="avatar-lg me-4 p-1 rounded border" alt="img">
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <h6><a href="apps-ecommerce-products-details.html"
                                                                    class="text-reset">Jeens Shoes</a></h6>
                                                            <p class="mb-0 fs-12 text-muted">Quantity: <span>1 x
                                                                    $399</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center px-2">
                                                        <h6 class="m-0 fw-normal">$<span
                                                                class="cart-item-price">399</span></h6>
                                                    </div>
                                                    <div class="ps-2 d-flex">
                                                        <button type="button" class="btn btn-sm"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="cart-item">
                                                <div class="d-flex items-start cart-dropdown-item">
                                                    <img src="assets/images/product/img-04.png"
                                                        class="avatar-lg me-4 p-1 rounded border" alt="img">
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <h6><a href="apps-ecommerce-products-details.html"
                                                                    class="text-reset">Solder Less T-shirt</a></h6>
                                                            <p class="mb-0 fs-12 text-muted">Quantity: <span>3 x
                                                                    $259</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center px-2">
                                                        <h6 class="m-0 fw-normal">$<span
                                                                class="cart-item-price">777</span></h6>
                                                    </div>
                                                    <div class="ps-2 d-flex">
                                                        <button type="button" class="btn btn-sm"><i
                                                                class="ri-close-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div
                                            class="px-5 py-4 bg-light-subtle d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0">Order Total:</h6>
                                            <span class="fw-semibold">$1494.00</span>
                                        </div>
                                        <div class="p-5 d-flex justify-content-end gap-3">
                                            <a href="apps-ecommerce-cart.html"><button class="btn btn-light"
                                                    type="button">View Cart</button></a>
                                            <a class="btn btn-primary view-checkout"
                                                href="apps-ecommerce-checkout.html">Checkout </a>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <button class="btn header-btn d-block d-md-none" type="button" data-bs-toggle="modal"
                                data-bs-target="#searchModal">
                                <i class="ri-search-line"></i>
                            </button>
                            <button class="btn header-btn d-none d-md-block" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight" aria-label="Settings">
                                <i class="bi bi-gear"></i>
                            </button>
                        </div>
                        <div class="dark-mode-btn" id="toggleMode">
                            <button class="btn header-btn active" id="lightModeBtn" type="button"
                                aria-label="Switch to light mode">
                                <i class="bi bi-brightness-high"></i>
                            </button>
                            <button class="btn header-btn" id="darkModeBtn" type="button"
                                aria-label="Switch to Dark mode">
                                <i class="bi bi-moon-stars"></i>
                            </button>
                        </div>
                        <div class="dropdown pe-dropdown-mega d-none d-md-block">
                            <button class="header-profile-btn btn gap-1 text-start" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="d-none d-xl-block pe-2">
                                    <span class="d-block mb-0 fs-12 fw-semibold">{{ Auth::user()->name }}</span>
                                    <span class="d-block mb-0 fs-10 text-muted">{{ Auth::user()->email }}</span>
                                </div>
                                <span class="header-btn btn position-relative">
                                    <img src="{{ asset('urbix/images/avatar/dummy-avatar.jpg') }}" alt="Avatar Image"
                                        class="img-fluid rounded-circle">
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-mega-sm header-dropdown-menu p-3">
                                <div class="border-bottom pb-2 mb-2 d-flex align-items-center gap-2">
                                    <img src="{{ asset('urbix/images/avatar/dummy-avatar.jpg') }}" alt="Avatar Image"
                                        class="avatar-md">
                                    <div>
                                        <a href="javascript:void(0)">
                                            <h6 class="mb-0 lh-base">{{ Auth::user()->name }}</h6>
                                        </a>
                                        <p class="mb-0 fs-13 text-muted">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled mb-1 border-bottom pb-1">
                                    <li><a class="dropdown-item" href="pages-profile.html"><i
                                                class="bi bi-person me-2"></i> View Profile</a></li>
                                    <li><a class="dropdown-item" href="#" type="button"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                            aria-controls="offcanvasRight" aria-label="Settings"><i
                                                class="bi bi-gear me-2"></i> Settings</a></li>
                                    {{-- <li><a class="dropdown-item" href="pages-billing-subscription.html"><i
                                                class="bi bi-award me-2"></i> Subscription</a></li> --}}
                                </ul>
                                <ul class="list-unstyled mb-1 border-bottom pb-1">
                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                class="bi bi-clock me-2"></i> ChangLog</a></li>
                                    <li><a class="dropdown-item" href="pages-pricing.html"><i
                                                class="bi bi-currency-dollar"></i> Pricing</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0)"><i
                                                class="bi bi-headset me-2"></i> Support</a></li>
                                </ul>
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        {{-- <a class="dropdown-item" href="auth-signout.html"><i class="bi bi-box-arrow-right me-2"></i> Sign Out</a> --}}
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                            {{-- <i class="fa fa-lock "></i> --}}
                                            <i class="bi bi-box-arrow-right me-2"></i> {{ __('Logout') }}
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END Header -->

        <!-- Search Modal -->
        <div class="modal fade search-modal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header d-block">
                        <div class="form-icon">
                            <input type="text" class="form-control form-control-icon" id="searchInputInModal"
                                placeholder="Search" required>
                            <div class="search-btn w-44px">
                                <i class="ri-search-line text-muted fs-16"></i>
                            </div>
                            <button type="button"
                                class="btn-close position-absolute end-0 top-50 translate-middle-y d-inline-block m-0"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="modal-body" data-simplebar id="list-items">
                        <ul class="list-unstyled mb-0" id="searchList"></ul>
                    </div>
                </div>
            </div>
        </div>
        <aside class="pe-app-sidebar" id="sidebar">
            <div class="pe-app-sidebar-logo px-6 d-flex align-items-center position-relative">
                <!--begin::Brand Image-->
                <a href="index.html" class="d-flex align-items-end logo-main">
                    <img height="35" width="34" class="logo-dark" alt="Dark Logo"
                        src="{{ asset('urbix/flaticon/planet.png') }}">
                    <img height="35" width="34" class="logo-light" alt="Light Logo"
                        src="{{ asset('urbix/flaticon/planet.png') }}">
                    <h3 class="text-body-emphasis fw-bolder mb-0 ms-1">AR-SYSTEM</h3>
                </a>
                <button type="button" id="sidebarDefaultArrow"
                    class="btn btn-sm p-0 fs-16 text-body-emphasis ms-auto float-end d-none icon-hover-btn d-none"><i
                        class="ri-arrow-right-line fs-5"></i></button>
                <!--end::Brand Image-->
            </div>
            <nav class="pe-app-sidebar-menu nav nav-pills" data-simplebar id="sidebar-simplebar">
                <div class="d-flex align-items-start flex-column w-100">
                    <ul class="pe-main-menu list-unstyled">
                        <!-- Main Menu -->
                        <li class="pe-menu-title">Main</li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapseDashboards" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapseDashboards">
                                <i class="ri-dashboard-line pe-nav-icon"></i>
                                <span class="pe-nav-content">Dashboards</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapseDashboards">
                                <li class="pe-slide-item">
                                    <a href="index.html" class="pe-nav-link">
                                        E-Commerece
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="dashboard-school.html" class="pe-nav-link">
                                        School
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="dashboard-analytics.html" class="pe-nav-link">
                                        Sales Analytics
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="dashboard-media.html" class="pe-nav-link">
                                        Social Media
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapseApplications" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapseApplications">
                                <i class="ri-apps-2-line pe-nav-icon"></i>
                                <span class="pe-nav-content">Applications</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapseApplications">
                                <li class="pe-slide-item">
                                    <a href="apps-calendar.html" class="pe-nav-link">
                                        Calendar
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="apps-chat.html" class="pe-nav-link">
                                        Chat
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="apps-email.html" class="pe-nav-link">
                                        Email
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="apps-kanban.html" class="pe-nav-link">
                                        Kanban
                                    </a>
                                </li>
                                <li class="pe-slide-item pe-has-sub">
                                    <a href="#collapseECommerce" class="pe-nav-link" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseECommerce">
                                        <span class="pe-nav-sub-content">E-Commerce</span>
                                        <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                    </a>
                                    <ul class="pe-slide-menu collapse" id="collapseECommerce">
                                        <li class="pe-slide-item">
                                            <a href="apps-ecommerce-products.html" class="pe-nav-link">
                                                Products
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-ecommerce-products-list.html" class="pe-nav-link">
                                                Product List
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-ecommerce-products-details.html" class="pe-nav-link">
                                                Product Details
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-ecommerce-create-products.html" class="pe-nav-link">
                                                Create Product
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-ecommerce-customer.html" class="pe-nav-link">
                                                Customer
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-ecommerce-customer-details.html" class="pe-nav-link">
                                                Customer Details
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-ecommerce-order.html" class="pe-nav-link">
                                                Orders
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-ecommerce-order-details.html" class="pe-nav-link">
                                                Order Details
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-ecommerce-cart.html" class="pe-nav-link">
                                                Cart
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-ecommerce-checkout.html" class="pe-nav-link">
                                                Checkout
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-ecommerce-wishlist.html" class="pe-nav-link">
                                                Wishlist
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pe-slide-item pe-has-sub">
                                    <a href="#collapseSchool" class="pe-nav-link" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseSchool">
                                        <span class="pe-nav-sub-content">School</span>
                                        <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                    </a>
                                    <ul class="pe-slide-menu collapse" id="collapseSchool">
                                        <li class="pe-slide-item pe-has-sub">
                                            <a href="#collapseStudents" class="pe-nav-link" data-bs-toggle="collapse"
                                                aria-expanded="false" aria-controls="collapseStudents">
                                                <span class="pe-nav-sub-content">Student</span>
                                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                            </a>
                                            <ul class="pe-slide-menu collapse" id="collapseStudents">
                                                <li class="pe-slide-item">
                                                    <a href="apps-school-students.html" class="pe-nav-link">
                                                        All Students
                                                    </a>
                                                </li>
                                                <li class="pe-slide-item">
                                                    <a href="apps-school-admission-form.html" class="pe-nav-link">
                                                        Admission Form
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="pe-slide-item pe-has-sub">
                                            <a href="#collapseTeacher" class="pe-nav-link" data-bs-toggle="collapse"
                                                aria-expanded="false" aria-controls="collapseTeacher">
                                                <span class="pe-nav-sub-content">Teacher</span>
                                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                            </a>
                                            <ul class="pe-slide-menu collapse" id="collapseTeacher">
                                                <li class="pe-slide-item">
                                                    <a href="apps-teacher.html" class="pe-nav-link">
                                                        All Teacher
                                                    </a>
                                                </li>
                                                <li class="pe-slide-item">
                                                    <a href="apps-teacher-schedule.html" class="pe-nav-link">
                                                        Schedule
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-school-parents.html" class="pe-nav-link">
                                                Parents
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-school-courses.html" class="pe-nav-link">
                                                Course
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="apps-school-exam.html" class="pe-nav-link">
                                                Exam
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Pages -->
                        <li class="pe-menu-title">Pages</li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapseAuth" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapseAuth">
                                <i class="ri-user-line pe-nav-icon"></i>
                                <span class="pe-nav-content">Authentication</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapseAuth">
                                <li class="slide pe-nav-content1">
                                    <a href="javascript:void(0)">Authentication</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="auth-signin.html" class="pe-nav-link">
                                        Sign in
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="auth-signup.html" class="pe-nav-link">
                                        Register
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="auth-forgot-password.html" class="pe-nav-link">
                                        Forgot Password
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="auth-two-step-verify.html" class="pe-nav-link">
                                        Two Step Verification
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="auth-reset-password.html" class="pe-nav-link">
                                        Reset Password
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="auth-email-verify.html" class="pe-nav-link">
                                        Email Verification
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="auth-signout.html" class="pe-nav-link">
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapsePages" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapsePages">
                                <i class="ri-pages-line pe-nav-icon"></i>
                                <span class="pe-nav-content">Pages</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapsePages">
                                <li class="slide pe-nav-content1">
                                    <a href="javascript:void(0)">Pages</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="pages-starter.html" class="pe-nav-link">
                                        Starter Page
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="pages-profile.html" class="pe-nav-link">
                                        Profile
                                    </a>
                                </li>
                                <li class="pe-slide-item pe-has-sub">
                                    <a href="#collapseBlogs" class="pe-nav-link" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseBlogs">
                                        <span class="pe-nav-sub-content">Blogs</span>
                                        <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                    </a>
                                    <ul class="pe-slide-menu collapse" id="collapseBlogs">
                                        <li class="slide pe-nav-content1">
                                            <a href="javascript:void(0)">Blog</a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="pages-blog-list.html" class="pe-nav-link">
                                                Blog List
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="pages-blog-details.html" class="pe-nav-link">
                                                Blog Details
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="pages-blog-create.html" class="pe-nav-link">
                                                Create Blog
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="pages-pricing.html" class="pe-nav-link">
                                        Pricing
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="pages-privacy-policy.html" class="pe-nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="pages-terms-conditions.html" class="pe-nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="pages-timeline.html" class="pe-nav-link">
                                        Timeline
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="pages-faqs.html" class="pe-nav-link">
                                        FAQs
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="pages-billing-subscription.html" class="pe-nav-link">
                                        Billing & Subscription
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="not-authorize.html" class="pe-nav-link">
                                        Not Authorized
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="coming-soon.html" class="pe-nav-link">
                                        Comming Soon
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="under-maintenance.html" class="pe-nav-link">
                                        Maintenance
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="error.html" class="pe-nav-link">
                                        Error
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Components -->
                        <li class="pe-menu-title">Components</li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapseBaseUI" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapseBaseUI">
                                <i class="ri-pencil-ruler-2-line pe-nav-icon"></i>
                                <span class="pe-nav-content">Base UI</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapseBaseUI">
                                <li class="slide pe-nav-content1">
                                    <a href="javascript:void(0)">Base UI</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-accordions.html" class="pe-nav-link">Accordions</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-alerts.html" class="pe-nav-link">Alert</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-avatars.html" class="pe-nav-link">Avatar</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-badges.html" class="pe-nav-link">Badge</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-breadcrumbs.html" class="pe-nav-link">Breadcrumb</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-buttons.html" class="pe-nav-link">Buttons</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-button-group.html" class="pe-nav-link">Button Group</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-card.html" class="pe-nav-link">Cards</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-cookie.html" class="pe-nav-link">Cookie</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-carousel.html" class="pe-nav-link">Carousel</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-dropdowns.html" class="pe-nav-link">Dropdown</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-images-figures.html" class="pe-nav-link">Images & Figures</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-links.html" class="pe-nav-link">Links</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-list.html" class="pe-nav-link">List Group</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-tabs.html" class="pe-nav-link">Nav & Tabs</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-pagination.html" class="pe-nav-link">Pagination</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-popover.html" class="pe-nav-link">Popovers</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-progress.html" class="pe-nav-link">Progress</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-spinner.html" class="pe-nav-link">Spinners</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-separator.html" class="pe-nav-link">Separator</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-modal.html" class="pe-nav-link">Modal</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-offcanvas.html" class="pe-nav-link">Offcanvas</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-placeholders.html" class="pe-nav-link">Placeholders</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-toast.html" class="pe-nav-link">Toasts</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-tooltips.html" class="pe-nav-link">Tooltips</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-typography.html" class="pe-nav-link">Typography</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-utilities.html" class="pe-nav-link">Utilities</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapseAdvancedUI" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapseAdvancedUI">
                                <i class="ri-color-filter-ai-line pe-nav-icon"></i>
                                <span class="pe-nav-content">Advanced UI</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapseAdvancedUI">
                                <li class="slide pe-nav-content1">
                                    <a href="javascript:void(0)">Advanced UI</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-block.html" class="pe-nav-link">Block</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-countup.html" class="pe-nav-link">Count Up</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-draggable-cards.html" class="pe-nav-link">Draggable Cards</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-media-player.html" class="pe-nav-link">Media Player</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-ratings.html" class="pe-nav-link">Rating</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-ribbons.html" class="pe-nav-link">Ribbons</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-scrollspy.html" class="pe-nav-link">Scroll Spy</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-sortable-js.html" class="pe-nav-link">Sortable JS</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-sweetalert2.html" class="pe-nav-link">Sweet Alert</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-advance-swiper.html" class="pe-nav-link">Swiper JS</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-tour.html" class="pe-nav-link">Tour</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-treeview.html" class="pe-nav-link">Tree View</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapseFroms" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapseFroms">
                                <i class="ri-information-line pe-nav-icon"></i>
                                <span class="pe-nav-content">Forms</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapseFroms">
                                <li class="slide pe-nav-content1">
                                    <a href="javascript:void(0)">Forms</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-elements.html" class="pe-nav-link">
                                        Input
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-checkboxs-radios.html" class="pe-nav-link">
                                        Checkbox & Radios
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-input-group.html" class="pe-nav-link">
                                        Inout Group
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-select.html" class="pe-nav-link">
                                        Form Select
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-range.html" class="pe-nav-link">
                                        Range Slider
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-input-spin.html" class="pe-nav-link">
                                        Input Spin
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-input-masks.html" class="pe-nav-link">
                                        Input Masks
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-file-uploads.html" class="pe-nav-link">
                                        File Uploads
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-date-picker.html" class="pe-nav-link">
                                        Date,Time Picker
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-floating-labels.html" class="pe-nav-link">Floating Label</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-layout.html" class="pe-nav-link">Form Layout</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-editor.html" class="pe-nav-link">Editor</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-validation.html" class="pe-nav-link">Form Validation</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-wizards.html" class="pe-nav-link">Form Wizards</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-form-advanced.html" class="pe-nav-link">Form Advanced</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapseTables" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapseTables">
                                <i class="ri-table-line pe-nav-icon"></i>
                                <span class="pe-nav-content">Tables</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapseTables">
                                <li class="slide pe-nav-content1">
                                    <a href="javascript:void(0)">Tables</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-tables-basic.html" class="pe-nav-link">
                                        Basic Tables
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-tables-listjs.html" class="pe-nav-link">
                                        List JS Table
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-tables-gridjs.html" class="pe-nav-link">
                                        Grid JS Table
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="ui-tables-datatables.html" class="pe-nav-link">
                                        Datatables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapseCharts" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapseCharts">
                                <i class="ri-line-chart-line pe-nav-icon"></i>
                                <span class="pe-nav-content">Charts</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapseCharts">
                                <li class="slide pe-nav-content1">
                                    <a href="javascript:void(0)">Charts</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="chart-apex-line.html" class="pe-nav-link">
                                        Apex Charts
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="chart-js-chart.html" class="pe-nav-link">
                                        Chartjs Charts
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="echart-chart.html" class="pe-nav-link">
                                        Echart Charts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Icons & Maps -->
                        <li class="pe-menu-title">Icons & Maps</li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapseIcons" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapseIcons">
                                <i class="ri-compasses-2-line pe-nav-icon"></i>
                                <span class="pe-nav-content">Icons</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapseIcons">
                                <li class="slide pe-nav-content1">
                                    <a href="javascript:void(0)">Icons</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="icons-remix.html" class="pe-nav-link">
                                        Remix Icons
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="icons-bootstrap.html" class="pe-nav-link">
                                        Bootstrap Icons
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapseMaps" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapseMaps">
                                <i class="ri-compass-3-line pe-nav-icon"></i>
                                <span class="pe-nav-content">Maps</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapseMaps">
                                <li class="slide pe-nav-content1">
                                    <a href="javascript:void(0)">Maps</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="google-maps.html" class="pe-nav-link">
                                        Google Maps
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="maps-leaflet.html" class="pe-nav-link">
                                        Leaflet Maps
                                    </a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="maps-vector.html" class="pe-nav-link">
                                        Vector Maps
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Other -->
                        <li class="pe-menu-title">Other</li>
                        <li class="pe-slide pe-has-sub">
                            <a href="#collapseMenuLavels" class="pe-nav-link" data-bs-toggle="collapse"
                                aria-expanded="false" aria-controls="collapseMenuLavels">
                                <i class="ri-flow-chart pe-nav-icon"></i>
                                <span class="pe-nav-content">Menu levels</span>
                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                            </a>
                            <ul class="pe-slide-menu collapse" id="collapseMenuLavels">
                                <li class="slide pe-nav-content1">
                                    <a href="javascript:void(0)">Menu levels</a>
                                </li>
                                <li class="pe-slide-item">
                                    <a href="#!" class="pe-nav-link">
                                        Level 1.1
                                    </a>
                                </li>
                                <li class="pe-slide-item pe-has-sub">
                                    <a href="#collapseMenuLavels2" class="pe-nav-link" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="collapseMenuLavels2">
                                        <span class="pe-nav-sub-content">Level 1.2</span>
                                        <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                    </a>
                                    <ul class="pe-slide-menu collapse" id="collapseMenuLavels2">
                                        <li class="slide pe-nav-content1">
                                            <a href="javascript:void(0)">Level 1.2</a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="#!" class="pe-nav-link">
                                                Level 2.1
                                            </a>
                                        </li>
                                        <li class="pe-slide-item">
                                            <a href="#!" class="pe-nav-link">
                                                Level 2.2
                                            </a>
                                        </li>
                                        <li class="pe-slide-item pe-has-sub">
                                            <a href="#collapseMenuLavels3" class="pe-nav-link"
                                                data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="collapseMenuLavels3">
                                                <span class="pe-nav-sub-content">Level 2.3</span>
                                                <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                            </a>
                                            <ul class="pe-slide-menu collapse" id="collapseMenuLavels3">
                                                <li class="slide pe-nav-content1">
                                                    <a href="javascript:void(0)">Level 2.3</a>
                                                </li>
                                                <li class="pe-slide-item">
                                                    <a href="#!" class="pe-nav-link">
                                                        Level 3.1
                                                    </a>
                                                </li>
                                                <li class="pe-slide-item">
                                                    <a href="#!" class="pe-nav-link">
                                                        Level 3.2
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Widgets -->
                    <div class="sidebar-widget text-center">
                        <img src="assets/images/sidebar-widget.png" alt="Widget Image">
                        <p class="text-muted fw-semibold">Click here to update the new version</p>
                        <button class="btn btn-primary rounded-pill w-100">Update Now</button>
                    </div>
                </div>
            </nav>
        </aside>
        <aside class="pe-app-sidebar horizontal-sidebar" id="horizontal-aside">
            <!-- data-simplebar id="sidebar-simplebar" -->
            <nav class="pe-app-sidebar-menu nav nav-pills">
                <ul class="pe-horizontal-menu mb-0 list-unstyled" id="horizontal-menu">
                    <!-- Main Menu -->
                    <li class="pe-menu-title">Main</li>
                    <li class="pe-slide pe-has-sub">
                        <a href="#collapseDashboards" class="pe-nav-link" data-bs-toggle="collapse"
                            aria-expanded="false" aria-controls="collapseDashboards">
                            <i class="ri-dashboard-line pe-nav-icon"></i>
                            <span class="pe-nav-content">Dashboards</span>
                            <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                        </a>
                        <ul class="pe-slide-menu collapse" id="collapseDashboards">
                            <li class="pe-slide-item">
                                <a href="index.html" class="pe-nav-link">
                                    E-Commerece
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="dashboard-school.html" class="pe-nav-link">
                                    School
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="dashboard-analytics.html" class="pe-nav-link">
                                    Sales Analytics
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="dashboard-media.html" class="pe-nav-link">
                                    Social Media
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pe-slide pe-has-sub">
                        <a href="#collapseApplications" class="pe-nav-link" data-bs-toggle="collapse"
                            aria-expanded="false" aria-controls="collapseApplications">
                            <i class="ri-apps-2-line pe-nav-icon"></i>
                            <span class="pe-nav-content">Applications</span>
                            <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                        </a>
                        <ul class="pe-slide-menu collapse" id="collapseApplications">
                            <li class="pe-slide-item">
                                <a href="apps-calendar.html" class="pe-nav-link">
                                    Calendar
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="apps-chat.html" class="pe-nav-link">
                                    Chat
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="apps-email.html" class="pe-nav-link">
                                    Email
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="apps-kanban.html" class="pe-nav-link">
                                    Kanban
                                </a>
                            </li>
                            <li class="pe-slide-item pe-has-sub">
                                <a href="#collapseECommerce" class="pe-nav-link" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseECommerce">
                                    <span class="pe-nav-sub-content">E-Commerce</span>
                                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                </a>
                                <ul class="pe-slide-menu collapse" id="collapseECommerce">
                                    <li class="pe-slide-item">
                                        <a href="apps-ecommerce-products.html" class="pe-nav-link">
                                            Products
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-ecommerce-products-list.html" class="pe-nav-link">
                                            Product List
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-ecommerce-products-details.html" class="pe-nav-link">
                                            Product Details
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-ecommerce-create-products.html" class="pe-nav-link">
                                            Create Product
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-ecommerce-customer.html" class="pe-nav-link">
                                            Customer
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-ecommerce-customer-details.html" class="pe-nav-link">
                                            Customer Details
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-ecommerce-order.html" class="pe-nav-link">
                                            Orders
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-ecommerce-order-details.html" class="pe-nav-link">
                                            Order Details
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-ecommerce-cart.html" class="pe-nav-link">
                                            Cart
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-ecommerce-checkout.html" class="pe-nav-link">
                                            Checkout
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-ecommerce-wishlist.html" class="pe-nav-link">
                                            Wishlist
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pe-slide-item pe-has-sub">
                                <a href="#collapseSchool" class="pe-nav-link" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseSchool">
                                    <span class="pe-nav-sub-content">School</span>
                                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                </a>
                                <ul class="pe-slide-menu collapse" id="collapseSchool">
                                    <li class="pe-slide-item pe-has-sub">
                                        <a href="#collapseStudents" class="pe-nav-link" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseStudent">
                                            <span class="pe-nav-sub-content">Student</span>
                                            <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                        </a>
                                        <ul class="pe-slide-menu collapse" id="collapseStudents">
                                            <li class="pe-slide-item">
                                                <a href="apps-school-students.html" class="pe-nav-link">
                                                    All Students
                                                </a>
                                            </li>
                                            <li class="pe-slide-item">
                                                <a href="apps-school-admission-form.html" class="pe-nav-link">
                                                    Admission Form
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pe-slide-item pe-has-sub">
                                        <a href="#collapseTeacher" class="pe-nav-link" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseTeacher">
                                            <span class="pe-nav-sub-content">Teacher</span>
                                            <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                        </a>
                                        <ul class="pe-slide-menu collapse" id="collapseTeacher">
                                            <li class="pe-slide-item">
                                                <a href="apps-teacher.html" class="pe-nav-link">
                                                    All Teacher
                                                </a>
                                            </li>
                                            <li class="pe-slide-item">
                                                <a href="apps-teacher-schedule.html" class="pe-nav-link">
                                                    Schedule
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-school-parents.html" class="pe-nav-link">
                                            Parents
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-school-courses.html" class="pe-nav-link">
                                            Course
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="apps-school-exam.html" class="pe-nav-link">
                                            Exam
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Pages -->
                    <li class="pe-menu-title">Pages</li>
                    <li class="pe-slide pe-has-sub">
                        <a href="#collapseAuth" class="pe-nav-link" data-bs-toggle="collapse"
                            aria-expanded="false" aria-controls="collapseAuth">
                            <i class="ri-user-line pe-nav-icon"></i>
                            <span class="pe-nav-content">Authentication</span>
                            <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                        </a>
                        <ul class="pe-slide-menu collapse" id="collapseAuth">
                            <li class="slide pe-nav-content1">
                                <a href="javascript:void(0)">Authentication</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="auth-signin.html" class="pe-nav-link">
                                    Sign in
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="auth-signup.html" class="pe-nav-link">
                                    Register
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="auth-forgot-password.html" class="pe-nav-link">
                                    Forgot Password
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="auth-two-step-verify.html" class="pe-nav-link">
                                    Two Step Verification
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="auth-reset-password.html" class="pe-nav-link">
                                    Reset Password
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="auth-email-verify.html" class="pe-nav-link">
                                    Email Verification
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="coming-soon.html" class="pe-nav-link">
                                    Log out
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pe-slide pe-has-sub">
                        <a href="#collapsePages" class="pe-nav-link" data-bs-toggle="collapse"
                            aria-expanded="false" aria-controls="collapsePages">
                            <i class="ri-pages-line pe-nav-icon"></i>
                            <span class="pe-nav-content">Pages</span>
                            <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                        </a>
                        <ul class="pe-slide-menu collapse" id="collapsePages">
                            <li class="slide pe-nav-content1">
                                <a href="javascript:void(0)">Pages</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="pages-starter.html" class="pe-nav-link">
                                    Starter Page
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="pages-profile.html" class="pe-nav-link">
                                    Profile
                                </a>
                            </li>
                            <li class="pe-slide-item pe-has-sub">
                                <a href="#collapseBlogs" class="pe-nav-link" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseBlogs">
                                    <span class="pe-nav-sub-content">Blogs</span>
                                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                </a>
                                <ul class="pe-slide-menu collapse" id="collapseBlogs">
                                    <li class="slide pe-nav-content1">
                                        <a href="javascript:void(0)">Blog</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="pages-blog-list.html" class="pe-nav-link">
                                            Blog List
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="pages-blog-details.html" class="pe-nav-link">
                                            Blog Details
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="pages-blog-create.html" class="pe-nav-link">
                                            Create Blog
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pe-slide-item">
                                <a href="pages-pricing.html" class="pe-nav-link">
                                    Pricing
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="pages-privacy-policy.html" class="pe-nav-link">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="pages-terms-conditions.html" class="pe-nav-link">
                                    Terms & Conditions
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="pages-timeline.html" class="pe-nav-link">
                                    Timeline
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="pages-faqs.html" class="pe-nav-link">
                                    FAQs
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="pages-billing-subscription.html" class="pe-nav-link">
                                    Billing & Subscription
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="not-authorize.html" class="pe-nav-link">
                                    Not Authorized
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="coming-soon.html" class="pe-nav-link">
                                    Comming Soon
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="under-maintenance.html" class="pe-nav-link">
                                    Maintenance
                                </a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="error.html" class="pe-nav-link">
                                    Error
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Components -->
                    <li class="pe-menu-title">Components</li>
                    <li class="pe-slide pe-has-sub">
                        <a href="#collapseBaseUI" class="pe-nav-link" data-bs-toggle="collapse"
                            aria-expanded="false" aria-controls="collapseBaseUI">
                            <i class="ri-pencil-ruler-2-line pe-nav-icon"></i>
                            <span class="pe-nav-content">Base UI</span>
                            <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                        </a>
                        <ul class="pe-slide-menu collapse" id="collapseBaseUI" data-simplebar
                            style="max-height: 550px;">
                            <li class="slide pe-nav-content1">
                                <a href="javascript:void(0)">Base UI</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-accordions.html" class="pe-nav-link">Accordions</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-alerts.html" class="pe-nav-link">Alert</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-avatars.html" class="pe-nav-link">Avatar</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-badges.html" class="pe-nav-link">Badge</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-breadcrumbs.html" class="pe-nav-link">Breadcrumb</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-buttons.html" class="pe-nav-link">Buttons</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-button-group.html" class="pe-nav-link">Button Group</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-card.html" class="pe-nav-link">Cards</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-cookie.html" class="pe-nav-link">Cookie</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-carousel.html" class="pe-nav-link">Carousel</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-dropdowns.html" class="pe-nav-link">Dropdown</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-images-figures.html" class="pe-nav-link">Images & Figures</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-links.html" class="pe-nav-link">Links</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-list.html" class="pe-nav-link">List Group</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-tabs.html" class="pe-nav-link">Nav & Tabs</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-pagination.html" class="pe-nav-link">Pagination</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-popover.html" class="pe-nav-link">Popovers</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-progress.html" class="pe-nav-link">Progress</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-spinner.html" class="pe-nav-link">Spinners</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-separator.html" class="pe-nav-link">Separator</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-modal.html" class="pe-nav-link">Modal</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-offcanvas.html" class="pe-nav-link">Off Canvas</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-placeholders.html" class="pe-nav-link">Placeholders</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-toast.html" class="pe-nav-link">Toasts</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-tooltips.html" class="pe-nav-link">Tooltips</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-typography.html" class="pe-nav-link">Typography</a>
                            </li>
                            <li class="pe-slide-item">
                                <a href="ui-utilities.html" class="pe-nav-link">Utilities</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pe-slide pe-has-sub">
                        <a href="#collapseMore" class="pe-nav-link" data-bs-toggle="collapse"
                            aria-expanded="false" aria-controls="collapseMore">
                            <i class="ri-color-filter-ai-line pe-nav-icon"></i>
                            <span class="pe-nav-content">More</span>
                            <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                        </a>
                        <ul class="pe-slide-menu collapse" id="collapseMore">
                            <li class="pe-slide-item pe-has-sub">
                                <a href="#collapseAdvancedUI" class="pe-nav-link" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseAdvancedUI">
                                    <span class="pe-nav-sub-content">Advanced UI</span>
                                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                </a>
                                <ul class="pe-slide-menu collapse" id="collapseAdvancedUI">
                                    <li class="pe-slide-item">
                                        <a href="ui-block.html" class="pe-nav-link">Block</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-countup.html" class="pe-nav-link">Count Up</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-draggable-cards.html" class="pe-nav-link">Draggable Cards</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-media-player.html" class="pe-nav-link">Media Player</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-ratings.html" class="pe-nav-link">Rating</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-ribbons.html" class="pe-nav-link">Ribbons</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-scrollspy.html" class="pe-nav-link">Scroll Spy</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-sortable-js.html" class="pe-nav-link">Sortable JS</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-sweetalert2.html" class="pe-nav-link">Sweet Alert</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-advance-swiper.html" class="pe-nav-link">Swiper JS</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-tour.html" class="pe-nav-link">Tour</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-treeview.html" class="pe-nav-link">Tree View</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pe-slide-item pe-has-sub">
                                <a href="#collapseForms" class="pe-nav-link" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseForms">
                                    <span class="pe-nav-sub-content">Forms</span>
                                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                </a>
                                <ul class="pe-slide-menu collapse" id="collapseFroms">
                                    <li class="slide pe-nav-content1">
                                        <a href="javascript:void(0)">Forms</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-elements.html" class="pe-nav-link">
                                            Input
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-checkboxs-radios.html" class="pe-nav-link">
                                            Checkbox & Radios
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-input-group.html" class="pe-nav-link">
                                            Inout Group
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-select.html" class="pe-nav-link">
                                            Form Select
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-range.html" class="pe-nav-link">
                                            Range Slider
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-input-spin.html" class="pe-nav-link">
                                            Input Spin
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-input-masks.html" class="pe-nav-link">
                                            Input Masks
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-file-uploads.html" class="pe-nav-link">
                                            File Uploads
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-date-picker.html" class="pe-nav-link">
                                            Date,Time Picker
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-floating-labels.html" class="pe-nav-link">Floating Label</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-layout.html" class="pe-nav-link">Form Layout</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-editor.html" class="pe-nav-link">Editor</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-validation.html" class="pe-nav-link">Form Validation</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-wizards.html" class="pe-nav-link">Form Wizards</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-form-advanced.html" class="pe-nav-link">Form Advanced</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pe-slide-item pe-has-sub">
                                <a href="#collapseTables" class="pe-nav-link" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseTables">
                                    <span class="pe-nav-sub-content">Tables</span>
                                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                </a>
                                <ul class="pe-slide-menu collapse" id="collapseTables">
                                    <li class="slide pe-nav-content1">
                                        <a href="javascript:void(0)">Tables</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-tables-basic.html" class="pe-nav-link">
                                            Basic Tables
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-tables-listjs.html" class="pe-nav-link">
                                            List JS Table
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-tables-gridjs.html" class="pe-nav-link">
                                            Grid JS Table
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="ui-tables-datatables.html" class="pe-nav-link">
                                            Datatables
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pe-slide-item pe-has-sub">
                                <a href="#collapseCharts" class="pe-nav-link" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseCharts">
                                    <span class="pe-nav-sub-content">Charts</span>
                                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                </a>
                                <ul class="pe-slide-menu collapse" id="collapseCharts">
                                    <li class="slide pe-nav-content1">
                                        <a href="javascript:void(0)">Charts</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="chart-apex-line.html" class="pe-nav-link">
                                            Apex Charts
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="chart-js-chart.html" class="pe-nav-link">
                                            Chartjs Charts
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="echart-chart.html" class="pe-nav-link">
                                            Echart Charts
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pe-slide-item pe-has-sub">
                                <a href="#collapseIcons" class="pe-nav-link" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseIcons">
                                    <span class="pe-nav-sub-content">Icons</span>
                                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                </a>
                                <ul class="pe-slide-menu collapse" id="collapseIcons">
                                    <li class="slide pe-nav-content1">
                                        <a href="javascript:void(0)">Icons</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="icons-remix.html" class="pe-nav-link">
                                            Remix Icons
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="icons-bootstrap.html" class="pe-nav-link">
                                            Bootstrap Icons
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pe-slide-item pe-has-sub">
                                <a href="#collapseMaps" class="pe-nav-link" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseMaps">
                                    <span class="pe-nav-sub-content">Maps</span>
                                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                </a>
                                <ul class="pe-slide-menu collapse" id="collapseMaps">
                                    <li class="slide pe-nav-content1">
                                        <a href="javascript:void(0)">Maps</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="google-maps.html" class="pe-nav-link">
                                            Google Maps
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="maps-leaflet.html" class="pe-nav-link">
                                            Leaflet Maps
                                        </a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="maps-vector.html" class="pe-nav-link">
                                            Vector Maps
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pe-slide-item pe-has-sub">
                                <a href="#collapseMenulevels" class="pe-nav-link" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="collapseMenulevels">
                                    <span class="pe-nav-sub-content">Menu levels</span>
                                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                </a>
                                <ul class="pe-slide-menu collapse" id="collapseMenuLavels">
                                    <li class="slide pe-nav-content1">
                                        <a href="javascript:void(0)">Menu levels</a>
                                    </li>
                                    <li class="pe-slide-item">
                                        <a href="#!" class="pe-nav-link">
                                            Level 1.1
                                        </a>
                                    </li>
                                    <li class="pe-slide-item pe-has-sub">
                                        <a href="#collapseMenuLavels2" class="pe-nav-link"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="collapseMenuLavels2">
                                            <span class="pe-nav-sub-content">Level 1.2</span>
                                            <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                        </a>
                                        <ul class="pe-slide-menu collapse" id="collapseMenuLavels2">
                                            <li class="slide pe-nav-content1">
                                                <a href="javascript:void(0)">Level 1.2</a>
                                            </li>
                                            <li class="pe-slide-item">
                                                <a href="#!" class="pe-nav-link">
                                                    Level 2.1
                                                </a>
                                            </li>
                                            <li class="pe-slide-item">
                                                <a href="#!" class="pe-nav-link">
                                                    Level 2.2
                                                </a>
                                            </li>
                                            <li class="pe-slide-item pe-has-sub">
                                                <a href="#collapseMenuLavels3" class="pe-nav-link"
                                                    data-bs-toggle="collapse" aria-expanded="false"
                                                    aria-controls="collapseMenuLavels3">
                                                    <span class="pe-nav-sub-content">Level 2.3</span>
                                                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                                                </a>
                                                <ul class="pe-slide-menu collapse" id="collapseMenuLavels3">
                                                    <li class="slide pe-nav-content1">
                                                        <a href="javascript:void(0)">Level 2.3</a>
                                                    </li>
                                                    <li class="pe-slide-item">
                                                        <a href="#!" class="pe-nav-link">
                                                            Level 3.1
                                                        </a>
                                                    </li>
                                                    <li class="pe-slide-item">
                                                        <a href="#!" class="pe-nav-link">
                                                            Level 3.2
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
        <div class="sidebar-backdrop" id="sidebar-backdrop"></div>
        <main class="app-wrapper">


            @yield('content')
        </main>

        <div class="offcanvas offcanvas-end border-0 data-theme-colors layout-customizer" tabindex="-1"
            id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="flex-wrap align-items-center bg-primary bg-gradient p-5 offcanvas-header">
                <p class="m-0 text-white fw-semibold fs-16" id="offcanvasRightLabel">Theme Customization</p>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="p-6">
                        <h6 class="mb-5 fw-semibold">Layout:</h6>
                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="customizer-layout01" name="data-layout" type="radio"
                                        value="vertical" class="form-check-input" checked>
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2"
                                        for="customizer-layout01">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-2">
                                                    <span class="d-block p-1 px-2 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span
                                                        class="d-block h-100 bg-primary-subtle m-3 rounded-2 rounded-2"></span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Vertical</h5>
                            </div>
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="customizer-layout02" name="data-layout" type="radio"
                                        value="horizontal" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2"
                                        for="customizer-layout02">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light-subtle d-flex py-1 px-3 gap-1 align-items-center">
                                                <span class="d-block p-1 bg-light rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-light ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-light"></span>
                                            </span>
                                            <span
                                                class="bg-light-subtle d-flex gap-1 pt-1 pb-4 px-3 border-primary-subtle border-top">
                                                <span class="d-block p-1 pb-0 px-2 bg-light"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-light"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-light"></span>
                                            </span>
                                            <span class="d-block h-100 bg-primary-subtle mx-3 mb-2 mt-n3 rounded-2">
                                            </span>
                                            <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                            </div>
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="customizer-layout03" name="data-layout" type="radio"
                                        value="semibox" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2"
                                        for="customizer-layout03">
                                        <span class="d-flex gap-1 h-100 p-1">
                                            <span class="flex-shrink-0 mb-3">
                                                <span class="d-block p-1 px-1 bg-light rounded mb-1 mx-1"></span>
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-2">
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle my-2 mx-1 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Semi Box</h5>
                            </div>
                            <!-- end col -->
                        </div>

                        <h6 class="my-5 fw-semibold">Content Width:</h6>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="defaultContent" name="data-content-width" type="radio"
                                        value="default" class="form-check-input" checked>
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2"
                                        for="defaultContent">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-2">
                                                    <span class="d-block p-1 px-2 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="boxLayout" name="data-content-width" type="radio"
                                        value="box" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2" for="boxLayout">
                                        <span class="d-flex h-100 px-3">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-2">
                                                    <span class="d-block p-1 px-2 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-2 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Box</h5>
                            </div>
                            <!-- end col -->
                        </div>

                        <h6 class="my-5 fw-semibold">Layout Direction:</h6>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="ltrMode" name="dir" type="radio" value="ltr"
                                        class="form-check-input" checked>
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2" for="ltrMode">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0 order-1">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-2">
                                                    <span class="d-block p-1 px-2 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">LTR</h5>
                            </div>
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="rtlMode" name="dir" type="radio" value="rtl"
                                        class="form-check-input">
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2" for="rtlMode">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-2">
                                                    <span class="d-block p-1 px-2 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">RTL</h5>
                            </div>
                            <!-- end col -->
                        </div>

                        <h6 class="my-5 fw-semibold">Layout Mode:</h6>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div>
                                    <input id="layout-light" name="data-bs-theme" type="radio" value="light"
                                        class="form-check-input" checked>
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2"
                                        for="layout-light">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-2">
                                                    <span class="d-block p-1 px-2 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="layout-dark" name="data-bs-theme" type="radio" value="dark"
                                        class="form-check-input">
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2 bg-dark"
                                        for="layout-dark">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span
                                                    class="bg-white bg-opacity-10 d-flex h-100 flex-column gap-1 p-2">
                                                    <span
                                                        class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-white bg-opacity-10 d-block p-1"></span>
                                                    <span class="d-block h-100 bg-light bg-opacity-10 m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-white bg-opacity-10 d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="automode" name="data-bs-theme" type="radio" value="auto"
                                        class="form-check-input">
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2" for="automode">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-2">
                                                    <span class="d-block p-1 px-2 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">System</h5>
                            </div>
                            <!-- end col -->
                        </div>

                        <h6 class="my-5 fw-semibold">Sidebar Size:</h6>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="sidebar-default" name="data-sidebar" type="radio"
                                        value="default" class="form-check-input" checked>
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2"
                                        for="sidebar-default">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-2">
                                                    <span class="d-block p-1 px-2 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="sidebar-medium" name="data-sidebar" type="radio" value="medium"
                                        class="form-check-input" checked>
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2"
                                        for="sidebar-medium">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-2">
                                                    <span class="d-block p-1 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Medium</h5>
                            </div>
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="sidebar-icon" name="data-sidebar" type="radio" value="icon"
                                        class="form-check-input">
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2"
                                        for="sidebar-icon">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Icon</h5>
                            </div>
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="sidebar-icon-hover" name="data-sidebar" type="radio"
                                        value="icon-hover" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2"
                                        for="sidebar-icon-hover">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Icon hover</h5>
                            </div>
                            <!-- end col -->
                        </div>

                        <h6 class="my-5 fw-semibold">Sidebar Color:</h6>

                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="sidebar-light" name="data-sidebar-color" type="radio"
                                        value="light" class="form-check-input" checked>
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2"
                                        for="sidebar-light">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light-subtle d-flex h-100 flex-column gap-1 p-2">
                                                    <span class="d-block p-1 px-2 bg-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-6">
                                <div class="border overflow-hidden rounded-2">
                                    <input id="sidebar-dark" name="data-sidebar-color" type="radio"
                                        value="dark" class="form-check-input">
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2"
                                        for="sidebar-dark">
                                        <span class="d-flex h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-primary d-flex h-100 flex-column gap-1 p-2">
                                                    <span
                                                        class="d-block p-1 px-2 bg-light-subtle opacity-25 rounded mb-2"></span>
                                                    <span
                                                        class="d-block p-1 px-2 pb-0 bg-light-subtle opacity-25"></span>
                                                    <span
                                                        class="d-block p-1 px-2 pb-0 bg-light-subtle opacity-25"></span>
                                                    <span
                                                        class="d-block p-1 px-2 pb-0 bg-light-subtle opacity-25"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light-subtle d-block p-1"></span>
                                                    <span class="d-block h-100 bg-primary-subtle m-3 rounded-2">
                                                    </span>
                                                    <span class="bg-light-subtle d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                            <!-- end col -->
                        </div>
                        <div id="sidebar-color" class="my-5">
                            <h6 class="mb-0 fw-semibold">Primary Color</h6>
                            <p class="text-muted">Choose a color of Primary.</p>
                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-theme-colors"
                                        id="themeColor-01" value="default" checked>
                                    <label class="form-check-label avatar-md rounded" for="themeColor-01"></label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-theme-colors"
                                        id="themeColor-02" value="cyan">
                                    <label class="form-check-label avatar-md rounded" for="themeColor-02"></label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-theme-colors"
                                        id="themeColor-03" value="blue">
                                    <label class="form-check-label avatar-md rounded" for="themeColor-03"></label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-theme-colors"
                                        id="themeColor-04" value="purple">
                                    <label class="form-check-label avatar-md rounded" for="themeColor-04"></label>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end gap-2 modal-footer pt-6 border-top">
                            <button type="button" class="btn btn-light" id="resetBtn">
                                <i class="ri-reset-right-line"></i> Reset Layouts
                            </button>
                            {{-- <button type="button" class="btn btn-danger">
                              <i class="ri-shopping-bag-3-line"></i> Buy Now
                          </button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Begin scroll top -->
        <div class="progress-wrap d-flex align-items-center justify-content-center cursor-pointer h-40px w-40px position-fixed"
            id="progress-scroll">
            <svg class="progress-circle w-100 h-100 position-absolute" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="45" class="progress" />
            </svg>
            <i class="ri-arrow-up-line fs-16 z-1 position-relative text-primary"></i>
        </div>
        <!-- END scroll top --> <!-- Begin Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center gap-2">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Urbix.
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Pixeleyez
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END page -->

    <!-- JAVASCRIPT -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/js/tabler.min.js"></script> --}}
    <script src="{{ asset('urbix/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('urbix/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('urbix/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('urbix/js/scroll-top.init.js') }}"></script>
    <!-- Vector map-->
    <script src="{{ asset('urbix/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('urbix/libs/jsvectormap/maps/world.js') }}"></script>

    <script src="{{ asset('urbix/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="{{ asset('urbix/libs/leaflet/leaflet.js') }}"></script>

    <script src="{{ asset('urbix/js/map/leaflet-map.init.js') }}"></script>

    <script src="{{ asset('urbix/js/table/datatable.init.js') }}"></script>

    {{-- <script src="{{asset('urbix/js/dashboard/analytics.init.js')}}"></script> --}}

    {{-- <script src="{{asset('urbix/js/dashboard/bod.init.js')}}"></script> --}}

    @stack('myjs')



    <!-- App js -->
    <script src="{{ asset('urbix/js/app.js') }}"></script>

</body>

</html>
