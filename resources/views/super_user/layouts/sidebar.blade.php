{{-- Desktop --}}
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
                    <a href="#collapseDashboards" class="pe-nav-link" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="collapseDashboards">
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
                <!-- Master -->
                <li class="pe-menu-title">Master</li>
                <li class="pe-slide pe-has-sub">
                    <a href="#collapseMasterD1" class="pe-nav-link" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="collapseMasterD1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-car-crane">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M7 18h8m4 0h2v-6a5 5 0 0 0 -5 -5h-1l1.5 5h4.5" />
                            <path d="M12 18v-11h3" />
                            <path d="M3 17v-5h9" />
                            <path d="M4 12v-6l18 -3v2" />
                            <path d="M8 12v-4l-4 -2" />
                            <span class="pe-nav-content">Alat Berat</span>
                            <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                    </a>
                    <ul class="pe-slide-menu collapse" id="collapseMasterD1">
                        <li class="slide pe-nav-content1">
                            <a href="javascript:void(0)">Alat Berat</a>
                        </li>
                        <li class="pe-slide-item">
                            <a href="{{ route('super_user.master.alat_berat') }}" class="pe-nav-link">
                                Data Alat Berat
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Pages -->
                <li class="pe-menu-title">Pages</li>
                <li class="pe-slide pe-has-sub">
                    <a href="#collapseAuth" class="pe-nav-link" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="collapseAuth">
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
                    <a href="#collapsePages" class="pe-nav-link" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="collapsePages">
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
                <li class="pe-slide pe-has-sub">
                    <a href="#collapseStavedoring" class="pe-nav-link" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="collapseStavedoring">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-anchor">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 9v12m-8 -8a8 8 0 0 0 16 0m1 0h-2m-14 0h-2" />
                            <path d="M12 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                        <span class="pe-nav-content">Stavedoring</span>
                        <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                    </a>
                    <ul class="pe-slide-menu collapse" id="collapseStavedoring">
                        <li class="slide pe-nav-content1">
                            <a href="javascript:void(0)">Stavedoring</a>
                        </li>
                        <li class="pe-slide-item">
                            <a href="pages-starter.html" class="pe-nav-link">
                                Starter Page
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pe-slide pe-has-sub">
                    <a href="#collapseReport" class="pe-nav-link" data-bs-toggle="collapse" aria-expanded="false"
                        aria-controls="collapseReport">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-chart-infographic">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M7 3v4h4" />
                            <path d="M9 17l0 4" />
                            <path d="M17 14l0 7" />
                            <path d="M13 13l0 8" />
                            <path d="M21 12l0 9" />
                        </svg>
                        <span class="pe-nav-content">Report</span>
                        <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                    </a>
                    <ul class="pe-slide-menu collapse" id="collapseReport">
                        <li class="slide pe-nav-content1">
                            <a href="javascript:void(0)">Report</a>
                        </li>
                        <li class="pe-slide-item">
                            <a href="pages-starter.html" class="pe-nav-link">
                                Laporan Stavedoring
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Logout -->
                <li class="pe-menu-title">Logout</li>
                <li class="pe-slide pe-has-sub">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="pe-nav-link">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <span class="pe-nav-content">Logout</span>
                    </a>
                </li>
            </ul>
            <!-- Widgets -->
            {{-- <div class="sidebar-widget text-center">
                        <img src="assets/images/sidebar-widget.png" alt="Widget Image">
                        <p class="text-muted fw-semibold">Click here to update the new version</p>
                        <button class="btn btn-primary rounded-pill w-100">Update Now</button>
                    </div> --}}
        </div>
    </nav>
</aside>

{{-- Mobile --}}
<aside class="pe-app-sidebar horizontal-sidebar" id="horizontal-aside">
    <div>
        <img src="{{ asset('urbix/images/avatar/dummy-avatar.jpg') }}" alt="Avatar Image" class="avatar-md">
        <div>
            <a href="javascript:void(0)">
                <h6 class="mb-0 lh-base">{{ Auth::user()->name }}</h6>
            </a>
            <p class="mb-0 fs-13 text-muted">{{ Auth::user()->email }}</p>
        </div>
    </div>
    <!-- data-simplebar id="sidebar-simplebar" -->
    <nav class="pe-app-sidebar-menu nav nav-pills">
        <ul class="pe-horizontal-menu mb-0 list-unstyled" id="horizontal-menu">
            <!-- Main Menu -->
            <li class="pe-menu-title">Main</li>
            <li class="pe-slide pe-has-sub">
                <a href="#collapseDashboards" class="pe-nav-link" data-bs-toggle="collapse" aria-expanded="false"
                    aria-controls="collapseDashboards">
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
            <!-- Master -->
            <li class="pe-menu-title">Master</li>
            <li class="pe-slide pe-has-sub">
                <a href="#collapseMasterM1" class="pe-nav-link" data-bs-toggle="collapse" aria-expanded="false"
                    aria-controls="collapseMasterM1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-car-crane">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M7 18h8m4 0h2v-6a5 5 0 0 0 -5 -5h-1l1.5 5h4.5" />
                        <path d="M12 18v-11h3" />
                        <path d="M3 17v-5h9" />
                        <path d="M4 12v-6l18 -3v2" />
                        <path d="M8 12v-4l-4 -2" />
                    </svg>
                    <span class="pe-nav-content">Alat Berat</span>
                    <i class="ri-arrow-down-s-line pe-nav-arrow"></i>
                </a>
                <ul class="pe-slide-menu collapse" id="collapseMasterM1">
                    <li class="slide pe-nav-content1">
                        <a href="javascript:void(0)">Alat Berat</a>
                    </li>
                    <li class="pe-slide-item">
                        <a href="auth-signin.html" class="pe-nav-link">
                            Data Alat Berat
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Pages -->
            <li class="pe-menu-title">Pages</li>
            <li class="pe-slide pe-has-sub">
                <a href="#collapseAuth" class="pe-nav-link" data-bs-toggle="collapse" aria-expanded="false"
                    aria-controls="collapseAuth">
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
                <a href="#collapsePages" class="pe-nav-link" data-bs-toggle="collapse" aria-expanded="false"
                    aria-controls="collapsePages">
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
                        <a href="#collapseBlogs" class="pe-nav-link" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapseBlogs">
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

            <!-- Logout -->
            <li class="pe-menu-title">Logout</li>
            <li class="">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <span class="pe-nav-content">Logout</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
