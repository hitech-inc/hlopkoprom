
@extends('layouts.backend.admin')

@section('header')
    @include('backend.partials._header')
@endsection
@section('content')



    <div class="container">
        <div class="row">  
            <div class="leftform col-md-8">
                
                {!! Form::model($contact, ['route' => ['contactUpdate', $contact->id]]) !!}

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" input="text" id="email" name="email" value="{{ $contact->email }}" >
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input input="text" class="phone" id="phone" name="phone" value="{{ $contact->phone }}" placeholder="+7 (XXX) XXX-XX-XX" style=" ">
                    </div>
                    <div class="form-group">
                        <label for="address">Адрес</label>
                        <input class="phone" input="text" id="address" name="address" value="{{ $contact->address }}">
                        <input type="hidden" id="id" name="id" value="{{ $contact->id }}">
                    </div>

                    <button type="submit" class="btn btn-default">Сохранить </button>
                    {{ csrf_field() }}
                </form>
                 
            </div> 
            
        </div> 
    </div> <!-- /container -->

<script>
    $(document).ready(function () {
        $('#phone').mask('+7 (000) 000-00-00');
      });

</script>
@endsection