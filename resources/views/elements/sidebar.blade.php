<?php if(auth()->user()->role == 'Super Admin')
    $role = 'Super Admin';
 else
    $role = 'admin'
?>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <a href="{{ ($role=='Super Admin') ? route('superadmin.dashboard') : route('admin.dashboard') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ ($role=='Super Admin') ? route('superadmin.profile') : route('admin.profile') }}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>Profile</p>
            </a>
        </li>
        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon fa fa-user"></i>
                <p>
                    Users
                    <i class="fas fa-angle-left right"></i>
                    <span class="right badge badge-success">New</span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.user.list') : route('admin.user.list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Lists</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.user.approve') : route('admin.user.approve') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Certified</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.user.add') : route('admin.user.add') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Add user</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                    Groups
                    <i class="fas fa-angle-left right"></i>
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.group.list') : route('admin.group.list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Lists</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.group.approve') : route('admin.group.approve') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Certified</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.group.create') : route('admin.group.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Unpublish</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                    Blogs
                    <i class="fas fa-angle-left right"></i>
                    <span class="right badge badge-success">New</span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.blog.list') : route('admin.blog.list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Lists</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.blog.approve') : route('admin.blog.approve') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Certified</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.blog.create') : route('admin.blog.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Unpublish</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Posts
                    <i class="fas fa-angle-left right"></i>
                    <span class="right badge badge-info">New</span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.post.list') : route('admin.post.list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Lists</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.post.approve') : route('admin.post.approve') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Certified</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.post.create') : route('admin.post.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Unpublish</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Pages
                    <i class="fas fa-angle-left right"></i>
                    <span class="right badge badge-warning">New</span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.page.list') : route('admin.page.list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Lists</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.page.list') : route('admin.page.list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Certified</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ ($role="Super Admin") ? route('superadmin.page.list') : route('admin.page.list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Unpublish</p>
                    </a>
                </li>
            </ul>
        </li>
        @if($role == 'admin')
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon fas fa-history"></i>
                <p>Reviews</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon far fa-comment-alt"></i>
                <p>Chart</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon fas fa-donate"></i>
                <p>Subscriptions</p>
            </a>
        </li>
        @endif
        @if($role=='Super Admin')
        <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Calendar
                    <span class="badge badge-info right">2</span>
                </p>
            </a>
        </li>
        @endif
        <li class="nav-header">EXAMPLES</li>
        @if($role=='Super Admin')
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon fas fa-flag-checkered"></i>
                <p>
                    Reports
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Lists</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Certified</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Unpublish</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon fas fa-donate"></i>
                <p>
                    Subscriptions
                    <i class="fas fa-angle-left right"></i>
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Lists</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Certified</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Unpublish</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon fas fa-assistive-listening-systems"></i>
                <p>
                    API
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Lists</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Certified</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon text-info"></i>
                        <p>Unpublish</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Inbox
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Compose</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Read</p>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        <li class="nav-item">
            <a href="javascript:;" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                    Settings
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @if($role=='Super Admin')
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Example</p>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Example</p>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @if($role == 'admin')
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-info-circle"></i>
                <p>Help</p>
            </a>
        </li>
        @endif
        @auth
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>{{ __('Logout') }}</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @endauth
    </ul>
</nav>