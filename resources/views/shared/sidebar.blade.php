

    <div class="aside-content-wrapper">

        <div class="aside-content">

            <div class="aside-toolbar">

                <div class="logo">
                    <span class="logo-icon">F</span><span class="logo-text">FUSE</span>
                </div>

                <button id="toggle-fold-aside-button" type="button" class="btn btn-icon d-none d-lg-block"
                        data-fuse-aside-toggle-fold>
                    <i class="icon icon-backburger"></i>
                </button>

            </div>

            <ul class="nav flex-column custom-scrollbar" id="sidenav" data-children=".nav-item">

                <li class="subheader">
                    <span>APPS</span>
                </li>

                <li class="nav-item" role="tab" id="heading-dashboards">

                    <a class="nav-link ripple active"
                       href="dashboard.php">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link ripple " href="profile.php"
                       data-page-url="/apps-dashboards-project.html">
                        <i class="material-icons">person</i>
                        <span>My Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link ripple " href="chat.php"
                       data-page-url="/apps-dashboards-project.html">
                        <i class="material-icons">chat</i>
                        <span>Chat</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link ripple " href="admin-management/index.php"
                       data-page-url="/apps-dashboards-project.html">
                        <i class="material-icons">work</i>
                        <span>Admin Management</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link ripple " href="alumni-management/index.php"
                       data-page-url="/apps-dashboards-project.html">
                        <i class="material-icons">school</i>
                        <span>Alumni Management</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link ripple " href="settings.php"
                       data-page-url="/apps-dashboards-project.html">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link ripple " href="{{ url('/alumnus_logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">exit_to_app</i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ url('/alumnus_logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </li>
            </ul>
        </div>
    </div>
