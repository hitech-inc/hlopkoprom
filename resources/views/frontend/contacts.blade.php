@extends('layouts.frontend.master')

@section('content')
<style type="text/css">

		.logo{
    	background-color: #000;
    }

    span.icon-bar{
      background-color: #1e68ff;
   	}
	


.remodal-inputs {
	display: block;
	width: 80%;
	margin: 0 auto;
	border: none;
	outline: none;
	font-size: 1.5em;
	color: #555555;
	line-height: 1.5em;
	height: 100%;
	padding: 2%;
	border-bottom: 2px solid #ddd;
	margin-bottom: 1em;
}

.remodal-inputs:focus {
    border-bottom: 2px solid #17a2b8;
}


/* .btns {
	display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    padding: 2% 5%;
    font-size: 1.5em;
    line-height: 1.5;
    border: none;
} */

.remodal h3 {
	font-size: 1.5em;
	font-family: "DinPro";
  padding: 2% 5%;
  line-height: 1.5;
}

.btns {
	display: block;
    margin: 0 auto;
    padding: 1% 5%;
    border: solid #1e67ff 3px;
    border: solid #1e67ff 3px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    font-family: 'DinPro';
    text-align: center;
    font-size: 1.5vw;
    color: #1e67ff;
    background-color: #fff;

}

.btns:hover {
	cursor: pointer;
	background-color: #1e67ff;
	color: #fff;
}

.contacts-btn {
	cursor: pointer;
	text-decoration: none;
}
.contacts-btn:hover {
		background-color: #1e67ff;
		color: #fff;
			text-decoration: none;
}

.success-text {
	position: absolute;
	top: 10%;
	left: -5%;
    color: #fff;
    font-weight: bold;
    font-size: 2em;
    width: 100%;
    text-align: center;
}

</style>
<div id="fullpage">
	<div class="contactsWrapper section">
	<div class="row" id="space">
		@if($message == !null) {!! $message !!} @endif
	</div> 

		<div id="pseudoElement"></div>
		<div class="row">
			<div class="col-md-7">
				@include('frontend.partials._title')
			</div>
			<div class="col-md-5">
				@include('frontend.partials._search')
			</div>
		</div>
		<div class="row contactRow">
			<div class="col-12 col-lg-3 col-md-3 col-sm-3 contactsBlocks">
				<img src="/images/mapImg.png" alt="" class="contactImg contMobileImg">
				<p>Казахстан, ЮКО, Ваш адрес</p>
			</div>
			<div class="col-12 col-lg-3 col-md-3 col-sm-3 contactsBlocks">
				<img src="/images/telImg.png" alt="" class="contactImg contMobileImg">
				<p>8-777-777-77-77</p>
			</div>
			<div class="col-12 col-lg-3 col-md-3 col-sm-3 contactsBlocks">
				<img src="/images/mailImg.png" alt="" class="contactImg mailMobile">
				<p>test@test.test </p>
			</div>
		</div>
		<div class="callBackwrapper">
			<div class="callBack">
				<a class="callBackButton" data-remodal-target="modal">Заказать обратный звонок</a>
			</div>
		</div>
	</div>
</div>

<!-- Всплывающее окно -->
<div  class="remodal" data-remodal-id="modal">
  <h3>Обратный звонок</h3>
  <br>
		<form action="{{ route('contact.store') }}" method="post" onsubmit="return validateForm()">
						{{ csrf_field() }}
			<div class="wrap-input">
			   <input  name="name" class="remodal-inputs" id="name" placeholder="Ваше имя">
				@if($errors->has('name'))
			   <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
				@endif
			</div>
<!-- 			<div class="wrap-input">
   <input  name="email" class="remodal-inputs" id="email" placeholder="E-mail">
	@if($errors->has('name'))
   <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
	@endif
</div> -->
			<div class="wrap-input">
                <input class="remodal-inputs"  id="phone_mask" name="phone"  placeholder="+7 (XXX) XXX-XX-XX">
                				@if($errors->has('phone'))
			   <small class="form-text invalid-feedback">{{ $errors->first('phone') }}</small>
				@endif
			</div>
			<div class="wrap-input">
			   <input type="submit" class="btns" value="Отправить" >
			</div>

		</form>

</div>
<script>
/*
window.REMODAL_GLOBALS = {
NAMESPACE: 'modal',
  DEFAULTS: {
    closeOnConfirm: false
  }
};*/
</script>

<script>
	function validateForm() {
		//validate phone
		//var re = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,17}(\s*)?$/;
		//var myPhone = document.getElementById('phone_mask').value;
		//var valid = re.test(myPhone);

		// validate name input
		var name = document.getElementById("name").value;
		var phone = document.getElementById("phone_mask").value;
				
		if (name == ""){
			$("#name").attr('placeholder', 'Введите Имя').val('').css({'border':'2px solid red'});
			//return false;
		}
		else $("#name").css('border', '2px solid green'); 

		if (phone == ""){
			$("#phone_mask").attr('placeholder', 'Введите Номер телефона').val('').css({'border':'2px solid red'});
				return false;
		}

		// else if(!valid) $("#phone_mask").attr('placeholder', 'Введите например: +7 (777) 777-7777').val('').css({'border':'2px solid red'});

		else $("#phone_mask").css('border', '2px solid green');

			return true;
		}
</script>

@endsection
	
@section('scripts_body')
 

    $('#nav-icon').click(function(){
        $(this).toggleClass('open');
		$('#nav-block').slideToggle();
    });


    $('#phone_mask').mask('+7 (799) 999-99-99');

	$('.success-text').delay(3000).fadeOut(500);

    
@endsection