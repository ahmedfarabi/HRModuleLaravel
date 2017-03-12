<form class="form-horizontal" role="form" method="POST" action="{{ route('employeeDetail.index',[Request::segment(3)]) }}">
{{ csrf_field() }}
<div class="row">
	<!-- ------------------------------------------- Employee Details ------------------------------------------------------ -->

    <div class="col-xs-12 col-sm-6">
    	<div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">+ Employee Details</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body">

                        <div class="form-group{{ $errors->has('birth_day') ? ' has-error' : '' }}">
						
                            <label for="birth_day" class="col-md-4 control-label">Date of Birth</label>

                            <div class="input-group col-md-6">
                               	<input type="text" class="form-control datepicker" min="0" name="birth_day" value="{{ old('birth_day') }}" placeholder="Date of Birth" >
                                @if ($errors->has('birth_day'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth_day') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                           
                        </div>
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
						
                            <label for="age" class="col-md-4 control-label">Age</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="age" type="number" class="form-control" min="0" max="100" name="age" value="{{ old('age') }}" placeholder="Age" >

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-battery-3"></i></span>
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('religion') ? ' has-error' : '' }}">
						
                            <label for="religion" class="col-md-4 control-label">Religion</label>
                            
                        	<div class="input-group col-md-6">
                                <select class="form-control select2" id="religion" name="marital_stat"  data-placeholder="Religion"  >

			                       	<option  value="" selected hidden="">None</option>   
									<option value= "Islam"> Islam </option>	
									<option value= "Hindu"> Hindu </option>	
									<option value= "Christian"> Christian </option>	
									<option value= "Buddha"> Buddha </option>	
									<option value= "Jews"> Jews </option>
									<option value= "Others"> Others </option>			
								</select>
								
                                @if ($errors->has('religion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('religion') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-university"></i></span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
						
                            <label for="nationality" class="col-md-4 control-label">Nationality</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="nationality" type="text" class="form-control" min="0" name="nationality" value="{{ old('nationality') }}" placeholder="Nationality" >

                                @if ($errors->has('nationality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-map"></i></span>
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
						
                            <label for="company" class="col-md-4 control-label">Marital Status</label>

                            <div class="input-group col-md-6">
                                <select class="form-control select2" id="marital_stat" name="marital_stat"  data-placeholder="Marital Status"  >

			                       	<option  value="" selected hidden="">None</option>   
									<option value= "Married"> Married </option>	
									<option value= "Unmarried"> Unmarried </option>	
									<option value= "Divorced"> Divorced </option>	
									<option value= "Widowed"> Widowed </option>				
								</select>
								<span class="input-group-addon"><i class="fa fa-child"></i></span>
                                @if ($errors->has('marital_stat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('marital_stat') }}</strong>
                                    </span>
                                @endif
		
                            </div>
                           
                        </div>
                        <div class="form-group{{ $errors->has('nid') ? ' has-error' : '' }}">
						
                            <label for="nid" class="col-md-4 control-label">National ID No</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="nid" type="text" class="form-control" min="0" name="nid" value="{{ old('nid') }}" placeholder="NID No" >

                                @if ($errors->has('nid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nid') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
		                  <label for="male" class="col-md-4 control-label">Male</label>
		                  <div class="col-sm-1">
		                  	<input id="gender" type="radio" class="flat-red" value="Male" name="gender" checked>
		                  </div>
		                
		                  <label for="female" class="col-md-2 control-label">Female</label>
		                  <div class="col-sm-1">
		                  	<input id="female" type="radio" class="flat-red" value="Female" name="gender">
		                  </div>
		                </div>

    			
            </div>
            <!-- /.box-body -->
        </div>
    	<!-- /.box -->
    </div>
	<!-- /.col -->
		
</div>


<div class="row">	
	<div class="col-xs-12 col-sm-12">
    	<div class="box box-danger">
    		<div class="box-body">
				 <div class="form-group">
			       	<div class="col-md-6 col-md-offset-4">
			           <button type="submit" class="btn btn-danger">
			              Save All
			           </button>
			       		&nbsp;&nbsp;&nbsp;
			        </div>
			     </div> 
			</div> 
		</div> 
	</div> 
</div>  
</form>                    


