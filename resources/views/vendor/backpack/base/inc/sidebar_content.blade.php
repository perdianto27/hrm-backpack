<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<!--<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/backup') }}'><i class='fa fa-hdd-o'></i> <span>Backups</span></a></li>>-->
<!--<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/log') }}'><i class='fa fa-terminal'></i> <span>Logs</span></a></li>>-->
<!--<li><a href="{{ backpack_url('samplepdf') }}"><i class="fa fa-user"></i> <span>sample PDF</span></a></li>-->
<!--<li><a href="{{ backpack_url('sampleexcel') }}"><i class="fa fa-user"></i> <span>sample Excel</span></a></li> -->


<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Employees</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href='{{ backpack_url('employees') }}'><i class='fa fa-user'></i> <span>Personal</span></a></li>
      <li><a href='{{ backpack_url('departments') }}'><i class="fa fa-list"></i> <span>Departments</span></a></li>
      <li><a href="{{ url('admin/employeetravel') }}"><i class="fa fa-car"></i> <span>Manage Travel</span></a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
      <li><a href="{{ backpack_url('category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
      <li><a href="{{ backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
    </ul>
</li>

<!-- Users, Roles Permissions -->
  <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href='{{ backpack_url('user') }}'><i class="fa fa-user"></i> <span>Users</span></a></li>
      <li><a href='{{ backpack_url('role') }}'><i class="fa fa-group"></i> <span>Roles</span></a></li>
      <li><a href='{{ backpack_url('permission') }}'><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
  </li>
