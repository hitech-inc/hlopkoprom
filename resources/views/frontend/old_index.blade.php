@extends('layouts.frontend.master')

@section('header')
    @include('frontend.partials._header')
@endsection

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
<div id="main-container">
    	<img id="main-img" src="{{ asset('images/manufacture1440.png') }}">
        <div class="col-12" id="main-top">
        	<div class="container">
        		<img id="main-img-mobile" src="{{ asset('images/manufactureMobile.png') }}">  	        		
        	</div>
        </div>
        <div id="main-bottom">
            		<div class="col-6 col-md-10 col-lg-10 col-xl-4" id="main-title-block">
            			<h2 id="main-title">АХБК</h2>   
		                <span id="main-title-2">хлопчатобумажный</span>
		                <span id="main-title-3">комбинат</span>
            		</div>
                <p id="main-text" class="col-9 col-sm-9 col-md-10 col-lg-10 col-xl-5">
	                Старейшее предприятие легкой промышленности, которое является одним из крупшейших производителей текстильной продукции в Казахстане.<br><br>
	                Деятельность комбината направлена на пошив и производство спецодежды, школьной формы, военного обмундирования, постельных комплектов и постельных принадлежностей. 
                </p>
                <a href="http://ahbk.kz/contacts" id="main-btn" class="col-4 col-md-3 col-lg-3 col-xl-2">СВЯЗАТЬСЯ</a>
        </div>
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