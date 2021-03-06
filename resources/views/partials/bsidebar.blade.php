<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="/backend/assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
        <img src="/backend/assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />
        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0">Nik Patel</h6>
            <span class="pro-user-desc">Administrator</span>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
                <a href="pages-profile.html" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                    <span>My Account</span>
                </a>

                <a href="{{ route('settings') }}" class="dropdown-item notify-item">
                    <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                    <span>Settings</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                    <span>Support</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                    <span>Lock Screen</span>
                </a>

                <div class="dropdown-divider"></div>

            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Navigation</li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('customers') }}">
                        <i class='uil uil-chat-bubble-user'></i>
                        <span> Customers </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('transactions') }}">
                        <i data-feather="credit-card"></i>
                        <span> Transactions </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('stores') }}">
                      <i class="uil uil-shop"></i>
                        <span>Stores</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('analytics')}}">
                        <i data-feather="book-open"></i>
                        <span> Analytics </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('debts.reminder') }}">
                        <i data-feather="bell"></i>
                        <span> Debt Reminders </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('assistants.add') }}">
                        <i data-feather="users"></i>
                        <span> Add Assistant </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('broadcast') }}">
                        <i data-feather="message-square"></i>
                        <span> Broadcast Message </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('complaint.form') }}">
                        <i data-feather="book-open"></i>
                        <span> Complaint Forms </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('complaint.log') }}">
                        <i data-feather="book"></i>
                        <span> Complaint Log </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('settings') }}">
                        <i class="uil  uil-cog"></i>
                        <span> Settings </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('users') }}">
                        <i data-feather="users"></i>
                        <span> Users </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('notification') }}">
                        <i data-feather="bell"></i>
                        <span> Notifications </span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
