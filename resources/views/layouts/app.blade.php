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

        @include('layouts.header')
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

        @include('layouts.sidebar')

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
                                    <input id="customizer-layout01" name="data-layout" type="radio" value="vertical"
                                        class="form-check-input" checked>
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
                                    <input id="boxLayout" name="data-content-width" type="radio" value="box"
                                        class="form-check-input">
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
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2" for="layout-light">
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
                                    <input id="sidebar-default" name="data-sidebar" type="radio" value="default"
                                        class="form-check-input" checked>
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
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2" for="sidebar-icon">
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
                                    <input id="sidebar-dark" name="data-sidebar-color" type="radio" value="dark"
                                        class="form-check-input">
                                    <label class="form-check-label p-0 avatar-3xl w-100 rounded-2" for="sidebar-dark">
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
