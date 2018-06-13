@extends('layouts.backend.admin')

@section('header')
	@include('backend.partials._header')
@endsection

@section('content')
<div class="container">
{!! Form::model($maintext, ['route' => ['productsUpdate', $maintext->id]]) !!}
	<div class="form-group">
				<label for="textareaProduct">Главный текст</label>
				<div class="row">
					<textarea class="form-control col-5 " name="text" id="textareaProduct">{!! $maintext->text !!}</textarea>
					<button class="btn btn-primary editButton" id="focused"></button>
					<input type="hidden" name="id" id="id" value="{{ $maintext->id }}">

				</div>
			</div>

			{{ csrf_field() }}
		</form>
	</div>



<script>
$(document).ready(function(){
	$('#textareaProduct').focus( function(){
		$('#focused').css('display','block');
	});
	$("#textareaProduct").dblclick(function(){
        $('#focused').css('display','none');
    });
});
</script>


@endsection	
