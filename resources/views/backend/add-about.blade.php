
@extends('layouts.backend.admin')

@section('header')
    @include('backend.partials._header')
@endsection
@section('content')



    <div class="container">
        <div class="row">  
            <div class="leftform col-md-8">
                
                {!! Form::open(['route' => 'aboutSave','files'=>true]) !!}
                    <div class="form-group">
                        <label for="short">Описание</label>
                        <textarea  class="form-control" id="short" name="short">{{ $short = Session::get('short') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="year">Год</label>
                        <input class="form-control" type="text" id="year" name="year" value="{{ $year = Session::get('year') }}">
                        <input hidden="text" id="images" name="images" value="{{ $imagePath = Session::get('image') }}">
                    </div>
                    <div class="form-group">
                        <label for="text">Текст</label>
                        <textarea  class="form-control" id="text" name="text">{{ $text = Session::get('text') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Добавить</button>
                    {{ csrf_field() }}
                
                    
            </div> <!--leftform-->
            <div class="rightform col-md-4">
                <label for="desc">Изображение</label>
                            
                                    <div >
                                        {!! Form::file('image', array('class' => 'file')) !!}
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-success uploadButton" >Загрузить</button>
                                    </div>
                            
                    <div  style="height: 200px;">
                        @if ($message = Session::get('success'))
                        <img  class="imageUpload" style="width: 300px;" src="{{ asset('images/') }}/{{ $imagePath = Session::get('image') }}">
                    </div>
                    <div class="alert alert-success alert-block col">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                        @endif
                        @empty(Session::get('success'))
                            <img class="imageUpload" style="width: 200px;" src="{{ asset('images/update-image.png') }}/{{ $imagePath = Session::get('image') }}">
                        @endempty
                        @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                        @endif

                    </form>
            </div> <!--rightform-->
        </div> <!--row-->
    </div> <!-- /container -->



<script>
    
    CKEDITOR.replace( 'text' );
    CKEDITOR.replace( 'short' );

</script>

@endsection