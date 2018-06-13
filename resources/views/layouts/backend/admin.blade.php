<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/') }}/animate.css">
    <link rel="stylesheet" href="{{ asset('css/') }}/admin_styles.css">
    <title>{{ $title }}</title>
    <script src="{{ asset('js/') }}/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('js/') }}/jquery.mask.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
    <script>
      
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });  

    </script>

    <script src="{{ asset('js/') }}/bootstrap.min.js"></script>

      






  </head>
  <body>
    <!-- Шапка панели администратора, header это подключаемая секция, по этому используем соотвествующую дерективу yield, подключаем секцию header. -->
  <header id="header_wrapper">
    
    @yield('header')
    <!-- Здесь отображаем ошибки если есть. Ошибки отображаем переменную $error -->
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        
        <ul>
          @foreach ($errors->all() as $error)
          <li> {{ $error }} </li> 
          @endforeach
        </ul>

      </div>
    @endif
    <!-- Здесь показываем содержимое ячейки status сессии. Например сохранена ли страница, удалена и т.д. -->
    @if(session('status'))
      <div class="alert alert-success">
        
        {{session('status')}}

      </div>
    @endif  

  </header>

  <!-- Здесь подключаем контент в отдельной секции, а значит используем дерективу yield -->


  @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script type='text/javascript' src="{{ asset('js/ntsaveforms.js') }}"></script>
  </body>
</html>