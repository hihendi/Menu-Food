<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                {{-- <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('dashboard') }}"
                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard
                </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('dashboard') }}"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li> --}}
                <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('dashboard') }}"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard
                        </span></a>
                </li>
                <li class="list-divider"></li>


                <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('products.index') }}"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Products
                        </span></a>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('categories.index') }}"
                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Categories</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.html"
                        aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                            class="hide-menu">Calendar</span></a></li>

                <li class="list-divider"></li>



            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>