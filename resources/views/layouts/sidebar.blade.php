<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('backend/images/logo/logo_light.png') }}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                    <use href="{{ asset('backend/svg/icon-sprite.svg#toggle-icon') }}"></use>
                </svg>
                <svg class="fill-icon sidebar-toggle status_toggle middle">
                    <use href="{{ asset('backend/svg/icon-sprite.svg#fill-toggle-icon') }}')}}"></use>
                </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('backend/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                src="{{ asset('backend/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    {{-- <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li> --}}
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="{{url('dashboard')}}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('backend/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('backend/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span>Dashboard</span></a>
                    </li>

                    {{-- <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-8">Applications</h6>
                        </div>
                    </li> --}}

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a
                            class="sidebar-link sidebar-title link-nav" href="file-manager.html">
                            <svg class="stroke-icon">
                                <use href="{{ asset('backend/svg/icon-sprite.svg#stroke-file') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('backend/svg/icon-sprite.svg#fill-file') }}"></use>
                            </svg><span>File manager</span></a>
                    </li>


                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('backend/svg/icon-sprite.svg#stroke-user') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('backend/svg/icon-sprite.svg#fill-user') }}"></use>
                            </svg><span>Users</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="user-profile.html">List Users</a></li>
                            <li><a href="edit-profile.html">Create Users</a></li>
                        </ul>
                    </li>

                    {{-- <li class="sidebar-main-title">
                        <div>
                            <h6>Forms & Table</h6>
                        </div>
                    </li> --}}

                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('backend/svg/icon-sprite.svg#stroke-form') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('backend/svg/icon-sprite.svg#fill-form') }}"></use>
                            </svg><span>Roles & Permissions</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Roles<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="form-validation.html">List Roles</a></li>
                                    <li><a href="base-input.html">Create Roles</a></li>
                                    {{-- <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li> --}}
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Permissions<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="{{url('permissions')}}">List Permissions</a></li>
                                    <li><a href="{{url('permissions/create')}}">Create Permissions</a></li>
                                    {{-- <li><a href="select2.html">Select2</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
