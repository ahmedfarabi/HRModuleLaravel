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
			<h3 class="box-title">Header</h3>
			</div>
			<div class="box-body">
				
			</div>
		<!-- /.box-body -->
		</div>
	<!-- /.box -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->
@endsection