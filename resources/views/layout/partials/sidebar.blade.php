  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
        
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Pages</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/page1') }}" >Page 1</a></li>
                <li><a href="{{ url('/page2') }}">Page 2</a></li>
              </ul>
            </li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>