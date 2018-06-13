@extends('layouts.backend.admin')

@section('header')
	@include('backend.partials._header')
@endsection

@section('content')
	<div class="container-fluid">
		<table class="table table-bordered" id="admin-table">
	  <thead>
	    <tr>
	      <th scope="col">№</th>
	      <th scope="col">Текст</th>
	      <th scope="col">Изображение</th>
	      <th scope="col"></th>
	    </tr>
	  </thead>
	  <tbody class="admin-table-data">
	  	@foreach($homePage as $home)
	    <tr>
	      <th scope="row">{{ $home->id }}</th>
	      <td>{!! $home->text !!}</td>
	      <td>{{ $home->images }}</td>
	      <td>
	      	{!! Html::link(route('homeEdit', ['home' => $home->id]), '', ['class' => 'btn editButtonMain']) !!}
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

	
@endsection	
