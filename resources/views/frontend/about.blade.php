@extends('layouts.frontend.master')
	
@section('content')
<div id="fullpage" class="desktopAboutPage">
  <div class="wrapperAbout section" style="background-image: url('images/{{$background}}');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-md-7">
        @include('frontend.partials._title')
      </div>
      <div class="col-md-5">
        @include('frontend.partials._search')
      </div>
    </div>
    <div class="containerFirst">
      <div class="row">
            <div class="col-md-12">
              <h5>О компании</h5>
              <p class="whiteText aboutText">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              </p>
              <p class="whiteText aboutText">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              </p>
              <h6>Миссия компании</h6>
              <p class="whiteText aboutText">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,  
              </p>
              <p class="whiteText aboutText">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,   
              </p>
              <p class="whiteText aboutText">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              </p>
              <p class="whiteText aboutText">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  
              </p>
            </div>
          </div>
    </div>
    <div class="containerTwo">
      <div id="carousel" class="carousel carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" style="position: absolute; bottom: -50px; right: 0; left: 0; z-index: 15;">
          <li data-target="#carousel" data-slide-to="0" class="active mySlide"></li>
          <li data-target="#carousel" data-slide-to="1" class="mySlide"></li>
          <li data-target="#carousel" data-slide-to="2" class="mySlide"></li>
          <li data-target="#carousel" data-slide-to="3" class="mySlide"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-12">
                <h5>История компании</h5>
                <div class="yearBlock">
                  <p class="whiteText aboutSliderText"> Duis aute irure dolor in reprehenderit in voluptate velit esse, consectetur adipisicing 				  elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					  
                  .</p>
                  <p class="year"><strong>0000-0000</strong></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
            <div class="row">
              <div class="col-md-12">
                <h5>История компании</h5>
                <div class="yearBlock">
                  <p class="whiteText aboutSliderText">Testi, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  . </p>
                  <p class="year"><strong>0000-0000 </strong></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
            <div class="row">
              <div class="col-md-12">
                <h5>История компании</h5>
                <div class="yearBlock">
                  <p class="whiteText aboutSliderText">aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  .
                  </p>
                  <p class="year"><strong>0000-0000</strong></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
            <div class="row">
              <div class="col-md-12">
                <h5>История компании</h5>
                <div class="yearBlock">
                  <p class="whiteText aboutSliderText"> Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.  non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p class="whiteText aboutSliderText">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                t.
                  </p> 
                  <p class="year"><strong>0000-0000</strong></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- Start mobile version -->
<div class="mobileAboutBlock">
  <div class="wrapperAbout section" style="background-image: url('images/{{$background}}');">
    <div id="pseudoElement"></div>
    <div class="row">
      <div class="col-md-7">
        @include('frontend.partials._title')
      </div>
      <div class="col-md-5">
        @include('frontend.partials._search')
      </div>
    </div>
    <div id="carousel" class="carousel carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators" style="position: fixed; bottom: 50px; right: 0; z-index: 999999;">
        <li data-target="#carousel" data-slide-to="0" class="active mySlide"></li>
        <li data-target="#carousel" data-slide-to="1" class="mySlide"></li>
        <li data-target="#carousel" data-slide-to="2" class="mySlide"></li>
        <li data-target="#carousel" data-slide-to="3" class="mySlide"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-7">
              <h4>about</h4>
              <p class="whiteText aboutText">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p class="whiteText aboutText">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <div class="col-md-4">
              <div class="yearBlock">
                <h4>History</h4>
                <p class="aboutText aboutText">Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                <p class="year"><strong>0000-0000</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
          <div class="row">
            <div class="col-md-7">
              <h4>About</h4>
              <p class="whiteText aboutText">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
	      </p>
            </div>
            <div class="col-md-4">
              <h4>loerm ipsum</h4>
              <div class="yearBlock">
                <p class="whiteText aboutText">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.  </p>
                <p class="year"><strong>1970-1980</strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
          <div class="row">
            <div class="col-md-7">
              <h4>Lorem ipsum</h4>
              <p class="whiteText aboutText">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <div class="col-md-4">
              <h4>History</h4>
              <div class="yearBlock">
                <p class="whiteText aboutText">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="year"><strong>0000-0000 </strong></p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="position: absolute; top:0px; width: 100% ; height: 100%">
          <div class="row">
            <div class="col-md-7">
              <h4>Lorem  ipsum</h4>
              <p class="whiteText aboutText">
                <strong style="font-size: 1.2rem">Миссия компании:</strong>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

              </p>
            </div>
            <div class="col-md-4">
              <h4>Lorem ipsum</h4>
              <div class="yearBlock">
                <p class="whiteText aboutText">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
                <p class="year"><strong>0000</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>  
  </div>
</div>
<!-- End mobile version -->
@endsection