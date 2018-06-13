@extends('layouts.backend.admin')

@section('header')
    @include('backend.partials._header')
@endsection

@section('content')
<div class="container-fluid">
            {!! Html::link(route('aboutAdd'), 'Добавить материал', ['class' => 'btn btn-primary button'] ) !!}
    <table class="table table-bordered" id="admin-table">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Описание</th>
                <th scope="col">Текст</th>
                <th scope="col">Год</th>
                <th scope="col">Изображение</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="admin-table-data">
        @foreach($aboutPage as $about)
            <tr id="string-{{ $about->id }}">
                <th>{{ $about->id }}</th>
                <td>{!! $about->short !!}</td>
                <td>{!! $about->text !!}</td>
                <td>{{ $about->year }}</td>
                <td><img src="{{asset('images/')}}/{{ $about->images }}" alt="" style="width: 200px;"></td>
                <td>
                    {!! Html::link(route('aboutEdit', ['about' => $about->id]), '', ['class' => 'btn editButton']) !!}
                    <form class="deleteForm" action="#" data-id="{{ $about->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" id="delete_id-{{ $about->id }}" value="{{ $about->id }}">
                        <input type="submit" class="btn deleteButton" value=" "> 
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>




<script>
  


$(document).ready(function(){


    $('.deleteForm').submit(function (e) {
       e.preventDefault();
       
        var $dataString = $(this).data('id');
        console.log($dataString)

        $.ajax({
            type: 'POST',
            url: '/admin/about/delete',
            data: { id : $dataString },
            success: function(data,e){
                console.log(data);
                $('#string-' + $dataString).addClass('animated fadeOut');
                    setTimeout(function () {
                         $('#string-' + $dataString).css('display','none');
                    }, 300);
                e.preventDefault();
            }
        })
    })
});


</script>

@endsection
