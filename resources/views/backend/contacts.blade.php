@extends('layouts.backend.admin')

@section('header')
	@include('backend.partials._header')
@endsection

@section('content')

	<div class="container-fluid">
		<table class="table table-bordered" id="admin-table">
	  <thead>
	    <tr>
	      <th scope="col" style="width: 30px;">№</th>
	      <th scope="col">Адрес</th>
	      <th scope="col">Телефон</th>
	      <th scope="col">Почта</th>
	      <th scope="col" style="width: 30px;"></th>
	    </tr>
	  </thead>
	  <tbody class="admin-table-data">
	  	@foreach($contactsPage as $contact)
	    <tr>
	      	<th scope="row">{{ $contact->id }}</th>
	      	<td>{{ $contact->address }}</td>
	      	<td>{{ $contact->phone }}</td>
	      	<td>{{ $contact->email }}</td>
	      	<td>
	      		{!! Html::link(route('contactEdit', ['contact' => $contact->id]), '', ['class' => 'btn editButtonMain']) !!}
	      	</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

	
@endsection	
