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
<li><a href="{{ url('/employee') }}"><i class="fa fa-user"></i>&nbsp; {{ trans('adminlte_lang::message.employee') }}</a></li>
<li class="active"><i class="fa fa-user"></i>&nbsp;  {{ trans('adminlte_lang::message.new_employee') }}</li>
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

<!-- -----------------------------------------------------------New Employee----------------------------------------------------------------- -->
	<div class="row">
	    <div class="col-xs-12">
	    	<div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">+ Register New Employee</h3>
	              <div class="pull-right box-tools">
	                <button type="button" class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
	                </button>
	                <button type="button" class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i>
	                </button>
	              </div>
	            </div>
	            <div class="box-body"> 	
	            	 <form class="form-horizontal" role="form" method="POST" action="{{ route('employee.index') }}">
						{{ csrf_field() }}
                        <div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
						
                            <label for="company" class="col-md-3 control-label">Company</label>

                            <div class="input-group col-md-6">
                                <select class="form-control select2" id="company" name="company"  data-placeholder="Company"  >
                                
             						<?php if ((Auth::user()->username) == "Super"){ ?>
			                           <option  value="" disabled selected hidden="">{{ trans('adminlte_lang::message.company') }}</option>
				                         <?php $comps = DB::table('companies')->select('company_id', 'company_name')->distinct()->get();?>	
				                         	
										@foreach ($comps as $comp)  
											<option value= "{{$comp->company_id}}"  {{ (collect(old('company'))->contains($comp->company_id)) ? 'selected':'' }}> {{$comp->company_name}} </option>			
										@endforeach
									<?php }else{ ?>
										<option  value="{{ Auth::user()->company_id }}" selected>{{ Auth::user()->company->company_name }}</option>		
									<?php } ?>
								</select>
								
                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-building"></i></span>
                            </div>
                           
                        </div>
                        <div class="form-group{{ $errors->has('dept_id') ? ' has-error' : '' }}">
						
                            <label for="dept" class="col-md-3 control-label">Department</label>
                            
                        	<div class="input-group col-md-6">
                                <select class="form-control select2" id="dept" name="dept"  data-placeholder="Department"  >
             						
		                           		<option  value="" disabled selected hidden="">{{ trans('adminlte_lang::message.dept') }}</option>
		                           		<?php if ((Auth::user()->username) == "Super"){
			                         	 $depts = DB::table('departments')->select('dept_id', 'dept_name')->distinct()->get();?>	
			                         	
										@foreach ($depts as $dept)  
											<option value= "{{$dept->dept_id}}" {{ (collect(old('dept'))->contains($dept->dept_id)) ? 'selected':'' }}> {{$dept->dept_name}} </option>			
										@endforeach
										
									<?php }else{ 
										$depts = DB::table('departments')->select('dept_id', 'dept_name')->where('company_id','=',Auth::user()->company_id)->get();?>
										@foreach ($depts as $dept)  
											<option value= "{{$dept->dept_id}}" {{ (collect(old('dept'))->contains($dept->dept_id)) ? 'selected':'' }}> {{$dept->dept_name}} </option>			
										@endforeach
									<?php } ?>	
								</select>
								
                                @if ($errors->has('dept'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dept') }}</strong>
                                    </span>
                                @endif
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
		
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
						
                            <label for="full_name" class="col-md-3 control-label">Full Name</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="full_name" type="text" class="form-control" min="0" name="full_name" value="{{ old('full_name') }}" placeholder="Full Name" >

                                @if ($errors->has('full_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                                @endif
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
		
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('accessibility') ? ' has-error' : '' }}">
						
                            <label for="accessibility" class="col-md-3 control-label">Accessibility</label>
                            
                        	<div class="input-group col-md-6">
                                <select class="form-control select2" id="accessibility" name="accessibility"  data-placeholder="Accessibility" >
			                       	<option  value="" selected hidden="">None</option>   
									<option value= "Administrator"> Administrator </option>	
									<option value= "Restricted"> Restricted </option>					
								</select>
                                @if ($errors->has('accessibility'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('accessibility') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
		                  <label for="active" class="col-md-3 control-label"> Active</label>
		                     
		                  <div class="col-sm-1">
		                  	<input id="activeUncheck" type="hidden" value="Inactive" name="active">
		                  	<input type="checkbox" class="flat-blue" name="active" id="active" value="Active" checked>
		                  </div>
			                 
		                </div>
		                
		                
		                <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                                &nbsp;&nbsp;&nbsp;
                                 <a class="btn btn-primary" href="{{ url('/employeeDetail/create') }}">
                                    + Add Details
                                </a>
                            </div>
                        </div> 
                        
	                     
					</form>
	            </div>
	            <!-- /.box-body -->
	        </div>
	    	<!-- /.box -->
	    </div>
		<!-- /.col -->
	</div>
	<!-- /.row -->  
               

@endsection
