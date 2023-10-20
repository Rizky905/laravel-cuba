<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="index.html">
                <img class="img-fluid for-light logo-msig-sidebar" src="{{ asset('/plugin/images/msig/logo.png') }}"
                    alt="">
                <img class="img-fluid for-dark logo-msig-sidebar" src="{{ asset('/plugin/images/msig/logo.png') }}"
                    alt="">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>

        <div class="logo-icon-wrapper">
            <a href="index.html">
                <img class="img-fluid logo-msig-mini-sidebar" src="{{ asset('/plugin/images/msig/logo2.png') }}"
                    alt="">
            </a>
        </div>

        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{ url('home') }}">
                            {{-- <img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">s --}}
                        </a>
                        <div class="mobile-back text-end">
                            <span>Back</span>
                            <i class="fa fa-angle-right ps-2"aria-hidden="true">
                            </i>
                        </div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}"
                            href="{{ url('/') }}">
                            <svg class="stroke-icon">
                            </svg>
                            <svg class="fill-icon">
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6>Master Data</h6>
                        </div>
                    </li>

                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav {{ Request::segment(1) == 'web' ? 'active' : '' }}"
                            href="{{ url('web') }}">
                            <svg class="stroke-icon">
                            </svg>
                            <svg class="fill-icon">
                            </svg>
                            <span>Web</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
