<!-- -----------------------------------------------------------Employment details----------------------------------------------------------------- -->
<div class="row">
    <div class="col-xs-12">
    	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">+ Employment Details</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body">

            
                         <div class="form-group{{ $errors->has('branch') ? ' has-error' : '' }}">
						
                            <label for="branch" class="col-md-4 control-label">Branch</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="branch" type="text" class="form-control" min="0" name="branch" value="{{ old('branch') }}" placeholder="Branch" >
								
<!-- 								<select class="form-control select2" id="religion" name="marital_stat"  data-placeholder="Branch"  required > -->
<!-- 			                       	<option  value="" selected hidden="">None</option>    -->
<!-- 									<option value= "Islam"> Islam </option>			 -->
<!-- 								</select> -->
                                @if ($errors->has('branch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('branch') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-bank"></i></span>
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
						
                            <label for="designation" class="col-md-4 control-label">Designation</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="designation" type="text" class="form-control" min="0" name="designation" value="{{ old('designation') }}" placeholder="Designation" >
                                
<!-- 								<select class="form-control select2" id="religion" name="marital_stat"  data-placeholder="Religion" placeholder="Religion" required > -->
<!-- 			                       	<option  value="" selected hidden="">None</option>    -->
<!-- 									<option value= "Islam"> Islam </option>			 -->
<!-- 								</select> -->

                                @if ($errors->has('designation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('joining_date') ? ' has-error' : '' }}">
						
                            <label for="joining_date" class="col-md-4 control-label">Joining Date</label>

                            <div class="input-group col-md-6">
                               	<input type="text" class="form-control datepicker" min="0" name="joining_date" value="{{ old('joining_date') }}" placeholder="Joining Date" >
                                @if ($errors->has('joining_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('joining_date') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                           
                        </div>
                        
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
						
                            <label for="joining_date" class="col-md-4 control-label">Contract Start Date</label>

                            <div class="input-group col-md-6">
                               	<input type="text" class="form-control datepicker" min="0" name="start_date" value="{{ old('start_date') }}" placeholder="Contract Start Date" >
                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                           
                        </div>
                        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
						
                            <label for="end_date" class="col-md-4 control-label">Contract End Date</label>

                            <div class="input-group col-md-6">
                               	<input type="text" class="form-control datepicker" min="0" name="end_date" value="{{ old('end_date') }}" placeholder="Contract End Date" >
                                @if ($errors->has('end_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                           
                        </div>
                        <div class="form-group{{ $errors->has('retirement_date') ? ' has-error' : '' }}">
						
                            <label for="retirement_date" class="col-md-4 control-label">Retirement Date</label>

                            <div class="input-group col-md-6">
                               	<input type="text" class="form-control datepicker" min="0" name="retirement_date" value="{{ old('retirement_date') }}" placeholder="Retirement Date" >
                                @if ($errors->has('retirement_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('retirement_date') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                           
                        </div>
                        
                         <div class="form-group{{ $errors->has('bank') ? ' has-error' : '' }}">
						
                            <label for="bank" class="col-md-4 control-label">Bank</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="bank" type="text" class="form-control" min="0" name="bank" value="{{ old('bank') }}" placeholder="Bank" >
								
                                @if ($errors->has('bank'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-bank"></i></span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
						
                            <label for="nationality" class="col-md-4 control-label">Bank Acc No</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="bank_acc" type="text" class="form-control" min="0" name="bank_acc" value="{{ old('bank_acc') }}" placeholder="Bank Acc No" >

                                @if ($errors->has('bank_acc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank_acc') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-bank"></i></span>
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('comp_contact') ? ' has-error' : '' }}">
						
                            <label for="comp_contact" class="col-md-4 control-label">Company Contact No</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="comp_contact" type="text" class="form-control" min="0" name="comp_contact" value="{{ old('comp_contact') }}" placeholder="Company Contact No" >

                                @if ($errors->has('comp_contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comp_contact') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('comp_email') ? ' has-error' : '' }}">
						
                            <label for="comp_email" class="col-md-4 control-label">Company Email</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="comp_email" type="email" class="form-control" min="0" name="comp_email" value="{{ old('comp_email') }}" placeholder="Company Email" >

                                @if ($errors->has('comp_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comp_email') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('termination_date') ? ' has-error' : '' }}">
						
                            <label for="termination_date" class="col-md-4 control-label">Termination Date</label>

                            <div class="input-group col-md-6">
                               	<input type="text" class="form-control datepicker" min="0" name="termination_date" value="{{ old('termination_date') }}" placeholder="Termination Date" >
                                @if ($errors->has('termination_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('termination_date') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                           
                        </div>
                        <div class="form-group{{ $errors->has('termination_details') ? ' has-error' : '' }}">
						
                            <label for="termination_details" class="col-md-4 control-label">Termination Details</label>
                            
                        	<div class="input-group col-md-6">
                                <textarea id="termination_details" class="form-control" name="termination_details"  value="{{ old('termination_details') }}" placeholder="Termination Details"></textarea>

                                @if ($errors->has('termination_details'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('termination_details') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-file"></i></span>
                            </div>
                        </div>
                         
                      
                        		
            </div>
            <!-- /.box-body -->
        </div>
    	<!-- /.box -->
    </div>
	<!-- /.col -->
</div>
<!-- /.row --> 