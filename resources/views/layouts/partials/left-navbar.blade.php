<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
      <!-- Sidebar user panel -->
     @if (auth()->user())
       
        <div class="user-panel">
          <div class="pull-left image">
              @if (auth()->user()->profile && file_exists(auth()->user()->profile->photo))       
                <img src="{{ asset(auth()->user()->profile->photo) }}" class="img-responsive img-circle center-block" alt="Image">
              @else       
                <img src="http://placehold.it/40x40" class="img-responsive img-circle center-block" alt="Image">
              @endif    
          </div>
          <div class="pull-left info">
            {{-- <p>{{ currentUser.name | uppercase }}</p> --}}
            {{ strtoupper(auth()->user()->name) }}
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <!-- <li class="header">LABELS</li> -->
          <li><a href="{{ route('admin.home') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Admin Home Page</span></a></li>
          <li class="header">MAIN NAVIGATION</li>
          
          <li class="active treeview">
            <a href="">
              <i class="fa fa-dashboard"></i> <span> Aplications</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li class=""><a href="{{ route('admin.contacts.index') }}"><i class="fa fa-circle-o"></i> Contacts</a></li>
              <li class=""><a href="{{ route('admin.messages.index') }}"><i class="fa fa-circle-o"></i> Menssages</a></li>
              <li class=""><a href="{{ route('admin.profiles.index') }}"><i class="fa fa-circle-o"></i> Profile</a></li>
              <li class=""><a href="{{ route('admin.todos.index') }}"><i class="fa fa-circle-o"></i> Tasks</a></li>
            </ul>
          </li>

          @if (auth()->user()->role && auth()->user()->role->role == 'admin')
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i> <span> Admin Section</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="{{ route('admin.roles.index') }}"><i class="fa fa-circle-o"></i> Roles</a></li>
                <li class=""><a href="{{ route('admin.users.index') }}"><i class="fa fa-circle-o"></i> Users</a></li>
              </ul>
            </li>
          @endif
          
          <li class="header">SESSION CONTROL</li>
          <li><a href="{{ url('auth/logout') }}"><i class="fa fa-circle-o text-red"></i> <span>Log Out</span></a></li>
        </ul>
     @else
       {{-- false expr --}}
     @endif

      
  </section>
  <!-- /.sidebar -->
</aside>