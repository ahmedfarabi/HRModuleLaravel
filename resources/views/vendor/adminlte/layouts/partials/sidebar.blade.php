<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->username }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ isActiveURL('/home') }}"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
             <li class="treeview {{ areActiveURLs(['/employee', '/employee/create']) }}">
              <a href="#"><i class="fa fa-group"></i><span>{{ trans('adminlte_lang::message.hr_header') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
              
              <ul class="treeview-menu">   
                 <li class="{{ isActiveURL('/employee') }}"><a href="{{ url('employee') }}"><i class="fa fa-group"></i> {{ trans('adminlte_lang::message.employee') }}</a></li>
                  <li class="{{ isActiveURL('/employee/create') }}"><a href="{{ url('employee/create') }}"><i class="fa fa-group"></i> {{ trans('adminlte_lang::message.new_employee') }}</a></li>
                  <li class="{{ isActiveURL('#') }}"><a href="#"><i class="fa fa-circle-o"></i> {{ trans('adminlte_lang::message.attendance_tool') }}</a></li>
                  <li class="{{ isActiveURL('#') }}"><a href="#"><i class="fa fa-circle-o"></i> {{ trans('adminlte_lang::message.employee_attendance') }}</a></li>
                  <li class="{{ isActiveURL('#') }}"><a href="#"><i class="fa fa-circle-o"></i> {{ trans('adminlte_lang::message.upload_attendance') }}</a></li>
              </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-files-o'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
                 
            </li>
           
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
