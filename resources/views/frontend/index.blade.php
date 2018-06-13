@extends('layouts.frontend.master')

@section('content')
<style type="text/css">
    @if($currentUrl == null)
        a.nav-link{
            color: #fff !important;
        }

        #nav-icon span {
            background: #fff;
        }
    @endif
</style>
<div id="fullpage" class="homeDesktop">
  @foreach($mainPages as $mainPage)
  <div id="main" class="section" style="background-image: url('images/{{ $mainPage->images}}');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-lg-7">
        @include('frontend.partials._title')
        <p class="whiteText contentText">{!! $mainPage->text !!}</p>  
        <a href="/contacts" class="svyazatsya whiteText">связаться</a>
      </div>
      <div class="col-lg-5">
        @include('frontend.partials._search')
        <div class="rombBlocks">
          <div class="rombBlockFirst">
            <div class="romb1" id="romb1">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
          </div>
          <div class="rombBlockTwo">
            <div class="romb2" id="romb2">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
            <div class="romb3" id="romb3">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
          </div>
          <div class="rombBlockThree">
            <div class="romb4" id="romb4">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>  
            </div>
            <div class="romb5" id="romb5">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
          </div>
          <div class="rombBlockFour">
            <div class="romb6" id="romb6">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
            <div class="romb7" id="romb7">
              <div><img src="images/romb-1.png" alt="slide"></div>
              <div><img src="images/romb-2.png" alt="slide"></div>
              <div><img src="images/romb-3.png" alt="slide"></div>
            </div>
          </div>  
        </div>
      </div>
    </div>  
  </div>
  @endforeach
</div>
@endsection

@section('scripts_body')


    $(document).ready(function(){
        $('#nav-icon').click(function(){
            $(this).toggleClass('open');
            $('#nav-block').slideToggle();
        });
    });


@endsection