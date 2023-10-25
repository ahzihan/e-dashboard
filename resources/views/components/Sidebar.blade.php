
    <aside class="app-sidebar" id="sidebar">
        <div class="main-sidebar-header">
            <a href="{{ url('/') }}" class="header-logo">
                <h3 class="text-white uppercase text-center">Admin Panel</h3>
            </a>
        </div>
        <div class="main-sidebar " id="sidebar-scroll">
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg></div>
                <ul class="main-menu">
                    <li class="slide has-sub">
                        <a href="{{ url('/') }}" class="side-menu__item">
                            <i class="ri-home-8-line side-menu__icon"></i>
                            <span class="side-menu__label">Dashboards</span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="javascript:void(0)">Dashboard</a></li>
                        </ul>
                    </li>

                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-home-8-line side-menu__icon"></i>
                            <span class="side-menu__label">Module Setting</span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="javascript:void(0)">Module</a></li>
                            <li class="slide"><a href="{{ route('module.index') }}" class="side-menu__item">List</a></li>
                            <li class="slide"><a href="{{ route('module.create') }}" class="side-menu__item">Create</a></li>
                        </ul>
                    </li>

                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-home-8-line side-menu__icon"></i>
                            <span class="side-menu__label">Permission Setting</span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="javascript:void(0)">Permission</a></li>
                            <li class="slide"><a href="{{ route('permission.index') }}" class="side-menu__item">List</a></li>
                            <li class="slide"><a href="{{ route('permission.create') }}" class="side-menu__item">Create</a></li>
                        </ul>
                    </li>

                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-home-8-line side-menu__icon"></i>
                            <span class="side-menu__label">Role Setting</span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1"><a href="javascript:void(0)">Role</a></li>
                            <li class="slide"><a href="{{ route('role.index') }}" class="side-menu__item">List</a></li>
                            <li class="slide"><a href="{{ route('role.create') }}" class="side-menu__item">Create</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>

