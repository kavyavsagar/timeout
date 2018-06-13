@extends('layouts.default')

@section('content')
	<h1>Guest Register</h1>
	<!-- validation -->
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
	@endif

	{!! Form::open(['url' => 'attendances']) !!}
	<form class="form-horizontal">
	  <div class="form-group">
	    {{ Form::label('name', 'Full Name', ['class' => 'col-sm-2 control-label']) }}
	    <div class="col-sm-10">
	    {{ Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Enter Name']) }}
	    </div>
	  </div>
	  <div class="form-group">
	    {{ Form::label('place', 'Place', ['class' => 'col-sm-2 control-label']) }}
	    <div class="col-sm-10">	      
	    {{ Form::text('place', '',['class' => 'form-control', 'placeholder' => 'Enter Place']) }}
	    </div>
	  </div>
	  <div class="form-group">	    
	    {{ Form::label('phone', 'Phone Number', ['class' => 'col-sm-2 control-label']) }}
	    <div class="col-sm-10">
	    {{ Form::text('phone', '',['class' => 'form-control', 'placeholder' => 'Enter Phone Number']) }}
	    </div>
	  </div>
	  <div class="form-group">
	    {{ Form::label('purpose', 'Purpose', ['class' => 'col-sm-2 control-label']) }}
	    <div class="col-sm-10">
	    {{ Form::textarea('purpose', '',['class' => 'form-control', 'placeholder' => 'Purpose of visit', 'rows' => '4']) }}
	    </div>
	  </div>
   	  <div class="form-group">
	    {{ Form::label('timein', 'Time In', ['class' => 'col-sm-2 control-label']) }}
	    <div class="col-sm-5">		  
		{{ Form::date('datein', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
	    </div>
	    <div class="col-sm-5">
	    <input type="time" name="timein" class="form-control">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
	    </div>
	  </div>
	</form>    

	{!! Form::close() !!}
@endsection	