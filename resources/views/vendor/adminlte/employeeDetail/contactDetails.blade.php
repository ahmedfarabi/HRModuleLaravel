
    <div class="col-xs-12 col-sm-6">
    	<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">+ Contact Details</h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
                        
                         <div class="form-group{{ $errors->has('permanent_addr') ? ' has-error' : '' }}">
						
                            <label for="permanent_addr" class="col-md-4 control-label">Permanent Address</label>
                            
                        	<div class="input-group col-md-6">
                                <textarea id="permanent_addr" class="form-control" name="permanent_addr"  value="{{ old('permanent_addr') }}" placeholder="Permanent Address"></textarea>

                                @if ($errors->has('permanent_addr'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('permanent_addr') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-file"></i></span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('present_addr') ? ' has-error' : '' }}">
						
                            <label for="present_addr" class="col-md-4 control-label">Present Address</label>
                            
                        	<div class="input-group col-md-6">
                                <textarea id="present_addr" class="form-control" name="present_addr"  value="{{ old('present_addr') }}" placeholder="Present Address"></textarea>

                                @if ($errors->has('present_addr'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('present_addr') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-file"></i></span>
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('contact_no') ? ' has-error' : '' }}">
						
                            <label for="contact_no" class="col-md-4 control-label">Contact No</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="contact_no" type="text" class="form-control" name="contact_no" value="{{ old('contact_no') }}"  placeholder="Contact No">

                                @if ($errors->has('contact_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_no') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('emergency_no') ? ' has-error' : '' }}">
						
                            <label for="emergency_no" class="col-md-4 control-label">Emergency No</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="emergency_no" type="text" class="form-control" name="emergency_no" value="{{ old('emergency_no') }}" placeholder="Emergency No">

                                @if ($errors->has('emergency_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emergency_no') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('emergency_contact') ? ' has-error' : '' }}">
						
                            <label for="emergency_contact" class="col-md-4 control-label">Emergency Contact Name</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="emergency_contact" type="text" class="form-control" name="emergency_contact" value="{{ old('emergency_contact') }}" placeholder="Emergency Contact Name">

                                @if ($errors->has('emergency_contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emergency_contact') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('emergency_relation') ? ' has-error' : '' }}">
						
                            <label for="emergency_relation" class="col-md-4 control-label">Emergency Contact Relation</label>
                            
                        	<div class="input-group col-md-6">
                                <input id="emergency_relation" type="text" class="form-control" name="emergency_relation" value="{{ old('emergency_relation') }}" placeholder="Emergency Contact Relation">

                                @if ($errors->has('emergency_relation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emergency_relation') }}</strong>
                                    </span>
                                @endif
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                        
                     
                        
            </div>
            <!-- /.box-body -->
        </div>
    	<!-- /.box -->
    </div>
	<!-- /.col --> 