@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>ERP</b>Laravel</a>
            </div><!-- /.login-logo -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

      <div class="login-box-body">
        <p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>
        <form action="{{ url('/login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group has-feedback input-group">
                        <select class="form-control select2" id="company_id" name="company_id"  data-placeholder="Company" required >
             
                           <option  value="" disabled selected hidden="">{{ trans('adminlte_lang::message.company') }}</option>
	                         <?php $comps = DB::table('companies')->select('company_id', 'company_name')->distinct()->get();
                             ?>
									
							@foreach ($comps as $comp)  
								<option value= {{$comp->company_id}}> {{$comp->company_name}} </option>			
							@endforeach
									
						</select>
						<span class="input-group-addon"><i class="fa fa-building"></i></span>
                        @if ($errors->has('company'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('company') }}</strong>
                            </span>
                       @endif
                       
            </div>
            <div class="form-group has-feedback input-group">
                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="{{ trans('adminlte_lang::message.username') }}" required autofocus>
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
            </div>
            
            
            
            <div class="form-group has-feedback input-group">
                <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            </div>
            
            <div class="form-group has-feedback input-group">
                <input type="datetime" class="form-control" name="date" value="<?php echo date('d-m-Y H:i:s'); ?>" disabled />
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans('adminlte_lang::message.remember') }}
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.buttonsign') }}</button>
                </div><!-- /.col -->
            </div>
        </form>
        
	

        <a href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
        <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>
        

    </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->
    </div>
    <!--@include('adminlte::auth.partials.social_login')-->
    @include('adminlte::layouts.partials.scripts')


    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
        
       
        
    </script>
</body>

@endsection
