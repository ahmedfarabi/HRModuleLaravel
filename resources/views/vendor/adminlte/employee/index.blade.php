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

<div class="row">
    <div class="col-xs-12">
    	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Employee Data Table</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            
            <div style="text-align:center;">
            	<a class="btn btn-lg btn-primary" href="{{ url('/employee/create') }}"><i class='glyphicon glyphicon-plus'></i>&nbsp New Employee</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatable-employee" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>Employee ID</th>
                  <th>Full Name</th>
                  <th>Accessibility</th>
                  <th>Status</th>
                  <th>Department</th>
                  <th>Company</th>
                  <th></th>
                  
                </tr>
                </thead>
                <tbody>
                
	                <?php if ((Auth::user()->username) == "Super"){ 
	                	$emps = DB::table('employees')->get();   
					 }else{ 
						 $emps = DB::table('employees')->where('company_id', '=', Auth::user()->company_id)->get(); 	
					 } ?>
									
					@foreach ($emps as $emp)  
					<tr>
						<td>{{$emp->employee_id}}</td>
						<td>{{$emp->full_name}}</td>
						<td>{{$emp->accessibility}}</td>
						<td>{{$emp->active}}</td>
						<?php $dept= DB::table('departments')->where('dept_id',$emp->dept_id)->value('dept_name'); ?>
						<td><?php echo $dept;?></td>
						<?php $comp= DB::table('companies')->where('company_id',$emp->company_id)->value('company_name'); ?>
						<td><?php echo $comp;?></td>
						<td><a class="btn-sm btn-success" href="{{ route('employeeDetail.create', [$emp->employee_id]) }}"><i class='fa fa-user'>&nbsp Profile</i> </a>
							<a class="btn-sm btn-primary" href="{{ route('employeeDetail.create', [$emp->employee_id]) }}"><i class='glyphicon glyphicon-pencil'></i></a>
							<a class="btn-sm btn-danger" href="#"><i class='glyphicon glyphicon-trash'></i></a>
						</td>
					</tr>	
					@endforeach
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->    


@endsection


