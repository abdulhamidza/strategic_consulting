<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            {{--<div class="pull-left image">
                <img src="{{asset('assets')}}/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>--}}
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li>
                <a href="/admin"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <li>
                <a href="/admin/users"><i class="fa fa-user"></i>Users</a>
            </li>
            <li>
                <a href="/admin/consultants"><i class="fa fa-briefcase"></i>Consultants</a>
            </li>
            <li>
                <a href="/admin/consultations"><i class="fa fa-exchange"></i>Consultations</a>
            </li>
            <li>
                <a href="/admin/messages"><i class="fa fa-envelope"></i>Messages</a>
            </li>

            {{--<li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/users"><i class="fa fa-circle-o"></i>All Users</a></li>
                    <li><a href="/admin/users/create"><i class="fa fa-circle-o"></i>New user</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase"></i>
                    <span>Consultants</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.consultants')}}"><i class="fa fa-circle-o"></i>All Consultants</a></li>
                    <li><a href="{{route('admin.consultants.create')}}"><i class="fa fa-circle-o"></i>New Consultant</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-exchange"></i>
                    <span>Consultations</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/consultations"><i class="fa fa-circle-o"></i>All Consultations</a></li>
                    <li><a href="/admin/unachieved_appointments"><i class="fa fa-circle-o"></i>Unachieved Appointments</a></li>
                    <li><a href="/admin/achieved_appointments"><i class="fa fa-circle-o"></i>Achieved Appointments</a></li>
                    <li><a href="{{route('admin.consultations.create')}}"><i class="fa fa-circle-o"></i>New Appointment</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span>Messages</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/messages/unread"><i class="fa fa-circle-o"></i>Unread Messages</a></li>
                    <li><a href="/admin/messages/unreplied"><i class="fa fa-circle-o"></i>Unreplied Messages</a></li>
                    <li><a href="/admin/messages"><i class="fa fa-circle-o"></i>All Messages</a></li>
                </ul>
            </li>--}}

            {{--<li class="header">LABELS</li>--}}
            {{--<li><a href="#"><i class="fa fa-circle-o text-gray-600"></i> Settings</a></li>--}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
