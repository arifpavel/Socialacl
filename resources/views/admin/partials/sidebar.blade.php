<ul class="sidebar-menu">
  <li class="header">HEADER</li>
  <!-- Optionally, you can add icons to the links -->
  <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
  <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
  <li class="treeview">
    <a href="#"><i class="fa fa-user-secret"></i> <span>Role Control</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-right pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="{{ action('AdminController@showRolesPage') }}">Roles</a></li>
      @if(App::environment('local'))
      <li><a href="{{ action('AdminController@showPermissionsPage') }}">Permissions</a></li>
      @endif
    </ul>
  </li>
</ul>
