@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.employee') }}
@endsection

@section('content-header')
<h1>
	@yield('contentheader_title', 'Dashboard')
	<small>@yield('contentheader_description','Control Panel')</small>
</h1>
<ol class="breadcrumb">
	<li ><a href="{{ url('/') }}"><i class="fa fa-home"></i> {{ trans('adminlte_lang::message.home') }} </a></li>
	<li ><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.dashboard') }} </a></li>
	<li class="active"><i class="fa fa-user"></i>&nbsp; {{ trans('adminlte_lang::message.employee') }}</li>
</ol>
@endsection

@section('main-content')
<div class="col-md-2"></div>
<div class="flash-message col-md-8 text-center">
	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
		@if(Session::has('alert-' . $msg))
			<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
		@endif
	@endforeach
</div> <!-- end .flash-message -->

 <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            	
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
				<?php $employee = DB::table('employees')->where('employee_id',$emp_id)->value('full_name');
					$employee_id = DB::table('employees')->where('employee_id',$emp_id)->value('employee_id');?>
              <h3 class="profile-username text-center">{{ $employee}}</h3>

              <p class="text-muted text-center">Employee ID : {{ $employee_id}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#details" data-toggle="tab">Details</a></li>
              <li><a href="#attendance" data-toggle="tab">Attendance History</a></li>
              <li><a href="#leave" data-toggle="tab">Leave Summary</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="details">
                @include('adminlte::employeeDetail.employeeDetails')
              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="attendance">
                
				<p>asdasdasdasdas</p>
               
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="leave">
               
                 
              </div>
              <!-- /.tab-pane -->
    
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->        
@endsection


