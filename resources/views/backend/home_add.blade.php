@extends('layouts.backend.admin')

@section('header')
	@include('backend.partials._header')
@endsection

@section('content')
	<div class="container-fluid">
		{!! From::open(['url' => route('homeAdd'), 'class' => 'form-horizontal', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
			<div class="form-group">
				{!! Form::label('name', 'Текст: ', ['class' => 'col-xs-2 control-label']) !!}
				<div class="col-xs-8">
					{!! Form::textarea('name', old('text'), ['id' => 'editor', 'class' => 'form-control']) !!}
				</div>
			</div>
		{!! Form::close() !!}
	</div>
@endsection