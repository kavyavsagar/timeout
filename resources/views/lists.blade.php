@extends('layouts.default')

@section('content')
	<h1>List Register</h1>
    <!-- Success -->
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    @if(count($registers) > 0)
	<ul class="list-group">
	@foreach($registers as $data)
	  <li class="list-group-item">
  		<p><b>Name :</b> {{$data->name}}</p>
  		<p><b>Place :</b> {{$data->place}}</p>
  		<p><b>Phone :</b> {{$data->phone}}</p>
  		<p><b>Purpose :</b> {{$data->purpose}}</p>
  		<p><b>Time In :</b> {{$data->datetime_in}}</p>
	  </li>
	@endforeach
	</ul>
	@endif
@endsection	