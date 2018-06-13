@extends('layouts.frontend.master')

@section('content') 
  <div id="fullpage" class="prodDesktop">
    <div class="wrapperProducts section">
      <div id="pseudoElement"></div>
      <div class="row">
        <div class="col-md-7">
          @include('frontend.partials._title')
          <p class="whiteText productText">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </p>  
          <p class="whiteText productText">Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <p class="whiteText productText">Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="col-md-5">
          @include('frontend.partials._search')
        </div>
      </div>
      <div class="row prodImgsWrap">
        <div class="col-md-2 col-12">
          <div class="prodImg">
            <a href="" class="prodLink"><img src="/images/prod1.png" alt="" class="prod1"></a>
          </div>
        </div>
        <div class="col-md-2 col-12">
          <div class="prodImg">
            <a href="" class="prodLink2"><img src="/images/prod2.png" alt="" class="prod2"></a>
          </div>
        </div>
        <div class="col-md-2 col-12">
          <div class="prodImg">
            <a href="" class="prodLink3"><img src="/images/prod3.png" alt="" class="prod3"></a>
          </div>
        </div>
        <div class="col-md-2 col-12">
          <div class="prodImg">
            <a href="" class="prodLink4"><img src="/images/prod4.png" alt="" class="prod4"></a>
          </div>
        </div>
        <div class="col-md-2 col-12">
          <div class="prodImg">
            <a href="" class="prodLink5"><img src="/images/prod5.png" alt="" class="prod5"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start mobile version -->
  {{--<div class="prodMobile">
    <div class="wrapperProducts section" id="section0">
      <div id="pseudoElement"></div>
      <div class="row">
        <div class="col-md-7">
          @include('frontend.partials._title')
          <p class="whiteText productText">
            Обеспечение работников качественной и надежной формой является производственной необходимостью. Более того, можно с уверенностью сказать, что сегодня существует большое количество операций, успешное выполнение которых невозможно без использования одежды специального назначения.
          </p>  
          <p class="whiteText productText">Мы производим высококачественную текстильную продукцию для широкого ряда потребителей, находящихся в Казахстане и в ближнем зарубежье.
          </p>
          <p class="whiteText productText">Наши продукты очень прочные, удобные в носке и термостойкие. Они обладают сильной устойчивостью к изгибам и растяжениям, стирке и глажке, а так же имеют отличные гигиенические качества.
          </p>
        </div>
      </div>
    </div>
    <div class="wrapperProducts section" id="section1">
      <div id="pseudoElement"></div>
      <div class="row">
        <div class="col-md-5 section">
          @include('frontend.partials._search')
        </div>
      </div>
      <div class="row prodImgsWrap">
        <div class="col-md-2">
          <div class="prodImg">
            <a href="" class="prodLink"><img src="/images/prod1.png" alt="" class="prod1"></a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="prodImg">
            <a href="" class="prodLink2"><img src="/images/prod2.png" alt="" class="prod2"></a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="prodImg">
            <a href="" class="prodLink3"><img src="/images/prod3.png" alt="" class="prod3"></a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="prodImg">
            <a href="" class="prodLink4"><img src="/images/prod4.png" alt="" class="prod4"></a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="prodImg">
            <a href="" class="prodLink5"><img src="/images/prod5.png" alt="" class="prod5"></a>
          </div>
        </div>
      </div>
    </div>
  </div>--}}
  <!-- End mobile version -->
@endsection