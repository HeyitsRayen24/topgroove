<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        <span class="font-weight-semibold">Navigation</span>
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->

    <!-- Sidebar content -->
    <div class="sidebar-content">
        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="sidebar-user-material-body">
                <div class="card-body text-center">
                    <a href="#">
                        <img src="{{ asset('images/placeholder.jpg') }}"
                            class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="" />
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark">{{ Auth::user()->name }}</h6>
                    <span class="font-size-sm text-white text-shadow-dark">{{ Auth::user()->role->name }}</span>
                </div>

                <div class="sidebar-user-material-footer">
                    <a href="#user-nav" class="
                    d-flex
                    justify-content-between
                    align-items-center
                    text-shadow-dark
                    dropdown-toggle
                  " data-toggle="collapse"><span>My account</span></a>
                </div>
            </div>

            <div class="collapse" id="user-nav">
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-user-plus"></i>
                            <span>My profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="nav-link" style="background:none; border:none;">
                                <i class="icon-switch2"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">
                        Main
                    </div>
                    <i class="icon-menu" title="Main"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.admin') }}" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.member') }}" class="nav-link">
                        <i class="icon-users"></i>
                        <span> Member </span>
                    </a>
                </li>
                <!-- /page kits -->
            </ul>
        </div>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->
</div>