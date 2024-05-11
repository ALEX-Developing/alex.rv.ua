import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const hideAllPopups = function() {
	$('.header__account-show,.header__account-hide,.header__account-form,.header__contacts-show,.header__contacts-hide,.header__contacts,.header__contacts-active,.contacts-block,.header__burger-show,.header__burger-hide,.header__btn-burger,.header__burger-active,.menu,.blur,.header__form-slider').removeClass('active');
	$('.header__btn-account').removeClass('hide');
}
$('.blur,.header__contacts-hide,.header__contacts-show,.header__burger-hide,.header__burger-show,.header__account-hide,.header__account-show').click(function(event){
	hideAllPopups()
})

$('.header__contacts-show').click(function(event){
  $('.header__contacts-show,.header__contacts-hide,.header__contacts,.header__contacts-active,.blur,.contacts-block').addClass('active');
})
$('.header__burger-show').click(function(event){
  $('.header__burger-show,.header__burger-hide,.header__btn-burger,.header__burger-active,.blur,.menu').addClass('active')
})
// показ та ховання блоку акаунту
$('.header__account-show').click(function(event){
  $('.header__account-show,.header__account-hide,.header__account-form,.blur').addClass('active');
  $('.header__btn-account').addClass('hide');
})

// активація та ховання блоку реєстрації в попапі
$('.form-btn-submit.register').click(function(event){
  $('.header__form-slider').addClass('active');
})
$('.header__btn-login.back').click(function(event){
  $('.header__form-slider').removeClass('active');
})

// функція ховання, показу хедера при скролі
var st = $(window).scrollTop();
var navheight = $('.header').height() + 30;
$(window).scroll(function() {
	var nst = $(window).scrollTop();
	var subio = nst < st;
	var bajo = nst - 40 > st;
	
	if (subio) {
		$('.header').addClass('sticky');
		st = nst;
	} if (st == 0 || st < 0) {
		$('.header').addClass('sticky');
		st = nst;
	} else if(bajo) {
		$('.header').removeClass('sticky');
		st = nst;
	}
});