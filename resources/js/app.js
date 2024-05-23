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

// показ / приховання паролю в інпуті
$('.header__eye-pws.show').click(function(event){
  var parent = $(this).parent();
  parent.find('input').attr("type", "text");
  parent.find('.header__eye-pws.show, .header__eye-pws.hide').addClass('active');
})
$('.header__eye-pws.hide').click(function(event){
  var parent = $(this).parent();
  parent.find('input').attr("type", "password");
  parent.find('.header__eye-pws.show, .header__eye-pws.hide').removeClass('active');
})

// відображення номера в гарнішому форматі в інпуті
// $(document).ready(function() {
// 	$('.header__input-login.phone').on('input', function() {
// 		var input = $(this).val().replace(/\D/g, ''); // Видаляємо всі нецифрові символи
// 		var formatted = ''; // Змінна для зберігання форматованого номера
// 		if (input.length > 0) {
// 			formatted = '+380 ';
// 			if (input.length > 3) {
// 				formatted += input.substr(3, 2) + ' ';
// 			}
// 			if (input.length > 5) {
// 				formatted += input.substr(5, 3) + ' ';
// 			}
// 			if (input.length > 8) {
// 				formatted += input.substr(8, 2) + ' ';
// 			}
// 			if (input.length > 10) {
// 				formatted += input.substr(10, 2) + ' ';
// 			}
// 			if (input.length > 12) {
// 				formatted += input.substr(12);
// 			}
// 		}
// 		$(this).val(formatted); // Встановлюємо форматований номер у інпут
// 	}).on('keydown', function(e) {
// 		// Видаляємо одну цифру за допомогою клавіш "Backspace" або "Delete"
// 		if (e.key === 'Backspace' || e.key === 'Delete') {
// 			var input = $(this).val().replace(/\D/g, ''); // Видаляємо всі нецифрові символи
// 			var length = input.length;
// 			if (length > 0) {
// 				var truncatedInput = input.substring(0, length - 1);
// 				var formatted = '+380 ';
// 				if (truncatedInput.length > 3) {
// 						formatted += truncatedInput.substr(3, 2) + ' ';
// 				}
// 				if (truncatedInput.length > 5) {
// 						formatted += truncatedInput.substr(5, 3) + ' ';
// 				}
// 				if (truncatedInput.length > 8) {
// 						formatted += truncatedInput.substr(8, 2) + ' ';
// 				}
// 				if (truncatedInput.length > 10) {
// 						formatted += truncatedInput.substr(10, 2) + ' ';
// 				}
// 				if (truncatedInput.length > 12) {
// 						formatted += truncatedInput.substr(12);
// 				}
// 				$(this).val(formatted.trim());
// 				e.preventDefault(); // Запобігаємо спрацьовуванню стандартної дії клавіші
// 			}
// 		}
// 	});
// });


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

// показ попапа, коли форма успішно відправлена
document.getElementById('contactForm').addEventListener('submit', function(event) {

		// Show the popup
		const popup = document.getElementById('successPopup');
		popup.style.display = 'block';

		// Hide the popup after 5 seconds
		setTimeout(() => {
				popup.style.display = 'none';
		}, 5000);
});