@extends('layout.main')

@section('content')
	{{ Form::open(array('route' => 'haoInsert')) }}

	<div>
	{{ Form::label('email', 'Email Address') }}
	{{ Form::text('email') }} 
	@if($errors->has('email'))
		{{ $errors->first('email')}}
	@endif
	</div>

	<div>
	{{ Form::label('FirstName', 'First Name')}}
	{{ Form::text('FirstName') }} 
	@if($errors->has('FirstName'))
		{{ $errors->first('FirstName')}}
	@endif
	</div>

	<div>
	{{ Form::label('Surname', 'Surname')}}
	{{ Form::text('Surname') }} 
	@if($errors->has('Surname'))
		{{ $errors->first('Surname')}}
	@endif
	</div>

	<div>
	{{ Form::label('Company', 'Company')}}
	{{ Form::text('Company') }}
	@if($errors->has('Company'))
		{{ $errors->first('Company')}}
	@endif
	</div>

	<div>
	{{ Form::label('Country', 'Country')}}
	{{ Form::text('Country') }} 
	@if($errors->has('Country'))
		{{ $errors->first('Country')}}
	@endif
	</div>

	<div>
	{{ Form::label('RWithSAP', 'Relationship with SAP')}}
	{{ Form::text('RWithSAP') }} 
	@if($errors->has('RWithSAP'))
		{{ $errors->first('RWithSAP')}}
	@endif
	</div>

	{{ Form::submit('Click Me!') }}
	{{ Form::close() }}

@stop
