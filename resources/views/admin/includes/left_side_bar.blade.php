<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar ">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar ">
                <!-- User profile -->
                <div class="user-profile position-relative" style="background: url({{asset('assets/images/background/user-info.jpg')}}) no-repeat;">
                    <!-- User profile image -->
                    <!-- User profile text-->
                    <div class="profile-text dropdown">
                        <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
                        <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuLink">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}"><i data-feather="log-out"
                                        class="feather-sm text-danger me-1 ms-1"></i> Logout</a>

                                <div class="dropdown-divider"></div>

                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav ">

                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Dashboard</span>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.dashboard')}}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Dashboard </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{route('admin.category.index')}}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Categories </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.item.index')}}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Products </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.order.index')}}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Orders </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.user.index')}}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Users </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('admin.blog.edit')}}" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Blog </span>
                            </a>
                        </li>





                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->

        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
